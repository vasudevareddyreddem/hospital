<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wallet_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function add_wallet_money($data){
		$this->db->insert('wallet_amount',$data);
		return $this->db->insert_id();
	}
	public  function update_wallet_amount_details($w_id,$data){
		$this->db->where('w_id',$w_id);
		return $this->db->update('wallet_amount',$data);
	}
	public  function delete_wallet_amount($w_id){
		$this->db->where('w_id',$w_id);
		return $this->db->delete('wallet_amount');
	}
	public  function check_amount_active_ornot(){
			$this->db->select('*')->from('wallet_amount');
			$this->db->where('status',1);
			return $this->db->get()->row_array(); 
	}
	
	public  function get_coupon_code_details($code,$patient_id,$hos_id){
		$this->db->select('coupon_code_list.c_c_l_id,coupon_code_list.op_amount_percentage,coupon_code_list.op_amount_percentage')->from('coupon_code_list');
		$this->db->join('appointments','appointments.b_id = coupon_code_list.appointment_id','left');
		$this->db->where('coupon_code_list.hos_id',$hos_id);
		$this->db->where('appointments.patient_id',$patient_id);
		$this->db->where('coupon_code_list.couponcode_name',$code);
		return $this->db->get()->row_array();
	}
	public  function save_coupon_code_history($data){
		$this->db->insert('coupon_code_history',$data);
		return $this->db->insert_id();
	}
}

	
