<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ward_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
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
		//$this->db->join('resource_list', 'resource_list.r_id = treatmentwise_doctors.t_d_doc_id', 'left');

		$this->db->where('ward_name.created_by',$a_id);
		$this->db->where('ward_name.hos_id',$hos_id);
		$this->db->where('ward_name.status !=',2);
		return $this->db->get()->result_array();
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
	
	
}