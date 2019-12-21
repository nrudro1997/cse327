<?php
	 include "includes/header.php";
	
	
 ?>
	 


						<?php
			$userid=Session::get('userId');
			$sql="SELECT * FROM user where uid = '$userid' ";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array( $result );

			$username = $row['uname'];
			
			?>
	
	
	<section class="bgwhite p-t-55 p-b-65">

<div class="card " style="text-align:center;">
	<div class="card-body">
	<h2>Welcome  <?php 
      
      echo $username;
   ?></h2>
  <img src="images/profile.jpg" style="border-radius:5px;height:180px;width:150px;">
   <h2>This is your profile</h2>
</div>
</div>
		
  
  
   <a href="?action=logout" class="btn btn-danger">Logout</a>
</section>

	
	<!-- Footer -->
	<?php
     include "includes/footer.php";
	 
?>
	