<?php

$link = mysqli_connect("localhost", "cl56-post", "qcb9Wm!YD", "cl56-post");
	if (mysqli_connect_error()) {
	die("Could not connect to database");
	
}

	$query = "SELECT * FROM students";
	
	$result = mysqli_query($link, $query);
	$number_of_rows = mysqli_num_rows($result);
	
	$temp_array  = array();
	
	if	($number_of_rows > 0) 
	{
		while ($row = mysqli_fetch_assoc($result)) {
			$temp_array[] = $row;
		}
	}

	header('Content-Type: application/json');
	echo json_encode(array("students"=>$temp_array));
	mysqli_close($connect);
	
	?>