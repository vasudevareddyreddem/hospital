<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_recep_user_list_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
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
 public function recep_login_checking($email,$password){
 	$password=md5($password);
 	
 			$this->db->select('*')->from('admin')->group_start()->where('a_email_id',$email)->where('a_password',$password)
 			->where('a_status',1)->where('role_id',3)->group_end()->or_group_start()->where('a_username',$email)->where('a_password',$password)
 			->where('a_status',1)->where('role_id',3)->group_end();
 			return $this->db->get()->row_array();

 }
	
	}