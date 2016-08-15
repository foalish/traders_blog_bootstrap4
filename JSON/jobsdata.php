<?php


// Connect to the database
// replace the parameters with your proper credentials
$link = mysqli_connect("localhost", "cl56-example-mh8", "7-de3JK^/", "cl56-example-mh8");

if (mysqli_connect_error()) {
	die("Could not connect to database");
}



// Query to run
$query = "SELECT Job_title, Degree, Job_description, GCSEs, A_levels FROM jobs";

// Checks true if query was successful
if ($result=mysqli_query($link, $query)) {
// Fetches one line only no looping
// $row = mysqli_fetch_array($result); 
	
	// Loop through query and push results into $someArray
	while ($row = mysqli_fetch_array($result)) {


echo json_encode($row);

}


} else {
echo "It failed";
}

?>

	