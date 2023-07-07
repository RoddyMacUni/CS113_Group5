<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <script src="../js/jquery-3.7.0.js"></script>
    <script src="../js/progressTracker.js"></script>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <?php include 'templateHeader.php'; ?>
</head>
<body>

<form method="post" class="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="username" placeholder="Username" class="loginItem" required> <br>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && count($_POST) > 0) {

        if(!validateUsernamePassword()) {
            echo <<<END
                <style>
                input[name=password] {
                    border: red solid 0.2rem;
                    color: red;
                }
                
                p[name=password-incorrect] {
                    padding-top: 0;
                    margin-top: 0;
                    color: red;
                }
                </style>
                
                <input type="password" name="password" placeholder="Password incorrect" class="loginItem" required>
                <p name="password-incorrect"> Password incorrect, please try again</p>
                END;
        }
        else {
            header("Location: parent-zone.php");
            exit();
        }
    }
    else {
        echo '<input type="password" name="password" placeholder="Password" class="loginItem" required> <br>';
    }
    ?>

    <input type="submit" value="Log in" class="loginButton">
</form>

<?php include 'templateFooter.php'; ?>
</body>
</html>

<?php

function validateUsernamePassword(): bool
{

    $sanitizedUsername = strip_tags($_POST["username"]);
    $sanitizedPassword = strip_tags($_POST["password"]);

    return ($sanitizedPassword === getUserDetails($sanitizedUsername));
}

//TODO Fetch username and password from db for milestone 3
function getUserDetails($username): string
{
    return "password";
}