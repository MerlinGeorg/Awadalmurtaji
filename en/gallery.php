<?php include('header-1.php');?>
    


<div class="banner_bottom">
    <div class="container">
      <h3 style="text-align: center;font-size: 40px;margin-bottom: 10px;margin-top: 30px" class="tittle-w3ls">Our Gallery</h3>
    


      <div class="news-main">

    
<?php $s3="SELECT * from gallery where gallery_status = 1";
        $sl3=$db->prepare($s3);
        $sl3->execute();

 while($res3=$sl3->fetch(PDO::FETCH_ASSOC))
 { ?>

    <div align="center" class="col-md-4 col-lg-4" style="margin-bottom: 30px;margin-top: 30px;">
      
      <?php $ex_file = explode('.', $res3['gallery_image']); 
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
         <source src="../admin/uploads/<?php echo $res3['gallery_image'] ?>" type="video/mp4">
        </video>
           
           <?php }  
           else 
           { 
            ?>

           <img style="height: 250px;border-radius: 46px;transition: 0.3s;" src="../admin/uploads/<?php echo $res3['gallery_image'] ?>" class="hover-shadow cursor col-md-12" data-toggle="modal" data-target="#myModal<?php echo $res3['gallery_id']; ?>">

            <?php 
             }
            ?>


        <!--<h4 style="font-style: inherit;font-size: 24px;"><b><?php echo $res3['products_name'] ?></b></h4>-->

    </div>



    <div  class="modal fade" id="myModal<?php echo $res3['gallery_id']; ?>" role="dialog" >
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
    height: auto;" src="../admin/uploads/<?php echo $res3['gallery_image'] ?>">

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