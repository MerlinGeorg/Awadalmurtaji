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
.sl-btn{

	padding: 6px 30px;
    background-color: #2f7c84;
    border-radius: 25px;
    color: #ffff !important;
    font-weight: 600;
}

.sl-btn:hover{
	background-color: #fed700;
	
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
						<a href="index.php">الصفحة الر</a>
					</li>
					<li>
						<a href="about.php">من نح</a>
					</li>
						<li>
						<div class="dropdown" style="padding-left: 34px;">
  						<a href="services.php" class="dropbtn">خدما  <i class="fa fa-caret-right"></i></a>
  						
  							<div class="dropdown-content">

<?php $s2="SELECT * from services where services_status = 1";
        $sl2=$db->prepare($s2);
        $sl2->execute();

 while($res2=$sl2->fetch(PDO::FETCH_ASSOC))
 { ?>

   							 <a href="single_service.php?xfsm=<?php echo $res2['services_id'] ?>"><?php echo $res2['services_name_arab'] ?></a>
   <?php } ?>							 
    						<!-- <a href="electrical.php">Electrical</a>
    						<a href="lighting.php">Lighting</a>
    						<a href="security.php">Security</a> -->
  							</div>
  						
						</div>
					</li>
					<li>
						<a href="project.php">المشاريع   </a>
					</li>
					<li>
						<a href="gallery.php">صالة عرض    </a>
					</li>
					<li>
						<a href="career.php">وظائف</a>
					</li>
					<li>
						<a href="contact.php">ا الإتصال بنا</a>
					</li>
					<li>
						<a href="../en/" title="change language to english">إنجليزي</a>
					</li>
					
		</nav>
		<nav>

				<div class="social-icons" style="margin-top: 5%;">
				<a class="facebook" href="https://www.facebook.com/%D8%B4%D8%B1%D9%83%D8%A9-%D8%A7%D9%84%D9%85%D8%B1%D8%AA%D8%AC%D9%8A-%D8%A7%D9%84%D9%83%D9%87%D8%B1%D8%A8%D8%A7%D8%A6%D9%8A%D8%A9-101652284806004/">
					<span class="fa fa-facebook"></span>
				</a>
				<a class="twitter" href="https://instagram.com/memckwt?igshid=750tavz3xbcu">
					<span class="fa fa-instagram"></span>
				</a>
				<!--<a class="pinterest" href="#">-->
				<!--	<span class="fa fa-pinterest-p"></span>-->
				<!--</a>-->
				<!--<a class="linkedin" href="#">-->
				<!--	<span class="fa fa-linkedin"></span>-->
				<!--</a>-->
			</div>
				</ul>
			</nav>
		</div>




    

<?php $serviceid = $_GET['xfsm']; 
// echo $serviceid;

$s5="SELECT * from services where services_id='$serviceid' and services_status = 1";
        $sl5=$db->prepare($s5);
        $sl5->execute();

$res5=$sl5->fetch(PDO::FETCH_ASSOC);
 
$servid = $res5['services_id'];

if($servid=='3')
{

?>

        <section class="header-w3layouts-top">
			<button id="trigger-overlay" type="button">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
			
			<a href="index.php"><img style="width: 300px;height: 200px" src="images/sec-logo1.png"></a>
					
			
		</section>
<?php }
   else 
  { ?>		

		<section class="header-w3layouts-top">
			<button id="trigger-overlay" type="button">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
			
			<a href="index.php"><img src="images/logo_2.png"></a>
					
			
		</section>

<?php } ?>		
		<!--</div>-->
		<div class="clearfix"></div>
	</div>

</div>