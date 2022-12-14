<?php include('header-3.php');?>
    

<?php $serviceid = $_GET['xfsm']; 
// echo $serviceid;

$s2="SELECT * from services where services_id='$serviceid' and services_status = 1";
        $sl2=$db->prepare($s2);
        $sl2->execute();

$res2=$sl2->fetch(PDO::FETCH_ASSOC)
 


?>


<div class="banner_bottom">
		<div class="container">
			<h3 style="text-align: center;font-size: 40px;margin-bottom: 10px;margin-top: 30px" class="tittle-w3ls"><?php echo $res2['services_name'] ?></h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_grid help">
						<!-- <img src="images/ab.png" alt=" " class="img-responsive"> -->
					</div>
					<div class="col-md-12 banner_bottom_left">
						
						<p style="font-size: 20px;" align="justify"><?php echo $res2['services_description'] ?></p>
<?php if($servid=='3') {

$s6="SELECT * from catelogs where catelogs_type='Security' ";
        $sl6=$db->prepare($s6);
        $sl6->execute();

while($res6=$sl6->fetch(PDO::FETCH_ASSOC))
{
?>	
                    <p style="margin-top: 10px;margin-bottom: 20px"><a class="sl-btn" target="blank" href="../admin/uploads/<?php echo $res6['catelogs_file'] ?>"><?php echo $res6['catelogs_name'] ?></a></p>

<?php  } 
}

if($servid=='4') {
$s7="SELECT * from catelogs where catelogs_type='Lighting'";
        $sl7=$db->prepare($s7);
        $sl7->execute();

while($res7=$sl7->fetch(PDO::FETCH_ASSOC))
{
 ?>                    

                   <p style="margin-top: 10px;margin-bottom: 20px"><a class="sl-btn" target="blank" href="../admin/uploads/<?php echo $res7['catelogs_file'] ?>"><?php echo $res7['catelogs_name'] ?></a>



<?php  
}

$s8="SELECT * from catelogs where catelogs_type='Lighting pricing' limit 1";
        $sl8=$db->prepare($s8);
        $sl8->execute();

$res8=$sl8->fetch(PDO::FETCH_ASSOC);
 ?>                    
                   
                   <a class="sl-btn" target="blank" href="../admin/uploads/<?php echo $res8['catelogs_file'] ?>">See Price List</a></p>
                  


<?php } ?>



					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="news-main">

    
<?php $s3="SELECT * from products where products_servicetype='$serviceid' and products_status = 1";
        $sl3=$db->prepare($s3);
        $sl3->execute();

 while($res3=$sl3->fetch(PDO::FETCH_ASSOC))
 { ?>

    <div align="center" class="col-md-4 col-lg-4" style="margin-bottom: 30px;margin-top: 30px;">
    	
    	<?php $ex_file = explode('.', $res3['products_pic']); 
                          $fcount = count($ex_file);
                          
                          $exten='';
                            for($i=0;$i<$fcount;$i++)
                            {
                              if($i==1)
                              {
                                $exten = $ex_file[$i];
                              }
                            } 
                          
                if($exten=="mp4")
                          {
                          ?>

    	<video width="320" class="hover-shadow cursor col-md-12" height="250" style="border-radius: 46px;transition: 0.3s;" controls="controls">
         <source src="../admin/uploads/<?php echo $res3['products_pic'] ?>" type="video/mp4">
        </video>
           
           <?php }  
           else 
           { 
           	?>

           <img style="height: 250px;border-radius: 46px;transition: 0.3s;" src="../admin/uploads/<?php echo $res3['products_pic'] ?>" class="hover-shadow cursor col-md-12" data-toggle="modal" data-target="#myModal<?php echo $res3['products_id']; ?>">

            <?php 
             }
            ?>


        <h4 style="font-style: inherit;font-size: 24px;"><b><?php echo $res3['products_name'] ?></b></h4>

    </div>



    <div  class="modal fade" id="myModal<?php echo $res3['products_id']; ?>" role="dialog" >
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content" style="position: relative;
    background-color: transparent;
    margin: auto;
    padding: 0;
    width: 50%;
    max-width: 1200px;
    width: 100%;
    height: 100%;
    border: none;">

					        <div class="modal-header" style="padding:0;">
					        	
					          <button type="button" style="top: -9px;
    right: 14px;background-color: transparent;color: #ffff" class="col-md-2" data-dismiss="modal">&times;</button>
					          
					        </div>
					        <div class="modal-body" align="center" style="background:transparent; padding: 0">
					          
					          <img style="width: 100%;
    height: auto;" src="../admin/uploads/<?php echo $res3['products_pic'] ?>">

					        </div>
					       <!--  <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div> -->
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