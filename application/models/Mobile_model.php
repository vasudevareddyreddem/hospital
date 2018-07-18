<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}

	public function check_email_already_already_exits($email){
	$this->db->select('*')->from('appointment_users');
	$this->db->where('email',$email);
	return $this->db->get()->row_array();
	}
	public  function save_appointment_user($data){
		$this->db->insert('appointment_users',$data);
		return $this->db->insert_id();
		
	}
	public  function check_login_details($email,$password){
		$this->db->select('a_u_id,name,email,mobile')->from('appointment_users');
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function check_user_details($id){
		$this->db->select('*')->from('appointment_users');
		$this->db->where('a_u_id',$id);
		return $this->db->get()->row_array();
	}
	public  function update_user_password($id,$pass){
		$data=array('password'=>md5($pass),'org_password'=>$pass);
		$this->db->where('a_u_id',$id);
		return $this->db->update('appointment_users',$data);
		
	}
	
}