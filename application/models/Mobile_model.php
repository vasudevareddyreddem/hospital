<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}

	public function get_hospital_districts_list(){
	$this->db->select('hospital.hos_id,hospital.hos_bas_name')->from('hospital');
	$this->db->where('hos_status',1);
	return $this->db->get()->result_array();
	}
	
}