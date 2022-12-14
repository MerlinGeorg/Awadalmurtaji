<table class="table table-hover table-bordered  " id="tablefill">
  <thead>
    <tr><th>About Title</th>
        <th>About Story</th>
        <th>About Strength</th>
        <th>About Vision</th>
        <th>About Title Arab</th>
        <th>About Story Arab</th>
        <th>About Vision Arab</th>
        <th>About Strength Arab</th>
        <th>About Profile File</th>
        <th>Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php 
                  	
    foreach($res as $row){?>
      <tr>
		      <td><?php echo $row->about_title?></td>
          <td><?php echo $row->about_story?></td>
		      <td><?php echo $row->about_strength?></td>
          <td><?php echo $row->about_vision?></td>
          <td><?php echo $row->about_title_arab?></td>
          <td><?php echo $row->about_story_arab?></td>
          <td><?php echo $row->about_vision_arab?></td>
          <td><?php echo $row->about_strength_arab?></td>
		      <td><a target="blank" href="<?php echo base_url();?>/uploads/<?php echo $row->about_profile ?>"><img height="60" width="60" src="<?php echo base_url(); ?>uploads/newima.png"></a></td>
                       
            <!-- <a target="blank"> is used to open the linked document in new window -->


          <td><div class="media-right" class="col-md-2">
                <div class="col-md-12">
                  <i data-toggle="modal" data-target="#trackermodal" onclick="editabout('<?php echo $row->about_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                </div>
              </div></td>   
                           
      </tr>

  <?php }?>  
                
  </tbody>
</table>
  