<?php

$_SESSION['reload']='false';


?>



<title><?php echo $servername; ?> - Chartransfer </title>

<script type="text/javascript" src="http://www.gaef-clan.de/aldi/js/check.js">
</script>
<script src="http://www.wowhead.com/widgets/power.js" type="text/javascript">
</script>


<!--Version 2.4 by Matthias A. (-=GAEF=-Aldi)-->

<center>
<!-- do not google_ads delete-->
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
</script>
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
</script>
<!---------------------------------------------------------------->

<?php
$settings = mysql_query("select * from settings")or die (mysql_error());
$rgw = mysql_fetch_array($settings);
if($rgw[1] == 1){
echo '<h3>Automatic Script</h3>

<a href="index.php?site=auto"><button>Automatic Script</button></a>';
}

if($rgw[0] == 1){
echo '<h3>Adminpanel</h3>
<a href="index.php?site=gm"><button>Admin</button></a>';
}
?>
<h1><?php echo $title; ?><h1></center>
<table border="1" align="center">
<tr><td colspan="2"><?php echo $a; ?></td></tr>
<tr><td><?php echo $general; ?></td><td></td></tr>
<form name="chartrans" action="index.php?site=auswertung" method="POST" enctype="multipart/form-data" >
<tr><td ><?php echo $accountname; ?>:</td><td><input type="text" name="Accountname" size="25"></td></tr>
<tr><td ><?php echo $charactern; ?>:</td><td><input type="text" name="Charactername" size="25"></td></tr>
<tr><td ><?php echo $server_old; ?>:</td><td><input type="text" name="Server" size="25"></td></tr>
<tr><td ><?php echo $server_link; ?>:</td><td><input type="text" name="Link" value="http://" size="25"></td></tr>
<tr><td ><?php echo $amory_link;?>:</td><td><input type="text" name="Amory" value="http://" size="25"></td></tr>
<tr><td colspan="2" ><?php echo $screenshots; ?>!</td></tr>
<tr><td ><?php echo $downloadlin; ?>:</td><td><input type="file" name="Download" size="25"></td></tr>																																																																																										<!--Matthias A.-->
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
<tr><td><?php echo $cold_weather; ?></td><td><input type="checkbox" value="1" name="Cold_weather"></td></tr>
<tr><td><?php echo $licens; ?></td><td><input type="checkbox" value="1" name="licens"></td></tr>
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
						  
						  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
						  
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td><?php echo $cooking; ?></td><td><input type="text" name="Kochen" size="3" value="0"></td></tr>
<tr><td><?php echo $phishing; ?></td><td><input type="text" name="Angeln" size="3" value="0"></td></tr>
<tr><td><?php echo $first_aid;?></td><td><input type="text" size="3" name="Erstehilfe" value="0"></td></tr>
<tr><td><?php echo $Archaeology;?></td><td><input type="text" size="3" name="Archäologie" value="0"></td></tr>
<tr><td><?php echo $items;?></td><td>&nbsp;</td></tr>
<tr><!--Dieser Teil des Codes stammt von wow4friends.de er wurde minimal angepasst bzw verändert-->
                                        <td></a>Tapferkeitspunkte</td>
                                        <td ><input type="text" size="3" name="Tapferkeitspunkte" value="0" maxlength="3"></td>

                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/currency=396" target="_blank"><img height="15" width="15" src="Bilder/Currency/Emblem_of_Valor.jpg"></a> Emblem der Ehre</td>
                                        <td ><input type="text" size="3" name="EmEhre" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=45624" target="_blank"><img height="15" width="15" src="Bilder/Currency/Emblem_of_Conquest.jpg"></a> Emblem der Eroberung</td>

                                        <td ><input type="text" size="3" name="EmEroberung" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=49426" target="_blank"><img height="15" width="15" src="Bilder/Currency/Emblem_of_Frost.jpg"></a> Emblem des Frosts</td>
                                        <td ><input type="text" size="3" name="EmFrosts" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=40752" target="_blank"><img height="15" width="15" src="Bilder/Currency/Emblem_of_Heroism.jpg"></a> Emblem des Heldentums</td>

                                        <td><input type="text" size="3" name="EmHeldentums" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=47241" target="_blank"><img height="15" width="15" src="Bilder/Currency/Emblem_of_Triumph.jpg"></a> Emblem des Triumphs</td>
                                        <td ><input type="text" size="3" name="EmTriumphs" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=43228" target="_blank"><img height="15" width="15" src="Bilder/Currency/Stone_Keepers_Shard.jpg"></a> Splitter eines Steinbewahrers</td>

                                        <td ><input type="text" size="3" name="SpSteinbewahrers" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=47395" target="_blank"><img height="15" width="15" src="Bilder/Currency/Isle_of_Conquest_Mark_of_Honor.jpg"></a> Ehrenabzeichen der Insel der Eroberung</td>
                                        <td ><input type="text" size="3" name="EhrenabzeichenEroberung" value="0" maxlength="3"></td>
                                </tr>
                              
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=42425" target="_blank"><img height="15" width="15" src="Bilder/Currency/Strand_of_the_Ancients_Mark_of_Honor.jpg"></a> Ehrenabzeichen vom Strand der Uralten</td>

                                        <td ><input type="text" size="3" name="EhrenabzeichenUralten" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=43589" target="_blank"><img height="15" width="15" src="Bilder/Currency/Wintergrasp_Mark_of_Honor.jpg"></a> Ehrenabzeichen von Tausendwinter</td>
                                        <td ><input type="text" size="3" name="EhrenabzeichenTausendwinter" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=41596" target="_blank"><img height="15" width="15" src="Bilder/Currency/Dalaran_Jewelcrafters_Token.jpg"></a> Juwelierssymbol von Dalaran</td>

                                        <td ><input type="text" size="3" name="JuwelierssymbolDalaran" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=43016" target="_blank"><img height="15" width="15" src="Bilder/Currency/Dalaran_Cooking_Award.jpg"></a> Kochpreis von Dalaran</td>
                                        <td ><input type="text" size="3" name="KochpreisDalaran" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=37836" target="_blank"><img height="15" width="15" src="Bilder/Currency/Venture_Coin.jpg"></a> M&uuml;nze der Venture Co.</td>

                                        <td ><input type="text" size="3" name="MuenzeVenture_Co" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td><a href="http://de.wowhead.com/item=44990" target="_blank"><img height="15" width="15" src="Bilder/Currency/Champions_Seal.jpg"></a> Siegel des Champions</td>
                                        <td ><input type="text" size="3" name="SiegelChampions" value="0" maxlength="3"></td>
                                </tr>
                                <tr>
                                        <td>Arenapunkte</td>

                                        <td ><input type="text" size="3" name="Arenapunkte" value="0" maxlength="4"></td>
                                </tr>
                                <tr>
                                        <td>Ehrenpunkte</td>
                                        <td ><input type="text" size="3" name="Ehrenpunkte" value="0" maxlength="5"></td>
                                </tr>
								<!--Ende des wow4friendscodes-->


<tr><td><?php echo $head;?></td><td><input type="text" name="Kopf" value="0" size="3"></td></tr>
<tr><td><?php echo $neck;?>:</td><td><input type="text" name="Hals" value="0" size="3"></td></tr>
<tr><td><?php echo $shoulder?></td><td><input type="text" name="Schulter" value="0" size="3"></td></tr>
<tr><td><?php echo $back;?></td><td><input type="text" value="0" name="Ruecken" size="3"></td></tr>
<tr><td><?php echo $front;?></td><td><input type="text" name="Brust" value="0" size="3"></td></tr>
<tr><td><?php echo $skirt;?></td><td><input type="text" value="0" name="Wappenrock" size="3"></td></tr>
<tr><td><?php echo $hand1;?></td><td><input type="text" value="0" name="Handgelenke" size="3"></td></tr>
<tr><td><?php echo $hand2;?></td><td><input type="text" value="0" name="Haende" size="3"></td></tr>
<tr><td><?php echo $waist?></td><td><input type="text" value="0" name="Taille" size="3"></td></tr>
<tr><td><?php echo $foot; ?></td><td><input type="text" value="0" name="Beine" size="3"></td></tr>
<tr><td><?php echo $boots;?></td><td><input type="text" value="0" name="Fuesse" size="3"></td></tr>
<tr><td><?php echo $ring1;?></td><td><input type="text" value="0" name="Ring1" size="3"></td></tr>
<tr><td><?php echo $ring2;?></td><td><input type="text" value="0" name="Ring2" size="3"></td></tr>
<tr><td><?php echo $trinket1;?></td><td><input type="text" value="0" name="Schmuck1" size="3"></td></tr>
<tr><td><?php echo $trinket2;?></td><td><input type="text" value="0" name="Schmuck2" size="3"></td></tr>
<tr><td><?php echo $mainhand;?></td><td><input type="text" value="0" name="Waffenhand" size="3"></td></tr>
<tr><td><?php echo $secondhand;?></td><td><input type="text" value="0"  name="Nebenhand" size="3"></td></tr>
<tr><td><?php echo $other;?></td><td><input type="text" name="Distanzwaffe" value="0" size="3"></td></tr>
<tr><td><?php echo $random_items;?></td><td></td></tr>
<tr><td><b><?php echo $id;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <?php echo $count; ?></b></td><td></td></tr>
<tr><td><input type="text" name="Ri1" size="3" value="0"><input type="text" name="Ri1a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri2" size="3" value="0"><input type="text" name="Ri2a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri3" size="3" value="0"><input type="text" name="Ri3a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri4" size="3" value="0"><input type="text" name="Ri4a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri5" size="3" value="0"><input type="text" name="Ri5a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri6" size="3" value="0"><input type="text" name="Ri6a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri7" size="3" value="0"><input type="text" name="Ri7a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri8" size="3" value="0"><input type="text" name="Ri8a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri9" size="3" value="0"><input type="text" name="Ri9a" value="0" size="3"></td><td></td></tr>
<tr><td><input type="text" name="Ri10" size="3" value="0"><input type="text" name="Ri10a" value="0" size="3"></td><td></td></tr>
<tr><th colspan="2" ><img src="Bilder/Currency/icon_wotlk.png"> <b>Wrath of the Lichking </b></th></tr>
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
<tr><th colspan="2"><img height="20" width="25" src="Bilder/Currency/icon_allianz.png">Allianz Fraktionen</th></tr>
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
<tr><th colspan="2"><img height="30" width="30" src="Bilder/Currency/icon_horde.png">Horde Fraktionen</th></tr>
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
					<tr>
					<th colspan="2"><img src="Bilder/Currency/icon_tbc.png">&nbsp;<b>The Burning Crusade</th>
					</tr>
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

					  <tr><td colspan="2"><?php echo $question; ?> </td>
					  </table>
					  <center>
					  <input type="hidden" name="Session" value="<?php $id = session_id(); echo $id;?>">

					  <input type="button" onClick="daten();" value="Transfer">
					 
					 
					 <script type="text/javascript">
					 //You are not allowed to modify or delete this
					 var text="<div name='aldi'><br> Copyright <a href='http://www.gaef-clan.de/'>-=GAEF=-Aldi</a> und <a href='http://der-mitrilorden.de/'>CRANX</a><br></div>";
					 
					 
					 copyright(text);
					
					 //End
					 
					 </script>
							<noscript><h1><font color="red">You need Javascript</font></h1></noscript>
					 </form>
					  
					  </center>
					  
					  















<!--Copyright www.gaef-clan.de created by Aldi-->

