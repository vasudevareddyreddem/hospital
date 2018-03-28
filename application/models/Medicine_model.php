<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Medicine_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function get_search_post($value){
		$this->db->select('medicine_list.medicine_name')->from('medicine_list');		
		$this->db->like('medicine_list.medicine_name');
		$this->db->where('medicine_list.status',1);
        return $this->db->get()->result_array();	
	}
	
	

}