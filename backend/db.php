<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "proiect_php_oop";
global $conn;
if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)) {
    die("Failed to connect to database!!!!!! Try again.");
};