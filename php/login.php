<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>

    <link rel="stylesheet" href="../css/stylesheet.css">
    <?php include 'templateHeader.php'; ?>
</head>
<body>

<form action="handleLogin.php" method="post" class="loginForm">
    <input type="text" name="username" placeholder="Username" class="loginItem"> <br>
    <input type="password" name="password" placeholder="Password" class="loginItem"> <br>
    <input type="submit" class="loginItem">
</form>

<?php include 'templateFooter.php'; ?>
</body>
</html>