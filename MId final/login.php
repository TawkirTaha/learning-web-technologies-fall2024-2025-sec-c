<?php
    session_start();

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = trim($_POST['user']);
        $pass = trim($_POST['pass']);
        $confirmPass = trim($_POST['confirmPass']);

        // Validate inputs
        if (empty($user) || empty($pass) || empty($confirmPass)) {
            $errorMsg = "Please fill out all the fields!";
        } elseif ($pass !== $confirmPass) {
            $errorMsg = "The passwords do not match. Try again.";
        } else {
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['userName'] = $user;
            header('Location: dashboard.php'); // Redirect after successful registration
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <form action="register.php" method="POST">
        <fieldset>
            <legend>Register</legend>

            <?php
            // Show error messages
            if (isset($errorMsg)) {
                echo "<p style='color: red;'>$errorMsg</p>";
            }
            ?>

            <label for="user">Username</label>
            <input type="text" id="user" name="user" required><br><br>

            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" required><br><br>

            <label for="confirmPass">Confirm Password</label>
            <input type="password" id="confirmPass" name="confirmPass" required><br><br>

            <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
