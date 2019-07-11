<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_user_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}	
	public function check_login_with_mobile($mobile){
		$this->db->select('*')->from('appointment_users');
		$this->db->where('mobile',$mobile);
		return $this->db->get()->row_array();
	}
	public  function update_token($id,$data){
		$this->db->where('a_u_id',$id);
		return $this->db->update('appointment_users',$data);
	}
	public  function get_user_details($id){
		$this->db->select('*')->from('appointment_users');
		$this->db->where('a_u_id',$id);
		return $this->db->get()->row_array();
	}
	public function check_email_already_exits($email,$mob){
	$this->db->select('a_u_id,mobile,email')->from('appointment_users');
	$this->db->where('email',$email);
	$this->db->where('status !=',2);
	$this->db->or_where('mobile',$mob);
	return $this->db->get()->row_array();
	}
	
	
}