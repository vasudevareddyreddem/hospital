<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resources_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function get_all_patients_database($hos_id){
		$this->db->select('patients_list_1.pid,patients_list_1.card_number,patients_list_1.name,patients_list_1.mobile,patients_list_1.age,patients_list_1.hos_id,patients_list_1.registrationtype,patients_list_1.patient_category,patients_list_1.dob,patients_list_1.nationali_id,patients_list_1.create_at')->from('patients_list_1');		
		$this->db->where('patients_list_1.hos_id', $hos_id);
        return $this->db->get()->result_array();	
	}
	public function get_all_patients_lists($hos_id){
		$this->db->select('patients_list_1.pid,patients_list_1.card_number,patients_list_1.name,patients_list_1.mobile,patients_list_1.age,patients_list_1.hos_id,patients_list_1.registrationtype,patients_list_1.patient_category')->from('patients_list_1');		
		$this->db->where('patients_list_1.hos_id', $hos_id);
        return $this->db->get()->result_array();	
	}
	public function get_all_resouce_details($admin_id){
		$this->db->select('resource_list.hos_id,admin.a_id,admin.role_id,admin.a_email_id,admin.a_name,roles.r_name,admin.a_profile_pic')->from('admin');		
		$this->db->join('roles', 'roles.r_id = admin.role_id', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = admin.a_id', 'left');
		$this->db->where('admin.a_id', $admin_id);
		$this->db->where('admin.a_status', 1);
        return $this->db->get()->row_array();	
	}
	public function save_basic_details($data){
		$this->db->insert('patients_list_1', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	public function update_patient_details($p_id,$barcode){
		$sql1="UPDATE patients_list_1 SET barcode ='".$barcode."' WHERE pid = '".$p_id."'";
       	return $this->db->query($sql1);
	}
	public function update_all_patient_details($pid,$data){
		$this->db->where('pid',$pid);
    	return $this->db->update("patients_list_1",$data);
	}
	public function get_details_details($pid){
		$this->db->select('*')->from('patients_list_1');		
		$this->db->where('pid',$pid);
        return $this->db->get()->row_array();
	}
	public function get_paitent_document($pid){
		$this->db->select('patients_list_1.patient_identifier')->from('patients_list_1');		
		$this->db->where('pid',$pid);
        return $this->db->get()->row_array();
	}
	
	/*patient billing details*/
	public function update_all_patient_billing_details($data){
		$this->db->insert('patient_billing', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function update_patient_billing_details($bid,$data){
		$this->db->where('b_id',$bid);
    	return $this->db->update("patient_billing",$data);
	}
	public function get_hospital_deportments($hop_id){
		$this->db->select('treament.t_id,treament.t_name')->from('treament');		
		$this->db->where('hos_id',$hop_id);
		$this->db->where('t_status',1);
        return $this->db->get()->result_array();
	}
	public function get_doctors_list($dep_id){
		$this->db->select('resource_list.resource_name,resource_list.current_status,treatmentwise_doctors.t_d_doc_id,treatmentwise_doctors.t_d_name')->from('treatmentwise_doctors');		
		$this->db->join('resource_list', 'resource_list.a_id = treatmentwise_doctors.t_d_doc_id', 'left');
		$this->db->where('treatmentwise_doctors.t_d_name',$dep_id);
		$this->db->where('resource_list.r_status',1);
        return $this->db->get()->result_array();
	}
	public function get_card_number_list($card_num){
		$this->db->select('patients_list_1.card_number')->from('patients_list_1');		
		$this->db->where('patients_list_1.card_number',$card_num);
        return $this->db->get()->row_array();
	}
	public function get_billing_details($p_id,$b_id){
		$this->db->select('patient_billing.*,patients_list_1.name,patients_list_1.problem,patients_list_1.age,patients_list_1.dob,patients_list_1.bloodgroup,patients_list_1.martial_status,patients_list_1.perment_address,patients_list_1.p_c_name,patients_list_1.p_s_name,patients_list_1.p_country_name,patients_list_1.p_zipcode,patients_list_1.mobile,patients_list_1.barcode,hospital.hos_bas_logo,hospital.hos_email_id,hospital.hos_con_number,hospital.hos_bas_email,hospital.hos_bas_add1,hospital.hos_bas_add2,hospital.hos_bas_zipcode,hospital.hos_bas_city,hospital.hos_bas_state,hospital.hos_bas_country,hospital.hos_bas_name,hospital.hos_bas_contact,treament.t_name,resource_list.resource_name')->from('patient_billing');
		$this->db->join('patients_list_1', 'patients_list_1.pid = patient_billing.p_id', 'left');
		$this->db->join('hospital', 'hospital.hos_id = patients_list_1.hos_id', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = patient_billing.doct_id', 'left');
		$this->db->join('treament', 'treament.t_id = patient_billing.treatment_id', 'left');
		$this->db->where('p_id',$p_id);
		$this->db->where('b_id',$b_id);
        return $this->db->get()->row_array();
	}
	public function get_billing_vital_details($p_id,$b_id){
		$this->db->select('*')->from('patient_vitals_list');
		$this->db->where('p_id',$p_id);
		$this->db->where('b_id',$b_id);
        return $this->db->get()->row_array();
	}
	/*patient billing details*/
	public function get_doctor_worksheet_list($hos_id,$doctor_id){
		$this->db->select('assignby.resource_name as assignbydoctor,assignto.resource_name as assigntodoctor,patient_billing.b_id,patient_billing.doctor_status,patient_billing.type,patient_billing.visit_type,patients_list_1.pid,patients_list_1.name,patients_list_1.age,patients_list_1.dob,patients_list_1.bloodgroup,patients_list_1.martial_status,patients_list_1.gender,patients_list_1.card_number,treament.t_name,resource_list.resource_name')->from('patient_billing');
		$this->db->join('patients_list_1', 'patients_list_1.pid = patient_billing.p_id', 'left');
		$this->db->join('hospital', 'hospital.hos_id = patients_list_1.hos_id', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = patient_billing.doct_id', 'left');
		$this->db->join('resource_list as assignto', 'assignto.a_id = patient_billing.assign_doctor_to', 'left');
		$this->db->join('resource_list as assignby', 'assignby.a_id = patient_billing.assign_doctor_by', 'left');
		$this->db->join('treament', 'treament.t_id = patient_billing.treatment_id', 'left');
		$this->db->where('patients_list_1.hos_id',$hos_id);
		$this->db->where('patient_billing.completed_type',0);
		$this->db->where('patient_billing.doct_id',$doctor_id);
        return $this->db->get()->result_array();
	}
	public function get_completed_doctor_worksheet_list($hos_id,$doctor_id){
		$this->db->select('assignby.resource_name as assignbydoctor,assignto.resource_name as assigntodoctor,patient_billing.b_id,patient_billing.doctor_status,patient_billing.type,patient_billing.visit_type,patients_list_1.pid,patients_list_1.name,patients_list_1.age,patients_list_1.dob,patients_list_1.bloodgroup,patients_list_1.martial_status,patients_list_1.gender,patients_list_1.card_number,treament.t_name,resource_list.resource_name')->from('patient_billing');
		$this->db->join('patients_list_1', 'patients_list_1.pid = patient_billing.p_id', 'left');
		$this->db->join('hospital', 'hospital.hos_id = patients_list_1.hos_id', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = patient_billing.doct_id', 'left');
		$this->db->join('resource_list as assignto', 'assignto.a_id = patient_billing.assign_doctor_to', 'left');
		$this->db->join('resource_list as assignby', 'assignby.a_id = patient_billing.assign_doctor_by', 'left');
		$this->db->join('treament', 'treament.t_id = patient_billing.treatment_id', 'left');
		$this->db->where('patients_list_1.hos_id',$hos_id);
		$this->db->where('patient_billing.completed_type !=',0);
		$this->db->where('patient_billing.doct_id',$doctor_id);
        return $this->db->get()->result_array();
	}
	public function get_doctor_refrrals_list($hos_id,$doctor_id){
		$this->db->select('assignby.resource_name as assignbydoctor,assignto.resource_name as assigntodoctor,patient_billing.b_id,patient_billing.doctor_status,patient_billing.type,patient_billing.visit_type,patients_list_1.pid,patients_list_1.name,patients_list_1.age,patients_list_1.dob,patients_list_1.bloodgroup,patients_list_1.martial_status,patients_list_1.gender,patients_list_1.card_number,treament.t_name,resource_list.resource_name')->from('patient_billing');
		$this->db->join('patients_list_1', 'patients_list_1.pid = patient_billing.p_id', 'left');
		$this->db->join('hospital', 'hospital.hos_id = patients_list_1.hos_id', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = patient_billing.doct_id', 'left');
		$this->db->join('resource_list as assignto', 'assignto.a_id = patient_billing.assign_doctor_to', 'left');
		$this->db->join('resource_list as assignby', 'assignby.a_id = patient_billing.assign_doctor_by', 'left');
		$this->db->join('treament', 'treament.t_id = patient_billing.treatment_id', 'left');
		$this->db->where('patients_list_1.hos_id',$hos_id);
		$this->db->where('patient_billing.assign_doctor_by',$doctor_id);
        return $this->db->get()->result_array();
	}
	public function get_patient_details($pid){
		$this->db->select('patient_billing.b_id,patient_billing.type,patient_billing.visit_type,patients_list_1.pid,patients_list_1.name,patients_list_1.age,patients_list_1.dob,patients_list_1.bloodgroup,patients_list_1.martial_status,patients_list_1.gender,patients_list_1.perment_address,patients_list_1.p_c_name,patients_list_1.p_s_name,patients_list_1.p_country_name,patients_list_1.p_zipcode,patients_list_1.mobile,patients_list_1.barcode,patients_list_1.card_number,hospital.hos_bas_logo,hospital.hos_email_id,hospital.hos_con_number,hospital.hos_bas_email,hospital.hos_bas_add1,hospital.hos_bas_add2,hospital.hos_bas_zipcode,hospital.hos_bas_city,hospital.hos_bas_state,hospital.hos_bas_country,hospital.hos_bas_name,hospital.hos_bas_contact,treament.t_name,resource_list.resource_name')->from('patient_billing');
		$this->db->join('patients_list_1', 'patients_list_1.pid = patient_billing.p_id', 'left');
		$this->db->join('hospital', 'hospital.hos_id = patients_list_1.hos_id', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = patient_billing.doct_id', 'left');
		$this->db->join('treament', 'treament.t_id = patient_billing.treatment_id', 'left');
		$this->db->where('patients_list_1.pid',$pid);
        return $this->db->get()->row_array();
	}
	public function get_billing_vitals_details($p_id){
		$this->db->select('*')->from('patient_vitals_list');
		$this->db->where('patient_vitals_list.p_id',$p_id);
		//$this->db->where('patient_vitals_list.b_id',$b_id);
		$this->db->order_by('patient_vitals_list.id',"DESC");
        return $this->db->get()->row_array();
	}
	public function get_vitals_list($p_id){
		$this->db->select('*')->from('patient_vitals_list');
		$this->db->where('patient_vitals_list.p_id',$p_id);
		$this->db->order_by('patient_vitals_list.id',"DESC");
        return $this->db->get()->result_array();
	}
	public function saving_patient_vital_details($data){
		$this->db->insert('patient_vitals_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function saving_patient_vital_comments($data){
		$this->db->insert('vital_comments', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function saving_patient_medicine($data){
		$this->db->insert('patient_medicine_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_patient_medicine_details_list($p_id,$bid){
		$this->db->select('*')->from('patient_medicine_list');
		$this->db->where('patient_medicine_list.p_id',$p_id);
		$this->db->where('patient_medicine_list.b_id',$bid);
        return $this->db->get()->result_array();
	}
	public function get_patient_investigation_details_list($p_id,$bid){
		$this->db->select('*')->from('investigation_patient_list');
		$this->db->where('investigation_patient_list.p_id',$p_id);
		$this->db->where('investigation_patient_list.b_id',$bid);
        return $this->db->get()->result_array();
	}
	public function get_hospital_medicine_list($hos_id){
		$this->db->select('medicine_list.medicine_name,medicine_list.id,medicine_list.qty')->from('medicine_list');
		$this->db->where('medicine_list.hos_id',$hos_id);
		$this->db->where('medicine_list.qty >=',1);
        return $this->db->get()->result_array();
	}
	public function get_investigation_list($hos_id,$val){
		$this->db->select('lab_test_type.type_name,lab_test_type.id')->from('lab_test_type');
		$this->db->where('lab_test_type.status',1);
		$this->db->where('lab_test_type.type',$val);
		$this->db->group_by('lab_test_type.type_name');
        return $this->db->get()->result_array();
	}
	public function get_test_list($type,$test_type_id){
		$this->db->select('lab_test_list.t_id,lab_test_list.t_name,lab_test_list.t_department,lab_test_list.t_description,lab_test_list.t_short_form')->from('lab_test_list');
		$this->db->where('lab_test_list.type',$type);
		$this->db->where('lab_test_list.test_type',$test_type_id);
		$this->db->where('lab_test_list.status',1);
        return $this->db->get()->result_array();
	}
	public function get_patient_test_count($pid,$date){
		$this->db->select('*')->from('patient_lab_test_list');
		$this->db->where('p_id',$pid);
		$this->db->where('date',$date);
		$this->db->where('date',$date);
		$this->db->where('status',1);
		$this->db->group_by('test_id');
        return $this->db->get()->result_array();
	}
	function remove_attachment($id){
		$sql1="DELETE FROM patient_medicine_list WHERE m_id = '".$id."'";
		return $this->db->query($sql1);
	}
	function remove_investigation_attachment($id){
		$sql1="DELETE FROM investigation_patient_list WHERE id = '".$id."'";
		return $this->db->query($sql1);
	}
	public function add_addpatient_test($data){
		$this->db->insert('patient_lab_test_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function saving_patient_investigation($data){
		$this->db->insert('investigation_patient_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_hospital_doctors_list($hos_id){
		$this->db->select('resource_list.a_id,resource_list.r_id,resource_list.resource_name')->from('resource_list');
		$this->db->where('hos_id',$hos_id);
		$this->db->where('role_id',6);
		$this->db->where('r_status',1);
        return $this->db->get()->result_array();
	}

	public function update_all_billing_compelted_details($pid,$b_id,$data){
		$this->db->where('p_id',$pid);
		$this->db->where('b_id',$b_id);
    	return $this->db->update("patient_billing",$data);
	}
	public function get_patient_previous_medicine_details_list($pid){
		$this->db->select('patient_medicine_list.type_of_medicine,patient_medicine_list.medicine_name,patient_medicine_list.substitute_name,patient_medicine_list.dosage,patient_medicine_list.frequency,patient_medicine_list.directions,patient_medicine_list.comments,patient_medicine_list.create_at,patient_medicine_list.condition,patient_medicine_list.edit_reason')->from('patient_medicine_list');
		$this->db->where('patient_medicine_list.p_id',$pid);
        return $this->db->get()->result_array();
	}
	public function get_old_test_list($pid,$bid){
		$this->db->select('*')->from('patient_lab_test_list');
		$this->db->where('patient_lab_test_list.p_id',$pid);
		$this->db->where('patient_lab_test_list.b_id',$bid);
        return $this->db->get()->result_array();
	}
	public function delete_billign_previous_data($t_id){
		$sql1="DELETE FROM patient_lab_test_list WHERE id = '".$t_id."'";
		return $this->db->query($sql1);
	}
	public function get_patient_lab_test_list($pid,$bid){
		
		$this->db->select('lab_test_list.*,lab_test_type.type_name,patient_lab_test_list.id as PLid')->from('patient_lab_test_list');
		$this->db->join('lab_test_list', 'lab_test_list.t_id = patient_lab_test_list.test_id', 'left');
		$this->db->join('lab_test_type', 'lab_test_type.id = lab_test_list.test_type', 'left');
		$this->db->where('patient_lab_test_list.p_id',$pid);
		$this->db->where('patient_lab_test_list.b_id',$bid);
        return $this->db->get()->result_array();
	}
	function remove_treatment_attachment($id){
		$sql1="DELETE FROM patient_lab_test_list WHERE id = '".$id."'";
		return $this->db->query($sql1);
	}
	

}