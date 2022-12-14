<?php 
class Admin_project_model extends CI_Model 
{

 function insert($data1)
 {
 	$query = $this->db->insert('projects',$data1);

 	return $query;
 }

 function display()
 {
 		$query1 = $this->db->get('projects');
		return $query1->result();
 }

 function edit($menuid)
 {
 	$this->db->where('project_id',$menuid);
 	$query = $this->db->get('projects');
 	return $query->row();
 }

 function update($page_id,$data1)
 {
 	$this->db->where('project_id',$page_id);
 	$query = $this->db->update('projects',$data1);
 	return $query;
 }

function update_status($page_id,$data1)
 {
 	$this->db->where('project_id',$page_id);
 	$query = $this->db->update('projects',$data1);

 	return $query;
 }

 function delete($page_id)
 {
 	$this->db->where('project_id',$page_id);
 	$query = $this->db->delete('projects');

 	return $query;
 }
 
}