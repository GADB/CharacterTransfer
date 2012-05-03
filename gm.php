<?php

$log = $_GET['log'];
$user=$_POST['user'];
$pw=$_POST['pw'];
$md5pwd = md5(($pw));
$logi=$_POST['logi'];
$set = $_GET['set'];

if($log == 1){
	session_destroy();
	echo"<center><blink><font size='+2' color='red'>Logged out</font></blink></center>";

}



if ($pw=='' && $user=='' && $logi == ''){

echo '
<center>
<h1>Please Login to get access to the admin control panel</h1>
<table border="1">
<form action="index.php?site=gm" method="POST">
<tr><td>User:</td><td><input type="text" name="user"><td>Password:</td><td><input type="password" name="pw"></td></tr>
</table>
<input type="hidden" name="logi" value="true">
<button type="submit">Login</button>
</form><br>
<script type="text/javascript"><!--
google_ad_client = "pub-6659791502226418";
/* chartrans */
google_ad_slot = "3335059289";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script><script type="text/javascript"><!--
google_ad_client = "pub-6659791502226418";
/* chartrans */
google_ad_slot = "3335059289";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>
';
exit(1);
}



//login
//$count = 0; //debuging
$data=mysql_query('select * from login')or die (mysql_error());
while($login = mysql_fetch_array($data)){
//	$count++;
	if($md5pwd==$login['passwort'] && $user==$login['account']){
			$_SESSION['logi'] = 'true';//login true
				if($login['admin'] == 1){
				
					$_SESSION['admin'] = true;//admin true
			
				}else{
					$_SESSION['admin'] = false;//admin false
				}
		break;//leave while
	}else{


		$_SESSION['logi'] = 'false';//no login
			
	}


}
	if (!($_SESSION['logi'] == 'true')){
		echo '<center>Login Failed</center>';
			//echo "<h1>".$count."</h1>";
		exit(1);
	}
//end login
//Dies hier nicht modifizieren da sonst die Update funktion nicht mehr richtig funktioniert!
$ihreversion="2.4";
?>

<title>
Chartranses
</title>


<body>
<center><font size="+2">
<?php echo $headline;?>
</font>
<br>
<?php
//Automatische Updateprüfung damit dafür gesorgt ist das ihr auch immer die aktuellste Version habt :P
//in der Version.html befindet sich nur eine Zeile mit der Aktuellen versionsnummer
if($_SESSION['admin'] == true){
	$version = file_get_contents('http://www.gaef-clan.de/aldi/version.html');
	if ($version == $ihreversion){

	echo '<a href="http://www.gaef-clan.de/aldi/"><img src="http://www.gaef-clan.de/aldi/Bilder/aktuell.png"></a><br>';

	}else{

	echo '<a href="http://www.gaef-clan.de/aldi/"><img src="http://www.gaef-clan.de/aldi/Bilder/alt.png"></a><br>';

	}


	?>
	<br>
	<a href="http://www.gaef-clan.de/aldi/index.php?version=<?php echo $ihreversion;?>" target="_blank"><button>Check for Update</button></a>
	&nbsp;<button onclick='window.open("index.php?site=backup")'>Backup</button>
	&nbsp;<button onclick='window.open("index.php?site=users")'>Users</button>
	&nbsp;<button onclick='window.open("index.php?site=set")'>Settings</button>	
	&nbsp;<a href="index.php?site=gm&log=1"><button>Logout</button></a>

	<?php
	$daten1 = $_SERVER['HTTP_HOST'];
	$daten   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	echo'&nbsp;<form action="https://www.ssl-id.de/www.gaef-clan.de/aldi/support.php" target="blank" method="POST">
			<input type="hidden" name="daten" value="http://'.$daten1.''.$daten.'">
			<input type="submit" value="Report a Bug">
		 </form></center>';
	
	
	?>
<center><font size="+1">
<?php 
}
echo $info;
?>

</font></center>
<table align="center" width="auto" border='1'> <tr><td>ID</td><td>Character</td><td>Server</td><td>Date/Datum</td><td>Bearbeitet/Done</td></tr>
<?php
$sql = "select `id`, `chara`, `server`, `datum`, `gm` from formular_basis order by `id` DESC";
$sql2 = mysql_query($sql) or die (''.mysql_error());
while($basis = mysql_fetch_array($sql2)){

echo "

<tr><td><a href='index.php?site=gmmakro&id=".$basis['id']."' target='_blank'>".$basis['id']."</td><td><a href='index.php?site=gmmakro&id=".$basis['id']."' target='_blank'>".$basis['chara']."</td>
<td><a href='index.php?site=gmmakro&id=".$basis['id']."' target='_blank'>".$basis['server']."</td><td>".$basis['datum']."</td><td>".$basis['gm']."</td></tr>

";




}




?>

</table>



<br><center> Copyright <a href="http://www.gaef-clan.de/">-=GAEF=-Aldi</a> und <a href="http://der-mitrilorden.de/">CRANX</a></center>
