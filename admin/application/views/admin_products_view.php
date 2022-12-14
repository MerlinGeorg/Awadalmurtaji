<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Product management</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Product</button>
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
           <form method="POST" id="prodForm"  >

                  <div class="row m-b-2">

                    <div class="col-sm-12">
                    <div class="form-group col-sm-6">
                      <input type="hidden" id = "prodid" name="prodid"/>
                      <h4 class="demo-sub-title">Product name</h4>
                      <input class="form-control focus " type="text" required="required" name="prodname" id="prodname">
                    </div>  
                    
                    <div class="form-group col-sm-6">
                      
                      <h4 class="demo-sub-title">Product name arabic</h4>
                      <input class="form-control focus " type="text" required="required" name="prodnamearab" id="prodnamearab">
                    </div>  
                    
                    
                     </div>


                   <div class="col-sm-12">
                     
                     <div class="form-group col-sm-6">
                    <h4 class="demo-sub-title">image</h4>
                      <input class="" type="file" name="menu_image"  id="prodimage" required="required">
                    <input type="hidden" name="image1" id="image1">
                    <div id="imagefill"></div>
                     </div>

                     <div class="form-group col-sm-6">
                     
                      <h4 class="demo-sub-title">Service type</h4>
                      <select class="form-control focus" id="prodserv" name="prodserv">
                        <option value="">Select</option>
                        <?php foreach($servtype as $row) { ?>
                        <option value="<?php echo $row->services_id ?>"><?php echo $row->services_name ?></option> 
                        <?php } ?> 
                      </select>
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
          getproducts();

      });
      var chk = 0;
      function getproducts(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_products/display_products');?>/",
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
        $('#modalcaption').text("Add Product");
        $('#prodname').val('');
        $('#prodnamearab').val('');
        $('#prodserv').val('');
       
        
        
        $('#prodimage').val('');
        $('#imagefill').html('');
        $('#image1').val('');
          
        $('#prodid').val('');
        
        
        getproducts();
        // $('#userfullname').val('');
        // $('#userfullname').val('');    
      }
      

      $("#prodForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_products/insertprod');?>/",
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
                  getproducts();
               }else{
                  notifyresult('Error','danger');
                  $('#trackermodal').modal('hide');
                  getproducts();
               }

              // show response from the php script.            
              }
             });
      });

      // $('#submit').on('click',function(){
      //   var inputFile=$('input[name=file]');
      //   var fileToUpload=inputFile[0].files[0];
      //   var other_data = $('#frm_imageuupload').serializeArray();
      //   var formdata=new FormData();
      //   formdata.append(fileToUpload);
      //   formdata.append(other_data);
      //       $.ajax({
      //         url:"<?php echo base_url('index.php/Categoriesadmin/do_upload');?>",
      //         method:'POST',
      //         data: formdata,
      //         contentType:false,
              
      //         processData:false,
      //         success:function(data)
      //         {
      //           if (data== 'true'){   
      //          window.location.reload();
      //       }
      //       else{
      //          alert("Pls Try Again");
      //         }
      //       }
      //       });
      //     }
      //   );


      // $(document).ready(function(){
 
      //   $('#submit').submit(function(e){
      //       e.preventDefault(); 
      //            $.ajax({
      //                url:'<?php echo base_url();?>index.php/Admin_board/do_upload',
      //                type:"post",
      //                data:new FormData(this),
      //                processData:false,
      //                contentType:false,
      //                cache:false,
      //                async:false,
      //                 success: function(data){
      //                     alert("Upload Image Successful.");
      //              }
      //            });
      //       });
      
      



      function editsubmenu(id){
        $('#modalcaption').text("Edit Submenu");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_products/editproduct');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              var res = JSON.parse(data);
              getproducts();
              // console.log(data);
              $("#prodimage").prop('required',false);
              $('#prodid').val(res.products_id);
              $('#prodname').val(res.products_name);
              $('#prodnamearab').val(res.products_name_arab);
              $('#prodserv').val(res.products_servicetype);
              
              
             
              $('#image1').val(res.products_pic); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.products_pic+'">') 
               
              
               

            }
        });
      }
      
      function deletesubmenu(id,img){
        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_products/delete_prod');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getproducts();
               }else{
                  notifyresult('Error','danger');
                   getproducts();
               }
               

            }
        });
          }
        }



          // function priority_set(id,status)
          // {
            
          //  $.ajax({
          //     method: "POST",
          //     url: "<?php echo base_url('index.php/Admin_board/pro_check');?>/",
          //     data: {id:id,status:status}, // serializes the form's elements.
          //    success: function(data){
              
          //     window.location.href="";
          //     getmenus();
          //      }
          //      });
          // }


           function statuschange(id,status)
           {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_products/changestatus');?>/",
              data: {id:id,status:status}, // serializes the form's elements.
             success: function(data)
             {
              if(data=="success")
              {
                getproducts();
              }
             }
        });
           }
        
     
    </script>
   
   