<table class="table table-hover table-bordered  " id="tablefill">
  <thead>
    <tr><th>Catelog name</th>
        <th>Catelog type</th>
       
        <th>Catelog File</th>
        <th>Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php 
                  	
    foreach($res as $row){?>
      <tr>
		      <td><?php echo $row->catelogs_name?></td>
          <td><?php echo $row->catelogs_type?></td>
		      
		      <td><a target="blank" href="<?php echo base_url();?>uploads/<?php echo $row->catelogs_file ?>"><img height="60" width="60" src="<?php echo base_url(); ?>uploads/newima.png"></a></td>
                       
            <!-- <a target="blank"> is used to open the linked document in new window -->


          <td><div class="media-right" class="col-md-2">
                <div class="col-md-12">
                  <i data-toggle="modal" data-target="#trackermodal" onclick="editcats('<?php echo $row->catelogs_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                  <i onclick="deletecats('<?php echo $row->catelogs_id;?>','<?php echo $row->catelogs_file;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                </div>
              </div></td>   
                           
      </tr>

  <?php }?>  
                
  </tbody>
</table>
  