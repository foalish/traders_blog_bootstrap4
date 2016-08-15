<?php

/**
 * database to show students
 */

echo "donkey";

$link = mysqli_connect("localhost", "cl56-post", "qcb9Wm!YD", "cl56-post");

if (mysqli_connect_error()) {
	
	die("Could not connect to database");

}

	

$query = "SELECT * FROM students";

if ($result=mysqli_query($link, $query)) {

   $row = mysqli_fetch_array($result);

    print_r($row);
   

 } else {

 echo "It failed";
 }

	



?>