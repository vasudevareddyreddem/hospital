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
	public function save_patient_reports($data){
		$this->db->insert('patient_lab_reports', $data);
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
	public function update_billingreport_status($p_id,$b_id,$data){
		$this->db->where('p_id',$p_id);
		$this->db->where('b_id',$b_id);
    	return $this->db->update("patient_billing",$data);
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
		$this->db->where('patient_billing.report_completed',0);
        return $this->db->get()->result_array();	
	}
		public function get_billing_details($p_id,$b_id){
		$this->db->select('patient_billing.b_id,patients_list_1.pid,patients_list_1.name,patients_list_1.age,patients_list_1.dob,patients_list_1.bloodgroup,patients_list_1.martial_status,patients_list_1.perment_address,patients_list_1.p_c_name,patients_list_1.p_s_name,patients_list_1.p_country_name,patients_list_1.p_zipcode,patients_list_1.mobile,patients_list_1.barcode,hospital.hos_bas_logo,hospital.hos_email_id,hospital.hos_con_number,hospital.hos_bas_email,hospital.hos_bas_add1,hospital.hos_bas_add2,hospital.hos_bas_zipcode,hospital.hos_bas_city,hospital.hos_bas_state,hospital.hos_bas_country,hospital.hos_bas_name,hospital.hos_bas_contact,treament.t_name,resource_list.resource_name')->from('patient_billing');
		$this->db->join('patients_list_1', 'patients_list_1.pid = patient_billing.p_id', 'left');
		$this->db->join('hospital', 'hospital.hos_id = patients_list_1.hos_id', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = patient_billing.doct_id', 'left');
		$this->db->join('treament', 'treament.t_id = patient_billing.treatment_id', 'left');
		$this->db->where('p_id',$p_id);
		$this->db->where('b_id',$b_id);
        return $this->db->get()->row_array();
	}
	public function get_all_labreports_lists($hos_id){
		$this->db->select('patients_list_1.pid,patients_list_1.hos_id,patients_list_1.pid,patients_list_1.name,patients_list_1.age,patients_list_1.dob,patients_list_1.bloodgroup,patients_list_1.martial_status,patients_list_1.perment_address,patients_list_1.p_c_name,patients_list_1.p_s_name,patients_list_1.p_country_name,patients_list_1.p_zipcode,patients_list_1.mobile,patients_list_1.barcode,patients_list_1.create_at')->from('patient_lab_reports');
		$this->db->join('patients_list_1', 'patients_list_1.pid = patient_lab_reports.p_id', 'left');
		$this->db->group_by('patient_lab_reports.p_id');
		$this->db->where('patient_lab_reports.hos_id',$hos_id);
		return $this->db->get()->result_array();
	}
	public function get_all_patient_reports_lists($p_id){
		$this->db->select('patients_list_1.pid,patients_list_1.hos_id,patients_list_1.pid,patients_list_1.name,patients_list_1.mobile,patient_lab_reports.*')->from('patient_lab_reports');
		$this->db->join('patients_list_1', 'patients_list_1.pid = patient_lab_reports.p_id', 'left');
		$this->db->where('patient_lab_reports.p_id',$p_id);
		return $this->db->get()->result_array();
	}
	
	
	

}