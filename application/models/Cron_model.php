<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cron_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function get_all_appointments(){
		$this->db->select('*')->from('appointment_bidding_list');
		$this->db->where('status !=',1);
		return $this->db->get()->result_array();
	}
}