<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function update_admin_details($a_id,$data){
		$this->db->where('a_id',$a_id);
    	return $this->db->update("admin",$data);
	}
	public function get_adminpassword_details($admin_id){
		$this->db->select('admin.a_id,admin.a_password')->from('admin');
		$this->db->where('a_id', $admin_id);
		$this->db->where('a_status', 1);
		return $this->db->get()->row_array();	
	}
	public function save_admin($data){
		$this->db->insert('admin', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function login_details($data){
		$sql = "SELECT * FROM admin WHERE (a_email_id ='".$data['email']."' AND a_password='".$data['password']."' AND a_status=1) OR (a_username ='".$data['email']."' AND a_password='".$data['password']."' AND a_status=1)";
		return $this->db->query($sql)->row_array();	
	}
	public function get_admin_details($admin_id){
		$this->db->select('admin.a_id,admin.role_id,admin.a_email_id')->from('admin');		
		$this->db->where('a_id', $admin_id);
		$this->db->where('a_status', 1);
        return $this->db->get()->row_array();	
	}
	public function get_all_admin_details($admin_id){
		$this->db->select('admin.a_id,admin.role_id,admin.a_email_id,admin.a_name,roles.r_name,admin.a_profile_pic')->from('admin');		
		$this->db->join('roles', 'roles.r_id = admin.role_id', 'left');
		$this->db->where('a_id', $admin_id);
		$this->db->where('a_status', 1);
        return $this->db->get()->row_array();	
	}
	public function get_ll_Hospital_details(){
		$this->db->select('hospital.hos_id,hospital.hos_bas_name')->from('hospital');		
		$this->db->where('hos_status !=', 2);
        return $this->db->get()->result_array();	
	}


}