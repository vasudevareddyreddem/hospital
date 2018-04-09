<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lab_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_tabtest_details($data){
		$this->db->insert('lab_test_list', $data);
		return $insert_id = $this->db->insert_id();	
	}
	public function get_lab_test_details($hos_id,$u_id){
		$this->db->select('*')->from('lab_test_list');	
		$this->db->where('lab_test_list.create_by',$u_id);
		$this->db->where('lab_test_list.hos_id',$hos_id);
        return $this->db->get()->result_array();	
	}
	public function update_labtest_details($t_id,$data){
		$this->db->where('t_id',$t_id);
    	return $this->db->update("lab_test_list",$data);
	}
	public function delete_labtest($t_id){
			$sql1="DELETE FROM lab_test_list WHERE t_id = '".$t_id."'";
		return $this->db->query($sql1);
	}
	public function get_all_patients_lists($hos_id){
		$this->db->select('patients_list_1.pid,patients_list_1.name,patients_list_1.mobile,patients_list_1.perment_address,patients_list_1.p_c_name,patients_list_1.p_s_name,patients_list_1.p_zipcode,patients_list_1.p_country_name,resource_list.resource_name as created_by,patient_billing.create_at,patient_billing.b_id')->from('patient_billing');	
		$this->db->join('patients_list_1 ', 'patients_list_1.pid = patient_billing.p_id', 'left');
		$this->db->join('resource_list ', 'resource_list.a_id = patient_billing.create_by', 'left');
		$this->db->where('patients_list_1.hos_id', $hos_id);
		$this->db->where('patient_billing.completed_type',2);
        return $this->db->get()->result_array();	
	}
	
	
	

}