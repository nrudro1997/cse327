<?php
	Session_start();
	Include_once "connect.php";
    if(isset($_POST['submit']))
	{

    	

			$str = "INSERT INTO user (uid, uname, upass, address,  mno ) VALUES
			('" . $_POST["id"] . "', '" . $_POST["username"] . "', '" . $_POST["password"] ."' , '" . $_POST["address"] . "', '" . ($_POST["mno"]) . "')";

			$result=mysqli_query($con,$str);
			
			if(!empty($result)) 
			{
				$error_message = "";
				$success_message = "You have registered successfully!";	
				unset($_POST);
				header("Location: profile.php");
			} else {

				echo "not done not dones";
				$error_message = "Problem in registration. Try Again!";	
			}
		

	}

		
?>


				

