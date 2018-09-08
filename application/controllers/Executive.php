<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');

class Executive extends In_frontend {

	public function __construct() 
	{
		parent::__construct();	
		
		}
	public function index()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$admindetails=$this->session->userdata('userdetails');
					$data['tab']=base64_decode($this->uri->segment(3));
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['executive_name']=$this->Admin_model->executive_name_list_data($admindetails['a_id']);
					//echo'<pre>';print_r($data);exit;
					$data['executive_location']=$this->Admin_model->executive_location_list_data($admindetails['a_id']);
					//echo'<pre>';print_r($data);exit;
					
				 $data['executive_list']=$this->Admin_model->executive_list_data($admindetails['a_id']);
				//echo'<pre>';print_r($data);exit;
						
					//echo '<pre>';print_r($admindetails);exit;
				
					$this->load->view('executive/index',$data);
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
	
	public function indexpost()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$post=$this->input->post();
					//echo '<pre>';print_r($post);exit;
			$admindetails=$this->session->userdata('userdetails');
			//echo '<pre>';print_r($admindetails);exit;
			$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
			//echo '<pre>';print_r($userdetails);exit;
			$checking=$this->Admin_model->executive_check_email_exits($post['email_id']);
				//echo '<pre>';print_r($checking);exit;
				if(count($checking)>0){
					$this->session->set_flashdata('error',"Email already exits");
					redirect('executive/index');
				}
			
				$save_data=array(
				'name'=>isset($post['name'])?$post['name']:'',
				'mobile'=>isset($post['mobile'])?$post['mobile']:'',
				'email_id'=>isset($post['email_id'])?$post['email_id']:'',
				'password'=>isset($post['password'])?$post['password']:'',
				'confirmpassword'=>isset($post['confirmpassword'])?$post['confirmpassword']:'',
				'address'=>isset($post['address'])?$post['address']:'',
				'bank_account'=>isset($post['bank_account'])?$post['bank_account']:'',
				'bank_name'=>isset($post['bank_name'])?$post['bank_name']:'',
				'ifsccode'=>isset($post['ifsccode'])?$post['ifsccode']:'',
				'bank_holder_name'=>isset($post['bank_holder_name'])?$post['bank_holder_name']:'',
				'kyc'=>isset($post['kyc'])?$post['kyc']:'',
				'location'=>isset($post['location'])?$post['location']:'',
				'status'=>1,
				'create_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'added_by'=>$userdetails['a_id']
				 );
			//echo '<pre>';print_r($save_data);exit;
				$save=$this->Admin_model->executive_details($save_data);	
					//echo'<pre>';print_r($save);exit;
					if(count($save)>0){
					$this->session->set_flashdata('success',"executive details are successfully register");	
					redirect('executive/index/'.base64_encode(1));	
					}else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						redirect('executive/index');
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
	
	public function edit()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$post=$this->input->post();
					//echo '<pre>';print_r($post);exit;
					 $this->uri->segment(3);
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($admindetails);exit;
					
					$data['edit_executive_list']=$this->Admin_model->edit_executive_list_data(base64_decode($this->uri->segment(3)));
					//echo $this->db->last_query();exit;
				//echo '<pre>';print_r($data['edit_executive_list']);exit;
				
					$this->load->view('executive/index-edit',$data);
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

	public function edit_indexpost()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
				$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);	
				$update_data=array(
				'name'=>isset($post['name'])?$post['name']:'',
				'mobile'=>isset($post['mobile'])?$post['mobile']:'',
				'email_id'=>isset($post['email_id'])?$post['email_id']:'',
				'address'=>isset($post['address'])?$post['address']:'',
				'bank_account'=>isset($post['bank_account'])?$post['bank_account']:'',
				'bank_name'=>isset($post['bank_name'])?$post['bank_name']:'',
				'ifsccode'=>isset($post['ifsccode'])?$post['ifsccode']:'',
				'bank_holder_name'=>isset($post['bank_holder_name'])?$post['bank_holder_name']:'',
				'kyc'=>isset($post['kyc'])?$post['kyc']:'',
				'location'=>isset($post['location'])?$post['location']:'',
				'status'=>1,
				'create_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'added_by'=>$userdetails['a_id']
				 );
					//echo'<pre>';print_r($update_data);exit;	
				$update=$this->Admin_model->update_executive_details($post['e_id'],$update_data);	
					//echo'<pre>';print_r($update);exit;
					if(count($update)>0){
					$this->session->set_flashdata('success',"executive details are successfully register");	
					redirect('executive/index/'.base64_encode(1));	
					}else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						redirect('executive/index/',$post['e_id']);
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
	public function delete()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$admindetails=$this->session->userdata('userdetails');
					$e_id=base64_decode($this->uri->segment(3));
					$delete_details =$this->Admin_model->delete_details_data($e_id);
						 //echo'<pre>';print_r($delete_details);exit;  			
				if(count($delete_details)>0){
		$this->session->set_flashdata('sucess'," delete successfully");
	    redirect('executive/index/'.base64_encode(1));			
		}else{
			$this->session->set_flashdata('error',"problem is occurs");
			redirect('executive/index/'.base64_encode($e_id));
		}			
					
				}else{
						$this->session->set_flashdata('error',"you don't have permission to access");
						redirect('dashboard');
				}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('home');
		}
	}	
	
	
	
	
	
}
