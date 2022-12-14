<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">PROJECTS</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add New Project</button>
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
                      <h4 class="demo-sub-title">Project Name</h4>
                      <input class="form-control focus " type="text" required="required" name="namenm" id="nameid">
                    </div>  
                                       
                     </div>

                   <div class="col-sm-12">
                     
                     <div class="form-group col-sm-6">
                    <h4 class="demo-sub-title">Project Serial Number</h4>
                      <input class="form-control focus " type="text" required="required" name="serialnm" id="serialid">
                     </div>

                   </div>

                    <div class="col-sm-12">
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Project Value</h4>
                      <input class="form-control focus " type="text" required="required" name="valuenm" id="valueid">
                    </div>  
                                       
                     </div>

                    <div class="col-sm-12">
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Project Name Arabic</h4>
                      <input class="form-control focus " type="text" required="required" name="namearnm" id="namearid">
                    </div>  
                                       
                     </div>

                   <div class="col-sm-12">
                     
                     <div class="form-group col-sm-6">
                    <h4 class="demo-sub-title">Serial Number Arabic</h4>
                      <input class="form-control focus " type="text" required="required" name="serialarnm" id="serialarid">
                     </div>

                   </div>

                    <div class="col-sm-12">
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Project Value Arabic</h4>
                      <input class="form-control focus " type="text" required="required" name="valuearnm" id="valuearid">
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
          getproject();

      });
      var chk = 0;
      function getproject(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_project/displaytable');?>/",
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
        $('#modalcaption').text("Add Project");
        $('#nameid').val('');   
        $('#serialid').val('');
        $('#valueid').val('');
        $('#namearid').val('');   
        $('#serialarid').val('');
        $('#valuearid').val('');

        $('#formid').val('');
        
        
        getproject();
        // $('#userfullname').val('');
        // $('#userfullname').val('');    
      }
      

      $("#menuForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_project/insertrow');?>/",
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
                  getproject();
               }else{
                  notifyresult('Error','danger');
                  $('#trackermodal').modal('hide');
                  getproject();
               }

              // show response from the php script.            
              }
             });
      });




      function editproject(id){
        $('#modalcaption').text("Edit Project");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_project/editrow');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              var res = JSON.parse(data);
              getproject();
              // console.log(data);
              $("#imageid").prop('required',false);
              $('#formid').val(res.project_id);
              $('#nameid').val(res.project_name); 
              $('#serialid').val(res.project_serialno); 
              $('#valueid').val(res.project_value); 
              $('#namearid').val(res.project_namear); 
              $('#serialarid').val(res.project_serialar); 
              $('#valuearid').val(res.project_valuear); 
               }
        });
      }
      
      function deleteproject(id){
        var result = confirm("Do you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_project/deleterow');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getproject();
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
              url: "<?php echo base_url('index.php/Admin_project/changestatus');?>/",
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
   
   