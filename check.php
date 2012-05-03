
<?php
$server = "localhost";
$db_user = "user2037455";
$db_pass = "Elar12345";
$database = "db2037455-main";
$servername = "Nemesis-Gaming";
$linktohp = "http://www.nemesis-Gaming.eu";
include("./lang/ger.php");
//Copyright Matthias A. -=GAEF=-Aldi

$conn = mysql_connect($server, $db_user, $db_pass) or die("Connection failed: ". mysql_error());
$con = mysql_select_db($database, $conn) or die("Select DB failed: " . mysql_error());
?>