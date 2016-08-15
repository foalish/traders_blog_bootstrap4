<?php

$link = mysqli_connect("localhost", "cl56-post", "qcb9Wm!YD", "cl56-post");

if (mysqli_connect_error()) {
	
	die("Could not connect to database");

}

$query = "INSERT INTO `students` (`firstname`,`lastname`,`age`) VALUES ('itsgonna','work','23')";

mysqli_query($link, $query);



$query = "SELECT * FROM students";

if ($result=mysqli_query($link, $query)) {

 while ($row = mysqli_fetch_array($result)) {

    print_r($row);
	
	}


 } else {

 echo "It failed";
 }


?>

	