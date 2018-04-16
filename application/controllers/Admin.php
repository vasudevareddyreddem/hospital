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
			$hos_details=$this->Admin_model->get_hospital_details($admindetails['a_id']);
			if($data['userdetails']['role_id']==2){
			$data['notification']=$this->Admin_model->get_all_announcement($hos_details['hos_id']);
			$Unread_count=$this->Admin_model->get_all_announcement_unread_count($hos_details['hos_id']);
			if(count($Unread_count)>0){
					$data['Unread_count']=count($Unread_count);
				}else{
					$data['Unread_count']='';
				}
			}else if($data['userdetails']['role_id']==3 || $data['userdetails']['role_id']==4 ||$data['userdetails']['role_id']==5 ||$data['userdetails']['role_id']==6){
				$data['notification']=$this->Admin_model->get_all_resource_announcement($admindetails['a_id']);
				$Unread_count=$this->Admin_model->get_all_resource_announcement_unread_count($admindetails['a_id']);
				if(count($Unread_count)>0){
					$data['Unread_count']=count($Unread_count);
				}else{
					$data['Unread_count']='';
				}
			}
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
	public function resourceschat()
	{
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				$userdetails=$this->Admin_model->get_hospital_details($admindetails['a_id']);
				$data['chat_list']=$this->Admin_model->get_resourse_message_list();
				$data['resources_list']=$this->Admin_model->get_resource_list($userdetails['hos_id']);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/resourcesupport',$data);
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
				$type_id=base64_decode($this->uri->segment(4));
				if($type_id==2){
				$data['chat_list']=$this->Admin_model->getget_resourse_replay_message_list($user_id);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/replyresourschat',$data);
				}else{
				$data['chat_list']=$this->Admin_model->getget_team_replay_message_list($user_id);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/replyteamchat',$data);
				}
				
				$this->load->view('html/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function edit()
	{
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$admindetails=$this->session->userdata('userdetails');
					$data['admin_detail']= $this->Admin_model->get_admin_details_data($admindetails['a_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('admin/profileedit',$data);
					$this->load->view('html/footer');
				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function editpost()
	{
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$admindetails=$this->session->userdata('userdetails');
					$post=$this->input->post();
					$admin_detail= $this->Admin_model->get_admin_details_data($admindetails['a_id']);
					if($admin_detail['a_email_id']!= $post['email_id']){
						$emailcheck= $this->Admin_model->check_email_exits($post['email_id']);
								if(count($emailcheck)>0){
									$this->session->set_flashdata('error','Email id already exists.please use another Email id');
									redirect('admin/edit/'.base64_encode($admindetails['a_id']));
								}else{
										if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
										unlink("assets/adminprofilepic/".$admin_detail['a_profile_pic']);
										$temp = explode(".", $_FILES["image"]["name"]);
										$img = round(microtime(true)) . '.' . end($temp);
										move_uploaded_file($_FILES['image']['tmp_name'], "assets/adminprofilepic/" . $img);
										}else{
										$img=$admin_detail['a_profile_pic'];
										}
									$details=array(
									'a_email_id'=>$post['email_id'],
									'a_name'=>$post['name'],
									'a_mobile'=>$post['mobile_number'],
									'a_profile_pic'=>$img
									);
								$update= $this->Admin_model->update_admin_details($admindetails['a_id'],$details);
								if(count($update)>0){
										$this->session->set_flashdata('success',"Profile details successfully Updated.");
										redirect('profile');
									}else{
											$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
											redirect('admin/edit/'.base64_encode($admindetails['a_id']));
									}
								}
					}else{
						if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
										unlink("assets/adminprofilepic/".$admin_detail['a_profile_pic']);
										$temp = explode(".", $_FILES["image"]["name"]);
										$img = round(microtime(true)) . '.' . end($temp);
										move_uploaded_file($_FILES['image']['tmp_name'], "assets/adminprofilepic/" . $img);
										}else{
										$img=$admin_detail['a_profile_pic'];
										}
						$details=array(
						'a_email_id'=>$post['email_id'],
						'a_name'=>$post['name'],
						'a_mobile'=>$post['mobile_number'],
						'a_profile_pic'=>$img
						);
						$update= $this->Admin_model->update_admin_details($admindetails['a_id'],$details);
						if(count($update)>0){
								$this->session->set_flashdata('success',"Profile details successfully Updated.");
								redirect('profile');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('admin/edit/'.base64_encode($admindetails['a_id']));
							}
					}

				}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function gropchat()
	{
		if($this->session->userdata('userdetails'))
		{
				$data['hospital_list']=$this->Admin_model->get_all_Hospital_details();
				$data['chating_list']=$this->Admin_model->get_admin_chating_with_hospital();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/hospitalgroup_chat',$data);
				$this->load->view('html/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function adminchat()
	{
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				$userdetails=$this->Admin_model->get_hospital_details($admindetails['a_id']);
				$data['chating_list']=$this->Admin_model->get_hospital_admin_chating($userdetails['hos_id']);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('chat/hospital_chat',$data);
				$this->load->view('html/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	
	public function announcement()
	{
		if($this->session->userdata('userdetails'))
		{
				$data['hospital_list']=$this->Admin_model->get_all_Hospital_details();
				$data['notification_list']=$this->Admin_model->get_all_notification_details();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/announcement',$data);
				$this->load->view('html/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function notification()
	{
		if($this->session->userdata('userdetails'))
		{
				$this->load->view('notification/notification');
				$this->load->view('html/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function hospital_list()
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
	public function sendnotification()
	{
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				$post=$this->input->post();
				//echo '<pre>';print_r($post);exit;
				$addnotification=array(
					'comment'=>isset($post['notification'])?$post['notification']:'',
					'create_at'=>date('Y-m-d H:i:s'),
					'status'=>1,
					'create_by'=>$admindetails['a_id']
					);
					$saveNotification=$this->Admin_model->save_notification($addnotification);
					if(count($saveNotification)>0){
						$this->session->set_flashdata('success',"Notification successfully Send");
						redirect('admin/notification');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('admin/notification');
					}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function gethospitalsname()
	{
		if($this->session->userdata('userdetails'))
		{
				$post=$this->input->post();
				foreach($post['id'] as $list){
					$hos_name=$this->Admin_model->get_Hospital_name($list);
					$names[]=$hos_name['hos_bas_name'];
				}
				$tt=implode(",",$names);
				$data['msg']=1;
				$data['names_list']=$tt;
				$data['ids']=$post['id'];
				echo json_encode($data);exit;	
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function getresourcesname()
	{
		if($this->session->userdata('userdetails'))
		{
				$post=$this->input->post();
				foreach($post['id'] as $list){
					$hos_name=$this->Admin_model->get_resource_name($list);
					$names[]=$hos_name['resource_name'];
				}
				$tt=implode(",",$names);
				$data['msg']=1;
				$data['names_list']=$tt;
				$data['ids']=$post['id'];
				echo json_encode($data);exit;	
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function get_notification_msg()
	{
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				$post=$this->input->post();
				$hos_name=$this->Admin_model->get_announcements_comment($post['notification_id']);
				$read=array('readcount'=>0);
				$this->Admin_model->get_announcement_comment_read($post['notification_id'],$read);
				$hos_details=$this->Admin_model->get_hospital_details($admindetails['a_id']);
				$Unread_count=$this->Admin_model->get_all_announcement_unread_count($hos_details['hos_id']);
				$data['names_list']=$hos_name['comment'];
				$data['time']=$hos_name['create_at'];
				if(count($Unread_count)>0){
				$data['Unread_count']=count($Unread_count);
				}else{
				$data['Unread_count']='';	
				}
				echo json_encode($data);exit;	
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function get_resource_notification_msg()
	{
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				$post=$this->input->post();
				$hos_name=$this->Admin_model->get_resource_announcements_comment($post['notification_id']);
				$read=array('readcount'=>0);
				$this->Admin_model->get_resource_announcement_comment_read($post['notification_id'],$read);
				$hos_details=$this->Admin_model->get_hospital_details($admindetails['a_id']);
				$Unread_count=$this->Admin_model->get_all_resource_announcement_unread_count($admindetails['a_id']);
				$data['names_list']=$hos_name['comment'];
				$data['time']=$hos_name['create_at'];
				if(count($Unread_count)>0){
				$data['Unread_count']=count($Unread_count);
				}else{
				$data['Unread_count']='';	
				}
				echo json_encode($data);exit;	
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function sendannouncements()
	{
		if($this->session->userdata('userdetails'))
		{
				$admindetails=$this->session->userdata('userdetails');
				$post=$this->input->post();
				if(isset($post['hospitals_ids']) && $post['hospitals_ids']!=''){
				foreach(explode(",",$post['hospitals_ids']) as $lists){
					if($lists !=''){
					$addcomments=array(
					'hos_id'=>$lists,
					'comment'=>isset($post['comments'])?$post['comments']:'',
					'create_at'=>date('Y-m-d H:i:s'),
					'status'=>1,
					'sent_by'=>$admindetails['a_id']
					);
					$saveNotification=$this->Admin_model->save_announcements_list($addcomments);
					//echo $this->db->last_query();exit;
					}
				}
				
				if(count($saveNotification)>0){
					$this->session->set_flashdata('success',"Notification successfully Send.");
					redirect('admin/announcement');
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('admin/announcement');
				}
				
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('admin/announcement');
				}
			
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
		public function addlab()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$post=$this->input->post();
					//echo '<pre>';print_r($_FILES);exit;
					if(md5($post['resource_password'])==md5($post['resource_cinformpaswword'])){
								$emailcheck= $this->Hospital_model->check_email_exits($post['lab_email']);
								if(count($emailcheck)>0){
									$this->session->set_flashdata('error','Email id already exists.please use another Email id');
									redirect('lab/oursource');
								}else{
									if(isset($_FILES['lab_photo']['name']) && $_FILES['lab_photo']['name']!=''){
									$temp = explode(".", $_FILES["lab_photo"]["name"]);
									$photo =round(microtime(true)) . '.' . end($temp);
									move_uploaded_file($_FILES['lab_photo']['tmp_name'], "assets/adminprofilepic/" . $photo);
									}else{
									$photo='';
									}
									$admindetails=$this->session->userdata('userdetails');
									//echo '<pre>';print_r($statusdata);exit;
									$admindetails=array(
									'role_id'=>$post['designation'],
									'a_name'=>$post['resource_name'],
									'a_email_id'=>$post['resource_email'],
									'a_password'=>md5($post['resource_cinformpaswword']),
									'a_org_password'=>$post['resource_cinformpaswword'],
									'a_mobile'=>$post['resource_mobile'],
									'a_status'=>1,
									'a_create_at'=>date('Y-m-d H:i:s')
									);
									$addresourcedmin = $this->Admin_model->save_admin($admindetails);
									$resourcedata=array(
									'a_id'=>$addresourcedmin,
									'role_id'=>$post['designation'],
									'hos_id'=>$hos_ids['hos_id'],
									'resource_name'=>$post['lab_name'],
									'resource_mobile'=>$post['lab_mobile'],
									'resource_add1'=>$post['lab_add1'],
									'resource_add2'=>$post['lab_add2'],
									'resource_city'=>$post['lab_city'],
									'resource_state'=>$post['lab_state'],
									'resource_zipcode'=>$post['lab_zipcode'],
									'resource_other_details'=>$post['lab_other_details'],
									'resource_contatnumber'=>$post['lab_contatnumber'],
									'resource_email'=>$post['lab_email'],
									'resource_photo'=>$photo,
									'r_status'=>1,
									'r_create_by'=>$hos_ids['a_id'],
									'r_created_at'=>date('Y-m-d H:i:s')
									);
									//echo '<pre>';print_r($onedata);exit;
									$saveresource =$this->Hospital_model->save_resource($resourcedata);
									if(count($saveresource)>0){
										$this->session->set_flashdata('success',"Our source lab are successfully created");
										redirect('lab/oursource/'.base64_encode(1));
									}else{
										$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
										redirect('lab/oursource');
									}
								}
								
							}else{
								$this->session->set_flashdata('error',"password and  Confirmpassword are not matched");
								redirect('lab/oursource');
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
