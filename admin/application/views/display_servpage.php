<table class="table table-hover table-bordered  " id="tablefill">
  <thead>
    <tr><th>Service page Title</th>
        <th>Service page Title arabic</th>
        <th>Descrition</th>
        <th>Descrition arabic</th>
       
        <th>Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php 
                  	
    foreach($res as $row){?>
      <tr>
		      <td><?php echo $row->service_page_title?></td>
          <td><?php echo $row->service_page_title_arab?></td>
		      <td><?php echo $row->service_page_desc?></td>
          <td><?php echo $row->service_page_desc_arab?></td>
          
		      <!-- <td><a target="blank" href="<?php echo base_url();?>/uploads/<?php echo $row->about_profile ?>"><img height="60" width="60" src="<?php echo base_url(); ?>uploads/newima.png"></a></td> -->
                       
            <!-- <a target="blank"> is used to open the linked document in new window -->


          <td><div class="media-right" class="col-md-2">
                <div class="col-md-12">
                  <i data-toggle="modal" data-target="#trackermodal" onclick="editservpage('<?php echo $row->service_page_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                </div>
              </div></td>   
                           
      </tr>

  <?php }?>  
                
  </tbody>
</table>
  