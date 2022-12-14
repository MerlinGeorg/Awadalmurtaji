        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Gallery name</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Operations</th>
                      

                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
		                      <td><?php echo $row->gallery_name  ?></td>
                          <td>
                            <img height="60" width="60" src="<?php echo base_url(); ?>uploads/<?php echo $row->gallery_image ?>">
                          </td>
                           
                          <?php
                             
                             $rqst_status = $row->gallery_status;

                             if ($rqst_status== 0)
                              {
                            
                           ?>
                          
                          <td><button class="btn btn-danger" onclick="statuschange(<?php echo $row->gallery_id?>,<?php echo $row->gallery_status?>);">blocked</button></td>

                          <?php
                              }
                           else
                            { 
                            
                           ?>

                           <td><button class="btn btn-success" onclick="statuschange(<?php echo $row->gallery_id?>,<?php echo $row->gallery_status?>);">showing</button></td>

                           <?php } ?>  

                          
		                      <td>

                          <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editgallery('<?php echo $row->gallery_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>

                           <i onclick="deletegallery('<?php echo $row->gallery_id;?>','<?php echo $row->gallery_image;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                           </div>
                          </div>
 
                          </td>
		                       
                    		</tr>
                  	<?php }?>  
                  </tbody>
                </table>
  