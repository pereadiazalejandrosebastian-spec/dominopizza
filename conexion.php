<?php
$host = "mysql-alejandroapi.alwaysdata.net";
$user = "alejandroapi";
$pass = "clase1234";
$db = "alejandroapi_dominos";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}
?>