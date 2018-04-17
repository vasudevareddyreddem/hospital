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
		$this->db->select('lab_test_list.*,lab_test_type.type_name')->from('lab_test_list');
		$this->db->join('lab_test_type ', 'lab_test_type.id = lab_test_list.test_type', 'left');
		
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
		$this->db->select('patient_lab_reports.b_id,patients_list_1.pid,patients_list_1.hos_id,patients_list_1.pid,patients_list_1.name,patients_list_1.age,patients_list_1.dob,patients_list_1.bloodgroup,patients_list_1.martial_status,patients_list_1.perment_address,patients_list_1.p_c_name,patients_list_1.p_s_name,patients_list_1.p_country_name,patients_list_1.p_zipcode,patients_list_1.mobile,patients_list_1.barcode,patients_list_1.create_at')->from('patient_lab_reports');
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
	public function get_all_patients_test_lists($p_id,$b_id){
		$this->db->select('lab_test_list.t_name,lab_test_list.out_source,lab_test_list.hos_id')->from('patient_lab_test_list');
		$this->db->join('lab_test_list', 'lab_test_list.t_id = patient_lab_test_list.test_id', 'left');
		$this->db->where('patient_lab_test_list.p_id',$p_id);
		$this->db->where('patient_lab_test_list.b_id',$b_id);
		return $this->db->get()->result_array();
	}
	public function add_lab_test_type($add){
		$this->db->insert('lab_test_type', $add);
		return $insert_id = $this->db->insert_id();	
	}
	public function get_all_test_list($a_id){
		$this->db->select('*')->from('lab_test_type');
		$this->db->where('lab_test_type.created_by',$a_id);
		$this->db->where('lab_test_type.status !=',2);
		return $this->db->get()->result_array();
	}
	public function get_lab_test_type_details(){
		$this->db->select('*')->from('lab_test_type');
		$this->db->where('lab_test_type.status',1);
		$this->db->group_by('lab_test_type.type_name');
		return $this->db->get()->result_array();
	}
	public function update_testtype_details($t_id,$data){
		$this->db->where('id',$t_id);
    	return $this->db->update("lab_test_type",$data);
	}
	public function delete_test_type($t_id,$data){
			$this->db->where('id',$t_id);
    	return $this->db->update("lab_test_type",$data);
	}
	public function out_sourcelab_list($a_id){
		$this->db->select('admin.a_id,resource_list.*')->from('admin');
		$this->db->join('resource_list', 'resource_list.a_id = admin.a_id', 'left');
		$this->db->where('admin.out_source',1);
		$this->db->where('resource_list.r_create_by',$a_id);
		return $this->db->get()->result_array();
	}
	
	/*outsource*/
	public function get_all_patients_out_souces_test_lists($p_id,$b_id){
		$this->db->select('patient_lab_test_list.id,lab_test_list.t_name,lab_test_list.t_name,lab_test_list.out_source,lab_test_list.hos_id')->from('patient_lab_test_list');
		$this->db->join('lab_test_list', 'lab_test_list.t_id = patient_lab_test_list.test_id', 'left');
		$this->db->where('patient_lab_test_list.p_id',$p_id);
		$this->db->where('patient_lab_test_list.b_id',$b_id);
		return $this->db->get()->result_array();
	}
	public function get_all_patients_all_out_souces_test_lists($test_name){
		$this->db->select('lab_test_list.t_name,lab_test_list.duration,lab_test_list.amuont,lab_test_list.out_source,lab_test_list.hos_id,admin.a_name,admin.a_id,resource_list.resource_name,resource_list.resource_add1,resource_list.resource_add2,resource_list.resource_city,resource_list.resource_state,resource_list.resource_zipcode')->from('lab_test_list');
		$this->db->join('admin', 'admin.a_id = lab_test_list.create_by', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = admin.a_id', 'left');
		$this->db->where('lab_test_list.t_name',$test_name);
		return $this->db->get()->result_array();
	}
	public function get_test_locaton_list($test_name){
		$this->db->select('lab_test_list.t_id,lab_test_list.t_name,resource_list.resource_city')->from('lab_test_list');
		$this->db->join('resource_list', 'resource_list.a_id = lab_test_list.create_by', 'left');
		$this->db->where('lab_test_list.t_name',$test_name);
		$this->db->group_by('resource_list.resource_city');
		return $this->db->get()->result_array();
		
	}
	
	public function save_lab_tests($data){
		$this->db->insert('out_source_lab_test_lists', $data);
		return $insert_id = $this->db->insert_id();	
	}
	public function get_out_source_lab_test_list($p_id,$b_id){
		$this->db->select('out_source_lab_test_lists.p_l_t_id,out_source_lab_test_lists.p_id,out_source_lab_test_lists.b_id')->from('out_source_lab_test_lists');
		$this->db->where('out_source_lab_test_lists.p_id',$p_id);
		$this->db->where('out_source_lab_test_lists.b_id',$b_id);
		$this->db->where('out_source_lab_test_lists.status',0);
		return $this->db->get()->result_array();
	}
	public function get_outsources_labtests_details($lab_id){
		$this->db->select('patients_list_1.pid,patients_list_1.name,patients_list_1.mobile,patients_list_1.perment_address,patients_list_1.p_c_name,patients_list_1.p_s_name,patients_list_1.p_zipcode,patients_list_1.p_country_name,out_source_lab_test_lists.*')->from('out_source_lab_test_lists');
		$this->db->join('patients_list_1', 'patients_list_1.pid = out_source_lab_test_lists.p_id', 'left');
		$this->db->where('out_source_lab_test_lists.lab_id',$lab_id);
		return $this->db->get()->result_array();
	}
	/*outsource*/
	
	

}