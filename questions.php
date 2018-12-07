<?php
include "config.php";
mysqli_select_db($conn, 'quiz');
         
$sql = "CREATE TABLE questions (
answer BOOLEAN() AUTO_INCREMENT PRIMARY KEY, 
question VARCHAR(50) NOT NULL,
num int(20) NOT NULL
)";
$sql = "INSERT INTO questions (question, answer);
VALUES ('SQL stands for Structured Query Language', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('PHP is a client-side scripting language', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('SELECT is used to extract data from a database', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('MODIFY is used to update data in a database', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('Java is a scripting language', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('Localhost is the destination to view php files', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('PHP Stands for Pre Hyper Processor', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('SELECT is a MySQL statement', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('<?php>...<?> is the delimiter used in php', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('Document.write is used in php to display something on the screen', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('PHP variables must start with $', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('POST is more secure than GET', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('/*...*/ Is the way to comment in PHP', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('makecookie() is the method to create a cookie in PHP', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('= is used to check if two values are equal and of the same data type', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('There are three ways of styling in CSS', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('script name is the correct way of referring to an external script', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('Calling a function in Javascript requires call before function', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('Do while, while, and for are all loops in javascript', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('if i != is the correct way to start the if statement if i is not equal to a value', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO questions (question, answer)
VALUES ('<!DOCTYPE HTML> is used to indicate to the text editor that the file created is of type html', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

$sql = "Select *
  from (select *
          from questions
 where rownum < 11;";
	$result = mysqli_query($conn, $sql);
	$i = 1;
	if(mysqli_num_rows($result) > 1){
	while($row = mysqli_fetch_assoc($result)) {
	 
	echo "$i";
	}
	}
	//.$row['question'] . "<input type = 'radio' name = "$i" value = 'true'>" True;
	//echo "$i". ". "  .$row['question'] . "<input type = 'radio' name = "$i" value = 'false'>" False;
	//echo "<input type = 'hidden' name = 'answer$i'> value = '$row['answer']'>";
	//$i = 1;
	
	
?>