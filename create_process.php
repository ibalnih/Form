<?php

// Membuat koneksi ke database
include_once 'db.php';

$title = $_POST['title'];
$content = $_POST['content'];
$sql = "INSERT INTO post (title, content) VALUES ('$title', '$content')";

$mysqli->query($sql);

// Redirect ke halaman posts.php
// Hati-hati sebelum titik dua (:) tidak diberi spasi
// Salah -> Location : posts.php
header('Location: posts.php');