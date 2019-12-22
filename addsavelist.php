


<?php

			 include 'lib/session.php';  //session included
			 Session::init();  //session initial to start session

			
			include_once('connect.php');  //Database connection file
			
			


	
	if(!isset($_GET['bid'])){
		echo "not found";
	}
	
	$id=Session::get('userId');


	$bid = $_GET['bid'];
	
	$sql = "INSERT INTO savelist(uid,bid) VALUES('$id','$bid')";	//Insert book id in the savelist

	if(!mysqli_query($con,$sql))
			{
				echo 'course didnot added';
			}
	else{
				header("location:list.php"); // After seccessfully added it will redirect to the list page
			}
?>
