<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function update_admin_details($a_id,$data){
		$this->db->where('a_id',$a_id);
    	return $this->db->update("admin",$data);
	}
	public function get_adminpassword_details($admin_id){
		$this->db->select('admin.a_id,admin.a_password')->from('admin');
		$this->db->where('a_id', $admin_id);
		$this->db->where('a_status', 1);
		return $this->db->get()->row_array();	
	}
	public function save_admin($data){
		$this->db->insert('admin', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function login_details($data){
		$sql = "SELECT * FROM admin WHERE (a_email_id ='".$data['email']."' AND a_password='".$data['password']."' AND a_status=1) OR (a_username ='".$data['email']."' AND a_password='".$data['password']."' AND a_status=1)";
		return $this->db->query($sql)->row_array();	
	}
	public function get_admin_details($admin_id){
		$this->db->select('admin.a_id,admin.role_id,admin.a_email_id')->from('admin');		
		$this->db->where('a_id', $admin_id);
		$this->db->where('a_status', 1);
        return $this->db->get()->row_array();	
	}
	public function get_all_admin_details($admin_id){
		$this->db->select('admin.a_id,admin.role_id,admin.a_email_id,admin.a_name,roles.r_name,admin.a_profile_pic')->from('admin');		
		$this->db->join('roles', 'roles.r_id = admin.role_id', 'left');
		$this->db->where('a_id', $admin_id);
		$this->db->where('a_status', 1);
        return $this->db->get()->row_array();	
	}
	public function get_all_Hospital_details(){
		$this->db->select('hospital.hos_id,hospital.hos_bas_name')->from('hospital');		
		$this->db->where('hos_status !=', 2);
        return $this->db->get()->result_array();	
	}
	public function getget_team_message_list(){
		$this->db->select('team_chating.*,sentname.resource_name as replayname,sentname.resource_photo as replaypic,admin.a_name as replayedname,admin.a_profile_pic as replayedpic')->from('team_chating');
		$this->db->join('resource_list as sentname', 'sentname.a_id = team_chating.user_id', 'left');
		$this->db->join('admin', 'admin.a_id = team_chating.replay_user_id', 'left');
		$this->db->order_by('team_chating.id',"DESC");
		$this->db->group_by('team_chating.user_id');
        return $this->db->get()->result_array();	
	}
	public function getget_resourse_message_list(){
		$this->db->select('hospital_admin_chating.*,sentname.resource_name as replayname,sentname.resource_photo as replaypic,admin.a_name as replayedname,admin.a_profile_pic as replayedpic')->from('hospital_admin_chating');
		$this->db->join('resource_list as sentname', 'sentname.a_id = hospital_admin_chating.user_id', 'left');
		$this->db->join('admin', 'admin.a_id = hospital_admin_chating.replay_user_id', 'left');
		$this->db->group_by('hospital_admin_chating.user_id');
		$this->db->order_by('hospital_admin_chating.id',"asc");
		return $this->db->get()->result_array();	
	}
	public function getget_team_replay_message_list($user_id){
		$this->db->select('team_chating.*,sentname.resource_name as replayname,sentname.resource_photo as replaypic,admin.a_name as replayedname,admin.a_profile_pic as replayedpic')->from('team_chating');
		$this->db->join('resource_list as sentname', 'sentname.a_id = team_chating.user_id', 'left');
		$this->db->join('admin', 'admin.a_id = team_chating.replay_user_id', 'left');
		$this->db->where('team_chating.user_id',$user_id);
		$this->db->order_by('team_chating.id',"asc");
        return $this->db->get()->result_array();	
	}
	public function getget_resourse_replay_message_list($user_id){
		$this->db->select('hospital_admin_chating.*,sentname.resource_name as replayname,sentname.resource_photo as replaypic,admin.a_name as replayedname,admin.a_profile_pic as replayedpic')->from('hospital_admin_chating');
		$this->db->join('resource_list as sentname', 'sentname.a_id = hospital_admin_chating.user_id', 'left');
		$this->db->join('admin', 'admin.a_id = hospital_admin_chating.replay_user_id', 'left');
		$this->db->where('hospital_admin_chating.user_id',$user_id);
		$this->db->order_by('hospital_admin_chating.id',"asc");
        return $this->db->get()->result_array();	
	}
	public function get_Hospital_name($id){
		$this->db->select('hospital.hos_bas_name')->from('hospital');		
		$this->db->where('hos_id', $id);
        return $this->db->get()->row_array();
	}
	public function save_notifications_list($data){
		$this->db->insert('notifications', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_all_notification_details(){
		$this->db->select('notifications.*,hospital.hos_bas_name,admin.a_name as sentname')->from('notifications');
		$this->db->join('hospital', 'hospital.hos_id = notifications.hos_id', 'left');
		$this->db->join('admin', 'admin.a_id = notifications.sent_by', 'left');
		$this->db->group_by('notifications.hos_id');		
		$this->db->order_by('notifications.int_id',"DESC");		
        return $this->db->get()->result_array();	
	}
	
	public function get_hospital_details($a_id){
		$this->db->select('hospital.hos_bas_name,hospital.hos_id')->from('hospital');		
		$this->db->where('a_id', $a_id);
        return $this->db->get()->row_array();	
	}
	public function get_hospital_admin_chating($hos_id){
		$this->db->select('admin_chating.*,admin.a_name as sender_name,hospital.hos_bas_name as reciver_name')->from('admin_chating');
		$this->db->join('admin', 'admin.a_id = admin_chating.sender_id', 'left');
		$this->db->join('hospital', 'hospital.hos_id = admin_chating.reciver_id', 'left');
		$this->db->where('admin_chating.reciver_id', $hos_id);
		$this->db->or_where('admin_chating.sender_id', $hos_id);
        return $this->db->get()->result_array();	
	}


}