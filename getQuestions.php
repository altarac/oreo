<?php
$host = "localhost";
$user = "root";
$pass = "root";

mysql_connect($host, $user, $pass);
mysql_select_db('oreodb');



$select =  "SELECT * FROM bank";


$s = mysql_query($select);

while ($d = mysql_fetch_assoc($s)) {
	return json_encode($d);
}






?>