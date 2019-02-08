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
 	return $this->db->get()->row_array();
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
	 /* for billing details */
	 public function get_login_resouce_details($admin_id){
			$this->db->select('resource_list.r_id,resource_list.hos_id,admin.a_id,admin.role_id,admin.a_email_id,admin.a_name,roles.r_name,admin.a_profile_pic')->from('admin');		
			$this->db->join('roles', 'roles.r_id = admin.role_id', 'left');
			$this->db->join('resource_list', 'resource_list.a_id = admin.a_id', 'left');
			$this->db->where('admin.a_id', $admin_id);
			$this->db->where('admin.a_status', 1);
			return $this->db->get()->row_array();	
		}
	public  function save_coupon_code_history($data){
		$this->db->insert('coupon_code_history',$data);
		return $this->db->insert_id();
	}
	public  function save_billing_data($data){
		$this->db->insert('billing_history',$data);
		return $this->db->insert_id();
	}
	public  function get_wallet_amt_details($a_u_id){
		$this->db->select('wallet_amount,wallet_amount_id,remaining_wallet_amount')->from('appointment_users');
		$this->db->where('a_u_id',$a_u_id);
		return $this->db->get()->row_array();
	}
	public  function update_op_wallet_amt_details($a_u_id,$data){
		$this->db->where('a_u_id',$a_u_id);
		return $this->db->update('appointment_users',$data);
	}
	
	public  function get_patient_billing_id($patient_id){
		$this->db->select('b_id')->from('patient_billing');
		$this->db->where('p_id',$patient_id);
		$this->db->order_by('b_id',"desc");
		return $this->db->get()->row_array();
	}
	 /* for billing details */
	 
	 /* apply coupon code */
	 public  function get_coupon_code_details($code,$code_id,$hos_id,$category){
		$this->db->select('coupon_code_list.c_c_l_id,coupon_code_list.op_amount_percentage,coupon_code_list.ip_amount_percentage,coupon_code_list.created_by,coupon_code_list.created_at,coupon_code_list.lab_amount_percentage,')->from('coupon_code_list');
		$this->db->where('coupon_code_list.hos_id',$hos_id);
		$this->db->where('coupon_code_list.c_c_l_id',$code_id);
		$this->db->where('coupon_code_list.type',$category);
		$this->db->where('coupon_code_list.couponcode_name',$code);
		return $this->db->get()->row_array();
	}
	public  function get_all_billing_list($hos_id){
		$this->db->select('*')->from('billing_history');
		$this->db->where('hos_id',$hos_id);
		$this->db->order_by('b_h_id','desc');
		return $this->db->get()->result_array();
	}
	
	/* appoinment  direct billing purpose*/
	public  function get_appointment_user_details($appoinment_id){
		$this->db->select('*')->from('appointments');
		$this->db->where('id',$appoinment_id);
		return $this->db->get()->row_array();
	}
	public  function save_billing_for_patient($data){
		$this->db->insert('patients_list_1',$data);
		return $this->db->insert_id();
	}
	public  function save_billing_data_for_patient($data){
		$this->db->insert('patient_billing',$data);
		return $this->db->insert_id();
	}
	public function update_patient_billing_details($bid,$data){
		$this->db->where('b_id',$bid);
    	return $this->db->update("patient_billing",$data);
	}
	public function get_coupon_code_deatils($coupon_code,$hos_id){
		$this->db->select('coupon_code_list.c_c_l_id,coupon_code_list.op_amount_percentage,coupon_code_list.ip_amount_percentage,coupon_code_list.created_by,coupon_code_list.created_at,coupon_code_list.lab_amount_percentage,')->from('coupon_code_list');
		$this->db->where('coupon_code_list.hos_id',$hos_id);
		$this->db->where('coupon_code_list.couponcode_name',$coupon_code);
		return $this->db->get()->row_array();
	}	
	public  function update_appointments_user_id($id,$data){
		$this->db->where('appointments.id',$id);
		return $this->db->update('appointments',$data);		
	}
	public  function get_appointment_bid_user_details($b_id){
		$this->db->select('appointment_bidding_list.*,appointment_users.name,appointment_users.token,hospital.hos_bas_name')->from('appointment_bidding_list');
		$this->db->join('appointment_users', 'appointment_users.a_u_id = appointment_bidding_list.create_by', 'left');
		$this->db->join('hospital', 'hospital.hos_id = appointment_bidding_list.hos_id', 'left');
		$this->db->where('appointment_bidding_list.b_id',$b_id);
		return $this->db->get()->row_array();
	}
	
	    public function save_appointments($data){
		$this->db->insert('appointments',$data);
		return $this->db->insert_id();
	}
	public  function get_website_appiontment_list($hos_id){
		$this->db->select('appointments.*,treament.t_name,specialist.specialist_name,resource_list.resource_name')->from('appointments');
		$this->db->join('treament', 'treament.t_id = appointments.department', 'left');
		$this->db->join('specialist', 'specialist.s_id = appointments.specialist', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = appointments.doctor_id', 'left');
		$this->db->where('appointments.hos_id',$hos_id);
		$this->db->where('appointments.status !=',2);
		$this->db->where('appointments.patient_id =',0);
		$this->db->order_by('appointments.id','desc');
		return $this->db->get()->result_array();
	}
	public function get_bidding_det($bid){
		$this->db->select('*')->from('appointment_bidding_list')->where('b_id',$bid);
		return $this->db->get()->row_array();

	}
	
	public  function get_op_patient_coupon_code_details($code,$patient_id,$hos_id){
		$this->db->select('coupon_code_list.c_c_l_id,coupon_code_list.op_amount_percentage,coupon_code_list.op_amount_percentage,coupon_code_list.created_by as create_by,coupon_code_list.created_at,appointments.create_by as ap_create_by')->from('coupon_code_list');
		$this->db->join('appointments','appointments.b_id = coupon_code_list.appointment_id','left');
		$this->db->where('coupon_code_list.hos_id',$hos_id);
		$this->db->where('appointments.patient_id',$patient_id);
		$this->db->where('coupon_code_list.couponcode_name',$code);
		return $this->db->get()->row_array();
	}
	
	/* forgot  password */
	
	public  function check_user_details_ortheir($a_email_id){
		$this->db->select('a_email_id,a_org_password')->from('admin');
		$this->db->where('a_email_id',$a_email_id);
		return $this->db->get()->row_array();		
	}
}