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
class Mobile extends REST_Controller {

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
		$this->load->model('Mobile_model');
    }

  public function appointment_userregister_post(){
		
		
		$name=$this->post('name');
		$email=$this->post('email');
		$mobile=$this->post('mobile');
		$password=$this->post('password');
		$confirmpassword=$this->post('confirmpassword');
		if($name==''){
			$message = array('status'=>0,'message'=>'Name is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($email==''){
			$message = array('status'=>0,'message'=>'Email Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($mobile==''){
			$message = array('status'=>0,'message'=>'Mobile Number is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($password==''){
			$message = array('status'=>0,'message'=>'Password is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($confirmpassword==''){
			$message = array('status'=>0,'message'=>'Confirm Password is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if(strlen($password)<6){
			$message = array('status'=>0,'message'=>'Passwords must be at least 6 characters long');
			$this->response($message, REST_Controller::HTTP_OK);
		}if(strlen($confirmpassword)<6){
			$message = array('status'=>0,'message'=>'Confirm passwords must be at least 6 characters long');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if(md5($password) == md5($confirmpassword)){
				$check_email=$this->Mobile_model->check_email_already_already_exits($email);
				if(count($check_email)>0){
					$message = array('status'=>0,'message'=>'Email Id already exists. Please use another email id');
					$this->response($message, REST_Controller::HTTP_OK);
			
				}else{
					$add=array(
					'name'=>isset($name)?$name:'',
					'email'=>isset($email)?$email:'',
					'mobile'=>isset($mobile)?$mobile:'',
					'password'=>isset($confirmpassword)?md5($confirmpassword):'',
					'org_password'=>isset($confirmpassword)?$confirmpassword:'',
					'profile_pic'=>isset($img)?$img:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s')
					);
					$save=$this->Mobile_model->save_appointment_user($add);
					if(count($save)>0){
						$message = array('status'=>1,'a_u_id'=>$save,'message'=>'User successfully created');
						$this->response($message, REST_Controller::HTTP_OK);
					}else{
						$message = array('status'=>0,'message'=>'Technical problem will occured. Please try again.');
						$this->response($message, REST_Controller::HTTP_OK);
					}
				
				}
		}else{
				$message = array('status'=>0,'message'=>'Your password and confirmation password do not match');
				$this->response($message, REST_Controller::HTTP_OK);
		}
		
	}
	
	public function appointment_userlogin_post(){
		$email=$this->post('email');
		$password=$this->post('password');
		if($email==''){
			$message = array('status'=>0,'message'=>'Email Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($password==''){
			$message = array('status'=>0,'message'=>'Password is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if(strlen($password)<6){
			$message = array('status'=>0,'message'=>'Passwords must be at least 6 characters long');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$select=$this->Mobile_model->check_login_details($email,$password);
		if(count($select)>0){
			$message = array('status'=>1,'details'=>$select,'message'=>'User Successfully login');
			$this->response($message, REST_Controller::HTTP_OK);
		}else{
			$message = array('status'=>0,'message'=>'Invalid login details.Please try again');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	}
	public function appointment_changepassword_post(){
		$a_u_id=$this->post('a_u_id');
		$oldpassword=$this->post('oldpassword');
		$password=$this->post('password');
		$confirmpassword=$this->post('confirmpassword');
		if($a_u_id==''){
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
			
			$check_user=$this->Mobile_model->check_user_details($a_u_id);
			if(count($check_user)>0){
				
				if(md5($oldpassword)==$check_user['password']){
						$update=$this->Mobile_model->update_user_password($a_u_id,$confirmpassword);
						if(count($update)>0){
								$message = array('status'=>1,'a_u_id'=>$a_u_id,'message'=>'Password Successfully Updated');
								$this->response($message, REST_Controller::HTTP_OK);
						}else{
								$message = array('status'=>0,'a_u_id'=>$a_u_id,'message'=>'Technical problem will occured. Please try again.');
								$this->response($message, REST_Controller::HTTP_OK);
						}
				}else{
					$message = array('status'=>0,'a_u_id'=>$a_u_id,'message'=>'Old password does not match. Please try again');
					$this->response($message, REST_Controller::HTTP_OK);
				}
				
			}else{
				$message = array('status'=>0,'a_u_id'=>$a_u_id,'message'=>'Invalid User id.Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
			
		}else{
			$message = array('status'=>0,'a_u_id'=>$a_u_id,'message'=>'Your password and confirmation password do not match');
				$this->response($message, REST_Controller::HTTP_OK);
		}
		
	}
	
	public function appointment_forgotpassword_post(){
		$email=$this->post('email');
		if($email==''){
			$message = array('status'=>0,'message'=>'Email Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
			$check_email=$this->Mobile_model->check_email_already_already_exits($email);
				if(count($check_email)>0){
					$message = array('status'=>1,'a_u_id'=>$check_email['a_u_id'],'message'=>'Your login password is '.$check_email['org_password']);
					$this->response($message, REST_Controller::HTTP_OK);
			
				}else{
				$message = array('status'=>0,'message'=>'Entered Email id not registered.Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
				}
	}

}
