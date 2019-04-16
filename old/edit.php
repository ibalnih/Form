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

$post = $result->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>

    <form action="edit_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $post->id; ?>">
        <label>
            Title:
            <input type="text" name="title" value="<?php echo $post->title; ?>" required autofocus>
        </label>
        <br>
        <label>
            Content:
            <textarea name="content" cols="30" rows="10"><?php echo $post->content; ?></textarea>
        </label>
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>