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
									$onedata=array(
									'hos_con_number'=>$post['hos_con_number'],
									'hos_email_id'=>$post['hos_email_id'],
									'hos_updated_at'=>date('Y-m-d H:i:s')
									);
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
									$onedata=array(
									'hos_con_number'=>$post['hos_con_number'],
									'hos_email_id'=>$post['hos_email_id'],
									'hos_password'=>md5($post['hos_confirmpassword']),
									'hos_org_password'=>$post['hos_confirmpassword'],
									'hos_status'=>1,
									'hos_created'=>date('Y-m-d H:i:s'),
									'hos_updated_at'=>date('Y-m-d H:i:s')
									);
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
			if($admindetails['role_id']=1){
					$data['tab']=base64_decode($this->uri->segment(4));
					$data['hospital_id']=$this->uri->segment(3);
					$hospital_id=base64_decode($this->uri->segment(3));
					$data['hospital_details']= $this->Hospital_model->get_hospital_details($hospital_id);
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
	public function editpost(){
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=1){
					
					$post=$this->input->post();
					echo '<pre>';print_r($post);
						$hospital_details= $this->Hospital_model->get_hospital_details(base64_decode($post['hospital_id']));
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
							echo '<pre>';print_r($editdata);exit;
							$editdetails= $this->Hospital_model->update_hospital_details(base64_decode($post['hospital_id']),$editdata);
							if(count($editdetails)>0){
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
