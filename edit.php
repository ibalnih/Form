<?php

$id = $_GET['id'];

if (!$id) {
    header('Location: posts.php');
}

// Membuat koneksi ke database
include_once 'db.php';

$sql = "SELECT * FROM post WHERE id = $id";
$result = $mysqli->query($sql);

// Jika post tidak ditemukan
if (!$result->num_rows) {
    header('Location: posts.php');
}