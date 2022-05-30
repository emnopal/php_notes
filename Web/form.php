<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="form-post.php" method="post">

        <label for="username">Username</label><br> <!-- for ambil name="username" -->
        <input type="text" name="username" id="username"><br><br> <!-- ambil name="username" -->

        <label for="mail">Email</label><br> <!-- for ambil name="mail" -->
        <input type="email" name="mail" id="mail"><br><br> <!-- ambil name="mail" -->

        <label for="password">Password</label><br> <!-- for ambil name="password" -->
        <input type="password" name="password" id="password"><br><br> <!-- ambil name="password" -->

        <input type="submit" value="Register"><br>
    </form>
</body>
</html>