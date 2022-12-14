<?php include('header-1.php');?>
    

<?php 

        $s3="SELECT * from service_page limit 1";
        $sl3=$db->prepare($s3);
        $sl3->execute();

 $res3=$sl3->fetch(PDO::FETCH_ASSOC);

 
 ?>	


<div class="banner_bottom">
		<div class="container">
			<h3 style="text-align: center;padding: 30px;font-size: 40px;" class="tittle-w3ls"><?php echo $res3['service_page_title'] ?></h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_grid help">
						<!-- <img src="images/ab.png" alt=" " class="img-responsive"> -->
					</div>
					<div class="col-md-12 banner_bottom_left" style="font-size: 20px;">
						
						<p align="justify"><?php echo $res3['service_page_desc'] ?></p>
						
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="news-main" style="margin-top: 30px;">

<?php 

        $s4="SELECT * from services where services_status = '1'";
        $sl4=$db->prepare($s4);
        $sl4->execute();

 while($res4=$sl4->fetch(PDO::FETCH_ASSOC))
{
 
 ?>
				<div class="col-md-6 banner_bottom_left" style="margin-bottom: 20px;">
					<div class="banner_bottom_pos">
						<div class="banner_bottom_pos_grid">
							<div class="col-xs-2 banner_bottom_grid_left">
								<div class="banner_bottom_grid_left_grid">
									<span class="fa fa-cogs" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-xs-10 banner_bottom_grid_right">
							  <h4 style="font-size: 24px;margin-bottom: 10px;"><a href="single_service.php?xfsm=<?php echo $res4['services_id'] ?>"><?php echo $res4['services_name'] ?></a></h4>
								<p align="justify" style="font-size: 18px"><?php echo $res4['services_description'] ?></p>


							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>

<?php } ?>
		<!-- 		
				<div class="col-md-6 banner_bottom_left">
					<div class="banner_bottom_pos">
						<div class="banner_bottom_pos_grid">
							<div class="col-xs-3 banner_bottom_grid_left">
								<div class="banner_bottom_grid_left_grid">
									<span class="fa fa-bolt" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-xs-9 banner_bottom_grid_right">
								<h4><a href="electrical.php">Electrical Work</a></h4>
								<p align="justify">Provide your company with our seasoned and trusted electrical team with the efficient and reliable control it needs.We P...</p>

							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
                <div class="col-md-6 banner_bottom_left">
					<div class="banner_bottom_pos">
						<div class="banner_bottom_pos_grid">
							<div class="col-xs-3 banner_bottom_grid_left">
								<div class="banner_bottom_grid_left_grid">
									<span class="fa fa-lightbulb-o" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-xs-9 banner_bottom_grid_right">
								<h4><a href="lighting.php">Lighting Solutions</a></h4>
								<p align="justify">Lighting Solutions in any premise are among the largest consumers of energy. In any living and working climate, the selection ...</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
                <div class="col-md-6 banner_bottom_left">
					<div class="banner_bottom_pos">
						<div class="banner_bottom_pos_grid">
							<div class="col-xs-3 banner_bottom_grid_left">
								<div class="banner_bottom_grid_left_grid">
									<span class="fa fa-unlock-alt" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-xs-9 banner_bottom_grid_right">
								<h4><a href="security.php">Security Systems</a></h4>
								<p align="justify">Provide your company with our seasoned and trusted electrical team with the efficient and reliable control it needs.We P...</p>

							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div> -->
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>



<?php include('footer.php');?>