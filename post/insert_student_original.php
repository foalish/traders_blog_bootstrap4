<?php

echo "dokey";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'connection.php';
	createStudent();
}

function createstudent()
{
	global $connect;
	$firstname = $_POST["firstname"];
	$lastname  = $_POST["lastname"];
	$age       = $_POST["age"];


	$query = " INSERT INTO students(firstname,lastname,age) VALUES ('$firstname','$lastname','$age')";
		mysqli_query($connect, $query) or die (mysqli_error($connect));

		
	$query = "SELECT * FROM students";
	if ($result=mysqli_query($link, $query)) {
 	while ($row = mysqli_fetch_array($result)) {
    print_r($row);
	}
	} else {
	 echo "It failed";
 	
	mysqli_close($connect);
	}
?>