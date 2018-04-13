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
		$this->db->select('team_chating.*,sentname.a_name as replayname,sentname.a_profile_pic as replaypic,admin.a_name as replayedname,admin.a_profile_pic as replayedpic')->from('team_chating');
		$this->db->join('admin as sentname', 'sentname.a_id = team_chating.user_id', 'left');
		$this->db->join('admin', 'admin.a_id = team_chating.replay_user_id', 'left');
		$this->db->order_by('team_chating.id',"DESC");
		$this->db->group_by('team_chating.user_id');
        return $this->db->get()->result_array();	
	}
	public function get_resourse_message_list(){
		$this->db->select('hospital_admin_chating.*,sentname.resource_name as replayname,sentname.resource_photo as replaypic,admin.a_name as replayedname,admin.a_profile_pic as replayedpic')->from('hospital_admin_chating');
		$this->db->join('resource_list as sentname', 'sentname.a_id = hospital_admin_chating.user_id', 'left');
		$this->db->join('admin', 'admin.a_id = hospital_admin_chating.replay_user_id', 'left');
		$this->db->group_by('hospital_admin_chating.user_id');
		$this->db->order_by('hospital_admin_chating.id',"asc");
		return $this->db->get()->result_array();	
	}
	public function getget_team_replay_message_list($user_id){
		$this->db->select('team_chating.*,sentname.a_name as replayname,admin.a_name as replayedname')->from('team_chating');
		$this->db->join('admin as sentname', 'sentname.a_id = team_chating.user_id', 'left');
		$this->db->join('admin', 'admin.a_id = team_chating.replay_user_id', 'left');
		$this->db->where('team_chating.user_id',$user_id);
		$this->db->order_by('team_chating.id',"asc");
        return $this->db->get()->result_array();	
	}
	public function getget_resourse_replay_message_list($user_id){
		$this->db->select('hospital_admin_chating.*,sentname.a_name as replayname,admin.a_name as replayedname')->from('hospital_admin_chating');
		$this->db->join('admin as sentname', 'sentname.a_id = hospital_admin_chating.user_id', 'left');
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
	public function get_resource_name($id){
		$this->db->select('resource_list.resource_name')->from('resource_list');		
		$this->db->where('a_id', $id);
        return $this->db->get()->row_array();
	}
	public function save_announcements_list($data){
		$this->db->insert('announcements', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_notification($data){
		$this->db->insert('notifications', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_all_announcements_details(){
		$this->db->select('announcements.*,hospital.hos_bas_name,admin.a_name as sentname')->from('announcements');
		$this->db->join('hospital', 'hospital.hos_id = announcements.hos_id', 'left');
		$this->db->join('admin', 'admin.a_id = announcements.sent_by', 'left');
		$this->db->group_by('announcements.hos_id');		
		$this->db->order_by('announcements.int_id',"DESC");		
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
	public function get_admin_chating_with_hospital(){
		$this->db->select('admin_chating.*,admin.a_name as sender_name,hospital.hos_bas_name as reciver_name')->from('admin_chating');
		$this->db->join('admin', 'admin.a_id = admin_chating.sender_id', 'left');
		$this->db->join('hospital', 'hospital.hos_id = admin_chating.reciver_id', 'left');
		$this->db->group_by('admin_chating.create_at');
		$this->db->group_by('admin_chating.create_by');
        return $this->db->get()->result_array();	
	}
	public function get_all_resouce_details($admin_id){
		$this->db->select('resource_list.hos_id,admin.a_id,admin.role_id,admin.a_email_id,admin.a_name,roles.r_name,admin.a_profile_pic')->from('admin');		
		$this->db->join('roles', 'roles.r_id = admin.role_id', 'left');
		$this->db->join('resource_list', 'resource_list.a_id = admin.a_id', 'left');
		$this->db->where('admin.a_id', $admin_id);
		$this->db->where('admin.a_status', 1);
        return $this->db->get()->row_array();	
	}
	public function get_resource_list($hos_id){
		$this->db->select('resource_list.a_id,resource_list.resource_name')->from('resource_list');
		$this->db->where('resource_list.hos_id',$hos_id);
        return $this->db->get()->result_array();	
	}
	public function get_all_announcement($hos_id){
		$this->db->select('*')->from('announcements');
		$this->db->where('announcements.hos_id',$hos_id);
		$this->db->order_by('announcements.int_id',"DESC");
        return $this->db->get()->result_array();	
	}
	public function get_all_announcement_unread_count($hos_id){
		$this->db->select('announcements.int_id')->from('announcements');
		$this->db->where('announcements.hos_id',$hos_id);
		$this->db->where('announcements.readcount',1);
        return $this->db->get()->result_array();	
	}
	public function get_all_notification_details(){
		$this->db->select('*')->from('notifications');
        return $this->db->get()->result_array();	
	}
	public function get_announcements_comment($id){
		$this->db->select('announcements.comment,announcements.create_at')->from('announcements');
		$this->db->where('announcements.int_id',$id);
        return $this->db->get()->row_array();
	}
	public function get_announcement_comment_read($id,$read){
		$this->db->where('int_id', $id);
		return $this->db->update('announcements', $read);
	}
	public function get_hospitals_list_monthwise($date){
		$this->db->select('hospital.hos_id,hospital.hos_created')->from('hospital');
        $this->db->where("DATE_FORMAT(hos_created,'%Y')", $date);
		return $this->db->get()->result_array();
	}
	public function get_last_sevendays_hospital_list($date){
		$this->db->select('hospital.hos_id,hospital.hos_created')->from('hospital');
        $this->db->where("DATE_FORMAT(hos_created,'%Y-%m-%d')", $date);
		return $this->db->get()->result_array();
	}


}