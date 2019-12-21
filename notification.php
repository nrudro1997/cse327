<?php
     include "includes/header.php";
	 
?>
	
						<?php
			include_once('connect.php');
			
			$sql="SELECT * FROM user ";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array( $result );

			$username = $row['uname'];
			
			?>
	
	
	<section class="bgwhite p-t-55 p-b-65">


		
   <h2>This is notification</h2>
   <iframe
        allow="microphone;"
        width="250"
        height="430"
        src="https://console.dialogflow.com/api-client/demo/embedded/c4818507-76c7-4b71-9db3-4f598f52eb1a">
    </iframe>
   <?php 
      
      echo $username;
   ?>
   
</section>

	
	<!-- Footer -->
	<?php
     include "includes/footer.php";
	 
?>
	