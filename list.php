<?php
	 include "includes/header.php";
	
	
 ?>
	 <?php
			if(isset($_GET['delid'])){
				$delid = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delid']);
				$delquery="DELETE FROM savelist where bid = '$delid' limit 1";
				$delreslt= mysqli_query($con,$delquery);

			}
?>


						<?php
						$counts=0;
			$userid=Session::get('userId');
			$sql="SELECT * FROM savelist s, books b where s.uid='$userid' AND s.bid=b.bid  ";
			$result = mysqli_query($con,$sql);
			
			?>
	
	
	<section class="bgwhite p-t-55 p-b-65">

<div class="card " style="text-align:center;">
	<div class="card-body">
	<table class="table table-striped">
    <thead>
      <tr>
        <th style="text-align:center;">Serial</th>
        <th style="text-align:center;">Book Name</th>
		<th style="text-align:center;">Author Name</th>
        <th style="text-align:center;">Action</th>
      </tr>
    </thead>
	<tbody>
<?php
    if(!empty($result)){
							
		while($row = mysqli_fetch_array( $result )){
			$counts++;
			$book = $row['bookname'];
			$author= $row['author'];
			$bid = $row['bid'];
			?>
			
    
      <tr>
        <td><?php  echo $counts  ?></td>
        <td><?php  echo $book  ?></td>
		<td><?php  echo $author  ?></td>
        <td><a onclick="return confirm('Are you sure to delete?');"href="?delid='<?php echo $bid ; ?>'">X</a></td>
      </tr>
      
   
  <?php
			
		}
	}
   ?>
    </tbody>
  </table>
 
</div>
</div>
		
  
  
   <a href="?action=logout" class="btn btn-danger">Logout</a>
</section>

	
	<!-- Footer -->
	<?php
     include "includes/footer.php";
	 
?>
	