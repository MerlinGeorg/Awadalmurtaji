        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Product name</th>
                      <th>Product name arabic</th>
                      <th>Service Type</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Operations</th>
                      

                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
		                      <td><?php echo $row->products_name  ?></td>
		                      <td><?php echo $row->products_name_arab?></td>
                          <td><?php echo $row->services_name?></td>
		                      
		                       
		                      
                          <?php $ex_file = explode('.', $row->products_pic); 
                          $fcount = count($ex_file);
                          
                          $exten='';
                            for($i=0;$i<$fcount;$i++)
                            {
                              if($i==1)
                              {
                                $exten = $ex_file[$i];
                              }
                            } 
                        //   echo $exten;
                          if($exten=="mp4")
                          {
                          ?>
                          <td><video width="200" height="150" controls="controls">
                            <source src="<?php echo base_url(); ?>uploads/<?php echo $row->products_pic ?>" type="video/mp4">
                          </video></td>
                        <?php }
                        else
                        {
                           ?> 
                        <td>
                            <img height="60" width="60" src="<?php echo base_url(); ?>uploads/<?php echo $row->products_pic ?>">
                          </td>
                           
                          <?php }
                             
                             $prod_status = $row->products_status;

                             if ($prod_status== 0)
                              {
                            
                           ?>
                          
                          <td><button class="btn btn-danger" onclick="statuschange(<?php echo $row->products_id?>,<?php echo $row->products_status?>);">blocked</button></td>

                          <?php
                              }
                           else
                            { 
                            
                           ?>

                           <td><button class="btn btn-success" onclick="statuschange(<?php echo $row->products_id?>,<?php echo $row->products_status?>);">showing</button></td>

                           <?php } ?> 

                          
		                      <td>

                          <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editsubmenu('<?php echo $row->products_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>

                           <i onclick="deletesubmenu('<?php echo $row->products_id;?>','<?php echo $row->products_pic;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                           </div>
                          </div>
 
                          </td>
		                       
                    		</tr>
                  	<?php }?>  
                  </tbody>
                </table>
  