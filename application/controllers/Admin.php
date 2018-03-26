<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->library('zend');
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
		if(!$this->session->userdata('userdetails'))
		{
			$this->load->view('admin/login');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function loginpost()
	{
		if(!$this->session->userdata('userdetails'))
		{
			$post=$this->input->post();
			$login_deta=array('email'=>$post['email_id'],'password'=>md5($post['password']));
			$check_login=$this->Admin_model->login_details($login_deta);
			if(count($check_login)>0){
				$login_details=$this->Admin_model->get_admin_details($check_login['a_id']);
				$this->session->set_userdata('userdetails',$login_details);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('loginerror',"Invalid Email Address or Password!");
				redirect('admin');
			}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function chat()
	{
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				$data['chat_list']=$this->Admin_model->getget_team_message_list();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/softwaresupport',$data);
				$this->load->view('html/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function chatinglist()
	{
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				$user_id=base64_decode($this->uri->segment(3));
				$data['chat_list']=$this->Admin_model->getget_team_replay_message_list($user_id);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/replyteamchat',$data);
				$this->load->view('html/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function gropchat()
	{
		if($this->session->userdata('userdetails'))
		{
				$this->load->view('admin/hospitalchat');
				$this->load->view('html/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}public function announcement()
	{
		if($this->session->userdata('userdetails'))
		{
				$data['hospital_list']=$this->Admin_model->get_ll_Hospital_details();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/announcement');
				$this->load->view('html/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	
	public function emps(){
		
		
		/*test*/
		$this->zend->load('Zend/Barcode');
		//generate barcode
		
		/*test*/
		
		$filename = $this->security->sanitize_filename($this->input->post('name'), TRUE);
		$data=array('d_name'=>$filename);
		$logindatasave = $this->Doctor_model->save_doctors($data);
		
		
		
		$file = Zend_Barcode::draw('code128', 'image', array('text' => $logindatasave), array());
		$code = time().$logindatasave;
		 $store_image1 = imagepng($file, $this->config->item('documentroot')."assets/barcodes/{$code}.png");
			
		$this->Doctor_model->update_doctors_details($logindatasave,$code);
		//echo '<pre>';print_r($test);
		
		
	}
	
	
	
}
