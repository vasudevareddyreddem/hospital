<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	
	public function adding_team_chating($data){
		$this->db->insert('team_chating', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function adding_hospital_admin_chating($data){
		$this->db->insert('team_chating', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	
	

}