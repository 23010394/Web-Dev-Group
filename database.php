<?php

$host = "localhost";
$dbname = "stafflogin_db";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli -> connect_errno) {
    die("Connection failed: " . $mysqli -> connect_error);
}

return $mysqli;