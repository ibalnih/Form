<?php

// Membuat koneksi ke database
include_once 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$sql = "UPDATE post SET title = '$title', content = '$content' WHERE id = $id";

$result = $mysqli->query($sql);

header('Location: posts.php');