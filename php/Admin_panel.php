<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parent Zone</title>
    <script src="../js/jquery-3.7.0.js"></script>
    <script src="../js/progressTracker.js"></script>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <?php include 'templateHeader.php'; ?>
</head>
<br>
<body>
<?php
$username = $_POST["username"];
$password = $_POST["password"];
$user_details = get_db_user_details();

$servername = "devweb2022.cis.strath.ac.uk";

$conn = new mysqli($servername, $user_details["username"], $user_details["password"], $user_details["username"]);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cs113_group5_users ";
$result = $conn->query($sql);

function get_db_user_details(): array
{
    $content = file_get_contents("secrets.txt");

    // Split the content of the file on semicolons
    $content = explode(";", $content, 2);

    // Clean the username and pwd retrieved from the secrets file
    $username = trim(str_replace(array("username:", ";"), "", $content[0]));
    $passwd = trim(str_replace(array("password:", ";"), "", $content[1]));

    return array("username" => $username, "password" => $passwd);
}


?>

<div class="parentZoneContainer">
    <div class="parentZoneItem">
        <img src="../images/monster1.png" alt="Cartoon monster icon" class="parentZoneImg">
        <p class="parentZoneText">Parent FAQ</p>
    </div>

    <div class="parentZoneItem">
        <img src="../images/monster1.png" alt="Cartoon monster icon" class="parentZoneImg">
        <p class="parentZoneText">Check my kids progress</p>
    </div>

    <div class="parentZoneItem">
        <img src="../images/monster1.png" alt="Cartoon monster icon" class="parentZoneImg">
        <p class="parentZoneText">Report an issue</p>
    </div>
</div>
<div class="pageDivider" style="margin-bottom: 10px;">&nbsp;</div>
<!-- THIS WILL BE POPULATED DYNAMICALLY DEPENDING ON WHAT LINK IS SELECTED ABOVE, IN FUTURE MILESTONES -->
<div class="aboutUsParentContainer">
    <div class="aboutUsContainer">

        <?php

        if ($result && $result->num_rows > 0) {
            echo '<table class ="custom-table">';
            echo '<tr><th>Username</th><th>Password</th><th>XP</th></tr>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['password_hash'] . '</td>';
                echo '<td>' . $row['XP'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }

        $conn->close();
        ?>
    </div>
</div>
<div class="pageDivider"></div>
<?php include 'templateFooter.php'; ?>
</body>
</html>
