<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ward_management extends CI_Controller {

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
		$this->load->model('Lab_model');
		$this->load->model('Resources_model');
		$this->load->model('Ward_model');
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
			}else if($data['userdetails']['role_id']==3 || $data['userdetails']['role_id']==4 ||$data['userdetails']['role_id']==5 ||$data['userdetails']['role_id']==6 ||$data['userdetails']['role_id']==9){
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
	public function index()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/index');
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function admit()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/admit');
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function discharge()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/discharge');
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function transfer()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/transfer');
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function bed_chart()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/bed-chart');
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function observation()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/observation');
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function admit_discharge_statistics()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/admit-discharge-statistics');
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function patient_history()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/patient-history');
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function discharge_report()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/discharge-report');
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function wardnamepost()
	{	
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
				$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$hos_ids =$this->Ward_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
					//echo '<pre>'; print_r($hos_ids);exit;
				//echo '<pre>';print_r($post);exit;
					$exits_treatment = $this->Ward_model->get_saved_wardname($post['ward_name'],$hos_ids['hos_id']);
					if(count($exits_treatment)>0){
						$this->session->set_flashdata('error',"Treatment name already exists .please use another name");
						redirect('ward/wardname/'.base64_encode(1));
					}
				$ward_details=array(
					'hos_id'=>$hos_ids['hos_id'],
					'ward_name'=>$post['ward_name'],
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'created_by'=>$hos_ids['a_id']
					);
					//echo '<pre>';print_r($ward_details);exit;
				$treatment = $this->Ward_model->save_wardname($ward_details);
				if(count($treatment)>0){
					$this->session->set_flashdata('success',"Ward added successfully");
					redirect('hospital/addtreatment/'.base64_encode(1));
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('hospital/addtreatment');
				}
									
				
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
					
				
	}
	
	
	
	
	public function wardname()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=2){
					$data['tab']=base64_decode($this->uri->segment(3));
				$admindetails=$this->session->userdata('userdetails');
				$hos_ids =$this->Ward_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
				$data['ward_list'] =$this->Ward_model->get_ward_list($hos_ids['a_id'],$hos_ids['hos_id']);
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/wardname');
					$this->load->view('html/footer');
							}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
				
	}
		public function ward_name()
	{
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			if($admindetails['role_id']=2){
					$data['tab']=base64_decode($this->uri->segment(3));
					$admindetails=$this->session->userdata('userdetails');
					$hos_ids =$this->Ward_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
					$data['ward_list']=$this->Ward_model->get_Ward_list($hos_ids['a_id'],$hos_ids['hos_id']);
					//$data['doctors_list']=$this->Ward_model->get_doctors_list($hos_ids['a_id'],$hos_ids['hos_id']);
					//echo $this->db->last_query();exit;
					//$data['hospital_treatment_list']=$this->Hospital_model->get_all_doctor_treatment_list($hos_ids['a_id'],$hos_ids['hos_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('ward/wardname',$data);
					$this->load->view('html/footer');
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
	
	
}
