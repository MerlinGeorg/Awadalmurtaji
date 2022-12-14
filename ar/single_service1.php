<?php include('config.php');?>
<!--header-->
<!DOCTYPE html>
<html>
<head><title>Awadal Murtaj</title>
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






<link rel="stylesheet" href="css/imgpopup.css">
<link rel="stylesheet" href="css/servicesextra.css">
<link rel="stylesheet" href="css/mycss.css">



<!--header-->


<link rel="shortcut icon" type="image" href="images/favicon.png">
 <link rel="stylesheet" href="css/font-awesome1.min.css">
<link rel="stylesheet" href="css/style-gallary.css">
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style7.css" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="//fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />



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

		
		<!--</div>-->
		<div class="clearfix"></div>
	</div>

</div>


<!--header end-->











<?php $serviceid = $_GET['xfsm']; 
// echo $serviceid;

$s2="SELECT * from services where services_id='$serviceid' and services_status = 1";
        $sl2=$db->prepare($s2);
        $sl2->execute();

$res2=$sl2->fetch(PDO::FETCH_ASSOC)
 


?>

<div class="contact-innpage">
        <div class="container">
            <h3 class="tittle-w3layouts"><?php echo $res2['services_name'] ?></h3>
</div></div>


<div class="inner_sec_info_wthree_agile" id="divmargin">
	
				<div class="help_full">

					<div class="col-md-6 banner_bottom_grid help">
						<!-- <img src="images/ab.png" alt=" " class="img-responsive"> -->
					</div>
					<div class="col-md-12 banner_bottom_left">
						
						<p align="justify"><?php echo $res2['services_description'] ?></p>
						
					</div>
					<div class="clearfix"></div>
				</div>
			

&nbsp;

<div class="row">

<?php $s3="SELECT * from products where products_servicetype='$serviceid' and products_status = 1";
        $sl3=$db->prepare($s3);
        $sl3->execute();

 while($res3=$sl3->fetch(PDO::FETCH_ASSOC))
 { ?>

  <div class="column" align="center">
    <img src="../admin/uploads/<?php echo $res3['products_pic'] ?>" class="hover-shadow cursor" data-toggle="modal" data-target="#myModal<?php echo $res3['products_id']; ?>">
    <h4 style="font-style: inherit;font-size: 24px;"><b><?php echo $res3['products_name'] ?></b></h4>
  </div>
  <!-- <div class="column">
    <img src="images/mech2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/mech3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div> -->

  <div  class="modal fade" id="myModal<?php echo $res3['products_id']; ?>" role="dialog" >
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content" style="position: relative;
    background-color: transparent;
    margin: auto;
    padding: 0;
    width: 50%;
    max-width: 1200px;
    width: 900px;
    height: 900px;
    border: none;">

					        <div class="modal-header" style="padding">
					        	
					          <button type="button" style="top: -9px;
    right: 14px;" class="close col-md-2" data-dismiss="modal">&times;</button>
					          
					        </div>
					        <div class="modal-body" align="center" style="background:transparent; ">
					          
					          <img style="width:700px;" src="../admin/uploads/<?php echo $res3['products_pic'] ?>">

					        </div>
					       <!--  <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div> -->
					      </div>
					      
					    </div>
               </div>
<?php } ?>
  
</div>

<!-- <div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
     
      <img src="images/mech1.jpg" style="width:100%" "height:100%">
    </div>

    <div class="mySlides">
      
      <img src="images/mech2.jpg" style="width:100%" "height:100%">
    </div>

    <div class="mySlides">
      
      <img src="images/mech3.jpg" style="width:100%" "height:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
  </div>
</div> -->

</div>


&nbsp;

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
  
}
</script>

</body>
</html>


<?php include('footer.php');?>