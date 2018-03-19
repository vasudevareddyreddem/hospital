<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resources_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
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
	public function save_patient_details($data){
		$this->db->insert('patient_details_2', $data);
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
	/*lab details*/
	
	

}