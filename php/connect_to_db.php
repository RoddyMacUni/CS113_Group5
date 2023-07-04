<?php

function get_db_user_details(): array {
    $content = file_get_contents("../secrets.txt");

    //Split the content of the file on semicolons
    $content = explode(";", $content, 2);

    // clean the username and pwd retrieved from the secrets file
    $username = trim(str_replace(array("username:", ";"), "", $content[0]));
    $passwd = trim(str_replace(array("password:", ";"), "", $content[1]));

    return array("username"=>$username, "password"=>$passwd);
}

function connect_to_db(): mysqli {
    $user_details = get_db_user_details();

    $servername = "devweb2022.cis.strath.ac.uk";

    $conn = new mysqli($servername, $user_details["username"], $user_details["password"], $user_details["username"]);

    if ($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}


$conn = connect_to_db();


