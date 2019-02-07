<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_recep_user_list_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
 public function recep_login_checking($email,$password){
 	$password=md5($password);
 	
 			$this->db->select('*')->from('admin')->group_start()->where('a_email_id',$email)->where('a_password',$password)
 			->where('a_status',1)->where('role_id',3)->group_end()->or_group_start()->where('a_username',$email)->where('a_password',$password)
 			->where('a_status',1)->where('role_id',3)->group_end();
 			return $this->db->get()->row_array();

 }
 public function user_checking($user_id){
 	$this->db->select('*')->from('admin')->where('a_id',$user_id)->where('a_status',1);
 	return $this->db->get()->result_array();
 }
 public function get_all_resouce_details($admin_id){
		$this->db->select('resource_list.r_id,resource_list.hos_id,admin.a_id,admin.role_id,admin.a_email_id,admin.a_name,roles.r_name,admin.a_profile_pic')->from('admin');		
		$this->db->join('roles', 'roles.r_id = admin.role_id', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = admin.a_id', 'left');
		$this->db->where('admin.a_id', $admin_id);
		$this->db->where('admin.a_status', 1);
        return $this->db->get()->row_array();	
	}
	public  function get_app_appointment_list($hos_id){
  $this->db->select('appointment_bidding_list.*,appointment_bidding_list.b_id,appointment_bidding_list.status,treament.t_name,specialist.specialist_name,resource_list.resource_name')->from('appointment_bidding_list');
  $this->db->join('treament', 'treament.t_id = appointment_bidding_list.department', 'left');
  $this->db->join('specialist', 'specialist.s_id = appointment_bidding_list.specialist', 'left');
  $this->db->join('resource_list', 'resource_list.a_id = appointment_bidding_list.doctor_id', 'left');
  $this->db->where('appointment_bidding_list.hos_id',$hos_id);
  $this->db->where('appointment_bidding_list.status',0);
  $this->db->order_by('appointment_bidding_list.b_id','desc');
  return $this->db->get()->result_array();
 }
 public function get_accepted_appointment_list($hos_id){
 	$this->db->select('appointment_bidding_list.*,appointment_bidding_list.b_id,appointment_bidding_list.status,treament.t_name,specialist.specialist_name,resource_list.resource_name')->from('appointment_bidding_list');
  $this->db->join('treament', 'treament.t_id = appointment_bidding_list.department', 'left');
  $this->db->join('specialist', 'specialist.s_id = appointment_bidding_list.specialist', 'left');
  $this->db->join('resource_list', 'resource_list.a_id = appointment_bidding_list.doctor_id', 'left');
  $this->db->where('appointment_bidding_list.hos_id',$hos_id);
  $this->db->where('appointment_bidding_list.status',1);
  $this->db->order_by('appointment_bidding_list.b_id','desc');
  return $this->db->get()->result_array();


 }
 public function get_rejected_appointment_list($hos_id){
 	$this->db->select('appointment_bidding_list.*,appointment_bidding_list.b_id,appointment_bidding_list.status,treament.t_name,specialist.specialist_name,resource_list.resource_name')->from('appointment_bidding_list');
  $this->db->join('treament', 'treament.t_id = appointment_bidding_list.department', 'left');
  $this->db->join('specialist', 'specialist.s_id = appointment_bidding_list.specialist', 'left');
  $this->db->join('resource_list', 'resource_list.a_id = appointment_bidding_list.doctor_id', 'left');
  $this->db->where('appointment_bidding_list.hos_id',$hos_id);
  $this->db->where('appointment_bidding_list.status',2);
  $this->db->order_by('appointment_bidding_list.b_id','desc');
  return $this->db->get()->result_array();


 }
 public function change_appoint_status($data,$bid){
 	$this->db->where('b_id',$bid);
 	$this->db->update('appointment_bidding_list',$data);
 	return $this->db->affected_rows()?1:0;
 }
	
	}