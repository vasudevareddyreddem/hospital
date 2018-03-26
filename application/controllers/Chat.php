<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

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
		$this->load->model('Chat_model');
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
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$data['chat_list']=$this->Admin_model->getget_team_replay_message_list($admindetails['a_id']);
					$data['tab']=base64_decode($this->uri->segment(3));
					$this->load->view('chat/recoursechat',$data);
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
	public function softwareteam()
	{	
		
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			//echo '<pre>';print_r($admindetails);
			$post=$this->input->post();
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
				$temp = explode(".", $_FILES["image"]["name"]);
				$img = round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/chating_file/" . $img);
			}else{
				$img='';
			}
			if(isset($post['replaying']) && $post['replaying']==1){
				$replaying=$admindetails['a_id'];
				$user_id=$post['a_id'];
				$type="Replayed";
			}else{
				$replaying='';
				$user_id=$admindetails['a_id'];
				$type="Replay";
			}
			$msg=array(
			'user_id'=>$user_id,	
			'comment'=>$post['comment'],
			'from'=>$replaying,
			'replay_user_id'=>$replaying,
			'image'=>$img,
			'type'=>$type,
			'create_at'=>date('Y-m-d H:i:s'),
			'updated_by'=>date('Y-m-d H:i:s')
			);
			
			//echo '<pre>';print_r($msg);exit;
			$comments=$this->Chat_model->adding_team_chating($msg);
			if(count($comments)>0){
					$this->session->set_flashdata('success',"Message send successfully.");
					if(isset($post['replaying']) && $post['replaying']==1){
						redirect('admin/chatinglist/'.base64_encode($post['a_id']));
					}else{
						redirect('chat/index/'.base64_encode(2));
					}
					
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					if(isset($post['replaying']) && $post['replaying']==1){
						redirect('admin/chatinglist/'.base64_encode($post['a_id']));
					}else{
						redirect('chat/index/'.base64_encode(2));
					}
					
			}

			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
}
