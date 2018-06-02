<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		$this->load->model('Users_model');
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
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['prescriptions']= $this->Users_model->get_all_patients_lists($userdetails['hos_id']);
					$this->load->view('prescription/prescription_list',$data);
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
	public function completedprescription()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$data['prescriptions']= $this->Users_model->get_all_patients_completed_lists($userdetails['hos_id']);
					$this->load->view('prescription/completed_prescription_list',$data);
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
	public function prescriptionview()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$patient_id=base64_decode($this->uri->segment(3));
					$billing_id=base64_decode($this->uri->segment(4));
					$data['prescriptions']= $this->Users_model->get_prescription_details($patient_id,$billing_id);
					$this->load->view('prescription/prescription_view',$data);
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
	public function sheet_prescription()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$post=$this->input->post();
					$pic=$_FILES['sheet_prescription']['name'];
					$picname = str_replace(" ", "", $pic);
					$imagename=microtime().basename($picname);
					$imgname = str_replace(" ", "", $imagename);
					if(move_uploaded_file($_FILES['sheet_prescription']['tmp_name'], "assets/sheet_prescriptions/" . $imgname)){
						if($post['sheet_prescription_name']!=''){
							unlink("assets/sheet_prescriptions/".$post['sheet_prescription_name']);

						}
					$filedata=array(
						'sheet_prescription_file'=>$imgname,
						);
					$addfile = $this->Users_model->update_billing_prescription_file($post['p_id'],$post['b_id'],$filedata);
						if(count($addfile)>0){
							$this->session->set_flashdata('success',"Patient prescription file successfully updated.");
							redirect('users/prescriptionview/'.base64_encode($post['p_id']).'/'.base64_encode($post['b_id']));
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('users/prescriptionview/'.base64_encode($post['p_id']).'/'.base64_encode($post['b_id']));

						}
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
	public function viewprescription()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$patient_id=base64_decode($this->uri->segment(3));
					$billing_id=base64_decode($this->uri->segment(4));
					$data['prescriptions']= $this->Users_model->get_prescription_details($patient_id,$billing_id);
					$this->load->view('prescription/viewprescription',$data);
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
	public function prescriptionschanges(){
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$medicine_details=$this->Users_model->get_meidicine_details($post['medicine_id']);
					
					if(isset($post['medicine_qty']) && $post['medicine_qty']!=''){
						$qty=$post['medicine_qty'];
					}else{
						$qty=$medicine_details['qty'];
					}
					if(isset($post['reason']) && $post['reason']!=''){
						$reason=$post['reason'];
					}else{
						$reason=$medicine_details['edit_reason'];
					}if(isset($post['amount']) && $post['amount']!=''){
						$amount=$post['amount'];
					}else{
						$amount=$medicine_details['amount'];
					}
					$details=array(
					'qty'=>	$qty,
					'amount'=>$amount,
					'org_amount'=>(($amount)*($qty)),
					'edit_reason'=>$reason,
					'amount'=>$amount,
					'edited'=>1,
					'edited_by'=>$admindetails['a_id']
					);
					//echo '<pre>';print_r($details);exit;
					$edited=$this->Users_model->prescriptionschanges($post['medicine_id'],$details);
					if(count($edited) > 0)
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
	public function billing_payment_mode(){
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$post=$this->input->post();
					$admindetails=$this->session->userdata('userdetails');
					$details=array(
					'medicine_payment_mode'=>$post['mode'],
					'payment_updated_by'=>$admindetails['a_id'],
					'payment_createed_by'=>date('Y-m-d H:i;s')
					);
					//echo '<pre>';print_r($post);exit;
					$updated=$this->Users_model->updated_medicne_billing($post['billing_id'],$details);
					if(count($updated) > 0)
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
	public function billprescription()
	{	
		if($this->session->userdata('userdetails'))
		{
				if($admindetails['role_id']=4){
					$admindetails=$this->session->userdata('userdetails');
					$userdetails=$this->Resources_model->get_all_resouce_details($admindetails['a_id']);
					$patient_id=base64_decode($this->uri->segment(3));
					$billing_id=base64_decode($this->uri->segment(4));
					$data['details']= $this->Users_model->get_prescription_details($patient_id,$billing_id);
					$path = rtrim(FCPATH,"/");
					$file_name = $patient_id.'_'.$billing_id.'.pdf';                
					$data['page_title'] = $data['details']['information']['name'].'invoice'; // pass data to the view
					$pdfFilePath = $path."/assets/patient_medical_bill/".$file_name;
					ini_set('memory_limit','320M'); // boost the memory limit if it's low <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
					$html = $this->load->view('prescription/billprescription', $data, true); // render the view into HTML
					//echo '<pre>';print_r($html);exit;
					$this->load->library('pdf');
					$pdf = $this->pdf->load();
					$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date('M-d-Y')); // Add a footer for good measure <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
					$pdf->SetDisplayMode('fullpage');
					$pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list
					$pdf->WriteHTML($html); // write the HTML into the PDF
					$pdf->Output($pdfFilePath, 'F');
					redirect("assets/patient_medical_bill/".$file_name);
					
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
