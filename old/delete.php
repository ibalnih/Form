<?php

// Membuat koneksi ke database
include_once 'db.php';

$id = $_POST['id'];
$sql = "DELETE FROM post WHERE id = '$id'";

$mysqli->query($sql);

header('Location: posts.php');