<?php 
class Admin_products_model extends CI_Model 
{
   
   function getservices()
   {
   	$this->db->where('services_status','1');
   	$query = $this->db->get('services');
   	return $query->result();
   }

   function get_prods()
   {
   	$squery="SELECT * FROM products LEFT JOIN services ON products.products_servicetype=services.services_id";
   	$query= $this->db->query($squery);
   	return $query->result();
   }

   function getsamenamecount($prodname)
   {
   	$squery = "SELECT count(*) AS prodnamecount FROM products WHERE products_name='$prodname'";
   	$query = $this->db->query($squery);
   	return $query->row();
   }

   function getsamename($prodname)
   {
   	$this->db->where('products_name',$prodname);
   	$query = $this->db->get('products');
   	return $query->row();
   }

   function insertProduct($data1)
   {
   	$query = $this->db->insert('products',$data1);
   	return $query;
   }

   function updateProduct($prod_id,$data1)
   {
     $this->db->where('products_id',$prod_id);
     $query = $this->db->update('products',$data1);
     return $query;
   }

   function get_prodEdit($pid)
   {
   	$this->db->where('products_id',$pid);
   	$query = $this->db->get('products');
   	return $query->row();
   }

   function delete_prod_part($prod_id)
   {
   	$this->db->where('products_id',$prod_id);
   	$query = $this->db->delete('products');
   	return $query;
   }

   function updateprod_stat($prod_id,$data1)
   {
   	$this->db->where('products_id',$prod_id);
   	$query = $this->db->update('products',$data1);
   	return $query;
   }
}	