<?php

    session_start();

    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'attendance_db');

    include('DatabaseConnection.php');

    $db = new DatabaseConnection();

    function redirect($message, $path){
        $_SESSION['message'] = $message;
        header("Location: $path", true);
        exit(0);
    }

?>