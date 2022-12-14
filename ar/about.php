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

            <h3 class="tittle-w3layouts"><?php echo $res2['about_title_arab'] ?></h3>
            <div class="banner-w3-agileits-btm-main">
                <div class="banner-w3-agileits-btm-right">
                    <h4 class="sub-hdng">قصتنا</h4>
                    <p class="paragraph-w3-agile" align="justify"><?php echo $res2['about_story_arab'] ?></p>


                    <h6>
                        رؤيتنا<span class="fa fa-leaf" aria-hidden="true"></span>
                    </h6>

                    <p class="paragraph-w3-agile" align="justify"><?php echo $res2['about_vision_arab'] ?></p>
                    
                 
                </div>
                <div class="banner-w3-agileits-btm-left">
                    <div class="banner-w3-agileits-btm-top">
                        <div class="banner-w3-agileits-btm-inner a1">
                            <h6 align="right">تفوق</h6>
                            

                             
                             <p align="right">نسعى جاهدين للتميز في الجودة ، ونحن نبتكر باستمرار باستخدام التقنيات المتقدمة</p>
                             
                        </div>
                        <div class="banner-w3-agileits-btm-inner a5">
                       
                            <h6 align="right">التزام</h6>
                            

                             
                           <p align="right"> نحن ملتزمون تمامًا بتقديم متطلبات العملاء من خلال الاستخدام الأكثر كفاءة للموارد</p>
                             
                        

                        </div>
                    </div>
                    <div class="banner-w3-agileits-btm-bottom">
                        <div class="banner-w3-agileits-btm-inner a6">

<h6 align="right">الاستدامة</h6>
                            

                             
                          <p align="right"> نحن ملتزمون بحماية جميع أصحاب المصلحة ، بما في ذلك بشكل خاص صحة وسلامة موظفينا والمجتمع والبيئة</p>
                        </div>
                        <div class="banner-w3-agileits-btm-inner a4">
                            <h6 align="right">مسئولية</h6>
 <p align="right"> حن مسؤولون بشكل كامل عن القيام بمسؤولياتنا وفقًا للقيم والمبادئ</p>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




	<div class="what-wedo-w3ls">
		<div class="container">
			<h3 class="tittle-w3layouts">قوتنا</h3>
			<div class="wedo-main">
				<div class="wedo-left">
					<h4 class="sub-hdng top-mrgn">قوة</h4>
					<p class="paragraph-w3-agile" align="justify"><?php echo $res2['about_strength_arab'] ?></p>

                    <div style="padding-top: 10px;"><a target="blank" href="../admin/uploads/<?php echo $res2['about_profile'] ?>" style="cursor: pointer;" class="sl-btn"><b>انقر لرؤية ملفنا الشخصي</b>
                    </a></div>
				</div>

				
				<div class="wedo-right inn-img-margn">
					<img src="images/bb3.jpg" alt=" " class="img-responsive second-img">
				</div>
			</div>
		</div>
	</div>


<?php  include('footer.php');?>