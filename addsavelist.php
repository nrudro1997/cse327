


<?php
			 include 'lib/session.php';
			 Session::init();

			
			include_once('connect.php');
			
			


	
	if(!isset($_GET['bid'])){
		echo "not found";
	}
	
	$id=Session::get('userId');


	$bid = $_GET['bid'];
	
	$sql = "INSERT INTO savelist(uid,bid) VALUES('$id','$bid')";	

	if(!mysqli_query($con,$sql))
			{
				echo 'course didnot added';
			}
	else{
				header("location:list.php");
			}
?>