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
		$this->load->model('Resources_model');
		$this->load->library('zend');
			if($this->session->userdata('userdetails'))
			{
			$admindetails=$this->session->userdata('userdetails');
			$data['userdetails']=$this->Admin_model->get_all_admin_details($admindetails['a_id']);
			$hos_details=$this->Admin_model->get_hospital_details($admindetails['a_id']);
			if($data['userdetails']['role_id']==2){
			$data['notification']=$this->Admin_model->get_all_announcement($hos_details['hos_id']);
			$Unread_count=$this->Admin_model->get_all_announcement_unread_count($hos_details['hos_id']);
			$data['Unread_count']=count($Unread_count);
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
					//echo '<pre>';print_r($userdetails);exit;
					$data['chat_list']=$this->Chat_model->getget_team_replay_message_list($admindetails['a_id']);
					$data['resources_list']=$this->Chat_model->get_resource_list($userdetails['hos_id']);
					$data['resources_chating']=$this->Chat_model->get_resource_chating_list($admindetails['a_id']);
					$data['hospitaladmin_chat_list']=$this->Chat_model->get_hospitaladmin_replay_message_list($admindetails['a_id']);
					//echo '<pre>';print_r($data);exit;

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
	public function admin_softwareteam()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					//echo '<pre>';print_r($userdetails);exit;
					$data['chat_list']=$this->Chat_model->getget_team_replay_message_list($admindetails['a_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('chat/admin_softwareteam',$data);
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
	public function resourcechat()
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
			'to'=>$post['resource_name'],
			'replay_user_id'=>$replaying,
			'image'=>$img,
			'type'=>$type,
			'create_at'=>date('Y-m-d H:i:s'),
			'updated_by'=>date('Y-m-d H:i:s')
			);
			
			//echo '<pre>';print_r($msg);exit;
			$comments=$this->Chat_model->adding_resource_chating($msg);
			if(count($comments)>0){
					$this->session->set_flashdata('success',"Message send successfully.");
					if(isset($post['replaying']) && $post['replaying']==1){
						redirect('admin/chatinglist/'.base64_encode($post['a_id']));
					}else{
						redirect('chat');
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
					}else if(isset($post['adminchat']) && $post['adminchat']==1){
						redirect('chat/admin_softwareteam');
					}else{
						redirect('chat/index/'.base64_encode(2));
					}
					
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					if(isset($post['replaying']) && $post['replaying']==1){
						redirect('admin/chatinglist/'.base64_encode($post['a_id']));
					}else if(isset($post['adminchat']) && $post['adminchat']==1){
						redirect('chat/admin_softwareteam');
					}else{
						redirect('chat/index/'.base64_encode(2));
					}
					
			}

			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function hospitaladmin()
	{	
		
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
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
			$comments=$this->Chat_model->adding_hospital_admin_chating($msg);
			if(count($comments)>0){
					$this->session->set_flashdata('success',"Message send successfully.");
					if(isset($post['replaying']) && $post['replaying']==1){
						redirect('admin/chatinglist/'.base64_encode($post['a_id']).'/'.base64_encode(2));
					}else{
						redirect('chat/index/'.base64_encode(1));
					}
					
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					if(isset($post['replaying']) && $post['replaying']==1){
						redirect('admin/chatinglist/'.base64_encode($post['a_id']));
					}else{
						redirect('chat/index/'.base64_encode(1));
					}
					
			}

			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function adminpost_msg()
	{	
		
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
				$temp = explode(".", $_FILES["image"]["name"]);
				$img = round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/chating_file/" . $img);
			}else{
				$img='';
			}
			foreach(explode(",",$post['hospitals_ids']) as $List){
				if($List!=''){
					$msg=array(
					'user_id'=>$List,	
					'comment'=>$post['comment'],
					'from'=>$admindetails['a_id'],
					'replay_user_id'=>$admindetails['a_id'],
					'image'=>$img,
					'type'=>"Replayed",
					'create_at'=>date('Y-m-d H:i:s'),
					'updated_by'=>date('Y-m-d H:i:s')
					);
					//echo '<pre>';print_r($msg);exit;
					$comments=$this->Chat_model->adding_hospital_admin_chating($msg);
				}
			}
			if(count($comments)>0){
					$this->session->set_flashdata('success',"Message send successfully.");
					if(isset($post['replaying']) && $post['replaying']==1){
						redirect('admin/resourceschat');
					}else{
						redirect('admin/resourceschat');
					}
					
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					if(isset($post['replaying']) && $post['replaying']==1){
						redirect('admin/chatinglist/'.base64_encode($post['a_id']));
					}else{
						redirect('chat/index/'.base64_encode(1));
					}
					
			}

			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function adminchatingpost()
	{	
		
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
				$temp = explode(".", $_FILES["image"]["name"]);
				$img = round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/chating_file/" . $img);
			}
			foreach(explode(",",$post['hospitals_ids']) as $List){
				
				if($List !=''){
					$msg=array(
					'sender_id'=>$admindetails['a_id'],	
					'comments'=>isset($post['comment'])?$post['comment']:'',
					'image'=>isset($img)?$img:'',
					'reciver_id'=>$List,
					'create_at'=>date('Y-m-d H:i:s'),
					'type'=>'Replay',
					'create_by'=>$admindetails['a_id'],
					);
					//echo '<pre>';print_r($msg);exit;
					$comments=$this->Chat_model->adding_adminchating_with_hospital_chating($msg);
				}
			
			}
			if(count($comments)>0){
					$this->session->set_flashdata('success',"Message send successfully.");
					redirect('admin/gropchat');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('admin/gropchat');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function adminchating()
	{	
		
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$userdetails=$this->Admin_model->get_hospital_details($admindetails['a_id']);
			$post=$this->input->post();
			$get_sender_id=$this->Chat_model->get_sender_id($userdetails['hos_id']);

			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
				$temp = explode(".", $_FILES["image"]["name"]);
				$img = round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/chating_file/" . $img);
			}
				$msg=array(
				'sender_id'=>$get_sender_id['sender_id'],	
				'comments'=>isset($post['comment'])?$post['comment']:'',
				'image'=>isset($img)?$img:'',
				'reciver_id'=>$userdetails['hos_id'],
				'create_at'=>date('Y-m-d H:i:s'),
				'type'=>'Replayed',
				'create_by'=>$admindetails['a_id']
				);
				$comments=$this->Chat_model->adding_adminchating_with_hospital_chating($msg);
		
			if(count($comments)>0){
					$this->session->set_flashdata('success',"Message send successfully.");
					redirect('admin/adminchat');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('admin/adminchat');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
}
