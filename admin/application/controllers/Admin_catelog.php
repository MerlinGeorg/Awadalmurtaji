<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_catelog extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->helper(array('form', 'url')); 
    	$this->load->model('Admin_catelog_model');
	 }

	 public function index()
	{
	    if(isset($_SESSION['username']))
      {
      
      // $getsubmenus = $this->Admin_submenu_model->get_submenus();

      // $getbrands = $this->Admin_brand_model->get_brands(); 
      
      $a = array('content' => 'admin_catelog_view'
              
                   
       );
      $this->load->view('admintemplate',$a);
      }
      else
      {
        redirect('Admin_login/login_admin');
      }
	}

  public function displaycat()
  {
    $result['res'] = $this->Admin_catelog_model->get_cats();

        $this->load->view('display_catelog',$result);
  }

  public function updateacatlog()
  {
      $ctl_id= $this->input->post('catid');
    
    $fillimg = $this->input->post('image1');

    $config['upload_path']="./uploads";
        $config['allowed_types']='pdf';
        $config['remove_spaces'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $data = array('upload_data' => $this->upload->data());
        $this->upload->initialize($config);

        
        if(!$this->upload->do_upload('menu_image'))
        {
          $error = array('error'=> $this->upload->display_errors());

        }

        else
        {
          $data = array('upload_data' => $this->upload->data());
        }

     
        if ($_FILES['menu_image']['size'] == 0)
        {
          $filename = $fillimg;
        }
        else
        {
          if(!empty($ctl_id)){
              $unlink_path = 'uploads/'.$fillimg;
              if(!empty($fillimg)){
                unlink($unlink_path);
              }         
          }
          $filename = $data['upload_data']['file_name'];
        }

        $ins_date =date('Y-m-d');
  
  
      $data1 = array
        (
        'catelogs_name'=>$this->input->post('catname'),
        'catelogs_type'=>$this->input->post('cattype'),
        'catelogs_file'=>$filename,
        'catelogs_date'=>$ins_date
        );


    if ($ctl_id!='')
    {
      $result1 = $this->Admin_catelog_model->update_about($ctl_id,$data1);
    }
    else
    {
      $result1 = $this->Admin_catelog_model->insert_about($data1);
    } 

    if ($result1==1)
    {
      echo "success";
    }
    else
    {
      echo "failed";
    } 
  }

  public function editcatlg()
  {
     $catlid = $this->input->post('id');

     // echo $catlid;
     // die();

    $res = $this->Admin_catelog_model->get_editcats($catlid);

    echo json_encode($res);
  }
 
 
 public function delete_cat()
  {
     $id = $this->input->post('id');
       $image_name = $this->input->post('img');

      

          
          
          $res = $this->Admin_catelog_model->delete_cat_part($id);
          
          $img_path = 'uploads/'.$image_name;

          unlink($img_path);  
             
          if($res == 1)
          {   
            echo "success";
          }else{
          
            echo "failed";
          }
  }
 


 }