<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {

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
		$this->load->model('Resources_model');
			if($this->session->userdata('userdetails'))
			{
			$admindetails=$this->session->userdata('userdetails');
			$data['userdetails']=$this->Admin_model->get_all_admin_details($admindetails['a_id']);
			$this->load->view('html/header',$data);
			$this->load->view('html/sidebar',$data);
			}
		}
	public function desk()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['patients_list']= $this->Resources_model->get_all_patients_lists($userdetails['hos_id']);
					//echo '<pre>';print_r($data);exit; 
					$patient_id= base64_decode($this->uri->segment(3));
					if(isset($patient_id) && $patient_id!=''){
						$data['patient_detailes']= $this->Resources_model->get_details_details($patient_id);
						$data['tab']= base64_decode($this->uri->segment(4));
						$data['pid']= base64_decode($this->uri->segment(3));
					}else{
						$data['patient_detailes']=array();
						$data['tab']=1;
						 $data['pid']='';
					}
					
					//echo '<pre>';print_r($data);exit;
					$this->load->view('resource/desk',$data);
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
	public function basic_details()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					//echo '<pre>';print_r($post);exit;
					$tab1=array(
					'hos_id'=>isset($userdetails['hos_id'])?$userdetails['hos_id']:'',
					'registrationtype'=>isset($post['registrationtype'])?$post['registrationtype']:'',
					'patient_category'=>isset($post['patient_category'])?$post['patient_category']:'',
					'name'=>isset($post['name'])?$post['name']:'',
					'mobile'=>isset($post['mobile'])?$post['mobile']:'',
					'email'=>isset($post['email'])?$post['email']:'',
					'dob'=>isset($post['dob'])?$post['dob']:'',
					'age'=>isset($post['age'])?$post['age']:'',
					'bloodgroup'=>isset($post['bloodgroup'])?$post['bloodgroup']:'',
					'martial_status'=>isset($post['martial_status'])?$post['martial_status']:'',
					'nationali_id'=>isset($post['nationali_id'])?$post['nationali_id']:'',
					'perment_address'=>isset($post['perment_address'])?$post['perment_address']:'',
					'p_c_name'=>isset($post['p_c_name'])?$post['p_c_name']:'',
					'p_s_name'=>isset($post['p_s_name'])?$post['p_s_name']:'',
					'p_zipcode'=>isset($post['p_zipcode'])?$post['p_zipcode']:'',
					'p_country_name'=>isset($post['p_country_name'])?$post['p_country_name']:'',
					'temp_address'=>isset($post['temp_address'])?$post['temp_address']:'',
					't_c_name'=>isset($post['t_c_name'])?$post['t_c_name']:'',
					't_s_name'=>isset($post['t_s_name'])?$post['t_s_name']:'',
					't_zipcode'=>isset($post['t_zipcode'])?$post['t_zipcode']:'',
					't_country_name'=>isset($post['t_country_name'])?$post['t_country_name']:'',
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$userdetails['a_id']
					);
					//echo '<pre>';print_r($tab1);exit;
					if(isset($post['pid']) && $post['pid']!=''){
						
						$update=$this->Resources_model->update_all_patient_details($post['pid'],$tab1);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Basic Details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(2));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(1));
						}
					}else{
							$addtab=$this->Resources_model->save_basic_details($tab1);
							if(count($addtab)>0){
								$dta=array(
								'pid'=>$addtab,
								'create_at'=>date('Y-m-d H:i:s')
								);
								$this->Resources_model->save_patient_details($dta);
								$this->zend->load('Zend/Barcode');
								$file = Zend_Barcode::draw('code128', 'image', array('text' => $addtab), array());
								$code = time().$addtab.'.png';
								$store_image1 = imagepng($file, $this->config->item('documentroot')."assets/patient_barcode/{$code}");

								$this->Resources_model->update_patient_details($addtab,$code);
								$this->session->set_flashdata('success',"Basic Details successfully Added.");
								redirect('resources/desk/'.base64_encode($addtab).'/'.base64_encode(2));
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('resources/desk');
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
	public function demographic()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					//echo '<pre>';print_r($post);exit;
					if(isset($_FILES['patient_identifier']['name']) && $_FILES['patient_identifier']['name']!=''){
							$patient_details= $this->Resources_model->get_paitent_document($post['pid']);
							if($patient_details['patient_identifier']!=''){
								unlink("assets/patient_documents/".$patient_details['patient_identifier']);
							}
							$temp = explode(".", $_FILES["patient_identifier"]["name"]);
							$patient_identifier = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['patient_identifier']['tmp_name'], "assets/hospital_basic_documents/" . $patient_identifier);
						}else{
							$patient_identifier='';
						}
					$tab2=array(
					'religion'=>isset($post['religion'])?$post['religion']:'',
					'caste'=>isset($post['caste'])?$post['caste']:'',
					'mothername'=>isset($post['mothername'])?$post['mothername']:'',
					'language'=>isset($post['language'])?$post['language']:'',
					'primarylanguage'=>isset($post['primarylanguage'])?$post['primarylanguage']:'',
					'preferred_language'=>isset($post['preferred_language'])?$post['preferred_language']:'',
					'occupation'=>isset($post['occupation'])?$post['occupation']:'',
					'education'=>isset($post['education'])?$post['education']:'',
					'birth_place'=>isset($post['birth_place'])?$post['birth_place']:'',
					'work_phone'=>isset($post['work_phone'])?$post['work_phone']:'',
					'home_phone'=>isset($post['home_phone'])?$post['home_phone']:'',
					'citizen_proof'=>isset($post['citizen_proof'])?$post['citizen_proof']:'',
					'patient_identifier'=>$patient_identifier,
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					//echo '<pre>';print_r($tab2);exit;
						$update=$this->Resources_model->update_all_patient_details($post['pid'],$tab2);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Demographic Details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(3));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(2));
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
	public function next()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
					$tab2=array(
					'relation'=>isset($post['relation'])?$post['relation']:'',
					'first_name'=>isset($post['first_name'])?$post['first_name']:'',
					'middel_name'=>isset($post['middel_name'])?$post['middel_name']:'',
					'last_name'=>isset($post['last_name'])?$post['last_name']:'',
					'next_address1'=>isset($post['next_address1'])?$post['next_address1']:'',
					'next_address2'=>isset($post['next_address2'])?$post['next_address2']:'',
					'next_pincode'=>isset($post['next_pincode'])?$post['next_pincode']:'',
					'next_city'=>isset($post['next_city'])?$post['next_city']:'',
					'next_state'=>isset($post['next_state'])?$post['next_state']:'',
					'next_country'=>isset($post['next_country'])?$post['next_country']:'',
					'next_email'=>isset($post['next_email'])?$post['next_email']:'',
					'next_mobile'=>isset($post['next_mobile'])?$post['next_mobile']:'',
					'next_occupation'=>isset($post['next_occupation'])?$post['next_occupation']:'',
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					//echo '<pre>';print_r($tab2);exit;
						$update=$this->Resources_model->update_all_patient_details($post['pid'],$tab2);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Next of kin details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(4));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(3));
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
	public function referral()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
					$tab4=array(
					'referred'=>isset($post['referred'])?$post['referred']:'',
					'internal_external'=>isset($post['internal_external'])?$post['internal_external']:'',
					'search_doctor'=>isset($post['search_doctor'])?$post['search_doctor']:'',
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					//echo '<pre>';print_r($tab4);exit;
						$update=$this->Resources_model->update_all_patient_details($post['pid'],$tab4);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Referral details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(5));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(4));
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
	public function guardian()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
					$tab5=array(
					'relationship'=>isset($post['relationship'])?$post['relationship']:'',
					'g_first_name'=>isset($post['g_first_name'])?$post['g_first_name']:'',
					'g_middel_name'=>isset($post['g_middel_name'])?$post['g_middel_name']:'',
					'g_last_name'=>isset($post['g_last_name'])?$post['g_last_name']:'',
					'gender'=>isset($post['gender'])?$post['gender']:'',
					'nationality'=>isset($post['nationality'])?$post['nationality']:'',
					'g_language'=>isset($post['g_language'])?$post['g_language']:'',
					'living'=>isset($post['living'])?$post['living']:'',
					'g_address1'=>isset($post['g_address1'])?$post['g_address1']:'',
					'g_address2'=>isset($post['g_address2'])?$post['g_address2']:'',
					'g_pincode'=>isset($post['g_pincode'])?$post['g_pincode']:'',
					'g_city'=>isset($post['g_city'])?$post['g_city']:'',
					'g_state'=>isset($post['g_state'])?$post['g_state']:'',
					'g_country'=>isset($post['g_country'])?$post['g_country']:'',
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					//echo '<pre>';print_r($tab5);exit;
						$update=$this->Resources_model->update_all_patient_details($post['pid'],$tab5);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Guardian details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(6));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(5));
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
	public function payer()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
					$tab6=array(
					'payer_name'=>isset($post['payer_name'])?$post['payer_name']:'',
					'payer_mobile'=>isset($post['payer_mobile'])?$post['payer_mobile']:'',
					'payer_address'=>isset($post['payer_address'])?$post['payer_address']:'',
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					//echo '<pre>';print_r($tab5);exit;
						$update=$this->Resources_model->update_all_patient_details($post['pid'],$tab6);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Payer details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(7));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(6));
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
	public function economicdetails()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
					$tab7=array(
					'dependency'=>isset($post['dependency'])?$post['dependency']:'',
					'arrangement'=>isset($post['arrangement'])?$post['arrangement']:'',
					'incomegroup'=>isset($post['incomegroup'])?$post['incomegroup']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'confidential'=>isset($post['confidential'])?$post['confidential']:'',
					'student'=>isset($post['student'])?$post['student']:'',
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					//echo '<pre>';print_r($tab5);exit;
						$update=$this->Resources_model->update_all_patient_details($post['pid'],$tab7);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Socio- economic details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(8));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(7));
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
