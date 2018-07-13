<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointments_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_appointments($data){
		$this->db->insert('appointments',$data);
		return $this->db->insert_id();
	}
	public  function get_website_appintmenr_list($hos_id){
		$this->db->select('appointments.*,treament.t_name,specialist.specialist_name,resource_list.resource_name')->from('appointments');
		$this->db->join('treament', 'treament.t_id = appointments.department', 'left');
		$this->db->join('specialist', 'specialist.s_id = appointments.specialist', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = appointments.doctor_id', 'left');
		$this->db->where('appointments.hos_id',$hos_id);
		$this->db->where('appointments.status !=',2);
		$this->db->where('appointments.patient_id !=','');
		$this->db->order_by('appointments.id','desc');
		return $this->db->get()->result_array();
	}
	
	

}