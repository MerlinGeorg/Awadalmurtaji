<!DOCTYPE html>

<html class='no-js' lang='en'>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset='utf-8' />
		<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
		<title>Home - Al Murtaji</title>	
		
		<link rel="shortcut icon" href="favicon.html" />
		<link rel="apple-touch-icon" href="../images/favicon.html" />
		
		<link rel="stylesheet" href="../css/maximage.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/styles.css" type="text/css" media="screen" charset="utf-8" />

		<style type="text/css">
			.flgbtn{
				width:80px;
			}
			.flgbtn:hover{

				border:1px solid yellow ;
				border-radius: 80px;
			}
		</style>
		
</head>
	<body>

		<!-- Switch to full screen -->
		<button class="full-screen" onclick="$(document).toggleFullScreen()"></button>

		<!-- Site Logo -->
		<div id="logo"></div>

		<!-- Main Navigation -->
	

		<!-- Slider Controls -->
		<a href="#" id="arrow_left"><img src="../images/arrow-left.png" alt="Slide Left" /></a>
		<a href="#" id="arrow_right"><img src="../images/arrow-right.png" alt="Slide Right" /></a>

		<!-- Home Page -->
		<section class="content-show" id="home">
        <img src="images/logo_1.png" width="302" height="250">
			<h1>Welcome</h1>
			<!-- <h5>Al Murtaji Electro Mechanic Contracting Co.</h5> -->
			<h5>Choose Country</h5>
			
		<!-- <button style="background-image: " class="button button1" onclick="location.href='en/index.php'">English</button>
		<button class="button button2" onclick="location.href='arc/index.php'">Arabic</button> -->

		<a href="index.php"><img class="flgbtn" src="images/kuwitflag1.png" title="Our Kuwait website"></a>
		<img class="flgbtn" src="images/egyptflag1.png" title="Our Egypt website">s
		
		</section>
			
		
		<!-- About Page -->
	
		
		<!-- Background Slides -->
		<div id="maximage">
			<div>
				<img src="../images/backgrounds/Kuwait.jpg" alt="" />
				<img class="gradient" src="../images/backgrounds/gradient.png" alt="" />
			</div>
            <div>
				<img src="../images/backgrounds/banner-5.jpg" alt="" />
				<img class="gradient" src="../images/backgrounds/gradient.png" alt="" />
			</div>
			
		</div>


		<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src='../ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
		<script src="../js/jquery.easing.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/jquery.fullscreen.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/jquery.ba-hashchange.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/main.js" type="text/javascript" charset="utf-8"></script>
		
		<script type="text/javascript" charset="utf-8">
			$(function(){
				$('#maximage').maximage({
					cycleOptions: {
						fx: 'fade',
						speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
						timeout: 5000,
						prev: '#arrow_left',
						next: '#arrow_right',
						pause: 0,
						before: function(last,current){
							if(!$.browser.msie){
								// Start HTML5 video when you arrive
								if($(current).find('video').length > 0) $(current).find('video')[0].play();
							}
						},
						after: function(last,current){
							if(!$.browser.msie){
								// Pauses HTML5 video when you leave it
								if($(last).find('video').length > 0) $(last).find('video')[0].pause();
							}
						}
					},
					onFirstImageLoaded: function(){
						jQuery('#cycle-loader').hide();
						jQuery('#maximage').fadeIn('fast');
					}
				});
	
				// Helper function to Fill and Center the HTML5 Video
				jQuery('video,object').maximage('maxcover');
	
			});
		</script>
  </body>
</html>