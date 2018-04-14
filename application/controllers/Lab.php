<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends CI_Controller {

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
		$this->load->model('Users_model');
			if($this->session->userdata('userdetails'))
			{
			$admindetails=$this->session->userdata('userdetails');
			$data['userdetails']=$this->Admin_model->get_all_admin_details($admindetails['a_id']);
			$hos_details=$this->Admin_model->get_hospital_details($admindetails['a_id']);
			if($data['userdetails']['role_id']==2){
			$data['notification']=$this->Admin_model->get_all_announcement($hos_details['hos_id']);
			$Unread_count=$this->Admin_model->get_all_announcement_unread_count($hos_details['hos_id']);
			if(count($Unread_count)>0){
					$data['Unread_count']=count($Unread_count);
				}else{
					$data['Unread_count']='';
				}
			}else if($data['userdetails']['role_id']==3 || $data['userdetails']['role_id']==4 ||$data['userdetails']['role_id']==5 ||$data['userdetails']['role_id']==6){
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
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['labtest_list']=$this->Lab_model->get_lab_test_details($userdetails['hos_id'],$admindetails['a_id']);
					$data['tab']=base64_decode($this->uri->segment(3));
					$this->load->view('lab/testsdetails',$data);
					$this->load->view('html/footer');
					//echo '<pre>';print_r($data);exit;
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function addtest()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=5){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$adding=array(
						'hos_id'=>isset($userdetails['hos_id'])?$userdetails['hos_id']:'',
						't_name'=>isset($post['test_name'])?$post['test_name']:'',
						't_short_form'=>isset($post['short_form'])?$post['short_form']:'',
						't_description'=>isset($post['description'])?$post['description']:'',
						't_department'=>isset($post['department'])?$post['department']:'',
						'create_at'=>date('Y-m-d H:i:s'),
						'status'=>1,
						'create_by'=>$admindetails['a_id']
						);
					//echo '<pre>';print_r($billing);exit;
						$saveing=$this->Lab_model->save_tabtest_details($adding);
						if(count($saveing)>0){
							$this->session->set_flashdata('success',"Test successfully Added.");
							redirect('lab/index/'.base64_encode(1));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('lab/index/'.base64_encode(1));
						}
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function teststatus()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=5){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$test_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$sta=0;
					}else{
						$sta=1;
					}
					$details=array(
						'status'=>$sta,
						'update_by'=>$admindetails['a_id']
						);
					//echo '<pre>';print_r($billing);exit;
						$updated=$this->Lab_model->update_labtest_details($test_id,$details);
						if(count($updated)>0){
							if($status==1){
							$this->session->set_flashdata('success',"Test successfully Deactivate.");
							}else{
								$this->session->set_flashdata('success',"Test successfully Activate.");
							}
							redirect('lab/index/'.base64_encode(1));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('lab/index/'.base64_encode(1));
						}
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
		public function deletelab()
		{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=5){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$test_id=base64_decode($this->uri->segment(3));
					$delete=$this->Lab_model->delete_labtest($test_id);
						if(count($delete)>0){
							$this->session->set_flashdata('success',"Test successfully Deleted.");
							redirect('lab/index/'.base64_encode(1));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('lab/index/'.base64_encode(1));
						}
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function patient_list()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['labtest_list']=$this->Lab_model->get_all_patients_lists($userdetails['hos_id']);
					$data['tab']=base64_decode($this->uri->segment(3));
					$this->load->view('lab/patient_list',$data);
					$this->load->view('html/footer');
					//echo '<pre>';print_r($data);exit;
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function patient_database()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['patient_list']=$this->Lab_model->get_all_labreports_lists($userdetails['hos_id']);
					$data['tab']=base64_decode($this->uri->segment(3));
					$this->load->view('lab/patient_basebase',$data);
					$this->load->view('html/footer');
					//echo '<pre>';print_r($data);exit;
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function patient_report_details()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['patient']=base64_decode($this->uri->segment(3));
					$data['report_list']=$this->Lab_model->get_all_patient_reports_lists($data['patient']);
					$this->load->view('lab/patient_report_list',$data);
					$this->load->view('html/footer');
					//echo '<pre>';print_r($data);exit;
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function patient_details()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['patient_id']=base64_decode($this->uri->segment(3));
					$data['billing_id']=base64_decode($this->uri->segment(4));
					$data['patient_details']=$this->Lab_model->get_billing_details($data['patient_id'],$data['billing_id']);

					$this->load->view('lab/patient_details',$data);
					$this->load->view('html/footer');
					//echo '<pre>';print_r($data);exit;
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function uploadreports()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=5){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$labdetails_list=array_combine($post['problem_name'],$post['symptoms']);
						if(count($labdetails_list)>0){
							
							$count = 0;
							foreach ($_FILES['document']['name'] as $i => $name) {
								if (strlen($_FILES['document']['name'][$i]) > 1) {
									$pic=$_FILES['document']['name'][$i];
									$picname = str_replace(" ", "", $pic);
									$temp = explode(".", $_FILES['document']['name'][$i]);
									$imagename=round(microtime(true)) . '.' . end($temp);
									$imgname = str_replace(" ", "", $imagename);
										move_uploaded_file($_FILES['document']['tmp_name'][$i], 'assets/patient_reports/'.$imgname);
										
										$names_list[]=$imgname;
										$count++;
										
								}
							}
							$c=0;foreach($labdetails_list as $key=>$list){
								if($key!='' && $list!=''){
									$li[$c]['problem_name']=$key;
									$li[$c]['symptoms']=$list;
									$li[$c]['image']=$names_list[$c];
									
								}
								$c++;}
								
								foreach($li as $imglist){
									$addreports=array(
										'p_id'=>$post['pid'],
										'b_id'=>$post['b_id'],
										'hos_id'=>$userdetails['hos_id'],
										'problem'=>$imglist['problem_name'],
										'symptoms'=>$imglist['symptoms'],
										'image'=>$imglist['image'],
										'create_at'=>date('Y-m-d H:i:s'),				
										'status'=>1,				
										'create_by'=>$admindetails['a_id']
										);
									$savereports = $this->Lab_model->save_patient_reports($addreports);
									$compledata=array(
									'report_completed'=>1
									);
									$this->Lab_model->update_billingreport_status($post['pid'],$post['b_id'],$compledata);

								}
								if(count($savereports)>0){
								$this->session->set_flashdata('success',"Reports are successfully added");
								redirect('lab/patient_details/'.base64_encode($post['pid']).'/'.($post['b_id']));
								}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('lab/patient_details/'.base64_encode($post['pid']).'/'.($post['b_id']));
								}
								
					}
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
	
	
}
