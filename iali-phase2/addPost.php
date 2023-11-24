<?php
    session_start();
    require_once('db_config.php');
    
    if(isset($_SESSION['email']) && isset($_POST['title']) && isset($_POST['content'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        date_default_timezone_set('Europe/London');
        $date = date('Y-m-d H:i:s');
        
        $sql = "INSERT INTO blog (title, content, date) VALUES ('$title', '$content', '$date')";
        if ($conn->query($sql) === TRUE) {
            header("Location: viewBlog.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // User is not logged in, redirect to login page
        header("Location: index.php");
        exit();
    }
    $conn->close();
?>