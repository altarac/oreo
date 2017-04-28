<?php
$host = "localhost";
$user = "root";
$pass = "root";

mysql_connect($host, $user, $pass);
mysql_select_db('oreodb');


$questionText = $_POST['questionText'];
$choice = $_POST['choice'];
$solutionA = $_POST['solutionA'];
$solutionB = $_POST['solutionB'];
$solutionC = $_POST['solutionC'];
$solutionD = $_POST['solutionD'];
$grade = $_POST['grade'];

$options = '['. $solutionA . ',' . $solutionB . ',' . $solutionC . ',' . $solutionD . ']';

// echo $options;

// echo $questionText . ' ' . $choice . ' ' . $solutionA . ' ' . $solutionB . ' ' . $solutionC . ' ' . $solutionD;

$in = "INSERT INTO bank (type, text, options, solution, chapter, img, grade) VALUES ('mc', '$questionText', '$options', '$choice', 'TBD', 'none', $grade)";

mysql_query($in);






?>