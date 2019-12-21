<?php

		include 'lib/session.php';
		include_once('connect.php');
		Session::checkSession();

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
					


						<!-- Header cart noti -->
						
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/Booksss.jpg);">
		<h2 class="l-text2 t-center">
			Books
		</h2>
		
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						


							<div class="flex-sb-m flex-w p-t-16">
								
						</div>

						

					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					
				<div class = row>
					<!-- Product -->
					

						<?php
			include_once('connect.php');
			
			$sql="SELECT * FROM books where catagory='story'";
			$result = mysqli_query($con,$sql);
			if(!empty($result)){
							
				while($row = mysqli_fetch_array( $result )){

                $bid = $row['bid'];
                $bookname=$row['bookname'];
                $author=$row['author'];
                $catagory=$row['catagory'];
                $price=$row['price'];


                	echo	"<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>";
					echo		"<div class='block2'>";
					echo			"<div class='block2-img wrap-pic-w of-hidden pos-relative'>";
					echo				"<img src='images/books/".$bid.".jpg' alt='IMG-PRODUCT'>";

					echo				"<div class='block2-overlay trans-0-4'>";
					echo					"</a>";

					echo					"<div class='block2-btn-addcart w-size1 trans-0-4'>";
					echo						"<!-- Button -->";
					echo 						"<form action='addsavelist.php?bid=".$bid."' method='post'>";
					
					echo							"<button class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>";
					echo							"<input type='submit' Value='Add to Read Later' name='add'/>";
					echo							"</button>";
					echo 						"</form> ";
				


					echo					"</div>";
					echo				"</div>";
					echo			"</div>";

					echo			"<div class='block2-txt p-t-20'>";
					echo				"<a href='product-detail.html' class='block2-name dis-block s-text3 p-b-5'>";
					echo 					$bookname;
					echo				"</a>";

					
					echo				"<span class='block2-price m-text6 p-r-5'>";
					echo 					'Author: '.$author;
					echo				"</span>";
					echo			"</div>";
					echo		"</div>";
					echo	"</div>";


				}
			}

						?>
					
				</div>
			</div>
		</div>
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
