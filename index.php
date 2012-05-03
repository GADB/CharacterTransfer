<?php
//starte session für login usw
session_start();
//includiere mysql datenbank verbindung
require ('check.php');
//wenn keine verbindung gefunden wurde install aufrufen
if($conn == false || $con = false){
	require('install.php');

}else{
	//wenn verbingung gefunden anzuzeigende seite aus link holen
	$site = mysql_real_escape_string($_GET["site"]);	
}
//head einbinden
require("template/head.php");

if($site == ""){
	//standartseite 
	require("home.php");

}else{

	require($site.".php");
}

require("./template/body.php");
?>