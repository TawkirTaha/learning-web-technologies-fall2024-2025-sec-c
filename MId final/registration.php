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
