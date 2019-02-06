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
$this->db->where('status',1);

return $this->db->get()->result_array();


	}
	public function get_health_camp_details($camp_id,$user_id,$data)
	{
		$this->db->insert('user_appointments_tab',$data);
		$this->db->select('hc.*,hos.hos_bas_name')->from('health_camp_tab hc')->join('hospital hos','hos.hos_id=hc.hos_id')
		->where('hc.camp_id',$camp_id)->where('hc.status',1);
		return $this->db->get()->row_array();


	}
	public function get_camp_users(){
		$this->db->select('ca.id,user.name,user.mobile,hc.dept_name,ca.created_date,ca.age')->from('user_health_camps ca')->join('appointment_users user','user.a_u_id=ca.user_id')
       	->join('health_camp_tab hc','hc.camp_id=ca.camp_id')->where('ca.camp_status',2)->where('hc.status',1);
       	return $this->db->get()->result_array();

	}
	public function change_user_hcamp_status($data,$id){
		$this->db->where('id',$id);
		$this->db->update('user_health_camps',$data);
return $this->db->affected_rows()?1:0;

	}
	public function get_hos_cities(){
		$this->db->select('hos_bas_city')->from('hospital')->where('hos_status',1)->where('hos_bas_city is not null',NULL,FALSE)->group_by('hos_bas_city')->order_by('hos_bas_city','asc');
		return $this->db->get()->result_array();

	}
	public function user_checking($user_id){
		$this->db->select('*')->from('appointment_users')->where('a_u_id',$user_id)->where('status',1);
		return $this->db->get()->result_array();


	}
	public function get_hospitals($city){
		$this->db->select('hos_id,hos_bas_name')->from('hospital')->where('hos_bas_city',$city)->where('hos_status',1);
		return $this->db->get()->result_array();
	}
	public function get_depts($hos_id){
		$this->db->select('camp_id,dept_name')->from('health_camp_tab')->where('hos_id',$hos_id)->where('status',1);
		return $this->db->get()->result_array();

	}
	public function get_camp_dates($hos_id,$dept_name){

$this->db->select('hos_id,dept_name,booking_date')->from('health_camp_tab')->where('hos_id',$hos_id)
->where('dept_name',$dept_name)->where('status',1);
return $this->db->get()->result_array();

	}
	public function save_user_select_camp($data){
		$this->db->insert('user_health_camps',$data);
		return $this->db->affected_rows()?1:0;


	}
	public function check_camp_exists($user_id,$camp_id){
		$this->db->select('*')->from('user_health_camps')->where('camp_id',$camp_id)->where('user_id',$user_id);
return $this->db->get()->result_array();
	}
	public function get_camp_times($hos_id,$dept_name,$date){
		$this->db->select('camp_id,hos_id,dept_name,from_time,to_time')->from('health_camp_tab')->where('hos_id',$hos_id)
->where('dept_name',$dept_name)->where('booking_date',$date)->where('status',1);
return $this->db->get()->result_array();

	}
}