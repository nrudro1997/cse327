<?php
	error_reporting (1);
	$con=mysqli_connect("localhost","root","","bookshop");
	if ($con==false) {
		echo "Database Connection is not Successful";
	}
?>