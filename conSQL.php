<?php
$dbUrl = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "db_quiz";

$con = mysqli_connect($dbUrl, $dbUser, $dbPass, $dbName);
if (!$con) {
    die("connect fail" . mysqli_connect_error());
}
?>