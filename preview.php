<?php


if($_SESSION['reload']=='true') 
{echo 'No Reloading
<a href="javascript:history.back();"> BACK </a>
';exit;}

?>
<script src="http://www.wowhead.com/widgets/power.js" type="text/javascript">
</script>
<h1>Your Items (Mouseover the link)</h1><table border="1">
	<tr><td>Item</td><td>Anzahl</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Kopf.'" target="_blank">Kopf</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Hals.'" target="_blank">Hals</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Schulter.'" target="_blank">Schultern</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Ruecken.'" target="_blank">R&uuml;cken</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Brust.'" target="_blank">Brust</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Wappenrock.'" target="_blank">Wappenrock</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Haende.'" target="_blank">H&auml;nde</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Handgelenke.'" target="_blank">Handgelenke</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Taille.'" target="_blank">Taille</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Beine.'" target="_blank">Beine</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Fuesse.'" target="_blank">Schuhe</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Ring1.'" target="_blank">Ring1</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Ring2.'" target="_blank">Ring2</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Schmuck1.'" target="_blank">Schmuck1</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Schmuck2.'" target="_blank">Schmuck2</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Waffenhand.'" target="_blank">Waffenhand</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Nebenhand.'" target="_blank">Nebenhand</a><td>1</td>
	<tr><td><a href="http://de.wowhead.com/item='.$Distanzwaffe.'" target="_blank">Distanzwaffe</a><td>1</td>





</table>
<?php
//Account
$Accountname=$_POST['Accountname'];
$Charactername=$_POST['Charactername'];
$Server=$_POST['Server'];
$Link=$_POST['Link'];
$Amory=$_POST['Amory'];
	//security schutz vor iframes oder ähnlichen
	if((strstr($Accountname, "<")!=false) ||(strstr($Accountname, ">")!=false)){
		echo"Security, Script stopping";
		exit(1);
	}
		if((strstr($Charactername, "<")!=false) ||(strstr($Charactername, ">")!=false)){
		echo"Security, Script stopping";
		exit(1);
	}
		if((strstr($Server, "<")!=false) ||(strstr($Server, ">")!=false)){
		echo"Security, Script stopping";
		exit(1);
	}
		if((strstr($Link, "<")!=false) ||(strstr($Link, ">")!=false)){
		echo"Security, Script stopping";
		exit(1);
	}
		if((strstr($Amory, "<")!=false) ||(strstr($Amory, ">")!=false)){
		echo"Security, Script stopping";
		exit(1);
	}


//Screen
/*$Download=$_POST['Download'];

	if((strstr($Download, "<")!=false) ||(strstr($Download, ">")!=false)){
		echo"Security, Script stopping";
		exit(1);
	}
*/
If((strstr($_FILES['Download']['name'], ".rar") ==true)){

	move_uploaded_file($_FILES['Download']['tmp_name'], "upload/".$Accountname."_".$Charactername.".rar");
	$Download = "./upload/".$Accountname."_".$Charactername.".rar";

}else if(strstr($_FILES['Download']['name'], ".zip") == true){


	move_uploaded_file($_FILES['Download']['tmp_name'], "upload/".$Accountname."_".$Charactername.".zip");
	$Download = "./upload/".$Accountname."_".$Charactername.".zip";

}else{
	echo "<center>Invalid File......</center>";
	
	move_uploaded_file($_FILES['Download']['tmp_name'], "upload/".$_FILES['Download']['name']."");
		$Download = "./upload/".$_FILES['Download']['name']."";

}


//Charinfo
$Level=$_POST['Level'];
$Gold=$_POST['Gold'];
$Reiten=$_POST['Reiten'];
$Cold_weather = $_POST["Cold_weather"];
	if($Cold_weather == 1){
		$Cold_weather = "54197";
	
	}else{
	$Cold_weather =0;
	}
$Mount_boden=$_POST['Mount_boden'];
$Mount_flug=$_POST['Mount_flug'];

//Beruf1
$Beruf1=$_POST['Beruf1'];
$Beruf1_skill=$_POST['Beruf1_skill'];
//Beruf2
$Beruf2=$_POST['Beruf2'];
$Beruf2_skill=$_POST['Beruf2_skill'];

//Sonstige Berufe
$Kochen=$_POST['Kochen'];
$Angeln=$_POST['Angeln'];
$Erstehilfe=$_POST['Erstehilfe'];

//Embleme usw

$AbGerechtigkeit=$_POST['AbGerechtigkeit'];
$EmEhre=$_POST['EmEhre'];
$EmEroberung=$_POST['EmEroberung'];
$EmFrosts=$_POST['EmFrosts'];

$EmHeldentums=$_POST['EmHeldentums'];
$EmTriumphs=$_POST['EmTriumphs'];
$SpSteinbewahrers=$_POST['SpSteinbewahrers'];
$EhrenabzeichenEroberung=$_POST['EhrenabzeichenEroberung'];
$EhrenabzeichenUralten=$_POST['EhrenabzeichenUralten'];
$EhrenabzeichenTausendwinter=$_POST['EhrenabzeichenTausendwinter'];
$JuwelierssymbolDalaran=$_POST['JuwelierssymbolDalaran'];
$KochpreisDalaran=$_POST['KochpreisDalaran'];
$MuenzeVenture_Co=$_POST['MuenzeVenture_Co'];
$SiegelChampions=$_POST['SiegelChampions'];
$Arenapunkte=$_POST['Arenapunkte'];
$Ehrenpunkte=$_POST['Ehrenpunkte'];

//Equip 
$Kopf=$_POST['Kopf'];
$Hals=$_POST['Hals'];
$Schulter=$_POST['Schulter'];
$Ruecken=$_POST['Ruecken'];
$Brust=$_POST['Brust'];
$Wappenrock=$_POST['Wappenrock'];
$Handgelenke=$_POST['Handgelenke'];
$Haende=$_POST['Haende'];
$Taille=$_POST['Taille'];
$Beine=$_POST['Beine'];
$Fuesse=$_POST['Fuesse'];
$Ring1=$_POST['Ring1'];
$Ring2=$_POST['Ring2'];
$Schmuck1=$_POST['Schmuck1'];
$Schmuck2=$_POST['Schmuck2'];
$Waffenhand=$_POST['Waffenhand'];
$Nebenhand=$_POST['Nebenhand'];
$Distanzwaffe=$_POST['Distanzwaffe'];
//Random items ID
$Ri1=$_POST['Ri1'];
$Ri2=$_POST['Ri2'];
$Ri3=$_POST['Ri3'];
$Ri4=$_POST['Ri4'];
$Ri5=$_POST['Ri5'];
$Ri6=$_POST['Ri6'];
$Ri7=$_POST['Ri7'];
$Ri8=$_POST['Ri8'];
$Ri9=$_POST['Ri9'];
$Ri10=$_POST['Ri10'];
//Random items Anz
$Ri1a=$_POST['Ri1a'];
$Ri2a=$_POST['Ri2a'];
$Ri3a=$_POST['Ri3a'];
$Ri4a=$_POST['Ri4a'];
$Ri5a=$_POST['Ri5a'];
$Ri6a=$_POST['Ri6a'];
$Ri7a=$_POST['Ri7a'];
$Ri8a=$_POST['Ri8a'];
$Ri9a=$_POST['Ri9a'];
$Ri10a=$_POST['Ri10a'];
//Ruf
$Argentumkreuzung=$_POST['1106'];
//String durch Zahl ersetzen
switch($Argentumkreuzung){
						case "keinen Ruf": $Argentumkreuzung = "0"; break;
						case "Ehrfürchtig": $Argentumkreuzung = "99999"; break;
						case "Freundlich": $Argentumkreuzung = "6001";; break;
						case "Wohlwollend": $Argentumkreuzung ="12001";; break;
						case "Respektvoll": $Argentumkreuzung = "21000";; break;
						default: $value = "0"; break;
					}

$Der_Silberbund=$_POST['1094'];
switch($Der_Silberbund){
						case "keinen Ruf": $Der_Silberbund = "0"; break;
						case "Ehrfürchtig": $Der_Silberbund = "99999"; break;
						case "Freundlich":  $Der_Silberbund = "6001"; break;
						case "Wohlwollend": $Der_Silberbund ="12001"; break;
						case "Respektvoll": $Der_Silberbund = "21000"; break;
						default: $value = "0"; break;
					}

$Der_Wyrmruhpakt=$_POST['1091'];
switch($Der_Wyrmruhpakt){
						case "keinen Ruf": $Der_Wyrmruhpakt = "0"; break;
						case "Ehrfürchtig": $Der_Wyrmruhpakt = "99999"; break;
						case "Freundlich": $Der_Wyrmruhpakt = "6001"; break;
						case "Wohlwollend": $Der_Wyrmruhpakt ="12001"; break;
						case "Respektvoll": $Der_Wyrmruhpakt = "21000"; break;
						default: $value = "0"; break;
					}

$Die_Frosterben=$_POST['1126'];
switch($Die_Frosterben){
						case "keinen Ruf": $Die_Frosterben = "0"; break;
						case "Ehrfürchtig": $Die_Frosterben = "99999"; break;
						case "Freundlich": $Die_Frosterben = "6001"; break;
						case "Wohlwollend": $Die_Frosterben ="12001"; break;
						case "Respektvoll": $Die_Frosterben = "21000"; break;
						default: $value = "0"; break;
					}

$Die_Hand_der_Rache=$_POST['1067'];
switch($Die_Hand_der_Rache){
						case "keinen Ruf": $Die_Hand_der_Rache = "0"; break;
						case "Ehrfürchtig": $Die_Hand_der_Rache = "99999"; break;
						case "Freundlich": $Die_Hand_der_Rache = "6001"; break;
						case "Wohlwollend": $Die_Hand_der_Rache ="12001"; break;
						case "Respektvoll": $Die_Hand_der_Rache = "21000"; break;
						default: $value = "0"; break;
					}

$Die_Kalu_ak=$_POST['1073'];
switch($Die_Kalu_ak){
						case "keinen Ruf": $Die_Kalu_ak = "0"; break;
						case "Ehrfürchtig": $Die_Kalu_ak = "99999"; break;
						case "Freundlich": $Die_Kalu_ak = "6001"; break;
						case "Wohlwollend": $Die_Kalu_ak ="12001"; break;
						case "Respektvoll": $Die_Kalu_ak = "21000"; break;
						default: $value = "0"; break;
					}
$Die_Orakel=$_POST['1105'];
switch($Die_Orakel){
						case "keinen Ruf": $Die_Orakel = "0"; break;
						case "Ehrfürchtig": $Die_Orakel = "99999"; break;
						case "Freundlich": $Die_Orakel = "6001"; break;
						case "Wohlwollend": $Die_Orakel ="12001"; break;
						case "Respektvoll": $Die_Orakel = "21000"; break;
						default: $value = "0"; break;
					}
$Die_Soehne_Hodir=$_POST['1119'];
switch($Die_Soehne_Hodir){
						case "keinen Ruf": $Die_Soehne_Hodir = "0"; break;
						case "Ehrfürchtig": $Die_Soehne_Hodir = "99999"; break;
						case "Freundlich": $Die_Soehne_Hodir = "6001"; break;
						case "Wohlwollend": $Die_Soehne_Hodir ="12001"; break;
						case "Respektvoll": $Die_Soehne_Hodir= "21000"; break;
						default: $value = "0"; break;
					}
$Die_Sonnenhaescher=$_POST['1124'];
switch($Die_Sonnenhaescher){
						case "keinen Ruf": $Die_Sonnenhaescher = "0"; break;
						case "Ehrfürchtig": $Die_Sonnenhaescher = "99999"; break;
						case "Freundlich": $Die_Sonnenhaescher = "6001"; break;
						case "Wohlwollend": $Die_Sonnenhaescher ="12001"; break;
						case "Respektvoll": $Die_Sonnenhaescher = "21000"; break;
						default: $value = "0"; break;
					}
$Die_Taunka=$_POST['1064'];
switch($Die_Taunka){
						case "keinen Ruf": $Die_Taunka = "0"; break;
						case "Ehrfürchtig": $Die_Taunka = "99999"; break;
						case "Freundlich": $Die_Taunka = "6001"; break;
						case "Wohlwollend": $Die_Taunka ="12001"; break;
						case "Respektvoll": $Die_Taunka = "21000"; break;
						default: $value = "0"; break;
					}
$Expedion_der_Horde=$_POST['1052'];
switch($Expedion_der_Horde){
						case "keinen Ruf": $Expedion_der_Horde = "0"; break;
						case "Ehrfürchtig": $Expedion_der_Horde = "99999"; break;
						case "Freundlich": $Expedion_der_Horde = "6001"; break;
						case "Wohlwollend": $Expedion_der_Horde ="12001"; break;
						case "Respektvoll": $Expedion_der_Hordebreak= "21000"; break;
						default: $value = "0"; break;
					}
$Expedion_Valianz=$_POST['1050'];
switch($Expedion_Valianz){
						case "keinen Ruf": $Expedion_Valianz = "0"; break;
						case "Ehrfürchtig": $Expedion_Valianz = "99999"; break;
						case "Freundlich": $Expedion_Valianz = "6001"; break;
						case "Wohlwollend": $Expedion_Valianz ="12001"; break;
						case "Respektvoll": $Expedion_Valianz = "21000"; break;
						default: $value = "0"; break;
					}
$Forscherliga=$_POST['1068'];
switch($Forscherliga){
						case "keinen Ruf": $Forscherliga = "0"; break;
						case "Ehrfürchtig": $Forscherliga = "99999"; break;
						case "Freundlich": $Forscherliga = "6001"; break;
						case "Wohlwollend": $Forscherliga ="12001"; break;
						case "Respektvoll": $Forscherliga = "21000"; break;
						default: $value = "0"; break;
					}
$Kirin_Tor=$_POST['1090'];
switch($Kirin_Tor){
						case "keinen Ruf": $Kirin_Tor = "0"; break;
						case "Ehrfürchtig": $Kirin_Tor = "99999"; break;
						case "Freundlich": $Kirin_Tor = "6001"; break;
						case "Wohlwollend": $Kirin_Tor ="12001"; break;
						case "Respektvoll": $Kirin_Tor = "21000"; break;
						default: $value = "0"; break;
					}
$Kriegshymnenoffensive=$_POST['1085'];
switch($Kriegshymnenoffensive){
						case "keinen Ruf": $Kriegshymnenoffensive = "0"; break;
						case "Ehrfürchtig": $Kriegshymnenoffensive = "99999"; break;
						case "Freundlich": $Kriegshymnenoffensive = "6001"; break;
						case "Wohlwollend": $Kriegshymnenoffensive ="12001"; break;
						case "Respektvoll": $Kriegshymnenoffensive = "21000"; break;
						default: $value = "0"; break;
					}
$Ritter_der_schwarzen_Klinge=$_POST['1098'];
switch($Ritter_der_schwarzen_Klinge){
						case "keinen Ruf": $Ritter_der_schwarzen_Klinge = "0"; break;
						case "Ehrfürchtig": $Ritter_der_schwarzen_Klinge = "99999"; break;
						case "Freundlich": $Ritter_der_schwarzen_Klinge = "6001"; break;
						case "Wohlwollend": $Ritter_der_schwarzen_Klinge ="12001"; break;
						case "Respektvoll": $Ritter_der_schwarzen_Klinge= "21000"; break;
						default: $value = "0"; break;
					}
$Shen_dralar=$_POST['809'];
switch($Shen_dralar){
						case "keinen Ruf": $Shen_dralar = "0"; break;
						case "Ehrfürchtig": $Shen_dralar = "99999"; break;
						case "Freundlich": $Shen_dralar = "6001"; break;
						case "Wohlwollend": $Shen_dralar ="12001"; break;
						case "Respektvoll": $Shen_dralar = "21000"; break;
						default: $value = "0"; break;
					}
$Stamm_der_Wildherzen=$_POST['1104'];
switch($Stamm_der_Wildherzen){
						case "keinen Ruf": $Stamm_der_Wildherzen = "0"; break;
						case "Ehrfürchtig": $Stamm_der_Wildherzen = "99999"; break;
						case "Freundlich": $Stamm_der_Wildherzen = "6001"; break;
						case "Wohlwollend": $Stamm_der_Wildherzen ="12001"; break;
						case "Respektvoll": $Stamm_der_Wildherzen = "21000"; break;
						default: $value = "0"; break;
					}
$Vorposten_der_Allianz=$_POST['1037'];
switch($Vorposten_der_Allianz){
						case "keinen Ruf": $Vorposten_der_Allianz = "0"; break;
						case "Ehrfürchtig": $Vorposten_der_Allianz = "99999"; break;
						case "Freundlich": $Vorposten_der_Allianz = "6001"; break;
						case "Wohlwollend": $Vorposten_der_Allianz ="12001"; break;
						case "Respektvoll": $Vorposten_der_Allianz = "21000"; break;
						default: $value = "0"; break;
					}
$Sturmwind=$_POST['72'];
switch($Sturmwind){
						case "keinen Ruf": 
						$Sturmwind = "0"; break;
						case "Ehrfürchtig": 
						$Sturmwind = "99999"; break;
						case "Freundlich": 
						$Sturmwind = "6001"; break;
						case "Wohlwollend": 
						$Sturmwind ="12001"; break;
						case "Respektvoll": 
						$Sturmwind = "21000"; break;
						default: $value = "0"; break;
					}
$Die_Exodar=$_POST['930'];
switch($Die_Exodar){
						case "keinen Ruf": 
						$Die_Exodar = "0"; break;
						case "Ehrfürchtig": 
						$Die_Exodar = "99999"; break;
						case "Freundlich": 
						$Die_Exodar = "6001"; break;
						case "Wohlwollend": 
						$Die_Exodar ="12001"; break;
						case "Respektvoll": 
						$Die_Exodar = "21000"; break;
						default: $value = "0"; break;
					}
$Eisenschmiede=$_POST['47'];
switch($Eisenschmiede){
						case "keinen Ruf": 
						$Eisenschmiede = "0"; break;
						case "Ehrfürchtig": 
						$Eisenschmiede = "99999"; break;
						case "Freundlich": 
						$Eisenschmiede = "6001"; break;
						case "Wohlwollend": 
						$Eisenschmiede ="12001"; break;
						case "Respektvoll": 
						$Eisenschmiede = "21000"; break;
						default: $value = "0"; break;
					}
$Gnomeregangnome=$_POST['54'];
switch($Gnomeregangnome){
						case "keinen Ruf": 
						$Gnomeregangnome = "0"; break;
						case "Ehrfürchtig": 
						$Gnomeregangnome = "99999"; break;
						case "Freundlich": 
						$Gnomeregangnome = "6001"; break;
						case "Wohlwollend": 
						$Gnomeregangnome ="12001"; break;
						case "Respektvoll": 
						$Gnomeregangnome = "21000"; break;
						default: $value = "0"; break;
					}
$Darnassus=$_POST['69'];
switch($Darnassus){
						case "keinen Ruf": 
						$Darnassus = "0"; break;
						case "Ehrfürchtig": 
						$Darnassus = "99999"; break;
						case "Freundlich": 
						$Darnassus = "6001"; break;
						case "Wohlwollend": 
						$Darnassus ="12001"; break;
						case "Respektvoll": 
						$Darnassus = "21000"; break;
						default: $value = "0"; break;
					}
$Orgrimmar=$_POST['76'];
switch($Orgrimmar){
						case "keinen Ruf": 
						$Orgrimmar = "0"; break;
						case "Ehrfürchtig": 
						$Orgrimmar = "99999"; break;
						case "Freundlich": 
						$Orgrimmar = "6001"; break;
						case "Wohlwollend": 
						$Orgrimmar ="12001"; break;
						case "Respektvoll": 
						$Orgrimmar = "21000"; break;
						default: $value = "0"; break;
					}
$Silbermond=$_POST['911'];
switch($Silbermond){
						case "keinen Ruf": 
						$Silbermond = "0"; break;
						case "Ehrfürchtig": 
						$Silbermond = "99999"; break;
						case "Freundlich": 
						$Silbermond = "6001"; break;
						case "Wohlwollend": 
						$Silbermond ="12001"; break;
						case "Respektvoll": 
						$Silbermond = "21000"; break;
						default: $value = "0"; break;
					}
$Unterstadt=$_POST['68'];
switch($Unterstadt){
						case "keinen Ruf": 
						$Unterstadt = "0"; break;
						case "Ehrfürchtig": 
						$Unterstadt = "99999"; break;
						case "Freundlich": 
						$Unterstadt = "6001"; break;
						case "Wohlwollend": 
						$Unterstadt ="12001"; break;
						case "Respektvoll": 
						$Unterstadt = "21000"; break;
						default: $value = "0"; break;
					}
$Donnerfels=$_POST['81'];
switch($Donnerfels){
						case "keinen Ruf": 
						$Donnerfels = "0"; break;
						case "Ehrfürchtig": 
						$Donnerfels = "99999"; break;
						case "Freundlich": 
						$Donnerfels = "6001"; break;
						case "Wohlwollend": 
						$Donnerfels ="12001"; break;
						case "Respektvoll": 
						$Donnerfels = "21000"; break;
						default: $value = "0"; break;
					}
$Dunkelspeertrolle=$_POST['530'];
switch($Dunkelspeertrolle){
						case "keinen Ruf": 
						$Dunkelspeertrolle = "0"; break;
						case "Ehrfürchtig": 
						$Dunkelspeertrolle = "99999"; break;
						case "Freundlich": 
						$Dunkelspeertrolle = "6001"; break;
						case "Wohlwollend": 
						$Dunkelspeertrolle ="12001"; break;
						case "Respektvoll": 
						$Dunkelspeertrolle = "21000"; break;
						default: $value = "0"; break;
					}
$Das_Konsortium=$_POST['933'];
switch($Das_Konsortium){
						case "keinen Ruf": $Das_Konsortium = "0"; break;
						case "Ehrfürchtig":
						$Das_Konsortium = "99999"; break;
						case "Freundlich":
						$Das_Konsortium = "6001"; break;
						case "Wohlwollend":
						$Das_Konsortium ="12001"; break;
						case "Respektvoll": 
						$Das_Konsortium = "21000"; break;
						default: $value = "0"; break;
					}
$Das_Violette_Auge=$_POST['967'];
switch($Das_Violette_Auge){
						case "keinen Ruf": $Das_Violette_Auge = "0"; break;
						case "Ehrfürchtig": 
						$Das_Violette_Auge = "99999"; break;
						case "Freundlich": 
						$Das_Violette_Auge = "6001"; break;
						case "Wohlwollend": 
						$Das_Violette_Auge ="12001"; break;
						case "Respektvoll": 
						$Das_Violette_Auge = "21000"; break;
						default: $value = "0"; break;
					}
$Die_Todeshoerigen=$_POST['1012'];
switch($Die_Todeshoerigen){
						case "keinen Ruf": $Die_Todeshoerigen = "0"; break;
						case "Ehrfürchtig": 
						$Die_Todeshoerigen = "99999"; break;
						case "Freundlich": 
						$Die_Todeshoerigen = "6001"; break;
						case "Wohlwollend": 
						$Die_Todeshoerigen ="12001"; break;
						case "Respektvoll": 
						$Die_Todeshoerigen = "21000"; break;
						default: $value = "0"; break;
					}
$Die_Waechter_der_Sande=$_POST['990'];
switch($Die_Waechter_der_Sande){
						case "keinen Ruf": 
						$Die_Waechter_der_Sande = "0"; break;
						case "Ehrfürchtig": 
						$Die_Waechter_der_Sande = "99999"; break;
						case "Freundlich": 
						$Die_Waechter_der_Sande = "6001"; break;
						case "Wohlwollend": 
						$Die_Waechter_der_Sande ="12001"; break;
						case "Respektvoll": 
						$Die_Waechter_der_Sande = "21000"; break;
						default: $value = "0"; break;
					}
$Ehrenfeste=$_POST['946'];
switch($Ehrenfeste){
						case "keinen Ruf": $Ehrenfeste = "0"; break;
						case "Ehrfürchtig": $Ehrenfeste = "99999"; break;
						case "Freundlich": $Ehrenfeste = "6001"; break;
						case "Wohlwollend": $Ehrenfeste ="12001"; break;
						case "Respektvoll": $Ehrenfeste = "21000"; break;
						default: $value = "0"; break;
					}
$Expedition_des_Cenarius=$_POST['942'];
switch($Expedition_des_Cenarius){
						case "keinen Ruf":  $Expedition_des_Cenarius = "0"; break;
						case "Ehrfürchtig": 
						$Expedition_des_Cenarius = "99999"; break;
						case "Freundlich": 
						$Expedition_des_Cenarius = "6001"; break;
						case "Wohlwollend": 
						$Expedition_des_Cenarius ="12001"; break;
						case "Respektvoll": 
						$Expedition_des_Cenarius = "21000"; break;
						default: $value = "0"; break;
					}
$Hueter_der_Zeit=$_POST['989'];
switch($Hueter_der_Zeit){
						case "keinen Ruf":  $Hueter_der_Zeit = "0"; break;
						case "Ehrfürchtig": 
						$Hueter_der_Zeit = "99999"; break;
						case "Freundlich": 
						$Hueter_der_Zeit = "6001"; break;
						case "Wohlwollend": 
						$Hueter_der_Zeit ="12001"; break;
						case "Respektvoll": 
						$Hueter_der_Zeit = "21000"; break;
						default: $value = "0"; break;
					}
$Kurenai=$_POST['978'];
switch($Kurenai){
						case "keinen Ruf": $Kurenai = "0"; break;
						case "Ehrfürchtig": $Kurenai = "99999"; break;
						case "Freundlich": $Kurenai = "6001"; break;
						case "Wohlwollend": $Kurenai ="12001"; break;
						case "Respektvoll": $Kurenai = "21000"; break;
						default: $value = "0"; break;
					}
$Netherschwingen=$_POST['1015'];
switch($Netherschwingen){
						case "keinen Ruf": 
						$Netherschwingen = "0"; break;
						case "Ehrfürchtig": 
						$Netherschwingen = "99999"; break;
						case "Freundlich": 
						$Netherschwingen = "6001"; break;
						case "Wohlwollend": 
						$Netherschwingen ="12001"; break;
						case "Respektvoll": 
						$Netherschwingen = "21000"; break;
						default: $value = "0"; break;
					}
$Ogrila=$_POST['1038'];
switch($Ogrila){
						case "keinen Ruf": $Ogrila = "0"; break;
						case "Ehrfürchtig": $Ogrila = "99999"; break;
						case "Freundlich": $Ogrila = "6001"; break;
						case "Wohlwollend": $Ogrila ="12001"; break;
						case "Respektvoll": $Ogrila = "21000"; break;
						default: $value = "0"; break;
					}
$Sporeggar=$_POST['970'];
switch($Sporeggar){
						case "keinen Ruf": $Sporeggar = "0"; break;
						case "Ehrfürchtig": $Sporeggar = "99999"; break;
						case "Freundlich": $Sporeggar = "6001"; break;
						case "Wohlwollend": $Sporeggar ="12001"; break;
						case "Respektvoll": $Sporeggar = "21000"; break;
						default: $value = "0"; break;
					}
$Thrallmar=$_POST['947'];
switch($Thrallmar){
						case "keinen Ruf": $Thrallmar = "0"; break;
						case "Ehrfürchtig": $Thrallmar = "99999"; break;
						case "Freundlich": $Thrallmar = "6001"; break;
						case "Wohlwollend": $Thrallmar ="12001"; break;
						case "Respektvoll": $Thrallmar = "21000"; break;
						default: $value = "0"; break;
					}




//Datum
$zeit=getdate();
			$tag=$zeit["mday"];
			$jahr=$zeit["year"];
			$stunden=$zeit["hours"];
			$minuten=$zeit["minutes"];
			$monat=$zeit["month"];
			$wochentag=$zeit["weekday"];  
			
			switch ($wochentag)
			  {
			   case "Monday";
				 $wochentag_de="Montag";
				 break;
			   case "Tuesday";
				 $wochentag_de="Dienstag";
				 break;
			   case "Wednesday";
				 $wochentag_de="Mittwoch";
				 $break;
			   case "Thursday";
				 $wochentag_de="Donnerstag";
				 break;
			   case "Friday";
				 $wochentag_de="Freitag";
				 break;
			   case "Saturday";
				 $wochentag_de="Samstag";
				 break;
			   case "Sunday";
				 $wochentag_de="Sonntag";
				 break;
			   }
			$monat_de=$monat;
			switch ($monat)
			  {
			   case "January";
				 $monat_de="Januar";
				 break;
			   case "February";
				 $monat_de="Februar";
				 break;
			   case "March";
				 $monat_de="März";
				 break;
			   case "June";
				 $monat_de="Juni";
				 break;
			   case "July";
				 $monat_de="Juli";
				 break;
			   case "October";
				 $monat_de="Oktober";
				 break;
			   case "December";
				 $monat_de="Dezember";
				 break;
			   }  
			$datum = "$wochentag_de, $tag. $monat_de $jahr. $stunden.$minuten Uhr";


//MYSQL eintragen
$sql = "INSERT INTO formular_basis (`name`, `chara`, `server`, `serverlink`, `armorylink`, `screen`, `level`, `gold`, `reiten`, `cold_weather`, `beruf1`, `beruf1skill`, `beruf2`, `beruf2skill`, `erstehilfe`, `angeln`, `kochen`, `datum`, `gm`) VALUES ('$Accountname', '$Charactername', '$Server', '$Link', '$Amory', '$Download', '$Level', '$Gold', '$Reiten','$Cold_weather', '$Beruf1', '$Beruf1_skill', '$Beruf2', '$Beruf2_skill', '$Erstehilfe', '$Angeln', '$Kochen', '$datum', 'nicht bearbeitet')";
$result = mysql_query($sql) or die ('Incorrect Information');
$sql2 = mysql_query("SELECT `id` FROM `formular_basis` WHERE `chara` = '$Charactername' AND `server` = '$Server' ORDER BY `id` DESC LIMIT 1;");
if($res = mysql_fetch_array($sql2))
				$charid = $res['id'];


$sql3 ="INSERT INTO `formular_item` (`id`,`chara`,`kopf`,`hals`,`schulter`, `ruecken`,`brust`,`wappenrock`,`handgelenke`,`haende`,`taille`,`beine`,`fuesse`,`ring1`,`ring2`,`schmuck1`,`schmuck2`,`waffenhand`,`nebenhand`,`distanzwaffe`,`mount_b`,`mount_f`,`AbGerechtigkeit`,`EmEhre`,`EmEroberung`, `EmFrosts`,`EmHeldentums`,`EmTriumphs`,`SpSteinbewahrers`,`EhrenabzeichenEroberung`,`EhrenabzeichenUralten`,`EhrenabzeichenTausendwinter`,`JuwelierssymbolDalaran`,`KochpreisDalaran`,`MuenzeVenture_Co`,`SiegelChampions`,`Arenapunkte`,`Ehrenpunkte`)  VALUES ('$charid', '$Charactername', '$Kopf', '$Hals', '$Schulter', '$Ruecken', '$Brust', '$Wappenrock', '$Handgelenke', '$Haende', '$Taille', '$Beine', '$Fuesse', '$Ring1', '$Ring2', '$Schmuck1', '$Schmuck2', '$Waffenhand', '$Nebenhand', '$Distanzwaffe','$Mount_boden','$Mount_flug', '$AbGerechtigkeit','$EmEhre','$EmEroberung','$EmFrosts','$EmHeldentums','$EmTriumphs','$SpSteinbewahrers','$EhrenabzeichenEroberung','$EhrenabzeichenUralten' ,'$EhrenabzeichenTausendwinter','$JuwelierssymbolDalaran','$KochpreisDalaran','$MuenzeVenture_Co','$SiegelChampions','$Arenapunkte','$Ehrenpunkte')";
$err = mysql_query($sql3) or die('Es wurden nicht alle Felder ausgefuellt. Bitte nutzen sie den Zurueck Button ihres Browsers!<br>
Sollten sie Felder leerlassen fuellen sie diese bitte mit 0, danke <br>'.mysql_error());
$sql4="INSERT INTO formular_randomitem(`id`, `chara`, ri1, ri1a, ri2, ri2a, ri3, ri3a, ri4, ri4a, ri5, ri5a, ri6, ri6a, ri7, ri7a, ri8, ri8a, ri9, ri9a, ri10, ri10a) VALUES ('$charid', '$Charactername','$Ri1', '$Ri1a','$Ri2', '$Ri2a','$Ri3', '$Ri3a','$Ri4', '$Ri4a','$Ri5', '$Ri5a','$Ri6', '$Ri6a','$Ri7', '$Ri7a','$Ri8', '$Ri8a','$Ri9', '$Ri9a','$Ri10', '$Ri10a')";
$err= mysql_query($sql4) or die ('Es wurden nicht alle Felder ausgefuellt. Bitte nutzen sie den Zurueck Button ihres Browsers!<br>
Sollten sie Felder leerlassen fuellen sie diese bitte mit 0, danke <br>');
$sql5= "INSERT INTO formular_ruf (`id`, `chara`,Argentumkreuzung, Der_Silberbund, Der_Wyrmruhpakt, Die_Frosterben, Die_Hand_der_Rache, Die_Kalu_ak, Die_Orakel, Die_Soehne_Hodir, Die_Sonnenhaescher, Die_Taunka, Expedion_der_Horde, Expedion_Valianz, Forscherliga, Kirin_Tor, Kriegshymnenoffensive, Ritter_der_schwarzen_Klinge, Shen_dralar, Stamm_der_Wildherzen, Vorposten_der_Allianz, Sturmwind, Die_Exodar, Eisenschmiede, Gnomeregangnome, Darnassus, Orgrimmar, Silbermond, Unterstadt, Donnerfels, Dunkelspeertrolle, Das_Konsortium, Das_Violette_Auge, Die_Todeshoerigen, Die_Waechter_der_Sande, Ehrenfeste, Expedition_des_Cenarius, Hueter_der_Zeit, Kurenai, Netherschwingen, Ogrila, Sporeggar, Thrallmar) VALUES ('$charid', '$Charactername', '$Argentumkreuzung', '$Der_Silberbund', '$Der_Wyrmruhpakt', '$Die_Frosterben', '$Die_Hand_der_Rache', '$Die_Kalu_ak', '$Die_Orakel', '$Die_Soehne_Hodir', '$Die_Sonnenhaescher', '$Die_Taunka', '$Expedion_der_Horde', '$Expedion_Valianz', '$Forscherliga', '$Kirin_Tor', '$Kriegshymnenoffensive', '$Ritter_der_schwarzen_Klinge', '$Shen_dralar', '$Stamm_der_Wildherzen', '$Vorposten_der_Allianz', '$Sturmwind', '$Die_Exodar', '$Eisenschmiede', '$Gnomeregangnome', '$Darnassus', '$Orgrimmar', '$Silbermond', '$Unterstadt', '$Donnerfels', '$Dunkelspeertrolle', '$Das_Konsortium', '$Das_Violette_Auge', '$Die_Todeshoerigen', '$Die_Waechter_der_Sande', '$Ehrenfeste', '$Expedition_des_Cenarius', '$Hueter_der_Zeit', '$Kurenai', '$Netherschwingen', '$Ogrila', '$Sporeggar', '$Thrallmar')";
$err= mysql_query($sql5) or die ('Es wurden nicht alle Felder ausgefuellt. Bitte nutzen sie den Zurueck Button ihres Browsers!<br>
Sollten sie Felder leerlassen fuellen sie diese bitte mit 0, danke <br>');

$_SESSION['reload']='true';
?>

<html>
<head>
<title>Your ID:</title>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									<!--Copyright www.gaef-clan.de/ created by Matthias A.(Aldi)-->
</head>

<body>
<center>
<h1>Thank You</h1>
<h2>Here is your Transfer ID:
<font color="red" size="+2"><?php echo $charid; ?></font></h2>
<a href="http://www.gaef-clan.de" name="Werbung">Copyright -=GAEF=-</a></center>