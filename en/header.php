<?php include('config.php');?>
<!--header-->

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Al-Murtaji</title>
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

   							 <a style="font-size:18px;" href="single_service.php?xfsm=<?php echo $res2['services_id'] ?>"><?php echo $res2['services_name'] ?></a>
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
					<li>
						<a href="../ar/" title="change language to arabic">Arabic</a>
					</li>
					
		</nav>
		<nav>
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
			
			<a href="index.php"><img src="images/logo_2.png"></a>
					
			
		</section>

		<div class="callbacks_container">
			<ul class="rslides" id="slider3">

<?php $s3="SELECT * from home_slider where homeslider_priority = 1";
        $sl3=$db->prepare($s3);
        $sl3->execute();

 while($res3=$sl3->fetch(PDO::FETCH_ASSOC))
 { ?>

	<li class="banner1" style="background: url(../admin/uploads/<?php echo $res3['homeslider_pic'] ?>) no-repeat 0px 0px;">
					<div class="container">
						<div class="slider-info-wthree">
                        <h3><?php echo $res3['homeslider_title'] ?></h3>
							<h2><font color="#FFFFFF"><?php echo $res3['homeslider_subtitle'] ?></font></h2>
							
							<a href="about.php"  class="bnr-button">More About Us</a>
						</div>
					</div>
				</li>
<?php
  
  }

  $s4="SELECT * from home_slider where homeslider_priority = 2";
        $sl4=$db->prepare($s4);
        $sl4->execute();

 while($res4=$sl4->fetch(PDO::FETCH_ASSOC))
 { 


 ?>				
				<li class="banner2" style="background: url(../admin/uploads/<?php echo $res4['homeslider_pic'] ?>) no-repeat 0px 0px;">
					<div class="container">
						<div class="slider-info-wthree">
							<h3><?php echo $res4['homeslider_title'] ?></h3>
						<h2><font color="#FFFFFF"><?php echo $res4['homeslider_subtitle'] ?></font></h2>
							<a href="contact.php"   class="bnr-button">Contact Us</a>
						</div>
					</div>
				</li>
<?php
  
  }

  $s5="SELECT * from home_slider where homeslider_priority = 3";
        $sl5=$db->prepare($s5);
        $sl5->execute();

 while($res5=$sl5->fetch(PDO::FETCH_ASSOC))
 { 


 ?>					
				<li class="banner3" style="background: url(../admin/uploads/<?php echo $res5['homeslider_pic'] ?>) no-repeat 0px 0px;">
					<div class="container">
						<div class="slider-info-wthree">
							<h3><?php echo $res5['homeslider_title'] ?></h3>
						<h2><font color="#FFFFFF"><?php echo $res5['homeslider_subtitle'] ?></font></h2>
							<a href="career.php"  class="bnr-button">Join Our Team</a>
						</div>
					</div>
				</li>
<?php } 
 $s6="SELECT * from home_slider where homeslider_priority = 4";
        $sl6=$db->prepare($s6);
        $sl6->execute();

 while($res6=$sl6->fetch(PDO::FETCH_ASSOC))
 { 
?>		<li class="banner3" style="background: url(../admin/uploads/<?php echo $res6['homeslider_pic'] ?>) no-repeat 0px 0px;">
					<div class="container">
						<div class="slider-info-wthree">
							<h3><?php echo $res6['homeslider_title'] ?></h3>
						<h2><font color="#FFFFFF"><?php echo $res6['homeslider_subtitle'] ?></font></h2>
							<!-- <a href="career.php"  class="bnr-button">Join Our Team</a> -->
						</div>
					</div>
				</li>
<?php } 
 $s7="SELECT * from home_slider where homeslider_priority = 5";
        $sl7=$db->prepare($s7);
        $sl7->execute();

 while($res7=$sl7->fetch(PDO::FETCH_ASSOC))
 { 
?>		
<li class="banner3" style="background: url(../admin/uploads/<?php echo $res7['homeslider_pic'] ?>) no-repeat 0px 0px;">
					<div class="container">
						<div class="slider-info-wthree">
							<h3><?php echo $res7['homeslider_title'] ?></h3>
						<h2><font color="#FFFFFF"><?php echo $res7['homeslider_subtitle'] ?></font></h2>
							<!-- <a href="career.php"  class="bnr-button">Join Our Team</a> -->
						</div>
					</div>
				</li>
<?php } ?>					

			</ul>

		</div>

		
		<!--</div>-->
		<div class="clearfix"></div>
	</div>