<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Cardnumber extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
		$this->load->library('email');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('security');
		$this->load->model('Cardnumber_model');
    }

 
	public function seller_login_post(){
		$email=$this->post('email');
		$password=$this->post('password');
		$token=$this->post('token');
		if($email==''){
			$message = array('status'=>0,'message'=>'Email Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($password==''){
			$message = array('status'=>0,'message'=>'Password is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($token==''){
			$message = array('status'=>0,'message'=>'token id required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if(strlen($password)<6){
			$message = array('status'=>0,'message'=>'Passwords must be at least 6 characters long');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$select=$this->Cardnumber_model->check_login_details($email,$password);
		
		
		//echo '<pre>';print_r($select);exit;
		if(count($select)>0){
			$token_data=array('token'=>$token);
			$update_token=$this->Cardnumber_model->update_user_pushnotification_token($select['s_id'],$token_data);
			$message = array(
			'status'=>1,
			'details'=>$select,
			'kyc_path'=>base_url('assets/cardnumbers_sellers/'),
			'pic_path'=>base_url('assets/adminprofilepic/'),
			'message'=>'User Successfully login'
			);
			$this->response($message, REST_Controller::HTTP_OK);
		}else{
			$message = array('status'=>0,'message'=>'Invalid login details.Please try again');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	}
	public function changepassword_post(){
		$s_id=$this->post('s_id');
		$oldpassword=$this->post('oldpassword');
		$password=$this->post('password');
		$confirmpassword=$this->post('confirmpassword');
		if($s_id==''){
			$message = array('status'=>0,'message'=>'User Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($password==''){
			$message = array('status'=>0,'message'=>'Password is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if(strlen($password)<6){
			$message = array('status'=>0,'message'=>'Passwords must be at least 6 characters long');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($confirmpassword==''){
			$message = array('status'=>0,'message'=>'Confirm password is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if(strlen($confirmpassword)<6){
			$message = array('status'=>0,'message'=>'Confirm password  must be at least 6 characters long');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if(md5($password)==md5($confirmpassword)){
			
			$check_user=$this->Cardnumber_model->check_user_details($s_id);
			if(count($check_user)>0){
				
				if(md5($oldpassword)==$check_user['password']){
						$update=$this->Cardnumber_model->update_user_password($s_id,$confirmpassword);
						if(count($update)>0){
								$message = array('status'=>1,'s_id'=>$s_id,'message'=>'Password Successfully Updated');
								$this->response($message, REST_Controller::HTTP_OK);
						}else{
								$message = array('status'=>0,'s_id'=>$s_id,'message'=>'Technical problem will occured. Please try again.');
								$this->response($message, REST_Controller::HTTP_OK);
						}
				}else{
					$message = array('status'=>0,'s_id'=>$s_id,'message'=>'Old password does not match. Please try again');
					$this->response($message, REST_Controller::HTTP_OK);
				}
				
			}else{
				$message = array('status'=>0,'s_id'=>$s_id,'message'=>'Invalid User id.Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
			
		}else{
			$message = array('status'=>0,'s_id'=>$s_id,'message'=>'Your password and confirmation password do not match');
				$this->response($message, REST_Controller::HTTP_OK);
		}
		
	}
	
	public function forgotpassword_post(){
		$email=$this->post('email');
		
		if($email==''){
			$message = array('status'=>0,'message'=>'Email Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
			$check_email=$this->Cardnumber_model->check_email_already_already_exits($email);
				if(count($check_email)>0){
					$message = array('status'=>1,'s_id'=>$check_email['s_id'],'message'=>'Your login password is '.$check_email['org_password']);
					$this->response($message, REST_Controller::HTTP_OK);
			
				}else{
				$message = array('status'=>0,'message'=>'Entered Email id not registered.Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
				}
	}
	public  function updateprofile_post(){
		$s_id=$this->post('s_id');
		$name=$this->post('name');
		$email=$this->post('email');
		$mobile=$this->post('mobile');
		$address=$this->post('address');
		$account_number=$this->post('account_number');
		$bank_name=$this->post('bank_name');
		$ifsc_code=$this->post('ifsc_code');
		$bank_account_holder=$this->post('bank_account_holder');
		if($s_id==''){
			$message = array('status'=>0,'message'=>'User Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if($name==''){
			$message = array('status'=>0,'message'=>'Name is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($email==''){
			$message = array('status'=>0,'message'=>'Email Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($mobile==''){
			$message = array('status'=>0,'message'=>'Mobile Number is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($address==''){
			$message = array('status'=>0,'message'=>'Address is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($account_number==''){
			$message = array('status'=>0,'message'=>' Bank Account Number is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($bank_name==''){
			$message = array('status'=>0,'message'=>' Bank Name is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($ifsc_code==''){
			$message = array('status'=>0,'message'=>' Ifsc Code is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($bank_account_holder==''){
			$message = array('status'=>0,'message'=>'Bank Account Holder Name is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$details=$this->Cardnumber_model->get_card_seller_details($s_id);
		if($details['kyc']!=''){
				$message = array('status'=>0,'message'=>'kyc is required');
				$this->response($message, REST_Controller::HTTP_OK);
		}
		if(isset($_FILES['kyc']['name']) && $_FILES['kyc']['name']!=''){
		$pic=$_FILES['kyc']['name'];
		$picname = str_replace(" ", "", $pic);
		$imagename=microtime().basename($picname);
		$imgname = str_replace(" ", "", $imagename);
		move_uploaded_file($_FILES['kyc']['tmp_name'], 'assets/cardnumbers_sellers/'.$imgname);
		}else{
			$imgname=$details['kyc'];
		}
			
		$update_data=array(
		'name'=>isset($name)?$name:'',
		'email_id'=>isset($email)?$email:'',
		'mobile'=>isset($mobile)?$mobile:'',
		'address'=>isset($address)?$address:'',
		'bank_account'=>isset($account_number)?$account_number:'',
		'bank_name'=>isset($bank_name)?$bank_name:'',
		'ifsccode'=>isset($ifsc_code)?$ifsc_code:'',
		'bank_holder_name'=>isset($bank_account_holder)?$bank_account_holder:'',
		'kyc'=>isset($imgname)?$imgname:'',
		'updated_at'=>date('Y-m-d H:i:s'),
		);
		$update=$this->Cardnumber_model->update_seller_profile_details($s_id,$update_data);
		if(count($update)>0){
					$message = array('status'=>1,'s_id'=>$s_id,'kycpath'=>base_url('assets/cardnumbers_sellers/'),'message'=>'Profile Details successfully updated');
					$this->response($message, REST_Controller::HTTP_OK);
			
		}else{
				$message = array('status'=>0,'s_id'=>$s_id,'message'=>'Technical problem will occured. Please try again.');
				$this->response($message, REST_Controller::HTTP_OK);
		}
	}
	public  function uploadpic_post(){
		$s_id=$this->post('s_id');
		if($s_id==''){
			$message = array('status'=>0,'message'=>'User is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if(count($_FILES)==0){
			$message = array('status'=>0,'message'=>'upload image is required');
			$this->response($message, REST_Controller::HTTP_OK);	
		}
		$pic=$_FILES['profile_pic']['name'];
		$picname = str_replace(" ", "", $pic);
		$imagename=microtime().basename($picname);
		$imgname = str_replace(" ", "", $imagename);
		if(move_uploaded_file($_FILES['profile_pic']['tmp_name'], 'assets/adminprofilepic/'.$imgname)){
			$addimg=array(
			'profile_pic'=>$imgname,
			);
			$save_img=$this->Cardnumber_model->update_seller_profile_details($s_id,$addimg);
			if(count($save_img)>0){
					
					$message = array('status'=>1,'s_id'=>$s_id,'imgpath'=>base_url('assets/adminprofilepic/'),'message'=>'Image successfully sent');
					$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
			
		}else{
			
			$message = array('status'=>0,'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
		}
	}
	public  function cardnumbers_list_post(){
		$s_id=$this->post('s_id');
		if($s_id==''){
			$message = array('status'=>0,'message'=>'User Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$cards_list=$this->Cardnumber_model->get_seller_card_list($s_id);
		if(count($cards_list)>0){
				$message = array('status'=>1,'list'=>$cards_list,'s_id'=>$s_id,'message'=>'Card number list are found');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'s_id'=>$s_id,'message'=>'Card number list are not found');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	}
	

}