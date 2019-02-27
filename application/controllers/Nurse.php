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
				$admindetails=$this->session->userdata('userdetails');
				if($admindetails['role_id']==10){
					
					
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
				$admindetails=$this->session->userdata('userdetails');
				if($admindetails['role_id']==10){
					$hos_ids =$this->Ward_model->get_resources_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
					$data['ip_admitted_patient_list'] =$this->Nurse_model->get_admitted_patient_list($hos_ids['hos_id']);
					$data['tranfor_bed_patient_list'] =$this->Nurse_model->get_transfor_patient_list($hos_ids['hos_id']);
					
					/* transfor patient */
							$roomno = base64_decode($this->uri->segment(3));
							$data['bed_details_list']= $this->Ward_model->get_admitted_patients_details($roomno);
							$a=$this->Ward_model->get_admitted_patients_details($roomno);
							$admindetails=$this->session->userdata('userdetails');
							$hos_ids =$this->Ward_model->get_resources_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
							$data['ward_list'] =$this->Ward_model->get_ward_list_details($hos_ids['hos_id']);	
							$data['wardtype_list'] =$this->Ward_model->get_wardtype_list_details($hos_ids['hos_id']);
							$data['floor_list'] =$this->Ward_model->get_floor_list_details($hos_ids['hos_id']);
							$data['roomtype_list'] =$this->Ward_model->get_roomtype_list_details($hos_ids['hos_id']);
							$data['roomnum_list'] =$this->Ward_model->get_roomnumber_list_detailss($a['floor_no'],$hos_ids['hos_id']);	
							$data['bed_list'] =$this->Ward_model->get_bed_list_details($a['room_no'],$hos_ids['hos_id']);	
					/* transfor patient */
					//echo '<pre>';print_r($data['tranfor_bed_patient_list']);exit;
					$this->load->view('nurse/bed_transfer',$data);
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
	
	public function transferpatientseditpost()
	{
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			if($admindetails['role_id']=2){
				$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['tab']=base64_decode($this->uri->segment(3));
					$hos_ids =$this->Ward_model->get_resources_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
					$post=$this->input->post();
					//echo '<pre>';print_r($post);exit;			
					//echo '<pre>';print_r($data);exit;	
					$admitted_patients_details=array(
					'previous_bed_id'=>isset($post['previous_bed_id'])?$post['previous_bed_id']:'',
					'hos_id'=>isset($hos_ids['hos_id'])?$hos_ids['hos_id']:'',
					'pt_id'=>isset($post['pid'])?$post['pid']:'',
					'bill_id'=>isset($post['bid'])?$post['bid']:'',
					'w_name'=>isset($post['ward_name'])?$post['ward_name']:'',
					'w_type'=>$post['ward_type'],
					'room_type'=>$post['room_type'],
					'floor_no'=>$post['floor_number'],
					'room_no'=>$post['room_num'],
					'bed_no'=>$post['bed_number'],
					'status'=>0,
					'updated_at'=>date('Y-m-d H:i:s'),
					'created_by'=>$admindetails['a_id']
				);
				//echo '<pre>';print_r($admitted_patients_details);exit;
				$check=$this->Nurse_model->check_trsfor_patient_exist_ornot($post['previous_bed_id'],$hos_ids['hos_id']);
				if(count($check)>0){
					$transfor_patient= $this->Nurse_model->update_transfor_patinet($post['previous_bed_id'],$hos_ids['hos_id'],$admitted_patients_details);
					if(count($transfor_patient)>0){
						$this->session->set_flashdata('success',"admitted patient details updated successfully");
						redirect('nurse/bed_transfer/'.base64_encode($post['previous_bed_id']).'#step-3');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('nurse/bed_transfer/'.base64_encode($post['previous_bed_id']));
					}
				}else{
					$transfor_patient= $this->Nurse_model->save_transfor_patinet($admitted_patients_details);
					if(count($transfor_patient)>0){
						$this->session->set_flashdata('success',"admitted patient details updated successfully");
						redirect('nurse/bed_transfer/'.base64_encode($post['previous_bed_id']).'#step-3');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('nurse/bed_transfer/'.base64_encode($post['previous_bed_id']));
					}
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
    public function patient_discharge()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				if($admindetails['role_id']==10){
					$hos_ids =$this->Ward_model->get_resources_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
					$data['ip_admitted_patient_list'] =$this->Nurse_model->get_admitted_patient_list($hos_ids['hos_id']);
					$data['ip_discharge_patient_list'] =$this->Nurse_model->get_discharged_patient_list($hos_ids['hos_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('nurse/patient_discharge',$data);
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
				$admindetails=$this->session->userdata('userdetails');
				if($admindetails['role_id']==10 || $admindetails['role_id']==9){
					
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['admit_patient_list']=$this->Nurse_model->get_admited_patient_list($userdetails['hos_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('nurse/reports',$data);
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
				$admindetails=$this->session->userdata('userdetails');
				if($admindetails['role_id']==10 || $admindetails['role_id']==9){
					
					$p_id=base64_decode($this->uri->segment(3));
					$b_id=base64_decode($this->uri->segment(4));
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['medicine_list']=$this->Nurse_model->get_patient_medicine_list_details($p_id,$b_id);
					$data['lab_test_list']=$this->Nurse_model->get_patient_lab_test_list_details($p_id,$b_id);
					//echo $this->db->last_query();
					//echo '<pre>';print_r($data);exit;
					$this->load->view('nurse/reports_view',$data);
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
	public function discharge()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
					$a_p_id=$this->uri->segment(3);
					
					if($a_p_id!=''){
							$stusdetails=array(
							'nurse_charge_status'=>1,
							);
							$statusdata= $this->Nurse_model->update_admitted_patient_details(base64_decode($a_p_id),$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"admitted patient details successfully updated.");
								redirect('nurse/patient_discharge');
							}else{
								 $this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('nurse/patient_discharge');
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('nurse/patient_discharge');
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
	public function medicine(){
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$post=$this->input->post();
					//echo '<pre>';print_r($post);exit;
					if(isset($post['cheking_value']) && $post['cheking_value']==0){
						$this->session->set_flashdata('error',"Some medicine having available quantity is less than given quantity");
						redirect('nurse/consultation/'.base64_encode($post['pid']).'/'.base64_encode($post['bid']).'#step-2');
					}
					$cnt=0;foreach($post['medicine_name'] as $list){
							if($list!=''){
										$m_name=explode("_",$post['medicine_name'][$cnt]);
										$qtys=$this->Resources_model->get_medicine_details_list_details($m_name[0],$userdetails['hos_id']);
											//echo '<pre>';print_r($list);exit;
											$freq=array();
											if(isset($post['Frequency'][$cnt]) && count($post['Frequency'][$cnt])>0){
											foreach($post['Frequency'][$cnt] as $li){
												$freq[]=$li;
												
											}
											$fr=implode(" ,", $freq);
											}
										$add=array(
											'p_id'=>isset($post['pid'])?$post['pid']:'',
											'b_id'=>isset($post['bid'])?$post['bid']:'',
											'medicine_id'=>isset($qtys['id'])?$qtys['id']:'',
											'medicine_type'=>isset($qtys['medicine_type'])?$qtys['medicine_type']:'',
											'batchno'=>isset($qtys['batchno'])?$qtys['batchno']:'',
											'dosage'=>isset($qtys['dosage'])?$qtys['dosage']:'',
											'expiry_date'=>isset($qtys['expiry_date'])?$qtys['expiry_date']:'',
											'org_amount'=>(($qtys['total_amount'])*($post['qty'][$cnt])),
											'amount'=>$qtys['total_amount'],
											'medicine_name'=>$m_name[0],
											'frequency'=>isset($fr)?$fr:'',
											'qty'=>$post['qty'][$cnt],
											'food'=>$post['food'][$cnt],
											'directions'=>$post['directions'],
											'no_of_days'=>$post['days'][$cnt],
											'create_at'=>date('Y-m-d H:i:s'),
											'date'=>date('Y-m-d'),
											'create_by'=>$admindetails['a_id']
										);
										//echo '<pre>';print_r($add);
										$medicine=$this->Resources_model->saving_patient_medicine($add);
										if(isset($medicine) && count($medicine)>0){
												$qty=(($qtys['qty'])-($post['qty'][$cnt]));
												$data=array('qty'=>$qty);
												$this->Resources_model->update_medicine_details($qtys['id'],$data);
										}
							}
							
					$cnt++;}
					
					//exit;
					
						if(count($medicine)>0){
							$update=array('completed_type'=>1,'doctor_status'=>1);
							$this->Resources_model->update_patient_medicine_details($post['pid'],$post['bid'],$update);
							$this->session->set_flashdata('success',"Medicines successfully added.");
							redirect('nurse/consultation/'.base64_encode($post['pid']).'/'.base64_encode($post['bid']).'#step-2');

						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('nurse/consultation/'.base64_encode($post['pid']).'/'.base64_encode($post['bid']).'#step-2');

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
