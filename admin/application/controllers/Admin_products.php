<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_products extends CI_Controller {

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
    	
    	$this->load->model('Admin_products_model');
	}

	public function index()
	{ 
    if(isset($_SESSION['username']))
    {
    
    $getservice = $this->Admin_products_model->getservices(); 
    
    $a = array('content' => 'admin_products_view',
                'servtype'=>$getservice
            );
    $this->load->view('admintemplate',$a);
    }
    else
    {
      redirect('Admin_login/login_admin');
    }
   
	}

	public function display_products()
	{

		$result['res'] = $this->Admin_products_model->get_prods();

  	    $this->load->view('display_products',$result);
	}

	public function insertprod()
	{
		$prod_id= $this->input->post('prodid');
		$fillimg = $this->input->post('image1');

		$config['upload_path']="./uploads";
        $config['allowed_types']='jpeg|jpg|png|mp4';
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
        if(!empty($prod_id)){
          $unlink_path = 'uploads/'.$fillimg;
          if(!empty($fillimg)){
            unlink($unlink_path);
          }         
        }
        $filename = $data['upload_data']['file_name'];
      }
	
     $prodname = $this->input->post('prodname');

	 $ins_date = date('Y-m-d');

      $data1 = array
      (
       'products_name'=>$prodname,
       'products_name_arab'=>$this->input->post('prodnamearab'),
       'products_servicetype'=>$this->input->post('prodserv'),
       'products_pic'=>$filename,
       'products_status'=>'1',
       'products_date'=>$ins_date
       
      );

            if ($prod_id=='')
	{
		$res1=$this->Admin_products_model->getsamenamecount($prodname);
        $prodnamecount= $res1->prodnamecount;
        if($prodnamecount=='0')
        {
        	$result1 = $this->Admin_products_model->insertProduct($data1);

		        	if ($result1==1)
			{
				echo "success";
			}
			else
			{
				echo "failed";
			}	
        }
        else
        {
          echo "nameexist";
        }	
		
	}
	else
	{
		$res1=$this->Admin_products_model->getsamenamecount($prodname);
        $prodnamecount= $res1->prodnamecount;
        if($prodnamecount=='0')
        {
          $result1 = $this->Admin_products_model->updateProduct($prod_id,$data1);
          if ($result1==1)
			{
				echo "success";
			}
			else
			{
				echo "failed";
			}	
        }
        else
        {
            $res2 = $this->Admin_products_model->getsamename($prodname);
            $existnameid = $res2->products_id;

            if($prod_id==$existnameid)
            {
            	$result1 = $this->Admin_products_model->updateProduct($prod_id,$data1);
	          if ($result1==1)
				{
					echo "success";
				}
				else
				{
					echo "failed";
				}	
            }
            else
            {
            	echo "nameexist";
            }	
        }	
         
	}	


	
	}

	public function editproduct()
	{
		$pid = $this->input->post('id');

		$res = $this->Admin_products_model->get_prodEdit($pid);

		echo json_encode($res);
	}

	public function delete_prod()
	{
		 $prod_id = $this->input->post('id');
	     $image_name = $this->input->post('img');

	    

	        
	        
	        $res = $this->Admin_products_model->delete_prod_part($prod_id);
	        
	        $img_path = 'uploads/'.$image_name;

	        unlink($img_path);  
	           
	        if($res == 1)
	        {   
	          echo "success";
	        }else{
	        
	          echo "failed";
	        }
	}

	public function changestatus()
	{
		$prod_stat = $this->input->post('status');
		$prod_id = $this->input->post('id');

		if ($prod_stat==1)
		{
			$data1 = array
			(
				'products_status'=>0
			);
		}
		else
		{
			if($prod_stat==0)
			{
				$data1 = array
				(
					'products_status'=>1
				);
			}
		}
       
       $res123 = $this->Admin_products_model->updateprod_stat($prod_id,$data1);

       if ($res123==1) 
       {
       	 echo "success";
       }
       else
       {
       	echo "failed";
       }	
	}


}	