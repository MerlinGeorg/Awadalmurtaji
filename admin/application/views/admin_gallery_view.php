<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Gallery</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Image</button>
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
<div class="modal fade-scale" id="trackermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="block-header bg-primary" id="modalcaption"></div>
          <div class="modal-body">
           <form method="POST" id="menuForm"  >

                  <div class="row m-b-2">

                    <div class="col-sm-12">
                    <div class="form-group col-sm-6">
                      <input type="hidden" id = "formid" name="formnm"/>
                      <h4 class="demo-sub-title">Image Name</h4>
                      <input class="form-control focus " type="text" required="required" name="namenm" id="nameid">
                    </div>  
                                       
                     </div>

                   <div class="col-sm-12">
                     
                     <div class="form-group col-sm-6">
                    <h4 class="demo-sub-title">image</h4>
                      <input class="" type="file" name="imagenm"  id="imageid" required="required">
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
          getgallery();

      });
      var chk = 0;
      function getgallery(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_gallery/displaytable');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextend').html(data);
                $('#tablefill').DataTable();
                // if(chk == 0){
                  
                // var table = $('#tablefill');
                //   table.DataTable({
                //   paging: true,
                //   searching: true,
                //   ordering: true,
                //   autoWidth: false,
                //   info: false,
                //   stateSave: false,
                //   responsive: true
                //   });
                
                // }
                
                // var table = $('#tablefill').DataTable();
                
              // show response from the php script.            
              }
             });
      }
      function clearall(){
        $('#modalcaption').text("Add Image");
        $('#nameid').val('');   
        
        $('#imageid').val('');
        $('#imagefill').html('');
        $('#image1').val('');
          
        $('#formid').val('');
        
        
        getgallery();
        // $('#userfullname').val('');
        // $('#userfullname').val('');    
      }
      

      $("#menuForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_gallery/insertrow');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                // alert(data);
               if($.trim(data) == "success"){
                  notifyresult('Data Saved','success');
                  $('#trackermodal').modal('hide');
                  getgallery();
               }else{
                  notifyresult('Error','danger');
                  $('#trackermodal').modal('hide');
                  getgallery();
               }

              // show response from the php script.            
              }
             });
      });




      function editgallery(id){
        $('#modalcaption').text("Edit Gallery");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_gallery/editrow');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              var res = JSON.parse(data);
              getgallery();
              // console.log(data);
              $("#imageid").prop('required',false);
              $('#formid').val(res.gallery_id);
              $('#nameid').val(res.gallery_name);
             $("#imageid").val('');
              $('#image1').val(res.gallery_image); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.gallery_image+'">') 
              // $('#file1').val(res.file);
              // $('#otherfill').html(res.file); 
              
               

            }
        });
      }
      
      function deletegallery(id,img){
        var result = confirm("Do you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_gallery/deleterow');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getgallery();
               }else{
                  notifyresult('Error','danger');
               }
               

            }
        });
          }
        }




           function statuschange(id,status)
           {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_gallery/changestatus');?>/",
              data: {id:id,status:status}, // serializes the form's elements.
             success: function(data)
             {
              if(data=="success")
              {
                window.location.reload();
              }
             }
        });
           }
        
     
    </script>
   
   