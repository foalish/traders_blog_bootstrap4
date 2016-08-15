<?php

$con = mysqli_connect("localhost", "cl56-post", "qcb9Wm!YD", "cl56-post")
or die("Connection was not established");

?>

<!DOCTYPE html>

<html>
<head>
<title>  Test my POST requests are working </title>
</head>
<body>
<div>

	<form action="" method="post">
		<table>
				<tr>
					<td align="right">FirstName:</td>
					<td>
						<input type="text" name="firstname" placeholder="Enter your first name" required="required"/>
					</td>
				</tr>

				<tr>
					<td align="right">LastName:</td>
					<td>
						<input type="text" name="lastname" placeholder="Enter your last name" required="required"/>
					</td>
				</tr>

				<tr>
					<td align="right">Age:</td>
					<td>
						<input type="text" name="age" placeholder="Enter your age" required="required"/>
					</td>
				</tr>
				
				<tr>
					<td>
						<button name="sign_up">SIGN UP!</button>
					</td>
				</tr>
		</table>
	</form>

</div>

</body>
</html>