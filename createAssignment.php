<?php
$host = "localhost";
$user = "root";
$pass = "root";

mysql_connect($host, $user, $pass);
mysql_select_db('oreodb');


$qid = implode(',',$_POST['questions']);
$groups = $_POST['groups'];
$title = $_POST['title'];

$in = "INSERT INTO assignmentsTable (groups, title, questionsToDo) VALUES ('$groups', '$title', '$qid')";

mysql_query($in);

// echo $qid[0] . ' ' . $qid[1];



?>