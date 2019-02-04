<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_health_camps_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function get_user_notifications($userid)
	{
	$this->db->select('camp_id');
    $this->db->from('user_appointments_tab');
      $this->db->where('a_u_id',$userid);
    $where_clause = $this->db->get_compiled_select();

    $this->db->select('camp_id,from_time,to_time,booking_date,dept_name,city_name');
$this->db->from('health_camp_tab');
$this->db->where("`camp_id`  NOT  IN ($where_clause)", NULL, FALSE);

return $this->db->get()->result_array();


	}
	public function get_health_camp_details($camp_id,$user_id,$data)
	{
		$this->db->insert('user_appointments_tab',$data);
		$this->db->select('hc.*,hos.hos_bas_name')->from('health_camp_tab hc')->join('hospital hos','hos.hos_id=hc.hos_id')
		->where('hc.camp_id',$camp_id);
		return $this->db->get()->row_array();


	}
}