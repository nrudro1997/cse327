<?php
			  include_once "connect.php";
			  include 'lib/session.php';
			  Session::checkSession();
if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$comment=$_POST['comment'];
	

	$feed = "INSERT INTO feedback(name,comment) Values('$uname', '$comment')";
	$fresult=mysqli_query($con,$feed);

	if(!empty($fresult)){
		header("Location:feedback.php");
	}else{
		header("Location:register.php");
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">                                 
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				
					<form action ="search.php" method ="post">
							<input type="text" name="searchVal" placeholder="Search here"onkeydown="searchq();"/> <button type="submit" class="searchButton">
							  <i class="fa fa-search"></i>
						   </button>
                                   </form>
						
			    <div class="topbar-child2">
					<div class="topbar-language rs1-select2">
							<a href="registration.html">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register
								</a>
						<a href="login.html">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;login
						</a>
						
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					OnlineBookSystem
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
				<nav class="menu">
						<ul class="main_menu">
						
							<li>
								<a href="latest.php">Latest</a>
								
							</li>

							
							

							<li>
								<a href="notification.php">Notification</a>
							</li>
							<li>
								<a href="list.php">Save List</a>
							</li>
							<li>
								<a href="feedback.php">Feedback</a>
							</li>


							
						</ul>
					</nav>
				</div>

				
				<!-- Header Icon -->
				<div class="header-icons">
					<a href="profile.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<?php
						$count=0;
						$userid=Session::get('userId');

						$readsql="SELECT * FROM savelist s, books b where s.uid='$userid' AND s.bid=b.bid ";
						$result = mysqli_query($con,$readsql);
						
			             if(!empty($result)){
							
							while($row = mysqli_fetch_array( $result )){
								   $count++;
							}
								   ?>
									   <span class="header-icons-noti"><?php echo $count;?></span>
									   <div class="header-cart header-dropdown">
							

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									
								
								
									<!-- Button -->
									<a href="list.php" class="btn btn-primary">
									See Read Later List
									</a>
							
								
								</div>

								
							</div>
						</div>
									   <?php

							}else{

							}

						?>
					
					</div>
				</div>
			</div>
		</div>
	</header>


	<!-- Title Page -->
	<section>
	<div class="col-lg-6" style="margin:0 auto;background:#f1f1f1;margin-top:15px;">
	<p style="text-align:center;color:green;padding:5px;font-size:16px;">Write Your Feedback</p>
  <form action="" method="post">
    <div class="form-group">
      <label for="unmae">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter your name" name="uname" required="">
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control"  placeholder="Enter Feedback" name="comment" required=""></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php
			$selectsql="SELECT * FROM feedback order by fid DESC";
			$result = mysqli_query($con,$selectsql);
			
			while($row = mysqli_fetch_array( $result )){
				$name=$row['name'];
				$feedback=$row['comment'];
				?>
				<div class="col-lg-8" style="margin:0 auto;">
	<div class="card">
		<div class="card-body">
		<p style="color:skyblue;font-size:16px;"><?php  echo $name; ?></p>
		<p><?php   echo $feedback; ?></p>
		</div>
	</div>
			</div>
				<?php
			}

?>

</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
					Any questions? Let us know at <font color="blue"><strong>onlinebooksystem@gmail.com</strong> </font>or call us on <font color="blue"><strong>(+880) 1718XXXXXX</strong> </font>
							</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="product-science.php" class="s-text7">
							Science
						</a>
					</li>

					<li class="p-b-9">
						<a href="product-engineering.php" class="s-text7">
							Engineering
						</a>
					</li>

					<li class="p-b-9">
						<a href="product-business.php" class="s-text7">
							Business Studies
						</a>
					</li>

					<li class="p-b-9">
						<a href="product-medical.php" class="s-text7">
							Medical
						</a>
					</li>

					<li class="p-b-9">
						<a href="product-story.php" class="s-text7">
							Story
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					
					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			
			</div>
		</div>

		
			
			<div class="t-center s-text8 p-t-20">
				Copyright © 2019. All rights reserved. |
			</div>
		
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to read later !", "success");
			});
		});

		
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
