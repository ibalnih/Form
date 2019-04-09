<?php

//Membuat koneksi ke database
include_once 'db.php';

$sql = "SELECT * FROM post";
$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="create.php">Create Post</a>
    <?php

    // Jika tabel kosong/tidak ada post
    if (!$result->num_rows) {
        echo 'No posts.';
    // Jika ada post, tampilkan
    } else {
        while ($post = $result->fetch_object()) {
            echo "<h3>$post->title</h3>";
            echo "<a href=\"edit.php?id=$post->id\">Edit</a>";
            echo "<p align=\"justify\">$post->content</p>";
        }
    }

    ?>
</body>
</html>