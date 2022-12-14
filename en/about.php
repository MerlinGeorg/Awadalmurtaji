<?php include('header-1.php');?>

<link rel="stylesheet" type="text/css" href="css/mycss.css">
<?php 

        $s2="SELECT * from about limit 1";
        $sl2=$db->prepare($s2);
        $sl2->execute();

 $res2=$sl2->fetch(PDO::FETCH_ASSOC);

 
 ?>

<div class="banner-w3-agileits-btm" >
        <div class="container">

            <h3 class="tittle-w3layouts"><?php echo $res2['about_title'] ?></h3>
            <div class="banner-w3-agileits-btm-main">
                <div class="banner-w3-agileits-btm-right">
                    <h4 class="sub-hdng">story</h4>
                    <p class="paragraph-w3-agile" align="justify"><?php echo $res2['about_story'] ?></p>


                    <h6>
                        Our vision<span class="fa fa-leaf" aria-hidden="true"></span>
                    </h6>

                    <p class="paragraph-w3-agile" align="justify"><?php echo $res2['about_vision'] ?></p>
                    
                 
                </div>
                <div class="banner-w3-agileits-btm-left">
                    <div class="banner-w3-agileits-btm-top">
                        <div class="banner-w3-agileits-btm-inner a1">
                            <h6>EXCELLENCE </h6>
                            

                             
                             <p align="justify">We strive for excellence in quality, and we continuously innovate, utilizing advanced technologies.</p>
                             
                        </div>
                        <div class="banner-w3-agileits-btm-inner a5">
                       
                            <h6>COMMITMENT</h6>
                            

                             
                           <p> We are fully dedicated to delivering clients requirement through the most efficient use of resources.</p>
                             
                        

                        </div>
                    </div>
                    <div class="banner-w3-agileits-btm-bottom">
                        <div class="banner-w3-agileits-btm-inner a6">

<h6>SUSTAINABILITY</h6>
                            

                             
                          <p> We are committed to safeguarding all stakeholders, including especially the health and safety of our employees, society and the environment.</p>
                        </div>
                        <div class="banner-w3-agileits-btm-inner a4">
                            <h6>ACCOUNTABILITY</h6>
 <p> We are fully accountable for carrying out our responsibilities in accordance to the values and principles.</p>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




	<div class="what-wedo-w3ls">
		<div class="container">
			<h3 class="tittle-w3layouts">Our Strength</h3>
			<div class="wedo-main">
				<div class="wedo-left">
					<h4 class="sub-hdng top-mrgn"> Strength</h4>
					<p class="paragraph-w3-agile" align="justify"><?php echo $res2['about_strength'] ?></p>

                   <div style="padding-top: 10px;"><a target="blank" href="../admin/uploads/<?php echo $res2['about_profile'] ?>" style="cursor: pointer;" class="sl-btn"><b>Click to see our profile</b>
                    </a></div>
				</div>

				
				<div class="wedo-right inn-img-margn">
					<img src="images/bb3.jpg" alt=" " class="img-responsive second-img">
				</div>
			</div>
		</div>
	</div>


<?php  include('footer.php');?>