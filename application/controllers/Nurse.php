<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');

class Nurse extends In_frontend {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->model('Nurse_model');
		}
	public function index()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('nurse/index');
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
	public function patient_follow_ups()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['admit_patient_list']=$this->Nurse_model->get_admited_patient_list($userdetails['hos_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('nurse/patient_follow_ups',$data);
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
	public function consultation()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				//echo '<pre>';print_r($logindetails);exit;
				if($admindetails['role_id']==10){
					$patient_id=base64_decode($this->uri->segment(3));
					if($patient_id==''){
						$this->session->set_flashdata('error',"you don't have permission to access");
						redirect('dashboard');
					}
					$data['patient_id']=isset($patient_id)?$patient_id:'';
					$data['billing_id']=base64_decode($this->uri->segment(4));
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['encounters_list']=$this->Resources_model->get_vitals_list($patient_id);
					$data['patient_details']=$this->Resources_model->get_patient_details($patient_id);
					$data['patient_medicine_list']=$this->Resources_model->get_patient_medicine_details_list($patient_id,$data['billing_id']);
					$data['patient_privious_medicine_list']=$this->Resources_model->get_patient_previous_medicine_details_list($patient_id);
					$data['patient_privious_alternate_medicine_list']=$this->Resources_model->get_patient_previous_alternate_medicine_details_list($patient_id);
					$data['patient_investigation_list']=$this->Resources_model->get_patient_investigation_details_list($patient_id,$data['billing_id']);
					$data['medicine_list']=$this->Resources_model->get_hospital_medicine_list($userdetails['hos_id']);
					$data['doctors_list']=$this->Resources_model->get_hospital_doctors_list($userdetails['hos_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('nurse/start_consultation',$data);
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
	public function bed_transfer()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('nurse/bed_transfer');
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
    public function patient_discharge()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('nurse/patient_discharge');
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
    public function reports()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('nurse/reports');
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
	public function reports_view()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('nurse/reports_view');
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
	
	public  function addvitals(){
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				if($admindetails['role_id']==10){
					$post=$this->input->post();
					//echo '<pre>';print_r($post);exit;
					$billing=array(
						'p_id'=>isset($post['p_id'])?$post['p_id']:'',
						'b_id'=>isset($post['b_id'])?$post['b_id']:'',
						'bp'=>isset($post['bp'])?$post['bp']:'',
						'pulse'=>isset($post['pulse'])?$post['pulse']:'',
						'fbs_rbs'=>isset($post['fbs_rbs'])?$post['fbs_rbs']:'',
						'temp'=>isset($post['temp'])?$post['temp']:'',
						'weight'=>isset($post['weight'])?$post['weight']:'',
						'create_at'=>date('Y-m-d H:i:s'),
						'date'=>date('Y-m-d')
					);
					//echo '<pre>';print_r($billing);exit;
						$update=$this->Resources_model->saving_patient_vital_details($billing);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Vitals successfully added.");
							redirect('nurse/consultation/'.base64_encode($post['p_id']).'/'.base64_encode($post['b_id']));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('nurse/consultation/'.base64_encode($post['p_id']).'/'.base64_encode($post['b_id']));
						}
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
	
	
	
}
