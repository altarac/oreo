<?php
$host = "localhost";
$user = "root";
$pass = "root";

mysql_connect($host, $user, $pass);
mysql_select_db('oreodb');

$numRequested = $_POST["questionId"];

function getQuestions($a) {
      return "SELECT * FROM bank WHERE id IN (".implode(',',$a).")";
     };



$q = getQuestions($numRequested);

$s = mysql_query($q);

while ($d = mysql_fetch_assoc($s)) {
	echo json_encode($d);
}






?>