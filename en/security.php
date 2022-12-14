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
						<a href="services.php">Services  <i class="fa fa-caret-right"></i></a>
  						
  							<div class="dropdown-content">
   							 <a href="mechanical.php">Mechanical</a>
    						<a href="electrical.php">Electrical</a>
    						<a href="lighting.php">Lighting</a>
    						<a href="security.php">Security</a>
  							</div>
  						</div>
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
			
			
			<a href="index.php"><img src="images/logo_2.png"></a>
					<button id="trigger-overlay" type="button">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
			
		</section>

		
		<!--</div>-->
		<div class="clearfix"></div>
	</div>

</div>


<!--header end-->






<div class="contact-innpage">
        <div class="container">
            <h3 class="tittle-w3layouts">SECURITY SERVICES</h3>
</div></div>

<div class="inner_sec_info_wthree_agile" id="divmargin">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_grid help">
						<!-- <img src="images/ab.png" alt=" " class="img-responsive"> -->
					</div>
					<div class="col-md-12 banner_bottom_left">
						
						<p align="justify">The main aim of the firm is to provide high quality, fast services at a low cost. We have a team of experts whose services have helped us to gain trust and credibility among our clients. Although requirements vary from customer to customer, our service is rated among the best. Each and every one of our professional workers are thoroughly trained in respect to each task and have each successfully completed all of the necessary skilled and safety training involved.</p>
						
					</div>
					<div class="clearfix"></div>
				</div>
			

&nbsp;
<div class="row">
  <div class="column">
    <img src="images/sec1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/sec2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/sec3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
     
      <img src="images/sec1.jpg" style="width:100%" "height:100%">
    </div>

    <div class="mySlides">
      
      <img src="images/sec2.jpg" style="width:100%" "height:100%">
    </div>

    <div class="mySlides">
      
      <img src="images/sec3.jpg" style="width:100%" "height:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
  </div>
</div>

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