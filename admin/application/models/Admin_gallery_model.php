<?php 
class Admin_gallery_model extends CI_Model 
{

 function insert($data1)
 {
 	$query = $this->db->insert('gallery',$data1);

 	return $query;
 }

 function display()
 {
 		$query1 = $this->db->get('gallery');
		return $query1->result();
 }

 function edit($menuid)
 {
 	$this->db->where('gallery_id',$menuid);
 	$query = $this->db->get('gallery');
 	return $query->row();
 }

 function update($page_id,$data1)
 {
 	$this->db->where('gallery_id',$page_id);
 	$query = $this->db->update('gallery',$data1);
 	return $query;
 }

function update_status($page_id,$data1)
 {
 	$this->db->where('gallery_id',$page_id);
 	$query = $this->db->update('gallery',$data1);

 	return $query;
 }

 function delete($page_id)
 {
 	$this->db->where('gallery_id',$page_id);
 	$query = $this->db->delete('gallery');

 	return $query;
 }
 
}