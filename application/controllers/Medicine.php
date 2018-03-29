<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicine extends CI_Controller {

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
		$this->load->model('medicine_model');
		$this->load->model('Resources_model');
			if($this->session->userdata('userdetails'))
			{
			$admindetails=$this->session->userdata('userdetails');
			$data['userdetails']=$this->Admin_model->get_all_admin_details($admindetails['a_id']);
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
					$medicine_list=$this->medicine_model->get_all_medicine_list($userdetails['hos_id']);
					foreach($medicine_list as $lists){
						$list[]=$lists["medicine_name"];
					}
					$data['medicine_lists'] ="'" . implode ( "', '", $list ) . "'";
					$this->load->view('resource/medicine',$data);
					$this->load->view('html/footer1');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function lists()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['medicine_list']=$this->medicine_model->get_all_medicine_lists($userdetails['hos_id']);
					
					$this->load->view('resource/medicine_list',$data);
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
	public function addpost(){
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					
					foreach($post['addmedicn'] as $list){
						$addmedicines=array(
						'hos_id'=>$userdetails['hos_id'],
						'hsn'=>$list['hsn'],
						'othercode'=>$list['othercode'],
						'medicine_name'=>$list['medicine'],
						'qty'=>$list['qty'],
						'sgst'=>$list['sgst'],
						'cgst'=>$list['cgst'],
						'other'=>$list['other'],
						'create_at'=>date('Y-m-d H:i:s'),
						'status'=>1,
						'added_by'=>$userdetails['a_id']
						);
						//echo '<pre>';print_r($addmedicines);exit;
						$save_medicine=$this->medicine_model->save_new_medicine($addmedicines);
							if(count($post['addmedicn'])==1){
								if(count($save_medicine)>0){
									
									$medicines=array(
									'hos_id'=>$userdetails['hos_id'],
									'medicine_name'=>$list['medicine'],
									'create_at'=>date('Y-m-d H:i:s'),
									'status'=>1,
									'added_by'=>$userdetails['a_id']
									);
									$get_medicine=$this->medicine_model->get_medicine_details($list['medicine']);
									if(count($get_medicine)>0){
									}else{
										$this->medicine_model->save_medicine_name($medicines);
									}
									$this->session->set_flashdata('success',"Medicine details successfully Added.");
									redirect('medicine');
								}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('medicine');
									}
							
							}else{
								$medicines=array(
									'hos_id'=>$userdetails['hos_id'],
									'medicine_name'=>$list['medicine'],
									'create_at'=>date('Y-m-d H:i:s'),
									'status'=>1,
									'added_by'=>$userdetails['a_id']
									);
									$get_medicine=$this->medicine_model->get_medicine_details($list['medicine']);
									if(count($get_medicine)>0){
									}else{
										$this->medicine_model->save_medicine_name($medicines);
									}
							}
						
					}
					if(isset($save_medicine) && count($save_medicine)>0){
						$this->session->set_flashdata('success',"Medicine details successfully Added.");
						redirect('medicine');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('medicine');
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
	public function editmedicine_details(){
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$post=$this->input->post();
					if($post['field_name']=='hsn'){
						$update=array(
						'hsn'=>$post['med_name'],
						'updated_at'=>date('Y-m-d H:i:s')
						);
					}if($post['field_name']=='othercode'){
						$update=array(
						'othercode'=>$post['med_name'],
						'updated_at'=>date('Y-m-d H:i:s')
						);
					}if($post['field_name']=='medicine_name'){
						$update=array(
						'medicine_name'=>$post['med_name'],
						'updated_at'=>date('Y-m-d H:i:s')
						);
					}if($post['field_name']=='qty'){
						$update=array(
						'qty'=>$post['med_name'],
						'updated_at'=>date('Y-m-d H:i:s')
						);
					}if($post['field_name']=='sgst'){
						$update=array(
						'sgst'=>$post['med_name'],
						'updated_at'=>date('Y-m-d H:i:s')
						);
					}if($post['field_name']=='cgst'){
						$update=array(
						'cgst'=>$post['med_name'],
						'updated_at'=>date('Y-m-d H:i:s')
						);
					}if($post['field_name']=='other'){
						$update=array(
						'other'=>$post['med_name'],
						'updated_at'=>date('Y-m-d H:i:s')
						);
					}
					$updatedata=$this->medicine_model->update_medicine_details($post['med_id'],$update);
					if(count($updatedata) > 0)
					{
						$data['msg']=1;
						echo json_encode($data);exit;	
					}else{
						$data['msg']=2;
						echo json_encode($data);exit;
					}
					
				}else{
					$data['msg']=3;
					echo json_encode($data);exit;
				}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function search(){
		$post=$this->input->post();
		$details=$this->medicine_model->get_search_post($post['searchdata']);
		//	echo $this->db->last_query();exit;
		if(count($details) > 0)
				{
				$data['msg']=1;
				$data['text']=$details;
				echo json_encode($data);exit;	
				}else{
					$data['msg']=2;
					echo json_encode($data);exit;
				}
		
	}
	
	
	
	
}
