<?php

session_start();

if (isset($_SESSION['user_system_logged_in'])) {
    echo 'Hello, ',  $_SESSION['user_system_name'], '.
    <a href="logout.php">Logout</a>';
} else {
    echo 'Please <a href="login.php">Login</a> or 
    <a href="register.php">register</a>';
}