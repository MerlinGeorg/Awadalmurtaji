<?php 
class Admin_servicepage_model extends CI_Model 
{
	function get_servpage()
	{
		$query = $this->db->get('service_page');
		return $query->result();
	}

	function get_servpid($sid)
	{
		 $this->db->where('service_page_id',$sid);
		 $query =$this->db->get('service_page');
		 return $query->row();
	}

	function update_serp($serp_id,$data1)
	{
		$this->db->where('service_page_id',$serp_id);
		$query = $this->db->update('service_page',$data1);
		return $query;
	}
}