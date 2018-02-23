<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hospital_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}

	public function save_hospital_step_one($data){
		$this->db->insert('hospital', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_resource($data){
		$this->db->insert('Resource_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function check_email_exits($email){
		$sql = "SELECT admin.a_id FROM admin WHERE a_email_id ='".$email."'";
		return $this->db->query($sql)->row_array();	
	}
	public function update_hospital_details($hos_id,$data){
		$this->db->where('hos_id',$hos_id);
    	return $this->db->update("hospital",$data);
	}
	public function update_adminhospital_details($a_id,$data){
		$this->db->where('a_id',$a_id);
    	return $this->db->update("admin",$data);
	}
	public function get_hospital_details($hos_id){
		$this->db->select('*')->from('hospital');		
		$this->db->where('hos_id',$hos_id);
        return $this->db->get()->row_array();
	}
	public function get_hospital_detailsfor_profile($a_id){
		$this->db->select('*')->from('hospital');		
		$this->db->where('a_id',$a_id);
        return $this->db->get()->row_array();
	}
	public function get_hospital_id($a_id,$email){
		$this->db->select('hospital.a_id,hospital.hos_id')->from('hospital');		
		$this->db->where('a_id',$a_id);
		$this->db->where('hos_email_id',$email);
        return $this->db->get()->row_array();
	}
	public function get_hospital_list_details(){
		$this->db->select('hospital.hos_id,hospital.hos_con_number,hospital.hos_bas_name,hospital.hos_status,hospital.hos_curent_login')->from('hospital');		
        $this->db->where('hos_undo',0);
		return $this->db->get()->result_array();
	}
	public function get_resources_list($a_id,$hos_id){
		$this->db->select('Resource_list.r_id,roles.r_name,Resource_list.resource_name,Resource_list.role_id,Resource_list.resource_contatnumber,Resource_list.r_status,Resource_list.r_created_at,Resource_list.resource_email')->from('Resource_list');		
        $this->db->join('roles', 'roles.r_id = Resource_list.role_id', 'left');
		$this->db->where('Resource_list.r_create_by',$a_id);
		$this->db->where('Resource_list.hos_id',$hos_id);
		$this->db->where('Resource_list.r_status !=',2);
		return $this->db->get()->result_array();
	}
	
	/*resource*/
	public function update_resourse_details($hos_id,$data){
		$this->db->where('r_id',$hos_id);
    	return $this->db->update("resource_list",$data);
	}
	public function get_resourse_details($r_id){
		$this->db->select('*')->from('resource_list');		
		$this->db->where('r_id',$r_id);
		return $this->db->get()->row_array();
	}

}