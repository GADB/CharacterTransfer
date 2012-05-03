
<?php

if(!($_SESSION["logi"]== 'true')){
echo 'Not Logedin';
exit(1);
}else{
	if($_SESSION['admin'] == false){
	
	exit(1);
	}
$id=$_GET['id'];
$gm = $_POST['gm'];
$del = $_GET["del"];

}
if($del==1){
mysql_query("delete from formular_basis where id='$id'") or die (mysql_error());
mysql_query("delete from formular_ruf where id='$id'") or die (mysql_error());
mysql_query("delete from formular_item where id='$id'") or die (mysql_error());
mysql_query("delete from formular_randomitem where id='$id'") or die (mysql_error());

echo"<center><h1><blink>Deleted Transfer ID:".$id."</blink></h1><center>";

}else{
	$check = "select `gm` from formular_basis where (id=".$id.")";
	$modify = mysql_query($check) or die (mysql_error());
	$mod = mysql_fetch_array($modify);
		if(!($mod[0] == 'nicht bearbeitet')){
			echo 'This transfer is already completed';

		}else{
			$updat = "UPDATE formular_basis set `gm`='Erledigt von ".$gm."' where (id=".$id.")";
			mysql_query($updat) or die (mysql_error());
			echo 'Thank you';
		}
}

?>

<html>
<head><title>Finish</title>
<!--Copyright www.gaef-clan.de created by Aldi-->
</head>
<body>
<meta http-equiv="refresh" content="2; URL=index.php?site=gm">

