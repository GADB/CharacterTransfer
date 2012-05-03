
<?php

if(!($_SESSION["logi"]== 'true')){
echo 'Not logged in';
exit(1);
}else{
$id=$_GET['id'];


}



?>
<html>
<head>
<title>
Transfer ID<?php echo $id; ?>
</title>
</head>

<body>
<?php
if($version == ''){

$sql = "select * from formular_basis where id=".$id."";
$sql2 = mysql_query ($sql);

while($basedata = mysql_fetch_array($sql2))
					{
					echo "<table border='2' cellspacing='1'>
								<tr><td>
								$welcome
								  </td></tr>
								  
								  
								  </table>
								  <br>
								
						  ";
echo "<b>Basicinfo:</b><br>";
						
						echo "Formular ID: ".$id."<br>";
						echo "$accountname: ".$basedata['name']."<br>";
						echo "$charactern: ".$basedata['chara']."<br>";
						echo "$server_old: ".$basedata['server']."<br>";
						echo '$server_link: <a href="'.$basedata['serverlink'].'">'.$basedata['serverlink'].'</a><br>';
						
						echo 'Armory Link: <a href="'.$basedata["armorylink"].'">'.$basedata["armorylink"].'</a><br>';

						
						echo "Screenshots: <a href=\"".$basedata['screen']."\">".$basedata['screen']."</a><br>";

							  
						echo "<br><b>Basics</b><br>";
						echo "<table border='2' cellspacing='1'>
								<tr>
								  <td>Wichtig: Use this Command if the Player is Level 1.<br></td>
								  </tr>
							  </table>";
						$level = $basedata['level'] - 1;
						echo ".levelup ". $level ."<br>";
						echo "<br><b>Gold:</b><br> ";

						
						$gold = $basedata['gold']."0000";
						echo ".modify money ".$gold;	
						echo "<br>";
						Echo "<h3>Ridding:</h3><br>";
                        //Reiten
						if($basedata['reiten'] == "75")
							$reitenspell = '33388';
						if($basedata['reiten'] == "150")
							$reitenspell = '33391';
						if($basedata['reiten'] == "225")
							$reitenspell = '34090';
						if($basedata['reiten'] == "300")
							$reitenspell = '34091';
						
						//beruf1
						if($basedata['beruf1skill'] <= "75")
							$beruf1maxskill = 75;
						elseif($basedata['beruf1skill'] <= "150")
							$beruf1maxskill = 150;
						elseif($basedata['beruf1skill'] <= "225")
							$beruf1maxskill = 225;
						elseif($basedata['beruf1skill'] <= "300")
							$beruf1maxskill = 300;
						elseif($basedata['beruf1skill'] <= "375")
							$beruf1maxskill = 375;
						elseif($basedata['beruf1skill'] <= "450")
							$beruf1maxskill = 450;
						//beruf2
						if($basedata['beruf2skill'] <= "75")
							$beruf2maxskill = 75;
						elseif($basedata['beruf2skill'] <= "150")
							$beruf2maxskill = 150;
						elseif($basedata['beruf2skill'] <= "225")
							$beruf2maxskill = 225;
						elseif($basedata['beruf2skill'] <= "300")
							$beruf2maxskill = 300;
						elseif($basedata['beruf2skill'] <= "375")
							$beruf2maxskill = 375;
						elseif($basedata['beruf2skill'] <= "450")
							$beruf2maxskill = 450;
						//kochen
						if($basedata['kochen'] <= "75")
							$kochenmaxskill = 75;
						elseif($basedata['kochen'] <= "150")
							$kochenmaxskill = 150;
						elseif($basedata['kochen'] <= "225")
							$kochenmaxskill = 225;
						elseif($basedata['kochen'] <= "300")
							$kochenmaxskill = 300;
						elseif($basedata['kochen'] <= "375")
							$kochenmaxskill = 375;
						elseif($basedata['kochen'] <= "450")
							$kochenmaxskill = 450;
						//angeln
						if($basedata['angeln'] <= "75")
							$angelnmaxskill = 75;
						elseif($basedata['angeln'] <= "150")
							$angelnmaxskill = 150;
						elseif($basedata['angeln'] <= "225")
							$angelnmaxskill = 225;
						elseif($basedata['angeln'] <= "300")
							$angelnmaxskill = 300;
						elseif($basedata['angeln'] <= "375")
							$angelnmaxskill = 375;
						elseif($basedata['angeln'] <= "450")
							$angelnmaxskill = 450;
						//erste hilfe
						if($basedata['erstehilfe'] <= "75")
							$hilfemaxskill = 75;
						elseif($basedata['erstehilfe'] <= "150")
							$hilfemaxskill = 150;
						elseif($basedata['erstehilfe'] <= "225")
							$hilfemaxskill = 225;
						elseif($basedata['erstehilfe'] <= "300")
							$hilfemaxskill = 300;
						elseif($basedata['erstehilfe'] <= "375")
							$hilfemaxskill = 375;
						elseif($basedata['erstehilfe'] <= "450")
							$hilfemaxskill = 450;
						//beruf1spell
						if($basedata['beruf1'] == "Schmiedekunst") {
							$beruf1 = 2018;
							$beruf1skill = 164;
						}
						if($basedata['beruf1'] == "Verzauberungskunst") {
							$beruf1 = 7411;
							$beruf1skill = 333;
						}
						if($basedata['beruf1'] == "Ingeneurskunst") {
							$beruf1 = 4036;
							$beruf1skill = 202;
						}
						if($basedata['beruf1'] == "Kraeutersammeln") {
							$beruf1 = 2366;	
							$beruf1skill = 182;
						}
						if($basedata['beruf1'] == "Juwelenschleifen") {
							$beruf1 = 25229;
							$beruf1skill = 755;
						}
						if($basedata['beruf1'] == "Lederer") {
							$beruf1 = 2108;	
							$beruf1skill = 165;
						}
						if($basedata['beruf1'] == "Bergbau") {
							$beruf1 = 2575;	
							$beruf1skill = 186;
						}
						if($basedata['beruf1'] == "Kuerschnerei") {
							$beruf1 = 8613;	
							$beruf1skill = 393;
						}
						if($basedata['beruf1'] == "Schneiderei") {
							$beruf1 = 3908;	
							$beruf1skill = 197;
						}
						if($basedata['beruf1'] == "Inschriftenkunde") {
							$beruf1 = 45357;	
							$beruf1skill = 773;
						}
						if($basedata['beruf1'] == "Alchemie") {
							$beruf1 = 2259;	
							$beruf1skill = 171;
						}
						//beruf2spell
						if($basedata['beruf2'] == "Schmiedekunst") {
							$beruf2 = 2018;
							$beruf2skill = 164;
						}
						if($basedata['beruf2'] == "Verzauberungskunst") {
							$beruf2 = 7411;
							$beruf2skill = 333;
						}
						if($basedata['beruf2'] == "Ingeneurskunst") {
							$beruf2 = 4036;
							$beruf2skill = 202;
						}
						if($basedata['beruf2'] == "Kraeutersammeln") {
							$beruf2 = 2366;	
							$beruf2skill = 182;
						}
						if($basedata['beruf2'] == "Juwelenschleifen") {
							$beruf2 = 25229;
							$beruf2skill = 755;
						}
						if($basedata['beruf2'] == "Lederer") {
							$beruf2 = 2108;	
							$beruf2skill = 165;
						}
						if($basedata['beruf2'] == "Bergbau") {
							$beruf2 = 2575;	
							$beruf2skill = 186;
						}
						if($basedata['beruf2'] == "Kuerschnerei") {
							$beruf2 = 8613;	
							$beruf2skill = 393;
						}
						if($basedata['beruf2'] == "Schneiderei") {
							$beruf2 = 3908;	
							$beruf2skill = 197;
						}
						if($basedata['beruf2'] == "Inschriftenkunde") {
							$beruf2 = 45357;	
							$beruf2skill = 773;
						}
						if($basedata['beruf2'] == "Alchemie") {
							$beruf2 = 2259;	
							$beruf2skill = 171;
						}
	
						echo "Ridding: .learn ".$reitenspell."<br>";
						if($basedata['cold_weather'] !=0){
							echo"Coldweatherskill: .learn ".$basedata['cold_weather']."<br>";
						}
						echo "".$basedata['beruf1'].": .learn ".$beruf1."<br>";
						echo "".$basedata['beruf1'].": .setskill ".$beruf1skill." ".$basedata['beruf1skill']." 450 <br>";
						echo "".$basedata['beruf2'].": .learn ".$beruf2."<br>";
						echo "".$basedata['beruf2'].": .setskill ".$beruf2skill." ".$basedata['beruf2skill']." 450<br>";
						echo "$cooking: .learn 2550<br>";
						echo "$cooking: .setskill 185 ".$basedata['kochen']." 450<br>";
						echo "$phishing: .learn 7620<br>";
						echo "$phishing: .setskill 356 ".$basedata['angeln']." 450<br>";
						echo "$first_aid: .learn 3279<br>";
						echo "$first_aid: .setskill 129 ".$basedata['erstehilfe']." ".$hilfemaxskill."<br>";
							   }//ende der basedaten
							  
				//Items
				$sql_items = mysql_query("SELECT * FROM formular_item WHERE `id` = '$id';");
				echo "<br><b>->Armor<-</b><br>";
						
						
						while($items = mysql_fetch_array($sql_items))
						{
							//echo ".additem <a href=\"http://de.wowhead.com/?item=".$items['$count']."\">".$items['$count']."</a> ".$items['$count+1']."<br>";
							
							
							
							for($i = 2; $i < 21; $i++){
								if($items[$i] !=0){
									echo '.additem <a href="http://de.wowhead.com/?item='.$items[$i].'">'.$items[$i].'</a><br> ';
								
								}
							}
							$i = "22";
							  echo"<br><b>-><-</b></br>";
							  echo '.additem <a href="http://de.wowhead.com/?item=29434">'.$items[$i].'</a><br> ';
							  $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=40753">'.$items[$i].'</a><br> ';
							    $i++;
						       echo '.additem <a href="http://de.wowhead.com/?item=45624">'.$items[$i].'</a><br> ';
							  $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=49426">'.$items[$i].'</a><br> ';
							  $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=40752">'.$items[$i].'</a><br> ';
							   $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=47241">'.$items[$i].'</a><br> ';
							  $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=47395">'.$items[$i].'</a><br> ';
							  $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=42425">'.$items[$i].'</a><br> ';
							  $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=43589">'.$items[$i].'</a><br> ';
							  $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=41596">'.$items[$i].'</a><br> ';
							    $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=43016">'.$items[$i].'</a><br> ';
							   $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=37836">'.$items[$i].'</a><br> ';
							    $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=37836">'.$items[$i].'</a><br> ';
							    $i++;
							  echo '.additem <a href="http://de.wowhead.com/?item=44990">'.$items[$i].'</a><br> ';
							  $i++;

							  
							  echo '.modify Arena '.$items[$i].'</a> I hope this work if not please use the support formular<br> ';
							  $i++;
							  echo '.honor addpoints '.$items[$i].'</a><br> ';
							  $i++;
							
							
							
						}						

								
					}
					
					//RND Items
					$sql_ritems = mysql_query("SELECT * FROM formular_randomitem WHERE `id` = '$id';");
				echo "<br><b>->Random Itemsadds<-</b><br>";
						
						$count = "2";
						while($items = mysql_fetch_array($sql_ritems)){
							echo '.additem <a href="http://de.wowhead.com/?item='.$items[$count].'">'.$items[$count].'</a> ';
							$count++;
							echo ''.$items["$count"].'<br>';
							$count++;
							echo '.additem <a href="http://de.wowhead.com/?item='.$items[$count].'">'.$items[$count].'</a> ';
							$count++;
							echo ''.$items["$count"].'<br>';
							$count++;
							echo '.additem <a href="http://de.wowhead.com/?item='.$items[$count].'">'.$items[$count].'</a> ';
							$count++;
							echo ''.$items["$count"].'<br>';
							$count++;
							echo '.additem <a href="http://de.wowhead.com/?item='.$items[$count].'">'.$items[$count].'</a> ';
							$count++;
							echo ''.$items["$count"].'<br>';
							$count++;
							echo '.additem <a href="http://de.wowhead.com/?item='.$items[$count].'">'.$items[$count].'</a> ';
							$count++;
							echo ''.$items["$count"].'<br>';
							$count++;
							echo '.additem <a href="http://de.wowhead.com/?item='.$items[$count].'">'.$items[$count].'</a> ';
							$count++;
							echo ''.$items["$count"].'<br>';
							$count++;
							echo '.additem <a href="http://de.wowhead.com/?item='.$items[$count].'">'.$items[$count].'</a> ';
							$count++;
							echo ''.$items["$count"].'<br>';
							$count++;
							echo '.additem <a href="http://de.wowhead.com/?item='.$items[$count].'">'.$items[$count].'</a> ';
							$count++;
							echo ''.$items["$count"].'<br>';
							$count++;
							echo '.additem <a href="http://de.wowhead.com/?item='.$items[$count].'">'.$items[$count].'</a> ';
							$count++;
							echo ''.$items["$count"].'<br>';
							$count++;
							echo '.additem <a href="http://de.wowhead.com/?item='.$items[$count].'">'.$items[$count].'</a> ';
							$count++;
							echo ''.$items["$count"].'<br>';
							$count++;
							
						
						
						}
					
					
					
			//ende Items
			
					
			//Ruf
			$sql_ruf = mysql_query("SELECT * FROM formular_ruf WHERE `id` = '$id';");
			echo "<br><b>->Ruf<-</b><br>";
						
						$count = "2";
						while($ruf = mysql_fetch_array($sql_ruf))
						{
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1106"> 1106 </a> '. $ruf[$count].'<br>';
									$count++;
					    echo '.modify rep <a href="http://de.wowhead.com/?faction=1094"> 1094 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1091"> 1091 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1126"> 1126 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1067"> 1067 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1073"> 1073 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1105"> 1105 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1119"> 1119 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1124"> 1124 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1064"> 1064 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1052"> 1052 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1050"> 1050 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1068"> 1068 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1090"> 1090  </a>'. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1085"> 1085 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1098"> 1098 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=809"> 809 </a>  '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1104"> 1104</a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1037"> 1037 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=72"> 72 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=930"> 930 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=47"> 47 </a> '. $ruf[$count].'<br>';
									$count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=54"> 54 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=69"> 69 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=76"> 76 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=911"> 911 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=68"> 68 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=81"> 81 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=530"> 530 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=933"> 933 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=967"> 967 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1012"> 1012 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=990"> 990 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=946"> 946 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=942"> 942 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=989"> 989 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=978"> 978 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1015"> 1015 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=1038"> 1038 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=970"> 970 </a> '. $ruf[$count].'<br>';
                                    $count++;
						echo '.modify rep <a href="http://de.wowhead.com/?faction=947"> 947 </a> '. $ruf[$count].'<br>';

						
						
						}
												
						
						
/*------------------------------------------------------------------------------------------------------------*/ 
	
	
													
						
						
							  






	




?>

<form action="index.php?site=gmdone&id=<?php echo $id; ?>" method="POST">
<table><tr><td>Transfer done by:</td>
<td>
<input type="text" name="gm">
</td></tr>
<tr><td>
<button type="submit">Finish</button></td><td></td></tr>
</table>
</form>

<h2>Delete this Transfer</h2>
<?php

if($_SESSION['admin'] == true){

echo '
<form method="POST" action="index.php?site=gmdone&del=1&id='.$id.'">

		<button type="submit">Delete this Transfer</button>
		</form>
';

}else{

echo"<blink><font color='red'>Only Admin is allowed to delete Chartransfers</font></blink><br<br_>";
}


?>

<br> Copyright <a href='http://www.gaef-clan.de/'>-=GAEF=-Aldi</a> und <a href='http://der-mitrilorden.de/'>CRANX</a>
