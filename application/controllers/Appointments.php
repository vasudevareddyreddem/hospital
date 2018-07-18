<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointments extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->library('zend');
		$this->load->model('Admin_model');
		$this->load->model('Appointments_model');
		$this->load->model('Resources_model');
			if($this->session->userdata('userdetails'))
			{
			$admindetails=$this->session->userdata('userdetails');
			$data['userdetails']=$this->Admin_model->get_all_admin_details($admindetails['a_id']);
			$hos_details=$this->Admin_model->get_hospital_details($admindetails['a_id']);
			if($data['userdetails']['role_id']==2){
			$data['img']=$this->Admin_model->get_hosipital_imges($admindetails['a_id']);
			$data['notification']=$this->Admin_model->get_all_announcement($hos_details['hos_id']);
			$Unread_count=$this->Admin_model->get_all_announcement_unread_count($hos_details['hos_id']);
			if(count($Unread_count)>0){
					$data['Unread_count']=count($Unread_count);
				}else{
					$data['Unread_count']='';
				}
			}else if($data['userdetails']['role_id']==3 || $data['userdetails']['role_id']==4 ||$data['userdetails']['role_id']==5 ||$data['userdetails']['role_id']==6){
				$data['img']=$this->Admin_model->get_resource_imges($admindetails['a_id']);
				$data['notification']=$this->Admin_model->get_all_resource_announcement($admindetails['a_id']);
				$Unread_count=$this->Admin_model->get_all_resource_announcement_unread_count($admindetails['a_id']);
				if(count($Unread_count)>0){
					$data['Unread_count']=count($Unread_count);
				}else{
					$data['Unread_count']='';
				}
			}
			$this->load->view('html/header',$data);
			$this->load->view('html/sidebar',$data);
			}
		}
		public function index(){
			if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');

				if($admindetails['role_id']=3){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['departments_list']=$this->Resources_model->get_hospital_deportments($userdetails['hos_id']);
					//echo '<pre>';print_r($data);exit; 
					$data['tab']= base64_decode($this->uri->segment(3));
					$data['appointment_list']=$this->Appointments_model->get_website_appintmenr_list($userdetails['hos_id']);
					//echo $this->db->last_query();
					//echo '<pre>';print_r($data);exit;
					$this->load->view('resource/appointments',$data);
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		}
		
		public  function add(){
			
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);

				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$add=array(
					'hos_id'=>isset($userdetails['hos_id'])?$userdetails['hos_id']:'',
					'patinet_name'=>isset($post['patinet_name'])?$post['patinet_name']:'',
					'age'=>isset($post['age'])?$post['age']:'',
					'mobile'=>isset($post['mobile'])?$post['mobile']:'',
					'department'=>isset($post['department'])?$post['department']:'',
					'specialist'=>isset($post['specialist'])?$post['specialist']:'',
					'doctor_id'=>isset($post['doctor_id'])?$post['doctor_id']:'',
					'date'=>isset($post['date'])?$post['date']:'',
					'time'=>isset($post['time'])?$post['time']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['a_id'],
					'coming_through'=>1,
					);
					$save=$this->Appointments_model->save_appointments($add);
					if(count($save)>0){
							$this->session->set_flashdata('success',"Appintment Successfully added");
							redirect('appointments/index/'.base64_encode(3));
						}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('appointments');
						}
					//echo '<pre>';print_r($add);exit;
				}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
				}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
		}
	
	
	
	
	
}