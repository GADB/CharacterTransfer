<title>User Managment</title>
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

	if($_GET["modify"]!=''){
	
		echo'<form name="account" action="index.php?site=users" method="POST">
			<table>
			<tr><td>User</td><td><input type="text" name="Account" value="'.$_GET["modify"].'"></td></tr>
			<tr><td>Password</td><td><input type="text" name="pass" value=""></td></tr>
			<tr><td>Admin?</td><td><input type="checkbox" name="admin" value="1"></td></tr>
			</table>
			<input type="submit" value="Update User">
			<input type="hidden" name="check" value="true">
			</form>';
			exit(0);
	
	}
	if($_GET["delete"] != ''){
		$sql = mysql_query("select * from login");
		$rgw = mysql_num_rows($sql);
		if($rgw == 1){
		
			Echo"<h2 color='red'><blink> You are not allowed to delete the last user</blink></h2>";
	}else{
		mysql_query("delete from login where account='".$_GET["delete"]."'")or die("Ungueltiger Nurtzer".mysql_error());
	}
	
	}
	if($_POST['check'] !=true){
		$rgw = mysql_query("select * from login");

		
		echo '<h1>Accounts</h1>
					<table border="1">
					<tr><td>Name</td><td>Admin</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
			while($data = mysql_fetch_array($rgw)){
				
				echo'<tr><td>'.$data["account"].'</td><td>';
				if($data["admin"] == 1){
					echo 'TRUE</td>';
				}else{
					echo 'FALSE</td>';
				}
			echo'<td><a href="index.php?site=users&modify='.$data["account"].'"><Button>Modify</button></a></td>
			<td><a href="index.php?site=users&delete='.$data["account"].'"><Button onClick="javascript:confirm(\"Are you sure?\");">Delete</button></a></td>';
			}
			
		echo '
			</table>
			<br>
			
		
<br>
			<h2>Account creation</h2>
			<form name="account" action="index.php?site=users" method="POST">
			<table>
			<tr><td>User</td><td><input type="text" name="Account" value=""></td></tr>
			<tr><td>Password</td><td><input type="text" name="pass" value=""></td></tr>
			<tr><td>Admin?</td><td><input type="checkbox" name="admin" value="1"></td></tr>
			</table>
			<input type="submit" value="Create User">
			<input type="hidden" name="check" value="true">
			</form>
	
';
	}else{
	
		$name=$_POST["Account"];
		$pw = $_POST["pass"];
		$admin = $_POST["admin"];
		$md5pwd = md5(($pw));//fixed bug 13.06.2010
			if ($admin == ''){
				$admin=0;
			}
		//löschen des benutzers da kein primarykey 
		mysql_query("delete from login where account='$name'");
		$sql="
			INSERT INTO login VALUES('$name', '$md5pwd', '$admin');";
			mysql_query($sql) or die("Failure".mysql_error());
			echo '<h1 color="red">Account creation successfull</h1>';
			echo '<a href="index.php?site=users"><button>Add Another User</button></a>';
			}
		//include ("users.php");

}

?>
<!--<a href="index.php?site=gm"><button>Back</button></a>-->
</center>