<?php 
class Admin_about_model extends CI_Model 
{
	function get_about()
   {
   		$query = $this->db->get('about');
   		return $query->result();
   }

   function get_aboutid($aboutid)
   {
   	$this->db->where('about_id',$aboutid);
   	$query = $this->db->get('about');
   	return $query->row();
   }

   function update_about($about_id,$data1)
   {
   	$this->db->where('about_id',$about_id);
   	$query = $this->db->update('about',$data1);
   	return $query;
   }
}
