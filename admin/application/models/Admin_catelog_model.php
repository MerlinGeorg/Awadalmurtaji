<?php 
class Admin_catelog_model extends CI_Model 
{
   function get_cats()
   {
   	$query = $this->db->get('catelogs');
   	return $query->result();
   }

   function get_editcats($catlid)
   {
   	$this->db->where('catelogs_id',$catlid);
   	$query = $this->db->get('catelogs');
   	return $query->row();
   }

   function update_about($ctl_id,$data1)
   {
   	$this->db->where('catelogs_id',$ctl_id);
   	$query = $this->db->update('catelogs',$data1);
   	return $query;
   }
   
    function insert_about($data1)
   {
      $query =$this->db->insert('catelogs',$data1);
      return $query;
   }

   function delete_cat_part($id)
   {
   $this->db->where('catelogs_id',$id);
   $query = $this->db->delete('catelogs');
   return $query;
   }
}