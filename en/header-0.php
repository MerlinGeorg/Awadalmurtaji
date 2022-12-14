<?php include('config.php');?>
<!--header-->

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Awadal Murtaj</title>
	<!-- Meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" >
	<meta name="keywords" content="Oryx Holdings"/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="shortcut icon" type="image" href="images/favicon.png">
	<link rel="stylesheet" href="css/bootstrap1.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome1.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style-gallary.css">
	<!-- //Meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Bootstrap Css -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //Font-awesome Css -->
	<link rel="stylesheet" type="text/css" href="css/style7.css" />
	<!--//menu slider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!--// Flexslider-CSS -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Required Css -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!--//fonts-->

	<link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

	<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->


    <style type="text/css">
    	
    	.slider {
        width: 90%;
        margin: 20px auto;
    }

    </style>




</head>

<body>

	<!-- Slider-->

	<div class="banner-w3-agileits-slider">
		<div class="overlay overlay-contentpush">
			<button type="button" class="overlay-close">
				<i class="fa fa-times" aria-hidden="true"></i>
			</button>
			<nav>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
						<li>
						<div class="dropdown">
  						<a href="services.php" class="dropbtn">Services  <i class="fa fa-caret-right"></i></a>
  						
  							<div class="dropdown-content">

<?php $s2="SELECT * from services where services_status = 1";
        $sl2=$db->prepare($s2);
        $sl2->execute();

 while($res2=$sl2->fetch(PDO::FETCH_ASSOC))
 { ?>

   							 <a href="single_service.php?xfsm=<?php echo $res2['services_id'] ?>"><?php echo $res2['services_name'] ?></a>
   <?php } ?>							 
    						<!-- <a href="electrical.php">Electrical</a>
    						<a href="lighting.php">Lighting</a>
    						<a href="security.php">Security</a> -->
  							</div>
  						
						</div>
					</li>
					<li>
						<a href="project.php">Projects</a>
					</li>
					<li>
						<a href="gallery.php">Gallery</a>
					</li>
					<li>
						<a href="career.php">Careers</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
					
		</nav>
		<nav>
					<div class="social-icons">
						<a class="facebook" href="https://www.facebook.com/%D8%B4%D8%B1%D9%83%D8%A9-%D8%A7%D9%84%D9%85%D8%B1%D8%AA%D8%AC%D9%8A-%D8%A7%D9%84%D9%83%D9%87%D8%B1%D8%A8%D8%A7%D8%A6%D9%8A%D8%A9-101652284806004/">
					<span class="fa fa-facebook"></span>
				</a>
				<a class="twitter" href="https://instagram.com/memckwt?igshid=750tavz3xbcu">
					<span class="fa fa-instagram"></span>
				</a>
				</div>
				</ul>
			</nav>
		</div>





		<section class="header-w3layouts-top">
			<button id="trigger-overlay" type="button">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
			
			<a href="index.php"><img src="images/logo_2.png"></a>
					
			
		</section>

		<div class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li class="banner1">
					<div class="container">
						<div class="slider-info-wthree">
                        <h3>Lighting solutions</h3>
							<h2><font color="#FFFFFF">that can meet any style, budget or application.</font></h2>
							
							<a href="about.php"  class="bnr-button">More About Us</a>
						</div>
					</div>
				</li>
				<li class="banner2">
					<div class="container">
						<div class="slider-info-wthree">
							<h3>WE ARE PASSIONATE</h3>
						<h2><font color="#FFFFFF">about customer service.</font></h2>
							<a href="contact.php"   class="bnr-button">Contact Us</a>
						</div>
					</div>
				</li>
				<li class="banner3">
					<div class="container">
						<div class="slider-info-wthree">
							<h3>OUR GREATEST STRENGTH</h3>
						<h2><font color="#FFFFFF">is our people.</font></h2>
							<a href="career.php"  class="bnr-button">Join Our Team</a>
						</div>
					</div>
				</li>
				

			</ul>

		</div>

		
		<!--</div>-->
		<div class="clearfix"></div>
	</div>