<?php
$dbUrl  = ""; // url host
$dbUser = ""; // db username
$dbPass = ""; // db password
$dbName = ""; // db name

$con = mysqli_connect($dbUrl, $dbUser, $dbPass, $dbName);
if (!$con) {
    die("connect fail" . mysqli_connect_error());
}
?>