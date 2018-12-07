<!DOCTYPE html>
<style>
body {
  font-family: arial;
  font-style: italic;
  font-weight: bold;
  color: black;
  background-image: url("test.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  text-align: center;
}
div {
	position: absolute;
  	top: 100px;
  	left: 50%;
	text-align: center;
	color: black;
	background-color: gray;
    height: 170px;
    width: 700px;
}
.container {
    text-align: center;
    left: 430px;
    position: relative;
    width: 500px;
    background-color: #f1f1f1;
    padding: 20px;
}
.ontop {
	text-align: center;
	position: relative;
	top: 150px;
}
.button {
  top:160px;
  font-family: arial;
  font-weight: bold;
  font-style: italic;
  font-size: 16px;
  padding: 16px 32px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  float: left;
  margin: auto;
  margin-left: 45%;
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button:hover {background-color: #e7e7e7;}
p {
	position: absolute;
	top: 380px;
	left: 520px;
}
</style>
<?php
include "config.php";

$sql = "CREATE DATABASE finalExam";
 if (mysqli_query($conn, $sql)) {
           echo "Database created successfully";
         } else {
           echo "Error creating database: " . mysqli_error($conn);
         }
mysqli_select_db($conn, 'finalExam');

// sql to create table
$sql = "CREATE TABLE student (
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
taken VARCHAR(30) NOT NULL,
score int(5)
)";
mysqli_query($conn, $sql);

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "INSERT INTO student (username, password, taken, score) VALUES ('$username', '$password', 'no', 'NULL')";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM student WHERE username = '$username'";
$result = mysqli_query($conn, $sql); 
if (mysqli_num_rows($result) > 1) { 	
            if ($row["taken"] = 'yes') {
         		echo "<div class='container'>You have taken the quiz!<br>You received a score of: ".$row["score</div>"]."";
         	}
         	else {
         		echo "<a href='questions.php'> Take the quiz </a>";
         	}
        }
	else {
		echo "<a href='questions.php'> Take the quiz </a>";
         }	  



?>
</html>
