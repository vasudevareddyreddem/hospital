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
					'ip_amount_percentage'=>isset($post['ip_amount_percentage'])?$post['ip_amount_percentage']:'',
					'op_amount_percentage'=>isset($post['op_amount_percentage'])?$post['op_amount_percentage']:'',
					'lab_amount_percentage'=>isset($post['lab_amount_percentage'])?$post['lab_amount_percentage']:'',
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
	
	public  function checking_coupon_code(){
		$post=$this->input->post();
		$admindetails=$this->session->userdata('userdetails');
		$details=$this->Wallet_model->get_coupon_code_details($post['coupon_code'],$post['patient_id'],$post['hospital_id']);
							
		if(count($details)>0){
							$current_time=$details['created_at'];
							$date=date('Y-m-d H:i:s');
							$datetime1 = new DateTime($current_time);
							$datetime2 = new DateTime($date);
							$interval = $datetime1->diff($datetime2);
							//echo '<pre>';print_r($interval);
							$diff_in_hrs =$interval->format('%h');
				if($diff_in_hrs >=0 && $diff_in_hrs <2){
					$wallet_detials=$this->Wallet_model->get_wallet_amt_details($details['create_by']);
					//echo '<pre>';print_r($wallet_detials);
					
					$percent=($post['bill_amount'])*($details['op_amount_percentage']);
					$percen_amount=$percent/100;
					$amount=($post['bill_amount'])-($percen_amount);
					//echo $percen_amount;
					if($wallet_detials['remaining_op_wallet_amount']>=$percen_amount){
						$code_details=array(
								'b_id'=>$post['biling_id'],
								'type'=>'Op',
								'type_id'=>1,
								'p_id'=>$post['patient_id'],
								'amount'=>$post['bill_amount'],
								'coupon_code'=>$post['coupon_code'],
								'coupon_code_amount'=>$percen_amount,
								'purpose'=>'Op appointment Purpose',
								'created_at'=>date('Y-m-d H:i:s'),
								'created_by'=>$admindetails['a_id'],
								'appointment_user_id'=>$details['create_by'],
								);
							$this->Wallet_model->save_coupon_code_history($code_details);
							$wallet_detials=$this->Wallet_model->get_wallet_amt_details($details['create_by']);
							$amt_data=array('remaining_op_wallet_amount'=>(($wallet_detials['remaining_op_wallet_amount'])-($percen_amount)));
							$amount_update=$this->Wallet_model->update_op_wallet_amt_details($details['create_by'],$amt_data);
							
							$data['msg']=1;
							$data['amt']=$amount;
							$data['cou_amt']=$details['op_amount_percentage'].'%';
							echo json_encode($data);exit;
					}else{
						$data['msg']=4;
						echo json_encode($data);exit;
					}
			
			}else{
				$data['msg']=5;
				echo json_encode($data);exit;
			}
		}else{
			$data['msg']=3;
			echo json_encode($data);exit;
		}
		//echo $this->db->last_query();
		//echo '<pre>';print_r($details);exit;
		
	}
	
		

		
		
  }