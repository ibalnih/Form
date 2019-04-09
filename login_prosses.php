<?php

include_once 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username'";
$result = $mysqli->query($sql);

if ($result->num_rows) {
    $row = $result->fetch_object();

    if (password_verify($password, $row->password)) {
        session_start();

        $_SESSION['user_system_logged_in'] = true;
        $_SESSION['user_system_name'] = $row->name;

        header('Location: index.php');
    } else {
        echo 'Wrong password!';
    }
} else {
    echo 'Username not exists!';
}