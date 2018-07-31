<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ward_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function get_ip_patient_list($hos_id){
	$this->db->select('patients_list_1.pid,patient_billing.b_id,patients_list_1.card_number,patients_list_1.gender,patients_list_1.problem,patients_list_1.name,patients_list_1.registrationtype,patients_list_1.age,patients_list_1.mobile,patient_billing.create_at')->from('patient_billing');
		$this->db->join('patients_list_1', 'patients_list_1.pid = patient_billing.p_id', 'left');
		$this->db->where('patient_billing.patient_type',1);
		$this->db->where('patient_billing.completed_type',0);
		return $this->db->get()->result_array();
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
	
	
	public function floornumber($data){
	$this->db->insert('ward_floors',$data);
	return $insert_id = $this->db->insert_id();
	}
	public function get_saved_floor($name,$hos_id){
		$this->db->select('*')->from('ward_floors');		
		$this->db->where('ward_floor',$name);
		$this->db->where('hos_id',$hos_id);
		return $this->db->get()->row_array();
	}
	
		public function get_floor_list($a_id,$hos_id){
		$this->db->select('ward_floors.w_f_id,ward_floors.ward_floor,ward_floors.status,ward_floors.create_at')->from('ward_floors');		
		$this->db->where('ward_floors.created_by',$a_id);
		$this->db->where('ward_floors.hos_id',$hos_id);
		return $this->db->get()->result_array();
		}
	public function get_floor_details($w_f_id){
		$this->db->select('*')->from('ward_floors');		
		$this->db->where('w_f_id',$w_f_id);
		return $this->db->get()->row_array();
	}
	
	public function delete_floor_details($w_f_id){
		$this->db->where('w_f_id',$w_f_id);
    	return $this->db->delete('ward_floors');
	}
	
	public function update_floor_details($w_f_id,$data){
		$this->db->where('w_f_id',$w_f_id);
		return $this->db->update("ward_floors",$data);
	}
	
	
	
	
	
}