<?php


 
	$link = mysqli_connect("localhost", "cl56-post", "qcb9Wm!YD", "cl56-post");
	if (mysqli_connect_error()) {
	die("Could not connect to database");
}

	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$age = $_POST["age"];

	$query = " INSERT INTO students(firstname,lastname,age) VALUES ('$firstname','$lastname','$age')";
		mysqli_query($link, $query) ;

		$query = "SELECT * FROM students";
	if ($result=mysqli_query($link, $query)) {
 	while ($row = mysqli_fetch_array($result)) {
    print_r($row);
	}
	} else {
	 echo "It failed";
 	}
?>