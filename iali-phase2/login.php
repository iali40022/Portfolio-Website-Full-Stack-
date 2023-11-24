<?php
    require('db_config.php');

    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare the SQL query
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Check if the user exists
        if($result->num_rows == 1) {
            // User exists, redirect to addPost.php
            session_start();
            $_SESSION['email'] = $email;
            var_dump($_SESSION);
            header("Location: addEntry.php");
            exit();
        } else {
            // User does not exist, display error message
            header("Location: login.html");
        }
    }
?>