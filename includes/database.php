<?php
//define parameters
$host = "localhost";
$login = "phpuser";
$password = "phpuser";
$database = "infoi101";

//Connect to the mysql server
$conn = @new mysqli($host, $login, $password, $database);

//Handle connection errors
if ($conn->connect_errno) {
    $errno = $conn->connect_errno;
    $errmsg = $conn->connect_error;
    die ("Connection to database failed: ($errno) $errmsg.");
}