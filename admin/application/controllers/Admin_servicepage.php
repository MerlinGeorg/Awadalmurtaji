<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_servicepage extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->helper(array('form', 'url')); 
    	$this->load->model('Admin_servicepage_model');
	 }

	 public function index()
	{
	    if(isset($_SESSION['username']))
      {
      
      // $getsubmenus = $this->Admin_submenu_model->get_submenus();

      // $getbrands = $this->Admin_brand_model->get_brands(); 
      
      $a = array('content' => 'admin_servicepage_view'
              
                   
       );
      $this->load->view('admintemplate',$a);
      }
      else
      {
        redirect('Admin_login/login_admin');
      }
	}

  public function displayserv()
  {
    $result['res'] = $this->Admin_servicepage_model->get_servpage();

    $this->load->view('display_servpage',$result);
  }

  public function editservp()
  {
     $sid = $this->input->post('id');

    $res = $this->Admin_servicepage_model->get_servpid($sid);

    echo json_encode($res);
  }

  public function updateservpage()
  {
    $serp_id= $this->input->post('servpid');
    
    

    $ins_date =date('Y-m-d');
  
    $data1 = array
        (
        'service_page_title'=>$this->input->post('servptitle'),
        'service_page_title_arab'=>$this->input->post('servptitlearab'),
        'service_page_desc'=>$this->input->post('servpdesc'),
        'service_page_desc_arab'=>$this->input->post('servpdescarab'),        
        'service_page_date'=>$ins_date,
        );


        if ($serp_id!='')
    {
      $result1 = $this->Admin_servicepage_model->update_serp($serp_id,$data1);
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