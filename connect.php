<?php
	error_reporting (1);
	$con=mysqli_connect("localhost","root","","librarysystem");
	if ($con==false) {
		echo "Database Connection is not Successful";
	}
?>