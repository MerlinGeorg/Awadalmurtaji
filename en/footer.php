<!--footer-w3-->
	<div class="footer-double">
		<div class="bottom-nav-sicons">
			<div class="bottom-nav-main">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="services.php">Services</a>
					</li>
					
					<li>
						<a href="career.php">Careers</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
			<div class="social-icons">
					<a class="facebook" href="https://www.facebook.com/%D8%B4%D8%B1%D9%83%D8%A9-%D8%A7%D9%84%D9%85%D8%B1%D8%AA%D8%AC%D9%8A-%D8%A7%D9%84%D9%83%D9%87%D8%B1%D8%A8%D8%A7%D8%A6%D9%8A%D8%A9-101652284806004/">
					<span class="fa fa-facebook"></span>
				</a>
				<a class="twitter" href="https://instagram.com/memckwt?igshid=750tavz3xbcu">
					<span class="fa fa-instagram"></span>
				</a>
			</div>
		</div>
		<div class="newsletter_right">
			<div class="n-left">
				<h3 class="tittle-w3layouts">Newsletter</h3>
				<p class="heading-btm">Get  our special offers and business management tips directly to your inbox!</p>
			</div>
			<div class="n-right">
				<form action="#" method="post">
					<div class="input-flds">
						<input type="email" name="Email" placeholder="Email" required="">
					</div>
					<div class="input-flds">
						<input type="submit" value="Subscribe">
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="copy">
		<div class="container">
			
			<p>© 2020  Al Murtaji Electromechanic . All Rights Reserved | developed by
				<a href="http://www.e4technosolutions.com/">E4 Techno Solutions</a>
			</p>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--/footer-w3 -->



	


</body>

</html>


<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //menu -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo7.js"></script>
	<!-- //menu -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- FlexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function () {

		});
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- FlexSlider -->

	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>


	<a href="#home" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap.js"></script>