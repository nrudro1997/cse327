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


		
   <h2>This is profile</h2>
   <?php 
      
      echo $username;
   ?>
   <h2>This is your profile</h2>
   <h3>Here is your information </h3>
</section>

	
	<!-- Footer -->
	<?php
     include "includes/footer.php";
	 
?>
	
