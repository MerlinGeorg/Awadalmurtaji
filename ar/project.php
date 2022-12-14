<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head></html>

  <?php include('header-1.php');?>
    




<div class="banner_bottom">
		<div class="container">
			<h3 style="text-align: center;padding: 30px;font-size: 40px;" class="tittle-w3ls">المشاريع  </h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_grid help">
						<!-- <img src="images/ab.png" alt=" " class="img-responsive"> -->
					</div>
					<div class="col-md-12 banner_bottom_left" style="font-size: 20px;">
						
						
							<div class="table-responsive-xl">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">اسم </th>
      <th scope="col">رقم سري  </th>
      <th scope="col">القيمة  </th>
      <th scope="col">الحالة  </th>
    </tr>
  </thead>
  <tbody>
  	<?php 

        $s3="SELECT * from projects";
        $sl3=$db->prepare($s3);
        $sl3->execute();
         
    while($res3=$sl3->fetch(PDO::FETCH_ASSOC))
	{ ?>	
	<tr>
      <td><?php echo $res3['project_namear'] ;?></td>
      <td><?php echo $res3['project_serialar'] ;?></td>
      <td><?php echo $res3['project_valuear'] ;?></td>

 <?php $status=$res3['project_status'] ;
      if($status=='0')
      {?>
      	<td><?php echo "جاري التنفيذ  " ;?></td>
     <?php }
      else{?>
      	<td><?php echo "منجز   " ;?></td>
  		<?php } ?>

    </tr><?php } ?>
    
  </tbody>
</table></div>
		
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="news-main" style="margin-top: 30px;">


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