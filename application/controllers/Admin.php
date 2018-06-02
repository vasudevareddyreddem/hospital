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
		$this->load->model('Hospital_model');
		$this->load->library('zend');
		if($this->session->userdata('userdetails'))
			{
			$admindetails=$this->session->userdata('userdetails');
			$data['userdetails']=$this->Admin_model->get_all_admin_details($admindetails['a_id']);
			$hos_details=$this->Admin_model->get_hospital_details($admindetails['a_id']);
			if($data['userdetails']['role_id']==2){
			$data['img']=$this->Admin_model->get_hosipital_imges($admindetails['a_id']);

			$data['notification']=$this->Admin_model->get_all_announcement($hos_details['hos_id']);
			$Unread_count=$this->Admin_model->get_all_announcement_unread_count($hos_details['hos_id']);
			if(count($Unread_count)>0){
					$data['Unread_count']=count($Unread_count);
				}else{
					$data['Unread_count']='';
				}
			}else if($data['userdetails']['role_id']==3 || $data['userdetails']['role_id']==4 ||$data['userdetails']['role_id']==5 ||$data['userdetails']['role_id']==6){
				$data['img']=$this->Admin_model->get_resource_imges($admindetails['a_id']);
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
			echo '<pre>';print_r($post);
			$login_deta=array('email'=>$post['email_id'],'password'=>md5($post['password']));
			$check_login=$this->Admin_model->login_details($login_deta);
				$this->load->helper('cookie');

			if(isset($post['remember_me']) && $post['remember_me']==1){
					$usernamecookie = array('name' => 'username', 'value' => $post["email_id"],'expire' => time()+86500 ,'path'   => '/');
					$passwordcookie = array('name' => 'password', 'value' => $post["password"],'expire' => time()+86500,'path'   => '/');
					$remembercookie = array('name' => 'remember', 'value' => $post["remember_me"],'expire' => time()+86500,'path'   => '/');
					$this->input->set_cookie($usernamecookie);
					$this->input->set_cookie($passwordcookie);
					$this->input->set_cookie($remembercookie);
					$this->load->helper('cookie');
					$this->input->cookie('username', TRUE);
					//echo print_r($usernamecookie);exit;

					}else{
						delete_cookie('username');
						delete_cookie('password');
						delete_cookie('remember');
					}
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
	public function checking_coupon_code()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					$post=$this->input->post();
					$checkcode=$this->Admin_model->get_coupon_code_details(trim($post['coupon_code']));
					if(count($checkcode)>0){
						
						if($checkcode['status']==1){
									if($checkcode['type']=='Amount'){
									$amount=($post['bill_amount'])-($checkcode['percentage_amount']);
									$code_details=array(
									'coupon_code'=>$post['coupon_code'],
									'coupon_code_amount'=>$checkcode['percentage_amount'],
									'with_out_coupon_code'=>$post['bill_amount']
									);
									$addcode=$this->Admin_model->update_billing_details($post['patient_id'],$post['biling_id'],$code_details);
									if(count($addcode)>0){
										$data['msg']=1;
										$data['amt']=$amount;
										$data['cou_amt']=$checkcode['percentage_amount'];
										echo json_encode($data);exit;
									}else{
										$data['msg']=3;
										echo json_encode($data);exit;
									}
								}else{
									$percent=($post['bill_amount'])*($checkcode['percentage_amount']);
									$percen_amount=$percent/100;
									$amount=($post['bill_amount'])-($percen_amount);
									$code_details=array(
									'coupon_code'=>$post['coupon_code'],
									'coupon_code_amount'=>$amount,
									'with_out_coupon_code'=>$post['bill_amount']
									);
									$addcode=$this->Admin_model->update_billing_details($post['patient_id'],$post['biling_id'],$code_details);
									if(count($addcode)>0){
										$data['msg']=1;
										$data['amt']=$amount;
										$data['cou_amt']=$checkcode['percentage_amount'].'%';
										echo json_encode($data);exit;
									}else{
										$data['msg']=3;
										echo json_encode($data);exit;
									}
								}
							
						}else{
							$data['msg']=4;
							echo json_encode($data);exit;
						}
					}else{
						$data['msg']=2;
						echo json_encode($data);exit;
					}
					//echo '<pre>';print_r($post);exit;
					}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('dashboard');
				}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function couponcodes()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					$admindetails=$this->session->userdata('userdetails');
					$data['tab']=base64_decode($this->uri->segment(3));
					$data['couponcode_list']=$this->Admin_model->get_all_coupon_code_list($admindetails['a_id']);
					$this->load->view('admin/coupon_codes',$data);
					$this->load->view('html/footer');
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
	public function coupon_post()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$admindetails=$this->session->userdata('userdetails');
					$post=$this->input->post();
					$coupon_code=array(
					'coupon_code'=>$post['coupon_code'],
					'type'=>$post['type'],
					'percentage_amount'=>$post['percentage_amount'],
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['a_id']
					);
					$checking=$this->Admin_model->get_coupon_code_details($post['coupon_code']);
					if(count($checking)==0){
						$addcoupon=$this->Admin_model->save_coupon_codes($coupon_code);
						if(count($addcoupon)>0){
							$this->session->set_flashdata('success',"Coupon code  successfully Added");
							redirect('admin/couponcodes/'.base64_encode(1));
						}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('admin/couponcodes');
						}
					
					}else{
							$this->session->set_flashdata('error',"Coupon Code already exists. Please try again.");
							redirect('admin/couponcodes');
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
	public function delete_couponcode()
		{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$admindetails=$this->session->userdata('userdetails');
					$coupon_id=base64_decode($this->uri->segment(3));
					$delete=$this->Admin_model->delete_coupon_code($coupon_id);
						if(count($delete)>0){
							$this->session->set_flashdata('success',"Coupon Code successfully Deleted.");
							redirect('admin/couponcodes/'.base64_encode(1));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('admin/couponcodes/'.base64_encode(1));
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
	public function coupon_code_status()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=5){
					$admindetails=$this->session->userdata('userdetails');
					$test_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$sta=0;
					}else{
						$sta=1;
					}
					$details=array(
						'status'=>$sta,
						'updated_time'=>date('Y-m-d H:i:s')
						);
					//echo '<pre>';print_r($billing);exit;
						$updated=$this->Admin_model->update_coupon_code_details($test_id,$details);
						if(count($updated)>0){
							if($status==1){
							$this->session->set_flashdata('success',"Coupon code successfully Deactivate.");
							}else{
								$this->session->set_flashdata('success',"Coupon code successfully Activate.");
							}
							redirect('admin/couponcodes/'.base64_encode(1));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('admin/couponcodes/'.base64_encode(1));
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
	public function update_coupon_code()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$admindetails=$this->session->userdata('userdetails');
					$post=$this->input->post();
					//echo '<pre>';print_r($post);exit;
					$post=$this->input->post();
						$coupon_code=array(
						'coupon_code'=>$post['coupon_code'],
						'type'=>$post['type'],
						'percentage_amount'=>$post['percentage_amount'],
						'updated_time'=>date('Y-m-d H:i:s')
						);
					//echo '<pre>';print_r($billing);exit;
					$coupon_details=$this->Admin_model->check_coupon_exits_details($post['coupon_code_id']);
					//echo '<pre>';print_r($coupon_details);exit;
					if($coupon_details['coupon_code'] == $post['coupon_code']){
						
						$save=$this->Admin_model->update_coupon_code_details($post['coupon_code_id'],$coupon_code);
						if(count($save)>0){
							$this->session->set_flashdata('success',"Coupon code successfully Updated.");
							redirect('admin/couponcodes/'.base64_encode(1));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('admin/couponcodes/'.base64_encode(1));
						}
						
					}else{
							$checking=$this->Admin_model->get_coupon_code_details($post['coupon_code']);
						if(count($checking)==0){
							$save=$this->Admin_model->update_coupon_code_details($post['coupon_code_id'],$coupon_code);
							if(count($save)>0){
								$this->session->set_flashdata('success',"Coupon code successfully Updated.");
								redirect('admin/couponcodes/'.base64_encode(1));
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('admin/couponcodes/'.base64_encode(1));
							}
							
						}else{
							$this->session->set_flashdata('error',"Coupon Code already exists. Please try again.");
							redirect('admin/couponcodes/'.base64_encode(1));
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
	public function forgotpassword()
	{	
		if(!$this->session->userdata('userdetails'))
		{
			$post=$this->input->post();
			$check_login=$this->Admin_model->email_check_details($post['forgot_password_email']);
			if(count($check_login)>0){
				
					$this->load->library('email');
					$this->email->set_newline("\r\n");
					$this->email->set_mailtype("html");
					$this->email->to($check_login['a_email_id']);
					$this->email->from('customerservice@e-healthinfra.com');
					$body = "<b> Your Account login Password is </b> : ".$check_login['a_org_password'];
					 $this->email->message($body);
					if ($this->email->send())
					{
						$this->session->set_flashdata('success',"Password sent to your registered email address. Please Check your registered email address");
						redirect('admin');
					}else{
						$this->session->set_flashdata('error'," In Localhost mail  didn't send");
						redirect('admin');
					}
			}else{
				$this->session->set_flashdata('error',"Invalid login details. Please try again once");
				redirect('admin');
			}
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
				$data['chat_list']=$this->Admin_model->get_resourse_message_list($userdetails['hos_id']);
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
					//echo '<pre>';print_r($post);exit;
					if(md5($post['lab_password'])==md5($post['lab_cinformpaswword'])){
								$emailcheck= $this->Admin_model->check_email_exits($post['lab_email']);
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
									$details=array(
									'role_id'=>5,
									'out_source'=>1,
									'a_name'=>$post['lab_name'],
									'a_email_id'=>$post['lab_email'],
									'a_password'=>md5($post['lab_cinformpaswword']),
									'a_org_password'=>$post['lab_cinformpaswword'],
									'a_mobile'=>$post['lab_mobile'],
									'a_status'=>1,
									'a_create_at'=>date('Y-m-d H:i:s'),
									'create_by'=>$admindetails['a_id']
									);
									$addresourcedmin = $this->Admin_model->save_admin($details);
									$resourcedata=array(
									'a_id'=>$addresourcedmin,
									'role_id'=>'5',
									'hos_id'=>'',
									'out_source_lab'=>1,
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
									'r_create_by'=>$admindetails['a_id'],
									'r_created_at'=>date('Y-m-d H:i:s')
									);
									//echo '<pre>';print_r($onedata);exit;
									$saveresource =$this->Admin_model->save_out_source_lab($resourcedata);
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
	public function resourcestatus()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$resourse_id=$this->uri->segment(3);
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($resourse_id!=''){
						$stusdetails=array(
							'r_status'=>$statu,
							'r_updated_at'=>date('Y-m-d H:i:s')
							);
							$stus=array(
							'a_status'=>$statu,
							'a_updated_at'=>date('Y-m-d H:i:s')
							);
							$r_details= $this->Admin_model->get_resourse_details(base64_decode($resourse_id));
							$this->Admin_model->update_resourse_details($r_details['a_id'],$stus);
							$statusdata= $this->Hospital_model->update_resourse_details(base64_decode($resourse_id),$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Out source Lab successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Out source Lab successfully Activate.");
								}
								redirect('lab/oursource/'.base64_encode(1));
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('lab/oursource/'.base64_encode(1));
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('lab/oursource/'.base64_encode(1));
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
	public function resourcedelete()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$resourse_id=$this->uri->segment(3);
					if($resourse_id!=''){
							$r_details= $this->Admin_model->get_resourse_details(base64_decode($resourse_id));
							$this->Admin_model->delete_out_sources($r_details['a_id']);
							$deletedata= $this->Admin_model->delete_resourse_details(base64_decode($resourse_id));
							if(count($deletedata)>0){
								$this->session->set_flashdata('success',"Out source Lab successfully removed.");
								redirect('lab/oursource/'.base64_encode(1));
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('lab/oursource/'.base64_encode(1));
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('lab/oursource/'.base64_encode(1));
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
	public function editoutsource(){
		
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$lab_id=base64_decode($this->uri->segment(3));
					if($lab_id!=''){
						
						$data['lab_detils']= $this->Admin_model->get_get_out_sources_details(base64_decode($this->uri->segment(3)));
							$this->load->view('admin/edit_outsource',$data);
							$this->load->view('html/footer');
						
						//echo "<pre>";print_r($data);exit; 
							
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('lab/oursource/'.base64_encode(1));
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
	
	public function editlab(){
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$post=$this->input->post();
					
					//echo '<pre>';print_r($post);exit;
						$lab_detils= $this->Admin_model->get_get_out_sources_details($post['lab_id']);
						if($lab_detils['resource_email']!= $post['lab_email']){
							
							$emailcheck= $this->Hospital_model->check_email_exits($post['lab_email']);
								
								//echo '<pre>';print_r($emailcheck);exit;
								if(count($emailcheck)>0){
									$this->session->set_flashdata('error','Email id already exists.please use another Email id');
									redirect('admin/editoutsource/'.base64_encode($post['lab_id']));
								}else{
										if(isset($_FILES['lab_photo']['name']) && $_FILES['lab_photo']['name']!=''){
											unlink("assets/adminprofilepic/".$lab_detils['resource_photo']);
											$temp = explode(".", $_FILES["lab_photo"]["name"]);
											$img =round(microtime(true)) . '.' . end($temp);
											move_uploaded_file($_FILES['lab_photo']['tmp_name'], "assets/adminprofilepic/" . $img);
										}else{
											$img=$lab_detils['resource_photo'];
										}
									$admindetails=$this->session->userdata('userdetails');
									//echo '<pre>';print_r($statusdata);exit;
									$admin_details=array(
									'a_name'=>$post['lab_name'],
									'a_email_id'=>$post['lab_email'],
									'a_mobile'=>$post['lab_mobile'],
									'a_updated_at'=>date('Y-m-d H:i:s')
									);
									$addresourcedmin = $this->Admin_model->update_admin_details($lab_detils['a_id'],$admin_details);
									//echo $this->db->last_query();exit;
									$resourcedata=array(
										'resource_name'=>isset($post['lab_name'])?$post['lab_name']:'',
										'resource_mobile'=>isset($post['lab_mobile'])?$post['lab_mobile']:'',
										'resource_add1'=>isset($post['lab_add1'])?$post['lab_add1']:'',
										'resource_add2'=>isset($post['lab_add2'])?$post['lab_add2']:'',
										'resource_city'=>isset($post['lab_city'])?$post['lab_city']:'',
										'resource_state'=>isset($post['lab_state'])?$post['lab_state']:'',
										'resource_zipcode'=>isset($post['lab_zipcode'])?$post['lab_zipcode']:'',
										'resource_other_details'=>isset($post['lab_other_details'])?$post['lab_other_details']:'',
										'resource_contatnumber'=>isset($post['lab_contatnumber'])?$post['lab_contatnumber']:'',
										'resource_email'=>isset($post['lab_email'])?$post['lab_email']:'',
										'resource_photo'=>$img,
									'r_created_at'=>date('Y-m-d H:i:s')
									);
									//echo '<pre>';print_r($onedata);exit;
									$saveresource =$this->Admin_model->update_lab_resourse_details($post['lab_id'],$resourcedata);
									if(count($saveresource)>0){
										$this->session->set_flashdata('success',"Out source lab details are successfully Updated");
										redirect('lab/oursource/'.base64_encode(1));
										
									}else{
										$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
										redirect('admin/editoutsource/'.base64_encode($post['lab_id']));
									}
								}
							
							
						}else{
							
							if(isset($_FILES['lab_photo']['name']) && $_FILES['lab_photo']['name'] !=''){
								$temp = explode(".", $_FILES["lab_photo"]["name"]);
								$img =round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['lab_photo']['tmp_name'], "assets/adminprofilepic/" . $img);

								}else{
									$img=$lab_detils['resource_photo'];
								}
							
							$resourcedata=array(
							'resource_name'=>isset($post['lab_name'])?$post['lab_name']:'',
							'resource_mobile'=>isset($post['lab_mobile'])?$post['lab_mobile']:'',
							'resource_add1'=>isset($post['lab_add1'])?$post['lab_add1']:'',
							'resource_add2'=>isset($post['lab_add2'])?$post['lab_add2']:'',
							'resource_city'=>isset($post['lab_city'])?$post['lab_city']:'',
							'resource_state'=>isset($post['lab_state'])?$post['lab_state']:'',
							'resource_zipcode'=>isset($post['lab_zipcode'])?$post['lab_zipcode']:'',
							'resource_other_details'=>isset($post['lab_other_details'])?$post['lab_other_details']:'',
							'resource_contatnumber'=>isset($post['lab_contatnumber'])?$post['lab_contatnumber']:'',
							'resource_email'=>isset($post['lab_email'])?$post['lab_email']:'',
							'resource_photo'=>$img,
							);
							$saveresource =$this->Admin_model->update_lab_resourse_details($post['lab_id'],$resourcedata);
									if(count($saveresource)>0){
										$this->session->set_flashdata('success',"Out source lab details are successfully Updated");
										redirect('lab/oursource/'.base64_encode(1));
										
									}else{
										$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
										redirect('admin/editoutsource/'.base64_encode($post['lab_id']));
									}
							
						}

					//echo '<pre>';print_r($post);exit;
					
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
