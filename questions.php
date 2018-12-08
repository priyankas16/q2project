<?php
include "config.php";
mysqli_select_db($conn, 'finalexam');
         
$sql = "CREATE TABLE questions (
question VARCHAR(50) NOT NULL,
answer BOOLEAN 

)";
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer);
VALUES ('SQL stands for Structured Query Language', '1')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('PHP is a client-side scripting language', '0')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('SELECT is used to extract data from a database', '1')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('MODIFY is used to update data in a database', '0')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('Java is a scripting language', '0')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('Localhost is the destination to view php files', '1')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('PHP Stands for Pre Hyper Processor', '0')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('SELECT is a MySQL statement', '1')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('<?php>...<?> is the delimiter used in php', '0')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('Document.write is used in php to display something on the screen', '0')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('PHP variables must start with $', '1')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('POST is more secure than GET', 'T')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('/*...*/ Is the way to comment in PHP', '1')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('makecookie() is the method to create a cookie in PHP', '1')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('= is used to check if two values are equal and of the same data type', '0')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('There are three ways of styling in CSS', '1')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('script name is the correct way of referring to an external script', '0')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('Calling a function in Javascript requires call before function', '0')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('Do while, while, and for are all loops in javascript', '1')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('if i != is the correct way to start the if statement if i is not equal to a value', '1')";
 
mysqli_query($conn, $sql);
$sql = "INSERT INTO questions (question, answer)
VALUES ('<!DOCTYPE HTML> is used to indicate to the text editor that the file created is of type html', '1')";
 
mysqli_query($conn, $sql);
echo "<form action = 'score.php' method = 'POST'>";
$sql = "Select * from questions ORDER BY RAND() LIMIT 10";
	$result = mysqli_query($conn, $sql);
	$i = 1;
	if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)) {
	 
	echo "$i.". $row['question']. "<br><input type = 'radio' name = '$i' value = '1'>True <br>
	<input type = 'radio' name = '$i' value = '0'>False<br>";
	$answer = $row['answer'];
	echo "<input type = 'hidden' name = 'ans$i' value = '$answer'  >";
	$i++;
	}
	}
	echo "<input type = 'submit' value = 'submit'>";
	
	
	
?>