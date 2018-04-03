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
					$data['departments_list']=$this->Resources_model->get_hospital_deportments($userdetails['hos_id']);
					//echo '<pre>';print_r($data);exit; 
					$patient_id= base64_decode($this->uri->segment(3));
					if(isset($patient_id) && $patient_id!=''){
						$data['patient_detailes']= $this->Resources_model->get_details_details($patient_id);
						$data['tab']= base64_decode($this->uri->segment(4));
						$data['pid']= base64_decode($this->uri->segment(3));
						$data['subtab']=base64_decode($this->uri->segment(6));
						$data['bill_id']=base64_decode($this->uri->segment(5));
						$billing_id=base64_decode($this->uri->segment(5));
						if($billing_id!=''){
							$data['billing_detailes']= $this->Resources_model->get_billing_details($data['pid'],$billing_id);
							$data['vitals_detailes']= $this->Resources_model->get_billing_vitals_details($data['pid']);
						}else{
							$data['billing_detailes']=array();
							$data['vitals_detailes']=array();
						}
					}else{
						$data['patient_detailes']=array();
						$data['tab']=1;
						 $data['pid']='';
						 $data['bill_id']='';
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
	public function patient_databse()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['patients_list']= $this->Resources_model->get_all_patients_database($userdetails['hos_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('resource/patient_database',$data);
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
	}public function visitinfo()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
					if($post['bill_id']=='reschedule'){
						$bill_type=$post['bill_id'];
					}else{
						$bill_type='new';
					}
					$billing=array(
					'p_id'=>isset($post['pid'])?$post['pid']:'',
					'visit_no'=>isset($post['visit_no'])?$post['visit_no']:'',
					'visit_desc'=>isset($post['visit_desc'])?$post['visit_desc']:'',
					'date_of_visit'=>isset($post['date_of_visit'])?$post['date_of_visit']:'',
					'department'=>isset($post['department'])?$post['department']:'',
					'docotr_name'=>isset($post['docotr_name'])?$post['docotr_name']:'',
					'no_of_visits'=>isset($post['no_of_visits'])?$post['no_of_visits']:'',
					'last_visiting_date'=>isset($post['last_visiting_date'])?$post['last_visiting_date']:'',
					'create_at'=>date('Y-m-d H:i:s'),
					'type'=>isset($bill_type)?$bill_type:'new'
					);
					//echo '<pre>';print_r($billing);exit;
						$update=$this->Resources_model->update_all_patient_billing_details($billing);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Billing details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(8).'/'.base64_encode($update).'/'.base64_encode(2));
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
	}public function orderinfo()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
					$billing=array(
					'service_type'=>isset($post['service_type'])?$post['service_type']:'',
					'service'=>isset($post['service'])?$post['service']:'',
					'visit_type'=>isset($post['visit_type'])?$post['visit_type']:'',
					'doctor'=>isset($post['doctor'])?$post['doctor']:'',
					'payer'=>isset($post['payer'])?$post['payer']:'',
					'price'=>isset($post['price'])?$post['price']:'',
					'qty'=>isset($post['qty'])?$post['qty']:'',
					'amount'=>isset($post['amount'])?$post['amount']:'',
					'bill'=>isset($post['bill'])?$post['bill']:'',
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					//echo '<pre>';print_r($billing);exit;
						$update=$this->Resources_model->update_patient_billing_details($post['b_id'],$billing);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Order details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(8).'/'.base64_encode($post['b_id']).'/'.base64_encode(3));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(8).'/'.base64_encode($post['b_id']).'/'.base64_encode(2));
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
	public function bills()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
					$billing=array(
					'patient_payer_deposit_amount'=>isset($post['patient_payer_deposit_amount'])?$post['patient_payer_deposit_amount']:'',
					'payment_mode'=>isset($post['payment_mode'])?$post['payment_mode']:'',
					'bill_amount'=>isset($post['bill_amount'])?$post['bill_amount']:'',
					'received_form'=>isset($post['received_form'])?$post['received_form']:'',
					'updated_at'=>date('Y-m-d H:i:s')
					);
					//echo '<pre>';print_r($billing);exit;
						$update=$this->Resources_model->update_patient_billing_details($post['b_id'],$billing);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Bill details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(8).'/'.base64_encode($post['b_id']).'/'.base64_encode(4));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(8).'/'.base64_encode($post['b_id']).'/'.base64_encode(3));
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
	public function genrate_bill()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$pid=base64_decode($this->uri->segment(3));
					$bid=base64_decode($this->uri->segment(4));
					$admindetails=$this->session->userdata('userdetails');
					$data['details']=$this->Resources_model->get_billing_details($pid,$bid);
					//echo '<pre>';print_r($data);exit;
					$path = rtrim(FCPATH,"/");
					$file_name = $data['details']['p_id'].'_'.$data['details']['b_id'].'.pdf';                
					$data['page_title'] = $data['details']['name'].'invoice'; // pass data to the view
					$pdfFilePath = $path."assets/patient_bills/".$file_name;
					ini_set('memory_limit','320M'); // boost the memory limit if it's low <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
					$html = $this->load->view('resource/bill', $data, true); // render the view into HTML
					//echo '<pre>';print_r($html);exit;
					$this->load->library('pdf');
					$pdf = $this->pdf->load();
					$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date('M-d-Y')); // Add a footer for good measure <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
					$pdf->SetDisplayMode('fullpage');
					$pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list
					$pdf->WriteHTML($html); // write the HTML into the PDF
					$pdf->Output($pdfFilePath, 'F');
					redirect("assets/patient_bills/".$file_name);
					//redirect('resources/desk/'.base64_encode($pid).'/'.base64_encode(8).'/'.base64_encode($bid).'/'.base64_encode(4));

				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function print_patient_details()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$pid=base64_decode($this->uri->segment(3));
					$bid=base64_decode($this->uri->segment(4));
					$admindetails=$this->session->userdata('userdetails');
					$data['details']=$this->Resources_model->get_billing_details($pid,$bid);
					//echo '<pre>';print_r($data);exit;
					$path = rtrim(FCPATH,"/");
					$file_name = $data['details']['p_id'].'_'.$data['details']['b_id'].'.pdf';                
					$data['page_title'] = $data['details']['name'].'invoice'; // pass data to the view
					$pdfFilePath = $path."assets/patient_information/".$file_name;
					ini_set('memory_limit','320M'); // boost the memory limit if it's low <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
					$html = $this->load->view('resource/patient_details', $data, true); // render the view into HTML
					//echo '<pre>';print_r($html);exit;
					$this->load->library('pdf');
					$pdf = $this->pdf->load();
					$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date('M-d-Y')); // Add a footer for good measure <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
					$pdf->SetDisplayMode('fullpage');
					$pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list
					$pdf->WriteHTML($html); // write the HTML into the PDF
					$pdf->Output($pdfFilePath, 'F');
					redirect("assets/patient_information/".$file_name);
					//redirect('resources/desk/'.base64_encode($pid).'/'.base64_encode(8).'/'.base64_encode($bid).'/'.base64_encode(4));

				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function vitals()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=3){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);
					$updating=array(
						'p_id'=>isset($post['pid'])?$post['pid']:'',
						'b_id'=>isset($post['b_id'])?$post['b_id']:'',
						'tep_actuals'=>isset($post['tep_actuals'])?$post['tep_actuals']:'',
						'tep_range'=>isset($post['tep_range'])?$post['tep_range']:'',
						'temp_site_positioning'=>isset($post['temp_site_positioning'])?$post['temp_site_positioning']:'',
						'notes'=>isset($post['notes'])?$post['notes']:'',
						'pulse_actuals'=>isset($post['pulse_actuals'])?$post['pulse_actuals']:'',
						'pulse_range'=>isset($post['pulse_range'])?$post['pulse_range']:'',
						'pulse_rate_rhythm'=>isset($post['pulse_rate_rhythm'])?$post['pulse_rate_rhythm']:'',
						'pulse_rate_vol'=>isset($post['pulse_rate_vol'])?$post['pulse_rate_vol']:'',
						'notes1'=>isset($post['notes1'])?$post['notes1']:'',
						'create_at'=>date('Y-m-d H:i:s'),
						'date'=>date('Y-m-d')
						);
					//echo '<pre>';print_r($billing);exit;
						$update=$this->Resources_model->saving_patient_vital_details($updating);
						if(count($update)>0){
							
							$this->session->set_flashdata('success',"Vitals details successfully Updated.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(10).'/'.base64_encode($post['b_id']));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/desk/'.base64_encode($post['pid']).'/'.base64_encode(9).'/'.base64_encode($post['b_id']));
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
	public function get_doctors_list(){
		$post=$this->input->post();
		$details=$this->Resources_model->get_doctors_list($post['dep_id']);
		if(count($details) > 0)
				{
				$data['msg']=1;
				$data['list']=$details;
				echo json_encode($data);exit;	
				}else{
					$data['msg']=2;
					echo json_encode($data);exit;
				}
	}
	public function assign_doctor(){
		$post=$this->input->post();
		$billing=array(
		'treatment_id'=>$post['depart_id'],
		'doct_id'=>$post['doct_id'],
		'completed'=>1
		);
		$update=$this->Resources_model->update_patient_billing_details($post['billing_id'],$billing);

		if(count($update) > 0)
				{
				$data['msg']=1;
				echo json_encode($data);exit;	
				}else{
					$data['msg']=2;
					echo json_encode($data);exit;
				}
	}
	public function worksheet()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					
					$data['worksheet']=$this->Resources_model->get_doctor_worksheet_list($userdetails['hos_id'],$userdetails['a_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('resource/worksheet',$data);
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
	public function consultation()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$patient_id=base64_decode($this->uri->segment(3));
					if($patient_id==''){
						$this->session->set_flashdata('error',"you don't have permission to access");
						redirect('dashboard');
					}
					$data['patient_id']=isset($patient_id)?$patient_id:'';
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['encounters_list']=$this->Resources_model->get_vitals_list($patient_id);
					$data['patient_details']=$this->Resources_model->get_patient_details($patient_id);
					$data['patient_medicine_list']=$this->Resources_model->get_patient_medicine_details_list($patient_id,date('y-m-d'));
					//echo '<pre>';print_r($data['patient_medicine_list']);exit;
					$this->load->view('resource/consultation',$data);
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
	public function addvitals()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
					$billing=array(
						'p_id'=>isset($post['pid'])?$post['pid']:'',
						'b_id'=>isset($post['b_id'])?$post['b_id']:'',
						'assessment_type'=>isset($post['assessment_type'])?$post['assessment_type']:'',
						'vitaltype'=>isset($post['vitaltype'])?$post['vitaltype']:'',
						'tep_actuals'=>isset($post['tep_actuals'])?$post['tep_actuals']:'',
						'tep_range'=>isset($post['tep_range'])?$post['tep_range']:'',
						'temp_site_positioning'=>isset($post['temp_site_positioning'])?$post['temp_site_positioning']:'',
						'notes'=>isset($post['notes'])?$post['notes']:'',
						'pulse_actuals'=>isset($post['pulse_actuals'])?$post['pulse_actuals']:'',
						'pulse_range'=>isset($post['pulse_range'])?$post['pulse_range']:'',
						'pulse_rate_rhythm'=>isset($post['pulse_rate_rhythm'])?$post['pulse_rate_rhythm']:'',
						'pulse_rate_vol'=>isset($post['pulse_rate_vol'])?$post['pulse_rate_vol']:'',
						'notes1'=>isset($post['notes1'])?$post['notes1']:'',
						'create_at'=>date('Y-m-d H:i:s'),
						'date'=>date('Y-m-d')
					);
					//echo '<pre>';print_r($billing);exit;
						$update=$this->Resources_model->saving_patient_vital_details($billing);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Vitals successfully Added.");
							redirect('resources/consultation/'.base64_encode($post['pid']));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/consultation/'.base64_encode($post['pid']));
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
	public function vitalscomment()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($admindetails);exit;
					foreach($post['comments'] as $lists){
						$billing=array(
							'p_id'=>isset($post['pid'])?$post['pid']:'',
							'comments'=>$lists,
							'created_at'=>date('Y-m-d H:i:s'),
							'create_by'=>$admindetails['a_id']
						);
					$update=$this->Resources_model->saving_patient_vital_comments($billing);

					}
				
						if(count($update)>0){
							$this->session->set_flashdata('success',"Vitals Commets successfully Added.");
							redirect('resources/consultation/'.base64_encode($post['pid']));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/consultation/'.base64_encode($post['pid']));
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
	public function medicine(){
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
						$addmedicine=array(
							'p_id'=>isset($post['pid'])?$post['pid']:'',
							'type_of_medicine'=>isset($post['type_of_medicine'])?$post['type_of_medicine']:'',
							'medicine_name'=>isset($post['medicine_name'])?$post['medicine_name']:'',
							'substitute_name'=>isset($post['substitute_name'])?$post['substitute_name']:'',
							'condition'=>isset($post['condition'])?$post['condition']:'',
							'dosage'=>isset($post['dosage'])?$post['dosage']:'',
							'route'=>isset($post['route'])?$post['route']:'',
							'frequency'=>isset($post['frequency'])?$post['frequency']:'',
							'directions'=>isset($post['directions'])?$post['directions']:'',
							'formdate'=>isset($post['formdate'])?$post['formdate']:'',
							'todate'=>isset($post['todate'])?$post['todate']:'',
							'qty'=>isset($post['qty'])?$post['qty']:'',
							'units'=>isset($post['units'])?$post['units']:'',
							'comments'=>isset($post['comments'])?$post['comments']:'',
							'create_at'=>date('Y-m-d H:i:s'),
							'date'=>date('Y-m-d'),
							'create_by'=>$admindetails['a_id']
						);
					$medicine=$this->Resources_model->saving_patient_medicine($addmedicine);
					if(count($medicine)>0){
							$this->session->set_flashdata('success',"Medicine successfully Added.");
							redirect('resources/consultation/'.base64_encode($post['pid']).'#step-2');
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('resources/consultation/'.base64_encode($post['pid']).'#step-2');
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
	public function removemedicine(){
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					//echo '<pre>';print_r($post);exit;
			
					$removedattch=$this->Resources_model->remove_attachment($post['medicine_id']);
					if(count($removedattch) > 0)
					{
					$data['msg']=1;
					echo json_encode($data);exit;	
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
