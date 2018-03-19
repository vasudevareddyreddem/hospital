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
					//$data['hospital_list']= $this->Hospital_model->get_hospital_list_details();
					$patient_id= base64_decode($this->uri->segment(3));
					if(isset($patient_id) && $patient_id!=''){
						$data['patient_detailes']= $this->Resources_model->get_details_details($patient_id);
						$data['tab']= base64_decode($this->uri->segment(4));
						$data['pid']= base64_decode($this->uri->segment(3));
					}else{
						$data['patient_detailes']=array();
						$data['tab']='';
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
	
	
	
	
	
}
