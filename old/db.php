<?php

$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'user_system';
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($mysqli->connect_errno) {
    die('Database connection fails!');
}