<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller {

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
			$this->load->view('html/header',$data);
			$this->load->view('html/sidebar',$data);
			}
		}
	public function index()
	{	
		
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					$data['hospital_list']= $this->Hospital_model->get_hospital_list_details();
					//echo '<pre>';print_r($data);exit;
					$this->load->view('admin/hospital_list',$data);
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
	public function add()
	{
		if($this->session->userdata('userdetails'))
		{
				$data['tab']=base64_decode($this->uri->segment(3));
				$data['hospital_id']=$this->uri->segment(4);
				if(isset($data['hospital_id']) && $data['hospital_id']!=''){
					$data['hospital_details']= $this->Hospital_model->get_hospital_details(base64_decode($this->uri->segment(4)));
				}else{
					$data['hospital_details']=array();
				}
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/addhospital',$data);
				$this->load->view('html/footer');
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function addpostone()
	{
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					$post=$this->input->post();

					//echo '<pre>';print_r($post);exit;
					if(isset($post['hospital_id']) && $post['hospital_id']!=''){
						$hospital_details= $this->Hospital_model->get_hospital_details(base64_decode($post['hospital_id']));
						if($hospital_details['hos_email_id']==$post['hos_email_id']){
								$onedata=array(
										'hos_con_number'=>$post['hos_con_number'],
										'hos_email_id'=>$post['hos_email_id'],
										'hos_updated_at'=>date('Y-m-d H:i:s')
										);
								$onedata1=array(
										'a_mobile'=>$post['hos_con_number'],
										'a_email_id'=>$post['hos_email_id'],
										'a_updated_at'=>date('Y-m-d H:i:s')
										);
								$this->Hospital_model->update_adminhospital_details($hospital_details['a_id'],$onedata1);
								$stepone= $this->Hospital_model->update_hospital_details(base64_decode($post['hospital_id']),$onedata);
								if(count($stepone)>0){
									$this->session->set_flashdata('success',"Hospital Representative details are successfully updated");
									redirect('hospital/add/'.base64_encode(2).'/'.$post['hospital_id']);
								}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('hospital/add/'.base64_encode(1).'/'.$post['hospital_id']);
								}
						}else{
							
								$emailcheck= $this->Hospital_model->check_email_exits($post['hos_email_id']);
								if(count($emailcheck)>0){
									$this->session->set_flashdata('error','Email id already exists.please use another Email id');
									redirect('hospital/add/'.base64_encode(1).'/'.$post['hospital_id']);
								}else{
									$hospital_id= $this->Hospital_model->get_hospital_details(base64_decode($post['hospital_id']));
									$onedata=array(
									'hos_con_number'=>$post['hos_con_number'],
									'hos_email_id'=>$post['hos_email_id'],
									'hos_updated_at'=>date('Y-m-d H:i:s')
									);
									$onedata1=array(
										'a_mobile'=>$post['hos_con_number'],
										'a_email_id'=>$post['hos_email_id'],
										'a_updated_at'=>date('Y-m-d H:i:s')
										);
									$this->Hospital_model->update_adminhospital_details($hospital_id['a_id'],$onedata1);
									$stepone= $this->Hospital_model->update_hospital_details(base64_decode($post['hospital_id']),$onedata);
									if(count($stepone)>0){
									$this->session->set_flashdata('success',"Hospital Representative details are successfully updated");
									redirect('hospital/add/'.base64_encode(2).'/'.$post['hospital_id']);
									}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('hospital/add/'.base64_encode(1).'/'.$post['hospital_id']);
									}
								}
							
						}

						
					}else{
							if(md5($post['hos_password'])==md5($post['hos_confirmpassword'])){
								$emailcheck= $this->Hospital_model->check_email_exits($post['hos_email_id']);
								if(count($emailcheck)>0){
									$this->session->set_flashdata('error','Email id already exists.please use another Email id');
									redirect('hospital/add/'.base64_encode(1));
								}else{
									
									$admindetails=array(
									'role_id'=>2,
									'a_name'=>'Hospital Admin',
									'a_email_id'=>$post['hos_email_id'],
									'a_password'=>md5($post['hos_confirmpassword']),
									'a_org_password'=>$post['hos_confirmpassword'],
									'a_mobile'=>$post['hos_con_number'],
									'a_status'=>1,
									'a_create_at'=>date('Y-m-d H:i:s')
									);
									$addhospitaladmin= $this->Admin_model->save_admin($admindetails);
									$onedata=array(
									'a_id'=>$addhospitaladmin,
									'hos_con_number'=>$post['hos_con_number'],
									'hos_email_id'=>$post['hos_email_id'],
									'hos_status'=>1,
									'hos_created'=>date('Y-m-d H:i:s'),
									'hos_updated_at'=>date('Y-m-d H:i:s')
									);
									//echo '<pre>';print_r($onedata);exit;
									$stepone= $this->Hospital_model->save_hospital_step_one($onedata);
									if(count($stepone)>0){
										$this->session->set_flashdata('success',"Hospital Credentials are successfully created");
										redirect('hospital/add/'.base64_encode(2).'/'.base64_encode($stepone));
									}else{
										$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
										redirect('hospital/add/'.base64_encode(1));
									}
								}
								
							}else{
								$this->session->set_flashdata('error',"password and  Confirmpassword are not matched");
								redirect('hospital/add/'.base64_encode(1));
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
	public function addposttwo()
	{
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					$post=$this->input->post();
					//echo '<pre>';print_r($post);exit;
					$twodata=array(
							'hos_representative'=>$post['hos_representative'],
							'hos_rep_contact'=>$post['hos_rep_contact'],
							'mob_country_code'=>$post['mob_country_code'],
							'hos_rep_mobile'=>$post['hos_rep_mobile'],
							'hos_rep_email'=>$post['hos_rep_email'],
							'hos_rep_nationali_id'=>$post['hos_rep_nationali_id'],
							'hos_rep_add1'=>$post['hos_rep_add1'],
							'hos_rep_add2'=>$post['hos_rep_add2'],
							'hos_rep_zipcode'=>$post['hos_rep_zipcode'],
							'hos_rep_city'=>$post['hos_rep_city'],
							'hos_rep_state'=>$post['hos_rep_state'],
							'hos_rep_country'=>$post['hos_rep_country'],
							'hos_updated_at'=>date('Y-m-d H:i:s')
							);
							$steptwo= $this->Hospital_model->update_hospital_details(base64_decode($post['hospital_id']),$twodata);
							if(count($steptwo)>0){
								$this->session->set_flashdata('success',"Hospital Representative details are successfully updated");
								redirect('hospital/add/'.base64_encode(3).'/'.$post['hospital_id']);
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('hospital/add/'.base64_encode(2).'/'.$post['hospital_id']);
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
	public function addpostthree()
	{
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					$post=$this->input->post();
						if(isset($_FILES['hos_bas_document']['name']) && $_FILES['hos_bas_document']['name']!=''){
							$hospital_details= $this->Hospital_model->get_hospital_details(base64_decode($post['hospital_id']));
							unlink("assets/hospital_basic_documents/".$hospital_details['hos_bas_document']);
							$temp = explode(".", $_FILES["hos_bas_document"]["name"]);
							$hos_bas_document = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['hos_bas_document']['tmp_name'], "assets/hospital_basic_documents/" . $hos_bas_document);
						}else{
							$hos_bas_document='';
						}
					$threedata=array(
							'hos_bas_name'=>$post['hos_bas_name'],
							'hos_bas_contact'=>$post['hos_bas_contact'],
							'hos_bas_email'=>$post['hos_bas_email'],
							'hos_bas_nationali_id'=>$post['hos_bas_nationali_id'],
							'hos_bas_add1'=>$post['hos_bas_add1'],
							'hos_bas_add2'=>$post['hos_bas_add2'],
							'hos_bas_zipcode'=>$post['hos_bas_zipcode'],
							'hos_bas_city'=>$post['hos_bas_city'],
							'hos_bas_state'=>$post['hos_bas_state'],
							'hos_bas_country'=>$post['hos_bas_country'],
							'hos_bas_document'=>$hos_bas_document,
							'hos_updated_at'=>date('Y-m-d H:i:s')
							);
							$stepthree= $this->Hospital_model->update_hospital_details(base64_decode($post['hospital_id']),$threedata);
							if(count($stepthree)>0){
								$this->session->set_flashdata('success',"Hospital Basic Details are successfully updated");
								redirect('hospital/add/'.base64_encode(4).'/'.$post['hospital_id']);
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('hospital/add/'.base64_encode(3).'/'.$post['hospital_id']);
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
	public function addpostfour()
	{
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					$post=$this->input->post();
					//echo '<pre>';print_r($_FILES);exit;
						if(isset($_FILES['bank_documents']['name']) && $_FILES['bank_documents']['name']!=''){
							$hospital_details= $this->Hospital_model->get_hospital_details(base64_decode($post['hospital_id']));
							unlink("assets/bank_documents/".$hospital_details['bank_document']);
							$temp = explode(".", $_FILES["bank_documents"]["name"]);
							$bank_document = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['bank_documents']['tmp_name'], "assets/bank_documents/" . $bank_document);
						}else{
							$bank_document='';
						}
					$fourdata=array(
							'bank_holder_name'=>$post['bank_holder_name'],
							'bank_acc_no'=>$post['bank_acc_no'],
							'bank_name'=>$post['bank_name'],
							'bank_ifsc'=>$post['bank_ifsc'],
							'bank_document'=>$bank_document,
							'hos_updated_at'=>date('Y-m-d H:i:s')
							);
							$stepfour= $this->Hospital_model->update_hospital_details(base64_decode($post['hospital_id']),$fourdata);
							if(count($stepfour)>0){
								$this->session->set_flashdata('success',"Hospital Financial Details are successfully updated");
								redirect('hospital/add/'.base64_encode(5).'/'.$post['hospital_id']);
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('hospital/add/'.base64_encode(4).'/'.$post['hospital_id']);
							}
				}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
				}
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}public function addpostfive()
	{
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					$post=$this->input->post();
					//echo '<pre>';print_r($_FILES);exit;
						$hospital_details= $this->Hospital_model->get_hospital_details(base64_decode($post['hospital_id']));

						if(isset($_FILES['kyc_file1']['name']) && $_FILES['kyc_file1']['name']!=''){
							unlink("assets/kyc_documents/".$hospital_details['kyc_file1']);
							$temp = explode(".", $_FILES["kyc_file1"]["name"]);
							$file1 = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['kyc_file1']['tmp_name'], "assets/kyc_documents/" . $file1);
						}else{
							$file1='';
						}
						if(isset($_FILES['kyc_file2']['name']) && $_FILES['kyc_file2']['name']!=''){
							unlink("assets/kyc_documents/".$hospital_details['kyc_file2']);
							$temp = explode(".", $_FILES["kyc_file2"]["name"]);
							$file2 =base64_decode($post['hospital_id']).round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['kyc_file2']['tmp_name'], "assets/kyc_documents/" . $file2);
						}else{
							$file2='';
						}
						if(isset($_FILES['kyc_file3']['name']) && $_FILES['kyc_file3']['name']!=''){
							unlink("assets/kyc_documents/".$hospital_details['kyc_file3']);
							$temp = explode(".", $_FILES["kyc_file3"]["name"]);
							$file3 =base64_decode($post['hospital_id']).'1'.round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['kyc_file3']['tmp_name'], "assets/kyc_documents/" . $file3);
						}else{
							$file3='';
						}
					$fivedata=array(
							'kyc_doc1'=>isset($post['kyc_doc1'])?$post['kyc_doc1']:'',
							'kyc_doc2'=>isset($post['kyc_doc2'])?$post['kyc_doc2']:'',
							'kyc_doc3'=>isset($post['kyc_doc3'])?$post['kyc_doc3']:'',
							'kyc_file1'=>$file1,
							'kyc_file2'=>$file2,
							'kyc_file3'=>$file3,
							'hos_updated_at'=>date('Y-m-d H:i:s')
							);
							$stepfive= $this->Hospital_model->update_hospital_details(base64_decode($post['hospital_id']),$fivedata);
							if(count($stepfive)>0){
								$this->session->set_flashdata('success',"Hospital Details are successfully Saved");
								redirect('hospital');
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('hospital/add/'.base64_encode(5).'/'.$post['hospital_id']);
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
	public function edit()
	{
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			if($admindetails['role_id']==1 || $admindetails['role_id']==2){
					$data['tab']=base64_decode($this->uri->segment(4));
					$data['hospital_id']=$this->uri->segment(3);
					$hospital_id=base64_decode($this->uri->segment(3));
					$data['hospital_details']= $this->Hospital_model->get_hospital_details($hospital_id);
					$admindetails=$this->session->userdata('userdetails');
					$data['userdetails']=$this->Admin_model->get_all_admin_details($admindetails['a_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('admin/edithospital',$data);
					$this->load->view('html/footer');
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function view()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$data['tab']=base64_decode($this->uri->segment(4));
					$data['hospital_id']=$this->uri->segment(3);
					$hospital_id=base64_decode($this->uri->segment(3));
					$data['hospital_details']= $this->Hospital_model->get_hospital_details($hospital_id);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('admin/hospitalview',$data);
					$this->load->view('html/footer');
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function editpost(){
		if($this->session->userdata('userdetails'))
		{		$admindetails=$this->session->userdata('userdetails');
				if($admindetails['role_id']==1 || $admindetails['role_id']==2){
					$post=$this->input->post();
						$hospital_details= $this->Hospital_model->get_hospital_details(base64_decode($post['hospital_id']));
						if($hospital_details['hos_email_id']!= $post['hos_email_id']){
							$emailcheck= $this->Hospital_model->check_email_exits($post['hos_email_id']);
								if(count($emailcheck)>0){
									$this->session->set_flashdata('error','Email id already exists.please use another Email id');
									redirect('hospital/edit/'.$post['hospital_id']);
								}
						}
						if(isset($_FILES['hos_bas_document']['name']) && $_FILES['hos_bas_document']['name']!=''){
							$hospital_details= $this->Hospital_model->get_hospital_details(base64_decode($post['hospital_id']));
							unlink("assets/hospital_basic_documents/".$hospital_details['hos_bas_document']);
							$temp = explode(".", $_FILES["hos_bas_document"]["name"]);
							$hos_bas_document = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['hos_bas_document']['tmp_name'], "assets/hospital_basic_documents/" . $hos_bas_document);
						}else{
							$hos_bas_document=$hospital_details['hos_bas_document'];
						}
						if(isset($_FILES['bank_documents']['name']) && $_FILES['bank_documents']['name']!=''){
							$hospital_details= $this->Hospital_model->get_hospital_details(base64_decode($post['hospital_id']));
							unlink("assets/bank_documents/".$hospital_details['bank_document']);
							$temp = explode(".", $_FILES["bank_documents"]["name"]);
							$bank_document = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['bank_documents']['tmp_name'], "assets/bank_documents/" . $bank_document);
						}else{
							$bank_document=$hospital_details['bank_document'];
						}
						if(isset($_FILES['kyc_file1']['name']) && $_FILES['kyc_file1']['name']!=''){
							unlink("assets/kyc_documents/".$hospital_details['kyc_file1']);
							$temp = explode(".", $_FILES["kyc_file1"]["name"]);
							$file1 = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['kyc_file1']['tmp_name'], "assets/kyc_documents/" . $file1);
						}else{
							$file1=$hospital_details['kyc_file1'];
						}
						if(isset($_FILES['kyc_file2']['name']) && $_FILES['kyc_file2']['name']!=''){
							unlink("assets/kyc_documents/".$hospital_details['kyc_file2']);
							$temp = explode(".", $_FILES["kyc_file2"]["name"]);
							$file2 =base64_decode($post['hospital_id']).round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['kyc_file2']['tmp_name'], "assets/kyc_documents/" . $file2);
						}else{
							$file2=$hospital_details['kyc_file2'];
						}
						if(isset($_FILES['kyc_file3']['name']) && $_FILES['kyc_file3']['name']!=''){
							unlink("assets/kyc_documents/".$hospital_details['kyc_file3']);
							$temp = explode(".", $_FILES["kyc_file3"]["name"]);
							$file3 =base64_decode($post['hospital_id']).'1'.round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['kyc_file3']['tmp_name'], "assets/kyc_documents/" . $file3);
						}else{
							$file3=$hospital_details['kyc_file3'];
						}
						$editdata=array(
							'hos_con_number'=>isset($post['hos_con_number'])?$post['hos_con_number']:$hospital_details['hos_con_number'],
							'hos_email_id'=>isset($post['hos_email_id'])?$post['hos_email_id']:$hospital_details['hos_email_id'],
							'hos_representative'=>isset($post['hos_representative'])?$post['hos_representative']:$hospital_details['hos_representative'],
							'hos_rep_contact'=>isset($post['hos_rep_contact'])?$post['hos_rep_contact']:$hospital_details['hos_rep_contact'],
							'mob_country_code'=>isset($post['mob_country_code'])?$post['mob_country_code']:$hospital_details['mob_country_code'],
							'hos_rep_mobile'=>isset($post['hos_rep_mobile'])?$post['hos_rep_mobile']:$hospital_details['hos_rep_mobile'],
							'hos_rep_email'=>isset($post['hos_rep_email'])?$post['hos_rep_email']:$hospital_details['hos_rep_email'],
							'hos_rep_nationali_id'=>isset($post['hos_rep_nationali_id'])?$post['hos_rep_nationali_id']:$hospital_details['hos_rep_nationali_id'],
							'hos_rep_add1'=>isset($post['hos_rep_add1'])?$post['hos_rep_add1']:$hospital_details['hos_rep_add1'],
							'hos_rep_add2'=>isset($post['hos_rep_add2'])?$post['hos_rep_add2']:$hospital_details['hos_rep_add2'],
							'hos_rep_zipcode'=>isset($post['hos_rep_zipcode'])?$post['hos_rep_zipcode']:$hospital_details['hos_rep_zipcode'],
							'hos_rep_city'=>isset($post['hos_rep_city'])?$post['hos_rep_city']:$hospital_details['hos_rep_city'],
							'hos_rep_state'=>isset($post['hos_rep_state'])?$post['hos_rep_state']:$hospital_details['hos_rep_state'],
							'hos_rep_country'=>isset($post['hos_rep_country'])?$post['hos_rep_country']:$hospital_details['hos_rep_country'],
							'hos_bas_name'=>isset($post['hos_bas_name'])?$post['hos_bas_name']:$hospital_details['hos_bas_name'],
							'hos_bas_contact'=>isset($post['hos_bas_contact'])?$post['hos_bas_contact']:$hospital_details['hos_bas_contact'],
							'hos_bas_email'=>isset($post['hos_bas_email'])?$post['hos_bas_email']:$hospital_details['hos_bas_email'],
							'hos_bas_nationali_id'=>isset($post['hos_bas_nationali_id'])?$post['hos_bas_nationali_id']:$hospital_details['hos_bas_nationali_id'],
							'hos_bas_add1'=>isset($post['hos_bas_add1'])?$post['hos_bas_add1']:$hospital_details['hos_bas_add1'],
							'hos_bas_add2'=>isset($post['hos_bas_add2'])?$post['hos_bas_add2']:$hospital_details['hos_bas_add2'],
							'hos_bas_zipcode'=>isset($post['hos_bas_zipcode'])?$post['hos_bas_zipcode']:$hospital_details['hos_bas_zipcode'],
							'hos_bas_city'=>isset($post['hos_bas_city'])?$post['hos_bas_city']:$hospital_details['hos_bas_city'],
							'hos_bas_state'=>isset($post['hos_bas_state'])?$post['hos_bas_state']:$hospital_details['hos_bas_state'],
							'hos_bas_country'=>isset($post['hos_bas_country'])?$post['hos_bas_country']:$hospital_details['hos_bas_country'],
							'hos_bas_document'=>$hos_bas_document,
							'bank_holder_name'=>isset($post['bank_holder_name'])?$post['bank_holder_name']:$hospital_details['bank_holder_name'],
							'bank_acc_no'=>isset($post['bank_acc_no'])?$post['bank_acc_no']:$hospital_details['bank_acc_no'],
							'bank_name'=>isset($post['bank_name'])?$post['bank_name']:$hospital_details['bank_name'],
							'bank_ifsc'=>isset($post['bank_ifsc'])?$post['bank_ifsc']:$hospital_details['bank_ifsc'],
							'bank_document'=>$bank_document,
							'kyc_doc1'=>isset($post['kyc_doc1'])?$post['kyc_doc1']:$hospital_details['kyc_doc1'],
							'kyc_doc2'=>isset($post['kyc_doc2'])?$post['kyc_doc2']:$hospital_details['kyc_doc2'],
							'kyc_doc3'=>isset($post['kyc_doc3'])?$post['kyc_doc3']:$hospital_details['kyc_doc3'],
							'kyc_file1'=>$file1,
							'kyc_file2'=>$file2,
							'kyc_file3'=>$file3,
							'hos_updated_at'=>date('Y-m-d H:i:s')
							);
							//echo '<pre>';print_r($editdata);exit;
							$editdetails= $this->Hospital_model->update_hospital_details(base64_decode($post['hospital_id']),$editdata);
							if(count($editdetails)>0){
									$this->session->set_flashdata('success',"Hospital Details are successfully Saved");
									if($post['tab_id']==2){
										$this->session->set_flashdata('success',"Hospital Credentials details are successfully Updated");
										redirect('hospital/edit/'.$post['hospital_id'].'/'.base64_encode($post['tab_id']));
									}elseif($post['tab_id']==3){
										$this->session->set_flashdata('success',"Hospital Representative details are successfully Updated");
										redirect('hospital/edit/'.$post['hospital_id'].'/'.base64_encode($post['tab_id']));
									}else if($post['tab_id']==4){
										$this->session->set_flashdata('success',"Hospital Basic Details are successfully Updated");
										redirect('hospital/edit/'.$post['hospital_id'].'/'.base64_encode($post['tab_id']));
									}else if($post['tab_id']==5){
										$this->session->set_flashdata('success'," Hospital Financial Details  are successfully Updated");
											redirect('hospital/edit/'.$post['hospital_id'].'/'.base64_encode($post['tab_id']));	
									}else if($post['tab_id']==6){
										$this->session->set_flashdata('success'," Hospital Other Details are successfully Updated");
											if($admindetails['role_id']==2){
												redirect('profile');
											}else {
												redirect('hospital');
											}
									}
							
								
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('hospital/add/'.base64_encode($post['backtab_id']).'/'.$post['hospital_id']);
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
	public function deletes()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$hospital_id=$this->uri->segment(3);
					if($hospital_id!=''){
						$deletdata=array(
							'hos_undo'=>1,
							'hos_updated_at'=>date('Y-m-d H:i:s')
							);
							$deletedata= $this->Hospital_model->update_hospital_details(base64_decode($hospital_id),$deletdata);
							if(count($deletedata)>0){
								$this->session->set_flashdata('success',"Hospital successfully removed.");
								redirect('hospital');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('hospital');
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('hospital');
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
	public function status()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$hospital_id=$this->uri->segment(3);
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($hospital_id!=''){
						$stusdetails=array(
							'hos_status'=>$statu,
							'hos_updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata= $this->Hospital_model->update_hospital_details(base64_decode($hospital_id),$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Hospital successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Hospital successfully Activate.");
								}
								redirect('hospital');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('hospital');
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('hospital');
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
	
	public function resource()
	{
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			if($admindetails['role_id']=2){
					$data['tab']=base64_decode($this->uri->segment(3));
					$admindetails=$this->session->userdata('userdetails');
					$hos_ids =$this->Hospital_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
					$data['resource_list']=$this->Hospital_model->get_resources_list($hos_ids['a_id'],$hos_ids['hos_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('hospital/resource',$data);
					$this->load->view('html/footer');
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function resourcepost()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
					$post=$this->input->post();
					//echo '<pre>';print_r($_FILES);exit;
					if(md5($post['resource_password'])==md5($post['resource_cinformpaswword'])){
								$emailcheck= $this->Hospital_model->check_email_exits($post['resource_email']);
								if(count($emailcheck)>0){
									$this->session->set_flashdata('error','Email id already exists.please use another Email id');
									redirect('hospital/resource');
								}else{
									if(isset($_FILES['resource_photo']['name']) && $_FILES['resource_photo']['name']!=''){
									$temp = explode(".", $_FILES["resource_photo"]["name"]);
									$photo =round(microtime(true)) . '.' . end($temp);
									move_uploaded_file($_FILES['resource_photo']['tmp_name'], "assets/adminprofilepic/" . $photo);
									}else{
									$photo='';
									}if(isset($_FILES['resource_document']['name']) && $_FILES['resource_document']['name']!=''){
									$temp = explode(".", $_FILES["resource_document"]["name"]);
									$resource_document ='1'.round(microtime(true)) . '.' . end($temp);
									move_uploaded_file($_FILES['resource_document']['tmp_name'], "assets/resourse_doc/" . $resource_document);
									}else{
									$resource_document='';
									}if(isset($_FILES['resource_other_document']['name']) && $_FILES['resource_other_document']['name']!=''){
									$temp = explode(".", $_FILES["resource_document"]["name"]);
									$resource_other_document =round(microtime(true)) . '.' . end($temp);
									move_uploaded_file($_FILES['resource_other_document']['tmp_name'], "assets/resourse_doc/" . $resource_other_document);
									}else{
									$resource_other_document='';
									}
									$admindetails=$this->session->userdata('userdetails');
									$hos_ids =$this->Hospital_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
									//echo '<pre>';print_r($statusdata);exit;
									$admindetails=array(
									'role_id'=>$post['designation'],
									'a_name'=>'Resource',
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
									'resource_name'=>$post['resource_name'],
									'resource_mobile'=>$post['resource_mobile'],
									'resource_add1'=>$post['resource_add1'],
									'resource_add2'=>$post['resource_add2'],
									'resource_city'=>$post['resource_city'],
									'resource_state'=>$post['resource_state'],
									'resource_zipcode'=>$post['resource_zipcode'],
									'resource_other_details'=>$post['resource_other_details'],
									'resource_contatnumber'=>$post['resource_contatnumber'],
									'resource_email'=>$post['resource_email'],
									'resource_photo'=>$photo,
									'resource_document'=>$resource_document,
									'resource_bank_holdername'=>$post['resource_bank_holdername'],
									'resource_bank_accno'=>$post['resource_bank_accno'],
									'resource_ifsc_code'=>$post['resource_ifsc_code'],
									'resource_other_document'=>$resource_other_document,
									'r_status'=>1,
									'r_create_by'=>$hos_ids['a_id'],
									'r_created_at'=>date('Y-m-d H:i:s')
									);
									//echo '<pre>';print_r($onedata);exit;
									$saveresource =$this->Hospital_model->save_resource($resourcedata);
									if(count($saveresource)>0){
										$this->session->set_flashdata('success',"Resource are successfully created");
										redirect('hospital/resource/'.base64_encode(1));
									}else{
										$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
										redirect('hospital/resource');
									}
								}
								
							}else{
								$this->session->set_flashdata('error',"password and  Confirmpassword are not matched");
								redirect('hospital/resource');
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
							$statusdata= $this->Hospital_model->update_resourse_details(base64_decode($resourse_id),$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Resource successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Resource successfully Activate.");
								}
								redirect('hospital/resource/'.base64_encode(1));
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('hospital/resource/'.base64_encode(1));
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('hospital/resource/'.base64_encode(1));
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
						$deletdata=array(
							'r_status'=>2,
							'r_updated_at'=>date('Y-m-d H:i:s')
							);
							$deletedata= $this->Hospital_model->update_resourse_details(base64_decode($resourse_id),$deletdata);
							if(count($deletedata)>0){
								$this->session->set_flashdata('success',"Hospital successfully removed.");
								redirect('hospital/resource/'.base64_encode(1));
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('hospital/resource/'.base64_encode(1));
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('hospital/resource/'.base64_encode(1));
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
	
	public function treatment()
	{
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			if($admindetails['role_id']=2){
					$data['tab']=base64_decode($this->uri->segment(3));
					$admindetails=$this->session->userdata('userdetails');
					$hos_ids =$this->Hospital_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
					$data['treatment_list']=$this->Hospital_model->get_treatment_list($hos_ids['a_id'],$hos_ids['hos_id']);
					$data['doctors_list']=$this->Hospital_model->get_doctors_list($hos_ids['a_id'],$hos_ids['hos_id']);
					$data['hospital_treatment_list']=$this->Hospital_model->get_all_doctor_treatment_list($hos_ids['a_id'],$hos_ids['hos_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('hospital/treament',$data);
					$this->load->view('html/footer');
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function resourceedit()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
				$resourseId = base64_decode($this->uri->segment(3));
				$data['resouse_detail']= $this->Hospital_model->get_resourse_details($resourseId);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('hospital/resouceedit',$data);
				$this->load->view('html/footer');
				
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function resourceditepost()
	{
		if($this->session->userdata('userdetails'))
		{
					$post=$this->input->post();
					//echo '<pre>';print_r($post);exit;
					$resouse_detail= $this->Hospital_model->get_resourse_details($post['resource_id']);
					
					$resouse_email= $this->Hospital_model->get_resourse_details($post['resource_id']);
					if($resouse_email['resource_email'] !=$post['resource_email']){
								$emailcheck= $this->Hospital_model->check_email_exits($post['resource_email']);
								if(count($emailcheck)>0){
									$this->session->set_flashdata('error','Email id already exists.please use another Email id');
									redirect('hospital/resourceedit/'.base64_encode($post['resource_id']));
								}else{
															if(isset($_FILES['resource_photo']['name']) && $_FILES['resource_photo']['name']!=''){
												unlink("assets/adminprofilepic/".$resouse_detail['resource_photo']);
												$temp = explode(".", $_FILES["resource_photo"]["name"]);
												$photo =round(microtime(true)) . '.' . end($temp);
												move_uploaded_file($_FILES['resource_photo']['tmp_name'], "assets/adminprofilepic/" . $photo);
											}else{
												$photo=$resouse_detail['resource_photo'];
											}
											if(isset($_FILES['resource_document']['name']) && $_FILES['resource_document']['name']!=''){
												unlink("assets/resourse_doc/".$resouse_detail['resource_document']);
												$temp = explode(".", $_FILES["resource_document"]["name"]);
												$resource_document ='1'.round(microtime(true)) . '.' . end($temp);
												move_uploaded_file($_FILES['resource_document']['tmp_name'], "assets/resourse_doc/" . $resource_document);
											}else{
												$resource_document=$resouse_detail['resource_document'];
											}
											if(isset($_FILES['resource_other_document']['name']) && $_FILES['resource_other_document']['name']!=''){
												unlink("assets/resourse_doc/".$resouse_detail['resource_other_document']);
												$temp = explode(".", $_FILES["resource_document"]["name"]);
												$resource_other_document =round(microtime(true)) . '.' . end($temp);
												move_uploaded_file($_FILES['resource_other_document']['tmp_name'], "assets/resourse_doc/" . $resource_other_document);
											}else{
												$resource_other_document=$resouse_detail['resource_other_document'];
											}
									$admindetails=$this->session->userdata('userdetails');
									$hos_ids =$this->Hospital_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
									//echo '<pre>';print_r($statusdata);exit;
									$admin_details=array(
									'role_id'=>$post['designation'],
									'a_email_id'=>$post['resource_email'],
									'a_mobile'=>$post['resource_mobile'],
									'a_updated_at'=>date('Y-m-d H:i:s')
									);
									$addresourcedmin = $this->Admin_model->update_adminhospital_details($post['admin_id'],$admin_details);
									$resourcedata=array(
									'resource_name'=>$post['resource_name'],
									'resource_mobile'=>$post['resource_mobile'],
									'resource_add1'=>$post['resource_add1'],
									'resource_add2'=>$post['resource_add2'],
									'resource_city'=>$post['resource_city'],
									'resource_state'=>$post['resource_state'],
									'resource_zipcode'=>$post['resource_zipcode'],
									'resource_other_details'=>$post['resource_other_details'],
									'resource_contatnumber'=>$post['resource_contatnumber'],
									'resource_email'=>$post['resource_email'],
									'resource_photo'=>$photo,
									'resource_document'=>$resource_document,
									'resource_bank_holdername'=>$post['resource_bank_holdername'],
									'resource_bank_accno'=>$post['resource_bank_accno'],
									'resource_ifsc_code'=>$post['resource_ifsc_code'],
									'resource_other_document'=>$resource_other_document,
									'r_created_at'=>date('Y-m-d H:i:s')
									);
									//echo '<pre>';print_r($onedata);exit;
									$saveresource =$this->Hospital_model->update_resourse_details($post['resource_id'],$resourcedata);
									if(count($saveresource)>0){
										$this->session->set_flashdata('success',"Resource details are successfully Updated");
										if($admindetails['role_id']==2){
										redirect('hospital/resourceview/'.base64_encode($post['resource_id']));
										}else{
											redirect('profile');
										}
									}else{
										$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
										redirect('hospital/resourceedit/'.base64_encode($post['resource_id']));
									}
								}
								
					}else{
						if(isset($_FILES['resource_photo']['name']) && $_FILES['resource_photo']['name']!=''){
								if($resouse_detail['resource_photo']!=''){
									unlink("assets/adminprofilepic/".$resouse_detail['resource_photo']);
								}
								$temp = explode(".", $_FILES["resource_photo"]["name"]);
								$photo =round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['resource_photo']['tmp_name'], "assets/adminprofilepic/" . $photo);
							}else{
								$photo=$resouse_detail['resource_photo'];
							}
							if(isset($_FILES['resource_document']['name']) && $_FILES['resource_document']['name']!=''){
								if($resouse_detail['resource_document']!=''){
								unlink("assets/resourse_doc/".$resouse_detail['resource_document']);
								}
								$temp = explode(".", $_FILES["resource_document"]["name"]);
								$resource_doc ='1'.round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['resource_document']['tmp_name'], "assets/resourse_doc/" . $resource_doc);
							}else{
								$resource_doc=$resouse_detail['resource_document'];
							}
							if(isset($_FILES['resource_other_document']['name']) && $_FILES['resource_other_document']['name']!=''){
								if($resouse_detail['resource_other_document']!=''){
								unlink("assets/resourse_doc/".$resouse_detail['resource_other_document']);
								}
								$temp = explode(".", $_FILES["resource_other_document"]["name"]);
								$resource_other_docu =round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['resource_other_document']['tmp_name'], "assets/resourse_doc/" . $resource_other_docu);
							}else{
								$resource_other_docu=$resouse_detail['resource_other_document'];
							}
						$admin_details=array(
									'role_id'=>$post['designation'],
									'a_email_id'=>$post['resource_email'],
									'a_mobile'=>$post['resource_mobile'],
									'a_updated_at'=>date('Y-m-d H:i:s')
									);
									$addresourcedmin = $this->Hospital_model->update_adminhospital_details($post['admin_id'],$admin_details);
									$resourcedata=array(
									'resource_name'=>$post['resource_name'],
									'resource_mobile'=>$post['resource_mobile'],
									'resource_add1'=>$post['resource_add1'],
									'resource_add2'=>$post['resource_add2'],
									'resource_city'=>$post['resource_city'],
									'resource_state'=>$post['resource_state'],
									'resource_zipcode'=>$post['resource_zipcode'],
									'resource_other_details'=>$post['resource_other_details'],
									'resource_contatnumber'=>$post['resource_contatnumber'],
									'resource_email'=>$post['resource_email'],
									'resource_photo'=>$photo,
									'resource_document'=>$resource_doc,
									'resource_bank_holdername'=>$post['resource_bank_holdername'],
									'resource_bank_accno'=>$post['resource_bank_accno'],
									'resource_ifsc_code'=>$post['resource_ifsc_code'],
									'resource_other_document'=>$resource_other_docu,
									'r_created_at'=>date('Y-m-d H:i:s')
									);
									//echo '<pre>';print_r($resourcedata);exit;
									$saveresource =$this->Hospital_model->update_resourse_details($post['resource_id'],$resourcedata);
									//echo $this->db->last_query();exit;
									if(count($saveresource)>0){
										$this->session->set_flashdata('success',"Resource details are successfully Updated");
										if($admindetails['role_id']==2){
										redirect('hospital/resourceview/'.base64_encode($post['resource_id']));
										}else{
											redirect('profile');
										}
									}else{
										$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
										redirect('hospital/resourceedit/'.base64_encode($post['resource_id']));
									}
					}
								
						
					
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function resourceview()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
				$resourseId = base64_decode($this->uri->segment(3));
				$data['resouse_detail']= $this->Hospital_model->get_resourse_details($resourseId);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('hospital/resouceview',$data);
				$this->load->view('html/footer');
				
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function addtreatment()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
				$data['tab']=base64_decode($this->uri->segment(3));
				$admindetails=$this->session->userdata('userdetails');
				$hos_ids =$this->Hospital_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
				$data['treatment_list'] =$this->Hospital_model->get_treatment_list($hos_ids['a_id'],$hos_ids['hos_id']);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('hospital/addtreament',$data);
				$this->load->view('html/footer');
				
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function treatmentpost()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
				$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$hos_ids =$this->Hospital_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
				//echo '<pre>';print_r($post);exit;
				$treatment_details=array(
					'hos_id'=>$hos_ids['hos_id'],
					't_name'=>$post['treatment_name'],
					't_status'=>1,
					't_create_at'=>date('Y-m-d H:i:s'),
					't_create_by'=>$hos_ids['a_id']
					);
					//echo '<pre>';print_r($treatment_details);exit;
				$treatment = $this->Hospital_model->save_treatment($treatment_details);
				if(count($treatment)>0){
					$this->session->set_flashdata('success',"Treatment are successfully added");
					redirect('hospital/addtreatment/'.base64_encode(1));
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('hospital/addtreatment');
				}
									
				
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}public function treatmenteditpost()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
				$post=$this->input->post();
				$edittreatment_details=array(
					't_name'=>$post['treatment_name'],
					't_updated_at'=>date('Y-m-d H:i:s'),
					);
					//echo '<pre>';print_r($treatment_details);exit;
				$editdata= $this->Hospital_model->update_treatment_details($post['treamentid'],$edittreatment_details);
				if(count($editdata)>0){
					$this->session->set_flashdata('success',"Treatment are successfully Updated");
					redirect('hospital/addtreatment/'.base64_encode(1));
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('hospital/addtreatment');
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
	public function treatmentdelete()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$treatment_id=$this->uri->segment(3);
					if($treatment_id!=''){
						$deletdata=array(
							't_status'=>2,
							't_updated_at'=>date('Y-m-d H:i:s')
							);
							$deletedata= $this->Hospital_model->update_treatment_details(base64_decode($treatment_id),$deletdata);
							if(count($deletedata)>0){
								$this->session->set_flashdata('success',"Treatment successfully removed.");
								redirect('hospital/addtreatment/'.base64_encode(1));
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('hospital/addtreatment/'.base64_encode(1));
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('hospital/addtreatment/'.base64_encode(1));
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
	public function treatmentstatus()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
					$treament_id=$this->uri->segment(3);
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($treament_id!=''){
						$stusdetails=array(
							't_status'=>$statu,
							't_updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata= $this->Hospital_model->update_treatment_details(base64_decode($treament_id),$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Treatment successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Treatment successfully Activate.");
								}
									redirect('hospital/addtreatment/'.base64_encode(1));;
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('hospital/addtreatment/'.base64_encode(1));
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('hospital/addtreatment/'.base64_encode(1));
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
	public function treatmenaddtpost()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
				$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$hos_ids =$this->Hospital_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
				//echo '<pre>';print_r($post);
				$treamts_list=array_combine($post['treatment_name'],$post['assign_doctor']);
				if(count($treamts_list)>0){
				
						//echo '<pre>';print_r($treamts_list);
						foreach($treamts_list as $key=>$list){
							//echo '<pre>';print_r($key);exit;
							$addtreatment_details=array(
							'hos_id'=>$hos_ids['hos_id'],
							't_d_doc_id'=>$list,
							't_d_name'=>$key,
							't_d_status'=>1,
							't_d_create_at'=>date('Y-m-d H:i:s'),
							't_d_updated_at'=>date('Y-m-d H:i:s'),
							't_d_create_by'=>$hos_ids['a_id']
							);
							//echo '<pre>';print_r($addtreatment_details);
						$treatment = $this->Hospital_model->save_addtreatment($addtreatment_details);
						}
						if(count($treatment)>0){
							$this->session->set_flashdata('success',"Treatment are successfully added");
							redirect('hospital/treatment/'.base64_encode(1));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('hospital/treatment');
						}
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('hospital/treatment');
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
	public function addtreatmentstatus()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
					$treament_id=$this->uri->segment(3);
					$status =base64_decode($this->uri->segment(4));
					if($status ==1){
						$statu=0;
					}else{
						$statu=1;
					}
					echo $statu;
					if($treament_id!=''){
						$stusdetails=array(
							't_d_status'=>$statu,
							't_d_updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata= $this->Hospital_model->update_addtreatment_details(base64_decode($treament_id),$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Treatment successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Treatment successfully Activate.");
								}
									redirect('hospital/treatment/'.base64_encode(1));
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('hospital/treatment/'.base64_encode(1));
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('hospital/treatment/'.base64_encode(1));
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
	public function addtreatmentdeletes()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$treatment_id=$this->uri->segment(3);
					if($treatment_id!=''){
						$deletdata=array(
							't_d_status'=>2,
							't_d_updated_at'=>date('Y-m-d H:i:s')
							);
							$deletedata= $this->Hospital_model->update_addtreatment_details(base64_decode($treatment_id),$deletdata);
							if(count($deletedata)>0){
								$this->session->set_flashdata('success',"Treatment successfully removed.");
								redirect('hospital/treatment/'.base64_encode(1));
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('hospital/treatment/'.base64_encode(1));
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('hospital/addtreatment/'.base64_encode(1));
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
	public function labdetails()
	{
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			if($admindetails['role_id']=2){
					$data['tab']=base64_decode($this->uri->segment(3));
					$admindetails=$this->session->userdata('userdetails');
					$hos_ids =$this->Hospital_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
					$data['labassistents_list']=$this->Hospital_model->get_labassistents_list($hos_ids['a_id'],$hos_ids['hos_id']);
					$data['labdetails_list']=$this->Hospital_model->get_all_lab_details_list($hos_ids['a_id'],$hos_ids['hos_id']);
					//echo '<pre>';print_r($data);exit;
					$this->load->view('hospital/labdetails',$data);
					$this->load->view('html/footer');
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function tabdetailspost()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
				$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$hos_ids =$this->Hospital_model->get_hospital_id($admindetails['a_id'],$admindetails['a_email_id']);
				$labdetails_list=array_combine($post['lab_code'],$post['lab_name']);
				if(count($labdetails_list)>0){
						//echo '<pre>';print_r($treamts_list);
						$c=0;foreach($labdetails_list as $key=>$list){
							$li[$c]['code']=$key;
							$li[$c]['name']=$list;
							$li[$c]['lab_assistent']=$post['lab_assistent'][$c];
							
						$c++;}
						
						foreach($li as $l){
							$addlab_details=array(
							'hos_id'=>$hos_ids['hos_id'],
							'l_code'=>$l['code'],
							'l_name'=>$l['name'],
							'l_assistent_id'=>$l['lab_assistent'],
							'l_status'=>1,
							'l_create_at'=>date('Y-m-d H:i:s'),
							'l_updated_at'=>date('Y-m-d H:i:s'),
							'l_create_by'=>$hos_ids['a_id']
							);
							//echo '<pre>';print_r($addtreatment_details);
							$labdetails = $this->Hospital_model->save_addlabdetails($addlab_details);
						}
						
						if(count($labdetails)>0){
							$this->session->set_flashdata('success',"Lab Details are successfully added");
							redirect('hospital/labdetails/'.base64_encode(1));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('hospital/labdetails');
						}
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('hospital/labdetails');
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
	public function labdetailsstatus()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=2){
					$lab_id=$this->uri->segment(3);
					$status =base64_decode($this->uri->segment(4));
					if($status ==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($lab_id!=''){
						$stusdetails=array(
							'l_status'=>$statu,
							'l_updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata= $this->Hospital_model->update_lab_details(base64_decode($lab_id),$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Lab Assistent successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Lab Assistent successfully Activate.");
								}
									redirect('hospital/labdetails/'.base64_encode(1));
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('hospital/labdetails/'.base64_encode(1));
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('hospital/labdetails/'.base64_encode(1));
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
	public function labdetailsdeletes()
	{
		if($this->session->userdata('userdetails'))
		{
			if($admindetails['role_id']=1){
					$lab_id=$this->uri->segment(3);
					if($lab_id!=''){
						$deletdata=array(
							'l_status'=>2,
							'l_updated_at'=>date('Y-m-d H:i:s')
							);
							$deletedata= $this->Hospital_model->update_lab_details(base64_decode($lab_id),$deletdata);
							if(count($deletedata)>0){
								$this->session->set_flashdata('success',"Lab Assistent successfully removed.");
								redirect('hospital/labdetails/'.base64_encode(1));
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('hospital/labdetails/'.base64_encode(1));
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('hospital/labdetails/'.base64_encode(1));
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
	
	
	
	
}
