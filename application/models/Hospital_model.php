<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hospital_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}

	public function save_hospital_step_one($data){
		$this->db->insert('hospital', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function check_email_exits($email){
		$sql = "SELECT hospital.hos_id FROM hospital WHERE hos_email_id ='".$email."'";
		return $this->db->query($sql)->row_array();	
	}
	public function update_hospital_details($hos_id,$data){
		$this->db->where('hos_id',$hos_id);
    	return $this->db->update("hospital",$data);
	}
	public function get_hospital_details($hos_id){
		$this->db->select('*')->from('hospital');		
		$this->db->where('hos_id',$hos_id);
        return $this->db->get()->row_array();
	}
	public function get_hospital_list_details(){
		$this->db->select('hospital.hos_id,hospital.hos_con_number,hospital.hos_bas_name,hospital.hos_status,hospital.hos_curent_login')->from('hospital');		
        $this->db->where('hos_undo',0);
		return $this->db->get()->result_array();
	}

}