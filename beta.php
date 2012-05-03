
<?php
//Script by Aldi
//ich weiß ist nicht schön funktioniert auch noch nicht ganz aber ist ein anfang

include ("check.php");
function getcharacter ($link){
$array2 = file($link);
$u = 0;
for ($i = 0; $i < 1300; $i++){

	$rgw[$i] = strstr($array2[$i], "?i=");

	$rgw2 = sscanf ($rgw[$i], '?i=%s\"',$blub);
	if ($blub == ""){
	
	
	}else{
	
		$id = strtr($blub, '"', " ");
			if($idlist[$u] == ""){
				$idlist[$u] = $id;
				$u++;
			}
		
			if ($idlist[$u-1] == $id){

			}else if ($idlist[$u-1] != $id){
				$idlist[$u] = $id;
				$u++;
			}
		}
		

}  


$anzelm = $u;

while($a < 1000){
	for ($u = 0; $u <= $anzelm; $u++){
		if ($idlist[$u-1] == $idlist[$u]){
		$idlist[$u] = $idlist[$u+1];
	
		}else{
	

		}
	}
	$a++;
}


return $idlist;

}



function backup (){
include ("check.php");
	# name of the local dumpfile; not important
$ftp_localfile = "./backup/backup.sql";
unlink($ftp_localfile);

# which http host to connect to
# secret to be sent via GET; must be identical to $secret in sql_back.php
$http_secret = "as";

# which mysql host to connect to; must be running 3.23.20 or newer
$mysql_hostname = $server;
# which mysql username to use
$mysql_username = $db_user;
# password for the mysql user
$mysql_password = $db_pass;
# which database to synchronize
$mysql_database = $database;

// echoes a proper html page with the error message before dying
function die_nice($string) {
  die('<html><head><title>Error</title></head><body>'.
    '<p style="color: red; font-size: large; text-align: center;">'.
    $string.
    '</p></body></html>');
}

// returns the table structure and data as a string
function dump_table($table) {
  mysql_query("LOCK TABLE $table WRITE") or die_nice("DUMP_TABLE: Could not lock table $table - ".mysql_error());

  $temp = mysql_fetch_assoc(mysql_query("SHOW CREATE TABLE $table")) or die_nice("DUMP_TABLE: SHOW CREATE TABLE $table failed - ".mysql_error());
  $dump = "DROP TABLE IF EXISTS $table;\n".str_replace("\n", "", $temp['Create Table']).";\n\n";
  
  $result = mysql_query("SELECT * FROM $table") or die_nice("DUMP_TABLE: SELECT * FROM $table failed - ".mysql_error());

  while ($row = mysql_fetch_assoc($result)) {
    $fields = "(";
    $values = "(";
    
    foreach ($row as $key => $value) {
      $fields .= mysql_escape_string($key).", ";
      $values .= "'".mysql_escape_string($value)."', "; // what about NULL ?
    }
    
    $fields = substr($fields, 0, -2).")";
    $values = substr($values, 0, -2).")";

    $dump .= "INSERT INTO $table $fields VALUES $values;\n";
  }
  
  mysql_query("UNLOCK TABLES") or die_nice("DUMP_TABLE: Could not unlock table $table - ".mysql_error());
  return $dump."\n";
}

set_time_limit(300);

// generate mysqldump
$dumpfile = fopen($ftp_localfile, 'w') or die_nice("DUMP: Could not open $ftp_localfile");

$mysql = mysql_connect($mysql_hostname, $mysql_username, $mysql_password) or die_nice("DUMP: Could not connect to $mysql_hostname - ".mysql_error());
mysql_select_db($mysql_database) or die_nice("DUMP: Could not select database $mysql_database - ".mysql_error());

$result_a = mysql_query("SHOW TABLES") or die_nice("DUMP: Could not list tables from $mysql_database - ".mysql_error());
while ($row_a = mysql_fetch_row($result_a)) {
  fwrite($dumpfile, dump_table($row_a[0])) or die_nice("DUMP: Could not write to file $ftp_localfile");
}
fclose($dumpfile) or die_nice("DUMP: Could not close $ftp_localfile");

// connect to server via ftp, upload the file

?>

<html><head><title>Success</title></head><body>
<p style="color: green; font-size: large; text-align: center;">
Everything went fine, you may close this window !
</p></body></html>

<?php
}

function import(){

include ("check.php");
	# name of the local dumpfile; not important


# which mysql host to connect to; must be running 3.23.20 or newer
$mysql_hostname = $server;
# which mysql username to use
$mysql_username = $db_user;
# password for the mysql user
$mysql_password = $db_pass;
# which database to synchronize
$mysql_database = $database;

# secret that is expected to be sent via GET; must be identical to $http_secret in sql_front.php
$secret = "as";
# name of the dumpfile; must be identical to $ftp_remotefile in sql_front.php
$filename = "./backup/backup.sql";

set_time_limit(300);
//modified drop database
mysql_query('drop database '.$database.'');
mysql_query('create database '.$database.'') or die('Erstellen der DB fehlgeschlagen');
// look for file

if (!is_readable($filename)) die("$filename not found");

// read file into database
$mysql = mysql_connect($mysql_hostname, $mysql_username, $mysql_password) or die("Could not connect to $mysql_hostname - ".mysql_error());
mysql_select_db($mysql_database) or die("Could not select database $mysql_database - ".mysql_error());

$dump = file($filename) or die("Could not read file $filename");
foreach ($dump as $data) {
  if (strlen($data) > 1) mysql_query(substr($data, 0, -1)) or die("Could not exec $data - ".mysql_error());
}

// delete file
//unlink($filename) or die("Could not delete $filename");

echo "<blink>Done, backup imported!</blink>";


}

?>






