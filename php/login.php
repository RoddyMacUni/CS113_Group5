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

<form method="post" class="loginForm" action="Admin_panel.php">
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
                
                <input type="password" name="password" placeholder="Password incorrect" class="loginItem" id="show" required>
                <p name="password-incorrect"> Password incorrect, please try again</p>
                END;
        }
        else {
            header("Location: parent-zone.php");
            exit();
        }
    }
    else {
        echo '<input type="password" name="password" placeholder="Password" class="loginItem" id="show" required> <br>';
    }
    ?>

    <input type="checkbox" onclick="showPassword()">Show Password
    <br>
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

    return validateUserCredentials($sanitizedUsername, $sanitizedPassword);
}

// TODO Fetch username and password from db for milestone 3
function validateUserCredentials($username, $password): bool
{
    $user_details = get_db_user_details();

    $servername = "devweb2022.cis.strath.ac.uk";

    $conn = new mysqli($servername, $user_details["username"], $user_details["password"], $user_details["username"]);

    if ($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sanitizedUsername = mysqli_real_escape_string($conn, $username); // Escape the username to prevent SQL injection

    $sql = "SELECT password_hash FROM cs113_group5_users WHERE username='$sanitizedUsername'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password_hash'];

        // Compare the stored password with the provided password
        if (password_verify($password, $storedPassword)) {
            return true; // Passwords match
        }
    }

    $conn->close();
    return false; // Invalid username or password
}

function get_db_user_details(): array {
    $content = file_get_contents("secrets.txt");

    //Split the content of the file on semicolons
    $content = explode(";", $content, 2);

    // clean the username and pwd retrieved from the secrets file
    $username = trim(str_replace(array("username:", ";"), "", $content[0]));
    $passwd = trim(str_replace(array("password:", ";"), "", $content[1]));

    return array("username"=>$username, "password"=>$passwd);
}

?>

<script>
    function showPassword(){
        var x = document.getElementById("show");
        if (x.type === "password"){
            x.type="text";
        }
        else{x.type="password";}
    }
</script>
