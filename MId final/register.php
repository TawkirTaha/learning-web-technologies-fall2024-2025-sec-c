
<?php
    session_start();

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $username = htmlspecialchars(trim($_POST['username']));
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);

        
        $error = null;

        
        if (empty($username) || empty($password) || empty($confirm_password)) {
            $error = "All fields are required!";
        } elseif ($password !== $confirm_password) {
            $error = "Passwords do not match!";
        } else {
            
            $_SESSION['status'] = true;
            $_SESSION['username'] = $username;

            

            header('Location: welcome.php'); 
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
        }
        fieldset {
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 15px;
        }
        legend {
            font-size: 1.2em;
            font-weight: bold;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="registration.php" method="POST">
        <fieldset>
            <legend>Registration</legend>

            <?php
            // Display error messages if any
            if (isset($error)) {
                echo "<p class='error'>$error</p>";
            }
            ?>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit">Register</button>
        </fieldset>
    </form>
</body>
</html>