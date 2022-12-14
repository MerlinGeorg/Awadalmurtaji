<?php include('header-0.php');?>
 
<!-- <html> -->	

	<div class="banner-w3-agileits-btm">
		<div class="container">
			<h3 class="tittle-w3layouts" align="right">مرحبا بكم في المورتاجي للميكانيكا الكهربائية </h3>
			<div class="banner-w3-agileits-btm-main">
				<?php 

        $s2="SELECT * from about limit 1";
        $sl2=$db->prepare($s2);
        $sl2->execute();

 $res2=$sl2->fetch(PDO::FETCH_ASSOC);

 
 ?>
				<div class="banner-w3-agileits-btm-right">
					<h4 class="sub-hdng"><?php echo $res2['about_title_arab'] ?></h4>
					<p class="paragraph-w3-agile" align="justify"><?php echo $res2['about_story_arab'] ?></p>

					<h6>رؤيتنا
						<span class="fa fa-leaf" aria-hidden="true"></span>
					</h6>

					<p class="paragraph-w3-agile" align="justify"><?php echo $res2['about_vision_arab'] ?></p>
					
				
				</div>
				<div class="banner-w3-agileits-btm-left">
					<div class="banner-w3-agileits-btm-top">
						<div class="banner-w3-agileits-btm-inner a1">
							
							

							 <p>يتألق التزامنا بالتصميم المبتكر والأصلي والجودة التي لا هوادة فيها عبر عدد لا يحصى من حلول الإضاءة في مجموعاتهم الجديدة لعام 2020 والتي ستسمح لك بالتعبير عن نفسك حقًا بالضوء </p>
                             <a href="about.php" class="text-btn">view more</a>
						</div>
						<div class="banner-w3-agileits-btm-inner a2">

						</div>
					</div>
					<div class="banner-w3-agileits-btm-bottom">
						<div class="banner-w3-agileits-btm-inner a3">

						</div>
						<div class="banner-w3-agileits-btm-inner a4">
							<h6>Services</h6>
<?php 

        $s4="SELECT * from services where services_status = '1' limit 4";
        $sl4=$db->prepare($s4);
        $sl4->execute();

 while($res4=$sl4->fetch(PDO::FETCH_ASSOC))
{
 
 ?>
							 <a href="single_service.php?xfsm=<?php echo $res4['services_id'] ?>"><p class="paragraph-w3-agile"><?php echo $res4['services_name_arab'] ?> </p></a>
			<?php } ?>				 
							<!-- <p class="paragraph-w3-agile">Electrical Services</p>
						
							<p class="paragraph-w3-agile">Lighting Solutions</p>

							<p class="paragraph-w3-agile">Security Systems</p>
 -->
							<a href="services.php" class="text-btn">view more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	




	<!-- add -->







	<!-- add -->



<!-- stats -->
	<div class="stats">
		<div class="container-fluid">
			<h3 class="tittle-w3layouts white-clr">وكالاتنا</h3>
			<div class="stats-inner-agileits-w3layouts">
			  <div class="regular slider">

    <div style="text-align: center;">
      <img align="center" src="images/sivim.png">
      <h3 style="width: 250px;
    color: #012a46;
    font-weight: 1000;">Sivim</h3>
    </div>
    <div style="text-align: center;">
      <img src="images/we.png">
      <h3 style="width: 250px;
    color: #012a46;
    font-weight: 1000;">Wild Eagle Security Systems</h3>
    </div>
    <div style="text-align: center;">
      <img src="images/memc.png">
      <h3 style="width: 250px;
    color: #012a46;
    font-weight: 1000;">Al Murtaji</h3>
    </div>
    <div style="text-align: center;">
      <img style="width:250px;" src="images/prolynx.png">
      <h3 style="width:250px;
    color: #012a46;
    font-weight: 1000;">Prolynx</h3>
    </div>
   
	<!-- 			<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						
						<img src="images/instalogo.png">
					<h3>Instagram</h3>
					</div>

				</div>
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						
						<img src="images/ENGIE-Logo.png">
					<h3>ENGIE</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						
						<img src="images/puma.png">
					<h3>PUMA</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						
						<img src="images/bmw.png" style="width: 160px;">
					<h3>BMW</h3>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			  </div>
			</div>
		</div>
	</div>
	<!-- //stats -->






&nbsp;
<div class="outer-container home-page">
    <div class="container-fluid">

    	<h3 class="tittle-w3layouts">معرضنا </h3>
        <div class="row">

 <?php 

        $s5="SELECT * from gallery where gallery_status = '1' limit 8";
        $sl5=$db->prepare($s5);
        $sl5->execute();

 while($res5=$sl5->fetch(PDO::FETCH_ASSOC))
{
 
 ?>       	
            <div class="col-12 col-md-6 col-lg-3 no-padding" style="padding-bottom: 25px;">
                <div class="portfolio-content">
                    <figure>
                         <img style="height: 200px;width: 310px;" src="../admin/uploads/<?php echo $res5['gallery_image'] ?>" alt="">
                    </figure>

                   <!-- <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="single_service.php?xfsm=<?php echo $res5['services_id'] ?>"><?php echo $res5['services_name'] ?></a></h3>

                       
                    </div>--><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

  <?php } ?>          
 

 
           
        </div><!-- .row -->
    </div><!-- .container-fluid -->
</div><!-- .outer-container -->
<p align="center"><a href="gallery.php" class="text-btn">view more</a></p>






<!-- 
gallary demo -->


&nbsp;
<div class="outer-container home-page">
    <div class="container-fluid">

    	<h3 class="tittle-w3layouts">خدماتنا </h3>
        <div class="row">

 <?php 

        $s5="SELECT * from services where services_status = '1' limit 4";
        $sl5=$db->prepare($s5);
        $sl5->execute();

 while($res5=$sl5->fetch(PDO::FETCH_ASSOC))
{
 
 ?>       	
            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                         <img src="../admin/uploads/<?php echo $res5['services_pic'] ?>" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="single_service.php?xfsm=<?php echo $res5['services_id'] ?>"><?php echo $res5['services_name_arab'] ?></a></h3>

                       
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

  <?php } ?>          
 

 



           
        </div><!-- .row -->
    </div><!-- .container-fluid -->
</div><!-- .outer-container -->






<!-- foooter -->




	<div class="contact-w3l-footer-w3" id="contact">
		<div class="container">
			<div class="mail-grid1">
				<div class="col-md-4 mail-agileits-w3layouts">
					<span class="fa fa-phone" aria-hidden="true"></span>
					<div class="contact-right">
						<p>Phone</p>
						<span>+965 65847770<br>
                        </span>
                       <span> +965 55223108<br> </span>
						<span>+965 22663141</span>
					</div>
				</div>
				<div class="col-md-4 mail-agileits-w3layouts">
					<span class="fa fa-envelope" aria-hidden="true"></span>
					<div class="contact-right">
						<p>Email</p>
						<a href="mailto:info@example.com"> info@memc-eg-kw.com</a>
					</div>
				</div>
				<div class="col-md-4 mail-agileits-w3layouts">
					<span class="fa fa-map-marker" aria-hidden="true"></span>
					<div class="contact-right">
						<p>Address</p>
						<span>عمارة عبدالعزيز الخالد
</span>
						<span>الطابق رقم 1 ، مكتب رقم 8</span>
						<span>شارع تونس ، حولي </span>
						<span>الكويت</span>
					
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>






<div class="contact-innpage">
		<div class="container">
			<h3 class="tittle-w3layouts">ابقى على تواصل</h3>
			<div class="mail_grid_w3l">
				<form action="gettechmail.php" method="post">
					<div class="col-md-6 contact_left_grid" data-aos="fade-right">
						<input type="hidden" name="pagename" value="index">
						<div class="contact-fields-w3ls">
							<input type="text" name="Name" placeholder="Name" required>
						</div>
						<div class="contact-fields-w3ls">
							<input type="email" name="Email" placeholder="Email" required>
						</div>
						<div class="contact-fields-w3ls">
							<input type="text" name="Telephone" placeholder="Telephone" required>
						</div>
						<div class="contact-fields-w3ls">
							<input type="text" name="Subject" placeholder="Subject" required>
						</div>
					</div>
					<div class="col-md-6 contact_left_grid" data-aos="fade-left">
						<div class="contact-fields-w3ls">
							<textarea name="Message" placeholder="Message..." required></textarea>
						</div>
						<input type="submit" value="Submit">
					</div>
					<div class="clearfix"> </div>

				</form>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer-w3 -->
	<div class="map-section">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217.37242795109808!2d48.01800472534717!3d29.342201802123583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9c93a7306c6d%3A0x3ec10286a2d6b32b!2sOpp%20Burgan%20Bank%20Hawally!5e0!3m2!1sen!2skw!4v1591520259000!5m2!1sen!2skw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>



	
<!-- </html> -->

<?php include('footer.php');?>
 <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
	
	$(document).on('ready', function() {
  
if(window.matchMedia("(max-width: 680px)").matches)
 {
    $(".regular").slick({
 	    autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
 } 
 else
 {
 	$(".regular").slick({
 	    autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4
      });
 }
	});

</script>