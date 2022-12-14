<div class="page-header">
  <div class="row">
    <div class="col-md-4">
      <div class="media">
        <div class="media-body">
          <div class="display-6">Catelog manager</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="pull-xs-right" role="toolbar">
               
               <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Catelog</button>
      </div>
    </div>

  </div>
</div>

<div class="container-fluid">
  <div class="panel-wrapper">
    <div class="panel" >
      <div class="panel-body table-responsive" style="overflow-x:auto;" id="tablefillextend" >
                
      </div>
    </div>
  </div>
</div>
      <!-- END PAGE CONTENT-->
        </div>
      <!-- END VIEW WAPPER-->

      </div>
    <!-- END MAIN WRAPPER-->

    <!--Below is the model for the editing popup section that appears on clicking the edit icon with modelid="trackermodal" -->
<div class="modal fade-scale" id="trackermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="block-header bg-primary" id="modalcaption"></div>
          <div class="modal-body">
           <form method="POST" id="catlForm">

            <div class="row m-b-2">
              <div class="col-sm-12">
                <div class="form-group col-sm-6">
                  <input type="hidden" id = "catid" name="catid"/>
                  <h4 class="demo-sub-title">Catelog name</h4>
                  <input class="form-control focus " type="text" required="required" name="catname" id="catname">
                </div>  
                
                 <div class="form-group col-sm-6">
                  
                  <h4 class="demo-sub-title">Catelog type</h4>
                  <select class="form-control focus " id="cattype" name="cattype">
                    <option value="">Select</option>
                    <option value="Lighting">Lighting</option>
                    <option value="Lighting pricing">Lighting pricing</option>
                    <option value="Security">Security</option>
                                        <option value="Security">Kansas</option>

                  </select>
                </div>    
                      
              </div>

              

              <div class="col-sm-12">
                <div class="form-group col-sm-6">
                  <h4 class="demo-sub-title">File</h4>
                  <input class="form-control focus" type="file" name="menu_image"  id="catfile" required="required">

                       
                  <input type="hidden" name="image1" id="image1">
                  <div id="imagefill"></div>
                                    
                </div>
              </div>

                

          </div>

          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary"  type="submit" >Save</button>
            <!-- <button type="submit" class="form-control tn btn-primary btn-lg" name="save" value="save">Save</button> -->
          </div>
        </form>
      </div>
    </div>
  </div>

<script src="<?php echo base_url(); ?>/templateadmin/assets/scripts/lib/jquery-1.11.3.min.js"></script>

<script type="text/javascript">
      $( document ).ready(function() {
          getcatlog();

      });
      var chk = 0;
      function getcatlog(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_catelog/displaycat');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextend').html(data);   //fetches the requested HTMLsnippet & inserts it on the page
                $('#tablefill').DataTable();
                }
             });
      }
      
      
       function clearall()
    {
      $('#modalcaption').text("Add Catelog");
        $('#catname').val('');
        $('#cattype').val('');
        $('#catfile').val('');
       
        
        
        
        $('#imagefill').html('');
        $('#image1').val('');
          
        $('#catid').val('');
        
        
        getcatlog();
    }


      
    function editcats(id){
      // alert(id);
        $('#modalcaption').text("Edit Catelog");
        $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_catelog/editcatlg');?>/",
                data: {id:id}, // serializes the form's elements.
                success: function(data){
                //   alert(data);
                  var res = JSON.parse(data);
                  getcatlog();
                  // console.log(data);
                   $("#catfile").prop('required',false);
                  $('#catid').val(res.catelogs_id);   //sets value for the field having id="aboutid"
                  $('#catname').val(res.catelogs_name);
                  $('#cattype').val(res.catelogs_type);
                 
                 


                  $('#image1').val(res.catelogs_file); 
                 $('#imagefill').html('<a href="<?php echo base_url();?>/uploads/'+res.catelogs_file+'"><img style="width:250px;height:200px;"src="<?php echo base_url();?>uploads/newima.png"></a>') 

                  } 
               
              });
      }




      $("#catlForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_catelog/updateacatlog');?>/",
              data: new FormData(this),    //creating a FormData object named 'data'
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                //  alert(data);
               if($.trim(data) == "success"){
                  notifyresult('Data Saved','success');  
                  $('#trackermodal').modal('hide');    
                  getcatlog();  //if data is updated,then prints 'Data Saved' & hides the editing popup section when the data is updated,then displays the about table.
               }else{
                  notifyresult('Error','danger');      
                  $('#trackermodal').modal('hide');   
                  getcatlog();  //if data is not updated,then prints 'Error' & hides the editing popup section when the data is updated,then again displays the about table.
               }

              // show response from the php script.            
              }
             });
      });
      
      
        function deletecats(id,img)
      {
        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_catelog/delete_cat');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              if(data == "success")
               {
                  notifyresult('Data Deleted','success');
                  getcatlog();
               }
               else
               {
                  notifyresult('Error','danger');
                   getcatlog();
               }
               

            }
        });
          }
      }
           
     
</script>
   
   