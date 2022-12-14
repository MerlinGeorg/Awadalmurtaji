        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Project Name</th>
                      <th>Project Serial Number</th>
                      <th>Project Value</th>
                      <th>Project Name Arabic</th>
                      <th>Project Serial Number Arabic</th>
                      <th>Project Value Arabic</th>
                      <th>Project Status</th>
                      <th>Operations</th>
                      

                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
		                      <td><?php echo $row->project_name  ?></td>
                          <td><?php echo $row->project_serialno  ?></td>
                          <td><?php echo $row->project_value  ?></td>
                          <td><?php echo $row->project_namear  ?></td>
                          <td><?php echo $row->project_serialar  ?></td>
                          <td><?php echo $row->project_valuear  ?></td>

                          <?php
                             
                             $rqst_status = $row->project_status;

                             if ($rqst_status== 0)
                              {
                            
                           ?>
                          
                          <td><button class="btn btn-danger" onclick="statuschange(<?php echo $row->project_id?>,<?php echo $row->project_status?>);">Ongoing</button></td>

                          <?php
                              }
                           else
                            { 
                            
                           ?>

                           <td><button class="btn btn-success" onclick="statuschange(<?php echo $row->project_id?>,<?php echo $row->project_status?>);">Completed</button></td>

                           <?php } ?>  

                          
		                      <td>

                          <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editproject('<?php echo $row->project_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>

                           <i onclick="deleteproject('<?php echo $row->project_id;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                           </div>
                          </div>
 
                          </td>
		                       
                    		</tr>
                  	<?php }?>  
                  </tbody>
                </table>
  