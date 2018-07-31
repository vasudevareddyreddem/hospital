<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ward_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function get_ip_patient_list($hos_id){
		
	}
	public function save_wardname($data){
		$this->db->insert('ward_name', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	public function get_saved_wardname($name,$hos_id){
		$this->db->select('*')->from('ward_name');		
		$this->db->where('ward_name',$name);
		$this->db->where('hos_id',$hos_id);
		return $this->db->get()->row_array();
	}
	
	
	public function get_ward_list($a_id,$hos_id){
		$this->db->select('ward_name.w_id,ward_name.ward_name,ward_name.status,ward_name.create_at')->from('ward_name');		
		$this->db->where('ward_name.created_by',$a_id);
		$this->db->where('ward_name.hos_id',$hos_id);
		return $this->db->get()->result_array();
	}
	public function get_ward_details($w_id){
		$this->db->select('*')->from('ward_name');		
		$this->db->where('w_id',$w_id);
		return $this->db->get()->row_array();
	}
	
	public function delete_ward_details($w_id){
		$this->db->where('w_id',$w_id);
    	return $this->db->delete('ward_name');
	}
	
	public function update_ward_details($w_id,$data){
		$this->db->where('w_id',$w_id);
		return $this->db->update("ward_name",$data);
	}
	
	
	public function get_hospital_id($a_id,$email){
		$this->db->select('hospital.a_id,hospital.hos_id')->from('hospital');		
		$this->db->where('a_id',$a_id);
		$this->db->where('hos_email_id',$email);
        return $this->db->get()->row_array();
	}
	
	public  function get_hospital_id_details($hos_id){
		$this->db->select('hospital.a_id')->from('hospital');		
		$this->db->where('hospital.hos_id', $hos_id);
        return $this->db->get()->row_array();
	}
	
	 
	public function save_wardtype($data){
	$this->db->insert('ward_type',$data);
	return $insert_id = $this->db->insert_id();
	}
	public function get_saved_wardtype($name,$hos_id){
		$this->db->select('*')->from('ward_type');		
		$this->db->where('ward_type',$name);
		$this->db->where('hos_id',$hos_id);
		return $this->db->get()->row_array();
	}
	
		public function get_wardtype_list($a_id,$hos_id){
		$this->db->select('ward_type.ward_id,ward_type.ward_type,ward_type.status,ward_type.create_at')->from('ward_type');		
		$this->db->where('ward_type.created_by',$a_id);
		$this->db->where('ward_type.hos_id',$hos_id);
		return $this->db->get()->result_array();
		}
	public function get_wardtype_details($ward_id){
		$this->db->select('*')->from('ward_type');		
		$this->db->where('ward_id',$ward_id);
		return $this->db->get()->row_array();
	}
	
	public function delete_wardtype_details($ward_id){
		$this->db->where('ward_id',$ward_id);
    	return $this->db->delete('ward_type');
	}
	
	public function update_wardtype_details($ward_id,$data){
		$this->db->where('ward_id',$ward_id);
		return $this->db->update("ward_type",$data);
	}
	
	

	
	
	
	
	
}