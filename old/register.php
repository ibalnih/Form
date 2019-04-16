<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="register_prosses.php" method="post">
        <label>
            Username:
            <input type="text" name="username" required auto>
        </label>
        <br>
        <label>
            Password:
            <input type="password" name="password" required>
        </label>
        <br>
        <label>
            Name:
            <input type="text" name="name" required>
        </label>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>