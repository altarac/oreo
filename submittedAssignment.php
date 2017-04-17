<?php

$host = "localhost";
$user = "root";
$pass = "root";

mysql_connect($host, $user, $pass);
mysql_select_db('oreodb');


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$grade = $_POST['grade'];
$courseCode = $_POST['courseCode'];

$in = "INSERT INTO submittedAssignment (fname, lname, groupName, grade, attempts) VALUES ('$fname', '$lname', '$courseCode', '$grade', 1)";

mysql_query($in);








?>