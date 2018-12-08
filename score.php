<?php
include 'config.php';
mysqli_select_db($conn, 'finalexam');
$i = 1;
$score = 0;
while ($i < 11)
{
	
	$ans = $_POST[''.$i];
	$answer = $_POST['ans'.$i];
	if ($ans == $answer) $score++;
	$i++;
}
echo "You received a score of ";
echo $score;
echo ", which is ";
echo $score * 10;
echo "%.";

?>