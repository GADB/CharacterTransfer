<title>Chartransfersettings</title>
<center>
<?php


if(!($_SESSION["logi"]== 'true')){
	echo 'Not logged in';
	exit(1);
}
if($_SESSION['admin'] == false){

	echo '
	<h1 color="red">You have no access to this Area</h1>
	';
	

}else{
	echo'<h1>Welcome to the Settings</h1>';
	$num=$_GET['num'];
	$ch = $_GET['ch'];
		switch($num){
			case 0:
				if($ch ==0){
					mysql_query("UPDATE `settings` SET `adminbutton`='1' WHERE (`adminbutton`='0');");
				
				
				}else{
					mysql_query("UPDATE `settings` SET `adminbutton`='0' WHERE (`adminbutton`='1');");
				}
			break;
			case 1:
				if($ch ==0){
					mysql_query("UPDATE `settings` SET `autobutton`='1' WHERE (`autobutton`='0');");
				
				
				}else{
					mysql_query("UPDATE `settings` SET `autobutton`='0' WHERE (`autobutton`='1');");
				}
			break;
		
		
		
		}

	
	$set = mysql_query("select * from settings")or die(mysql_error());
	$rgw = mysql_fetch_array($set);
	
		//Admin
		if($rgw[0] == 1){
		
			$rgw2[0] = "Active";
		}else{
			$rgw2[0] = "Inactive";
			
			}
			//Automatic
		if($rgw[1] == 1){
		
			$rgw2[1] = "Active";
		}else{
			$rgw2[1] = "Inactive";
			
			}//num=settingname ch = change
		echo"<table border='1'>
				<tr><td>Option</td><td>Status</td><td>Activate or Deactivate</td></tr>
				<tr><td>Adminpanellink</td><td>".$rgw2[0]."</td><th><a href='index.php?site=set&num=0&ch=".$rgw[0]."'><button>Change</button></a></td></tr>
				<tr><td>Automaticscriptlink</td><td>".$rgw2[1]."</td><th><a href='index.php?site=set&num=1&ch=".$rgw[1]."'><button>Change</button></a></td></tr>
				</table>
				<h5>Written by -=GAEF=-Aldi</h5>
				";
}
?>