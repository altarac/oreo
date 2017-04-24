

var questions = [
{
	id : 1,
	grade : 9,
	chapter : 'TBD',
	type : 'mc',
	text : 'Solve for x. $$2+x=4$$',
	options : [1,2,3,4],
	solution : 2,
	hint : "https://youtu.be/Qyd_v3DGzTM",
	img : "none",
	

},
{
	id : 2,
	grade : 9,
	type : 'mc',
	chapter : 'TBD',
	text : 'Solve for x. $$3+x=5$$',
	options : [1,2,3,4],
	solution : 2,
	hint : "https://youtu.be/Qyd_v3DGzTM",
	img : 'none',
	

},
{
	id : 3,
	grade : 10,
	type : 'tf',
	chapter : 'TBD',
	text : 'Are the following triangles similar?',
	options : ['True', 'False'],
	solution : 'True',
	hint : "https://youtu.be/Qyd_v3DGzTM",
	img : "http://www.onemathematicalcat.org/Math/Geometry_obj/graphics/no_AA_cong.png",
	

},
{
	id : 4,
	grade : 9,
	type : 'mc',
	chapter : 'TBD',
	text : 'Solve for x. $$2x=10$$',
	options : [1,5,3,'\\(x+1\\)'],
	solution : 5,
	hint : 'http://www.google.com',
	img : 'none',
	

},
{
	id : 5,
	grade : 8,
	type : 'mc',
	chapter : 'TBD',
	text : 'What does the following video show? <br> <iframe width="100%" height="315" src="https://www.youtube.com/embed/euVQBt3DUw4" frameborder="0" allowfullscreen></iframe>',
	options : ['The bisectors of chords in a circle intersect at the center','The center of a circle bisects chords in the circle','A line crossing a chord and the center of a circle always form a 90 degree angle','All of the above'],
	solution : 'The bisectors of chords in a circle intersect at the center',
	hint : 'http://www.google.com',
	img : 'none',
	

},
{
	id : 6,
	grade : 9,
	type : 'mc',
	chapter : 'TBD',
	text : 'Solve for x. $$2x=10$$',
	options : [1,5,3,'\\(x+1\\)'],
	solution : 5,
	hint : 'http://www.google.com',
	img : 'none',
	

},


<?php

$host = "localhost";
$user = "root";
$pass = "root";

mysql_connect($host, $user, $pass);
mysql_select_db('oreodb');



$select =  "SELECT * FROM bank";


$s = mysql_query($select);

while ($d = mysql_fetch_assoc($s)) {
	echo '{id: ' . $d['id'] . ',';
	echo 'grade: ' . $d['grade'] . ',';
	echo 'type: ' .'"'. $d['type'] .'"'. ',';
	echo 'chapter: ' .'"'. $d['chapter'] .'"'. ',';
	echo 'text: ' .'"'. $d['text'] .'"'. ',';
	echo 'options: ' . $d['options'] . ',';
	echo 'solution: ' . $d['solution'] . ',';
	echo 'hint: ' .'"'. $d['hint'] .'"'. ',';
	echo 'img: ' .'"'. $d['img'] .'"'. ',';
	echo '},';
	

}


?>






];






































