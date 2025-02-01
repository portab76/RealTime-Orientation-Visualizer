<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$servername = "SERVER_NAME";
$username = "MYSQL_USERNAME";
$password = "MYSQL_PASSWOD";
$dbname = "MYSQL_DBNAME";
$conn = new mysqli($servername, $username, $password, $dbname);
?>
