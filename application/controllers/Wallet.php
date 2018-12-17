<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');

class Wallet extends In_frontend {

	public function __construct() 
	{
		parent::__construct();	
			$this->load->model('Wallet_model');	
		}
	public function addpost()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$admindetails=$this->session->userdata('userdetails');
					$post=$this->input->post();
					$add=array(
					'ip_amount'=>isset($post['ip_amount'])?$post['ip_amount']:'',
					'op_amount'=>isset($post['op_amount'])?$post['op_amount']:'',
					'lab_amount'=>isset($post['lab_amount'])?$post['lab_amount']:'',
					'created_at'=>date('Y-m-d H:i:s'),
					'updated_at'=>date('Y-m-d H:i:s'),
					'created_by'=>$admindetails['a_id'],
					);
					$save=$this->Wallet_model->add_wallet_money($add);
					if(count($save)>0){
						$this->session->set_flashdata('success',"Wallet amount successfully added");
						redirect('admin/couponcodes/'.base64_encode(3));
						
					}else{
						$this->session->set_flashdata('error',"Technical problem will occured. Please try again ");
						redirect('admin/couponcodes/'.base64_encode(3));
						
					}
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
	public  function status(){
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$admindetails=$this->session->userdata('userdetails');
					$w_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$sta=0;
					}else{
						$sta=1;
					}
					if($status==0){
						$check=$this->Wallet_model->check_amount_active_ornot();
						if(count($check)>0){
							$this->session->set_flashdata('error',"One wallet amount already active. Before doing this deactivated.");
							redirect('admin/couponcodes/'.base64_encode(3));
						}
						
					}
					$details=array(
						'status'=>$sta,
						'updated_at'=>date('Y-m-d H:i:s')
						);
					//echo '<pre>';print_r($billing);exit;
						$updated=$this->Wallet_model->update_wallet_amount_details($w_id,$details);
						if(count($updated)>0){
							if($status==1){
							$this->session->set_flashdata('success',"Wallet amount successfully deactivated.");
							}else{
								$this->session->set_flashdata('success',"Wallet amount successfully activated.");
							}
							redirect('admin/couponcodes/'.base64_encode(3));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('admin/couponcodes/'.base64_encode(3));
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
	public function delete()
		{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$admindetails=$this->session->userdata('userdetails');
					$w_id=base64_decode($this->uri->segment(3));
					$details=array(
						'status'=>2,
						'updated_at'=>date('Y-m-d H:i:s')
						);
					//echo '<pre>';print_r($billing);exit;
						$updated=$this->Wallet_model->update_wallet_amount_details($w_id,$details);
						if(count($updated)>0){
							$this->session->set_flashdata('success',"Wallet amount successfully deleted.");
							redirect('admin/couponcodes/'.base64_encode(3));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('admin/couponcodes/'.base64_encode(3));
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