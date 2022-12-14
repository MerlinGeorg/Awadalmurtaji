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
    

<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/about-us-banner.jpg");

  /* Full height */
  height: 30%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
    
</head>

<body>
<div class="bg">



	<!--Slider-->

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
						<a href="career.php">Careers</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
					
		


				<div class="social-icons">
				<a class="facebook" href="#">
					<span class="fa fa-facebook"></span>
				</a>
				<a class="twitter" href="#">
					<span class="fa fa-twitter"></span>
				</a>
				<a class="pinterest" href="#">
					<span class="fa fa-pinterest-p"></span>
				</a>
				<a class="linkedin" href="#">
					<span class="fa fa-linkedin"></span>
				</a>
			</div>
				</ul>
			</nav>
		</div>





		<section class="header-w3layouts-top">
			<button id="trigger-overlay" type="button">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
			
			<a href="http://memc-eg-kw.com/"><img src="images/logo_2.png"></a>
					
			
		</section>

		
		<!--</div>-->
		<div class="clearfix"></div>
	</div>

</div>