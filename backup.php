<?php session_start();?>
<?php require("check.php");
      require("beta.php");
	  
if (!($_SESSION['logi'] == 'true')){
echo 'No login found';
exit(1);
}
	  ?>
	  
<html>
<title>Backup</title>

<body>
<center>
<?php
$check = $_POST['check'];


if (!$check == ""){
	if($check == 1){
	
		backup();
	
	
	}else{
	
		import();
	
	
	
	}




}else{

echo '
	<h1>Backup saved in folder backup <br> Do not change the name of the file or the directory</h1>
	<h2>Exportieren</h2>
	<form action="index.php?site=backup" method="POST">
	<input type="hidden" name="check" value="1">
	<input type="submit" value="Export">
	</form>
	<br>
	<!----------------------------------------------------------------------------------------------------->
	
	<h2>Importieren</h2>
	<font color="red">Warning this will clean you actual Database!</font><br>
	<form action="index.php?site=backup" method="POST">
	<input type="hidden" name="check" value="2">
	<input type="submit" value="Import">
	</form>

';

}














?>

</center>
