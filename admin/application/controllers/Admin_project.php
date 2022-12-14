<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_project extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	
    	
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_board extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Admin_login_model');
    	
    	$this->load->model('Admin_project_model');
	}

	public function index()
	{ 
    if(isset($_SESSION['username']))
    {
    
    // $getmenus = $this->Admin_submenu_model->getmenus(); 
    
    $a = array('content' => 'admin_project_view'
                
            );
    $this->load->view('admintemplate',$a);
    }
    else
    {
      redirect('Admin_login/login_admin');
    }
   
	}


	public function insertrow()
	{
		$page_id = $this->input->post('formnm');
		
      $ins_date = date('Y-m-d');

      $data1 = array
      (
      	'project_name'=>$this->input->post('namenm'),
       'project_serialno'=>$this->input->post('serialnm'),
       'project_value'=>$this->input->post('valuenm'),
       'project_namear'=>$this->input->post('namearnm'),
       'project_serialar'=>$this->input->post('serialarnm'),
       'project_valuear'=>$this->input->post('valuearnm'),
       'project_status'=>0,
       'project_date'=>$ins_date
      );
      $data2 = array
      (
      	'project_name'=>$this->input->post('namenm'),
       'project_serialno'=>$this->input->post('serialnm'),
       'project_value'=>$this->input->post('valuenm'),
       'project_namear'=>$this->input->post('namearnm'),
       'project_serialar'=>$this->input->post('serialarnm'),
       'project_valuear'=>$this->input->post('valuearnm'),     
       'project_date'=>$ins_date
      );

	if ($page_id=='')
	{
		$result1 = $this->Admin_project_model->insert($data1);
	}
	else
	{
         $result1 = $this->Admin_project_model->update($page_id,$data2);
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


  

  public function displaytable()
	{
		$result['res'] = $this->Admin_project_model->display();

  	    $this->load->view('display_project',$result);
	}



  public function editrow()
	{
		$menuid = $this->input->post('id');

		$res = $this->Admin_project_model->edit($menuid);

		echo json_encode($res);
	}


public function changestatus()
	{
		$status = $this->input->post('status');
		$page_id = $this->input->post('id');

		if ($status==1)
		{
			$data1 = array
			(
				'project_status'=>0
			);
		}
		else
		{
			if($status==0)
			{
				$data1 = array
				(
					'project_status'=>1
				);
			}
		}
       
       $res123 = $this->Admin_project_model->update_status($page_id,$data1);

       if ($res123==1) 
       {
       	 echo "success";
       }
       else
       {
       	echo "failed";
       }	

	}	


	public function deleterow()
	  {
	    $page_id = $this->input->post('id');
	    
  		$res = $this->Admin_project_model->delete($page_id);
	           
	        if($res == 1)
	        {   
	          echo "success";
	        }else{
	        
	          echo "failed";
	        }
	  }


}
