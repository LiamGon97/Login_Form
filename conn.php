<?php
$server_name = "localhost";
$uname = "root";
$password = "";
$db_name = "vanhalla";
$conn = false;
try {
    $conn = mysqli_connect($server_name, $uname, $password, $db_name,63342);
}
catch (Exception $e) {
    $conn = mysqli_connect($server_name, $uname, $password, $db_name);
}

if (!$conn) {
    echo "Connection failed!";
}
