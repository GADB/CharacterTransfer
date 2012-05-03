
<title><?php echo $servername; ?> - Chartransfer </title>

<script type="text/javascript" src="http://www.gaef-clan.de/aldi/js/check_new.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<!--Version 1.7 of Autoscript by Matthias A.-->
<center>
<h1>This Script trys to get your Blizzard Characters Armor IDs, please Check the last 3 ids they maybe incorect!</h1>
<?php

	
	$check = $_POST['se'];
	if ($check != 1){
	echo '
		
		<form action="index.php?site=auto" method="POST">
		<input type="text" value="http://" name="link">
		<input type="hidden" name="se" value="1">
		<input type="submit" value="GO!">
		
		</form>
	
	';

	}else{
	$link = $_POST['link'];
	require("beta.php");
	$rgw = getcharacter($link);



	}
?>

<table border="1" align="center">
<tr><td colspan="2"><?php echo $a; ?></td></tr>
<tr><td><?php echo $general; ?></td><td></td></tr>
<form name="chartrans" action="index.php?site=auswertung" method="POST">
<tr><td ><?php echo $accountname; ?>:</td><td><input type="text" name="Accountname" size="25"></td></tr>
<tr><td ><?php echo $charactern; ?>:</td><td><input type="text" name="Charactername" size="25"></td></tr>
<tr><td ><?php echo $server_old; ?>:</td><td><input type="text" name="Server" size="25"></td></tr>
<tr><td ><?php echo $server_link; ?>:</td><td><input type="text" name="Link" value="http://" size=25"></td></tr>
<tr><td ><?php echo $amory_link;?>:</td><td><input type="text" name="Amory" value="<?php echo $link; ?>" size="25"></td></tr>
<tr><td colspan="2" ><?php echo $screenshots; ?>!</td></tr>
<tr><td ><?php echo $downloadlin; ?>:</td><td><input type="text" name="Download" size="25"></td></tr>																																																																																										<!--Matthias A.-->
<tr><td colspan="2" ><?php echo $chinfo; ?></td></tr>
<tr><td ><?php echo $level; ?></td><td><input type="text" value="0" name="Level" size="3"></td></tr>
<tr><td ><?php echo $gold; ?></td><td><input type="text" value="0" name="Gold" size="3"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td><?php echo $riding_skil; ?></td><td><select name="Reiten">
										<option selected>0</option>
										<option>75</option>
										<option>150</option>
										<option>225</option>
										<option>300</option>
										
										</select>


</td></tr>
<tr><td ><?php echo $ground; ?></td><td><input type="text" value="0" name="Mount_boden" size="3"></td></tr>
<tr><td ><?php echo $fly;?></td><td><input type="text" value="0" name="Mount_flug" size="3"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td><select name="Beruf1">
           	              <option selected="selected"><?php echo $job[0];?></option>
           	              <option><?php echo $job[1];?></option>
           	              <option><?php echo $job[2];?></option>
           	              <option><?php echo $job[3];?></option>
           	              <option><?php echo $job[4];?></option>
           	              <option><?php echo $job[5];?></option>
           	              <option><?php echo $job[6];?></option>
           	              <option><?php echo $job[7];?></option>
           	              <option><?php echo $job[8];?></option>
           	              <option><?php echo $job[9];?></option>
           	              <option><?php echo $job[10];?></option>
         	              </select></td>
						  <td><input type="text" value="0" name="Beruf1_skill" size="3"></td></tr>
<tr><td><select name="Beruf2">
           	              <option selected="selected"><?php echo $job[0];?></option>
           	              <option><?php echo $job[1];?></option>
           	              <option><?php echo $job[2];?></option>
           	              <option><?php echo $job[3];?></option>
           	              <option><?php echo $job[4];?></option>
           	              <option><?php echo $job[5];?></option>
           	              <option><?php echo $job[6];?></option>
           	              <option><?php echo $job[7];?></option>
           	              <option><?php echo $job[8];?></option>
           	              <option><?php echo $job[9];?></option>
           	              <option><?php echo $job[10];?></option>
         	              </select></td>
						  <td><input type="text" value="0" name="Beruf2_skill" size="3"></td></tr>
<tr><td><?php echo $cooking; ?></td><td><input type="text" name="Kochen" size="3" value="0"></td></tr>
<tr><td><?php echo $phishing; ?></td><td><input type="text" name="Angeln" size="3" value="0"></td></tr>
<tr><td><?php echo $first_aid;?></td><td><input type="text" size="3" name="Erstehilfe" value="0"></td></tr>
<tr><td><?php echo $items;?></td><td>&nbsp;</td></tr>
<tr><td><?php echo $head;?></td><td><input type="text" name="Kopf" value="<?php echo $rgw[0];?>" size="3"></td></tr>
<tr><td><?php echo $neck;?>:</td><td><input type="text" name="Hals" value="<?php echo $rgw[1];?>" size="3"></td></tr>
<tr><td><?php echo $shoulder?></td><td><input type="text" name="Schulter" value="<?php echo $rgw[2];?>" size="3"></td></tr>
<tr><td><?php echo $back;?></td><td><input type="text" value="<?php echo $rgw[3];?>" name="Ruecken" size="3"></td></tr>
<tr><td><?php echo $front;?></td><td><input type="text" name="Brust" value="<?php echo $rgw[4];?>" size="3"></td></tr>
<tr><td><?php echo $skirt;?></td><td><input type="text" value="<?php echo $rgw[5];?>" name="Wappenrock" size="3"></td></tr>
<tr><td><?php echo $hand1;?></td><td><input type="text" value="<?php echo $rgw[6];?>" name="Handgelenke" size="3"></td></tr>
<tr><td><?php echo $hand2;?></td><td><input type="text" value="<?php echo $rgw[7];?>" name="Haende" size="3"></td></tr>
<tr><td><?php echo $waist?></td><td><input type="text" value="<?php echo $rgw[8];?>"name="Taille" size="3"></td></tr>
<tr><td><?php echo $foot; ?></td><td><input type="text" value="<?php echo $rgw[9];?>" name="Beine" size="3"></td></tr>
<tr><td><?php echo $boots;?></td><td><input type="text" value="<?php echo $rgw[10];?>" name="Fuesse" size="3"></td></tr>
<tr><td><?php echo $ring1;?></td><td><input type="text" value="<?php echo $rgw[11];?>" name="Ring1" size="3"></td></tr>
<tr><td><?php echo $ring2;?></td><td><input type="text" value="<?php echo $rgw[12];?>"name="Ring2" size="3"></td></tr>
<tr><td><?php echo $trinket1;?></td><td><input type="text" value="<?php echo $rgw[13];?>" name="Schmuck1" size="3"></td></tr>
<tr><td><?php echo $trinket2;?></td><td><input type="text" value="<?php echo $rgw[14];?>" name="Schmuck2" size="3"></td></tr>
<tr><td><?php echo $mainhand;?></td><td><input type="text" value="<?php echo $rgw[15];?>" name="Waffenhand" size="3"></td></tr>
<tr><td><?php echo $secondhand;?></td><td><input type="text" value="<?php echo $rgw[16];?>"  name="Nebenhand" size="3"></td></tr>
<tr><td><?php echo $other;?></td><td><input type="text" name="Distanzwaffe" value="<?php echo $rgw[17];?>" size="3"></td></tr>
<tr><td><?php echo $other;?></td><td><input type="text" name="Distanzwaffe" value="<?php echo $rgw[18];?>" size="3"></td></tr>
<tr><td><?php echo $random_items;?></td><td></td></tr>
<tr><td><b><?php echo $id;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <?php echo $count; ?></b></td><td></td></tr>
<tr><td><input type="text" name="Ri1" size="3" value="0"><input type="text" name="Ri1a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri2" size="3" value="0"><input type="text" name="Ri2a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri3" size="3" value="0"><input type="text" name="Ri3a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri4" size="3" value="0"><input type="text" name="Ri4a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri4" size="3" value="0"><input type="text" name="Ri4a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri5" size="3" value="0"><input type="text" name="Ri5a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri6" size="3" value="0"><input type="text" name="Ri6a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri7" size="3" value="0"><input type="text" name="Ri7a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri8" size="3" value="0"><input type="text" name="Ri8a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri9" size="3" value="0"><input type="text" name="Ri9a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri10" size="3" value="0"><input type="text" name="Ri10a" value="0" size="3"></td><td></td></tr>
<tr><td align="left" ><b><span style="font-size: 12pt; color: rgb(255, 0, 0);">Wotlk Fraktionen!</span></b></td><td></td></tr>
<td >Argentumkreuzung</td>
           	          <td align="left"><label>
           	            <select name="1106" id="1106">
           	              <option>Freundlich</option>
           	              <option>Wohlwollend</option>
           	              <option>Respektvoll</option>
           	              <option>Ehrf&uuml;rchtig</option>
           	              <option selected="selected">keinen Ruf</option>
         	              </select>
         	            </label></td>
<tr>
           	          <td align="left" >Der Silberbund</td>
           	          <td align="left"><select name="1094" id="1094">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
           	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Der Wyrmruhpakt</td>
           	          <td align="left"><select name="1091" id="1091">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Die Frosterben</td>
           	          <td align="left"><select name="1126" id="1126">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Die Hand der Rache</td>
           	          <td align="left"><select name="1067" id="1067">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Die Kalu'ak</td>
           	          <td align="left"><select name="1073" id="1073">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Die Orakel</td>
           	          <td align="left"><select name="1105" id="1105">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Die S&ouml;hne Hodir</td>
           	          <td align="left"><select name="1119" id="1119">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Die Sonnenh&auml;scher</td>
           	          <td align="left"><select name="1124" id="1124">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Die Taunka</td>
           	          <td align="left"><select name="1064" id="1064">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
					  
           	        <tr>
           	          <td align="left" >Expedion der Horde</td>
           	          <td align="left"><select name="1052" id="1052">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Expedion Valianz</td>
           	          <td align="left"><select name="1050" id="1050">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Forscherliga</td>
           	          <td align="left"><select name="1068" id="1068">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Kirin Tor</td>
           	          <td align="left"><select name="1090" id="1090">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Kriegshymnenoffensive</td>
           	          <td align="left"><select name="1085" id="1085">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Ritter der schwarzen Klinge</td>
           	          <td align="left"><select name="1098" id="1098">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Shen'dralar:</td>
           	          <td align="left"><select name="809" id="809">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Stamm der Wildherzen</td>
           	          <td align="left"><select name="1104" id="1104">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Vorposten der Allianz</td>
           	          <td align="left"><select name="1037" id="1037">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
<tr><td align="left" ><b><span style="font-size: 12pt; color: rgb(255, 0, 0);">Allianz Fraktionen!</span></b></td></tr>
           	        <tr>
           	          <td align="left" >Sturmwind</td>
           	          <td align="left"><select name="72" id="72">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Die Exodar</td>
           	          <td align="left"><select name="930" id="930">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Eisenschmiede</td>
           	          <td align="left"><select name="47" id="47">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Gnomeregangnome</td>
           	          <td align="left"><select name="54" id="54">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Darnassus</td>
           	          <td align="left"><select name="69" id="69">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
<tr><td align="left" ><b><span style="font-size: 12pt; color: rgb(255, 0, 0);">Horde Fraktionen!</span></b></td></tr>
           	        <tr>
           	          <td align="left" >Orgrimmar</td>
           	          <td align="left"><select name="76" id="76">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Silbermond</td>
           	          <td align="left"><select name="911" id="911">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Unterstadt</td>
           	          <td align="left"><select name="68" id="68">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Donnerfels</td>
           	          <td align="left"><select name="81" id="81">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Dunkelspeertrolle</td>
           	          <td align="left"><select name="530" id="530">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
<tr><td align="left" ><b><span style="font-size: 12pt; color: rgb(255, 0, 0);">The Burning Cursade!</span></b></td></tr>
           	        <tr>
           	          <td align="left" >Das Konsortium</td>
           	          <td align="left"><select name="933" id="933">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Das Violette Auge</td>
           	          <td align="left"><select name="967" id="967">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Die Todeshoerigen</td>
           	          <td align="left"><select name="1012" id="1012">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Die Waechter der Sande</td>
           	          <td align="left"><select name="990" id="990">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Ehrenfeste</td>
           	          <td align="left"><select name="946" id="946">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Expedition des Cenarius</td>
           	          <td align="left"><select name="942" id="942">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Hueter der Zeit</td>
           	          <td align="left"><select name="989" id="989">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Kurenai</td>
           	          <td align="left"><select name="978" id="978">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Netherschwingen</td>
           	          <td align="left"><select name="1015" id="1050">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Ogrila</td>
           	          <td align="left"><select name="1038" id="1038">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Sporeggar</td>
           	          <td align="left"><select name="970" id="970">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>
           	        <tr>
           	          <td align="left" >Thrallmar</td>
           	          <td align="left"><select name="947" id="947">
           	            <option>Freundlich</option>
           	            <option>Wohlwollend</option>
           	            <option>Respektvoll</option>
           	            <option>Ehrf&uuml;rchtig</option>
           	            <option selected="selected">keinen Ruf</option>
         	            </select></td>
         	          </tr>

					  <tr><td colspan="2">Bei Problemen meldet euch Ingame oder im Forum </td>
					  </table>
					  <center>
					  <input type="hidden" name="Session" value="<?php $id = session_id(); echo $id;?>">

					  <input type="button" onClick="daten();" value="Abschicken">
					 
					 
					 <script type="text/javascript">
					 //Das hier darf nicht verändert werden!
					 var text="<div name='aldi'><br> Copyright <a href='http://www.gaef-clan.de/'>-=GAEF=-Aldi</a> und <a href='http://der-mitrilorden.de/'>CRANX</a><br></div>";
					 
					 //Funktion zum ausgeben des Copyrights
					 copyright(text);
					
					 
					 
					 </script>
					 
					 


					  </center>
					  </form>
</center>


<!--Copyright www.gaef-clan.de/created by Aldi-->

