<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function get_all_patients_lists($hos_id){
		$this->db->select('patients_list_1.pid,patients_list_1.name,resource_list.resource_name as created_by,patient_billing.create_at,patient_billing.b_id')->from('patient_billing');	
		$this->db->join('patients_list_1 ', 'patients_list_1.pid = patient_billing.p_id', 'left');
		$this->db->join('resource_list ', 'resource_list.a_id = patient_billing.create_by', 'left');
		$this->db->where('patients_list_1.hos_id', $hos_id);
		$this->db->where('patient_billing.completed_type',1);
        return $this->db->get()->result_array();	
	}
	public function get_prescription_details($pid,$bid){
		$this->db->select('patients_list_1.pid,patients_list_1.name,resource_list.resource_name as created_by,patient_billing.b_id')->from('patient_billing');	
		$this->db->join('patients_list_1 ', 'patients_list_1.pid = patient_billing.p_id', 'left');
		$this->db->join('resource_list ', 'resource_list.a_id = patient_billing.create_by', 'left');
		$this->db->where('patients_list_1.pid', $pid);
		$this->db->where('patient_billing.b_id', $bid);
        $return=$this->db->get()->row_array();
		
		echo '<pre>';print_r($return);exit;
		
	}
	

}