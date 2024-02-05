<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login as Admin</title>
</head>

<body>
    <nav>
        <a href="index.php">Home</a>&nbsp;&nbsp;
    </nav>
    <br/><br/>
    <!-- Login Page -->
    <form action="api/login_check.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <br />
        <br />
        <input type="submit" value="Login">
    </form>
</body>

</html>