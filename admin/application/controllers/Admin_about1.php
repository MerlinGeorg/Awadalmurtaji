<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_about extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->helper(array('form', 'url')); 
    	$this->load->model('Admin_about_model');
	 }

	 public function index()
	{
	    if(isset($_SESSION['username']))
      {
      
      // $getsubmenus = $this->Admin_submenu_model->get_submenus();

      // $getbrands = $this->Admin_brand_model->get_brands(); 
      
      $a = array('content' => 'admin_about_view'
              
                   
       );
      $this->load->view('admintemplate',$a);
      }
      else
      {
        redirect('Admin_login/login_admin');
      }
	}
 
	public function displayabout()
	{
		$result['res'] = $this->Admin_about_model->get_about();

  	    $this->load->view('display_about',$result);
	}

	public function editabout()
  {
  	    $aboutid = $this->input->post('id');

		$res = $this->Admin_about_model->get_aboutid($aboutid);

		echo json_encode($res);
  }

  public function updateabout()
  {
  	    $about_id= $this->input->post('aboutid');
		
		$fillimg = $this->input->post('image1');

		$config['upload_path']="./uploads";
        $config['allowed_types']='jpeg|jpg|png|pdf|xls|xlsx|docx';
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
        	if(!empty($about_id)){
          		$unlink_path = 'uploads/'.$fillimg;
          		if(!empty($fillimg)){
            		unlink($unlink_path);
          		}         
        	}
        	$filename = $data['upload_data']['file_name'];
      	}
	
  
		$data1 = array
      	(
       	'about_title'=>$this->input->post('abouttitle'),
       	'about_story'=>$this->input->post('aboutstory'),
       	'about_strength'=>$this->input->post('aboutstrength'),
       	'about_title_arab'=>$this->input->post('abouttitlearab'),
       	'about_story_arab'=>$this->input->post('aboutstoryarab'),
       	'about_strength_arab'=>$this->input->post('aboutstrengtharab'),
       	'about_profile'=>$filename,
      	);


        if ($about_id!='')
		{
			$result1 = $this->Admin_about_model->update_about($about_id,$data1);
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

}