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
class User extends REST_Controller {

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
		$this->load->model('Mobile_user_model');
    }

	public function login_post(){
		$mobile=$this->post('mobile');
		$token=$this->post('token');
		if($mobile==''){
			$message = array('status'=>0,'message'=>'Mobile Number is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($token==''){
			$message = array('status'=>0,'message'=>'token id required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		
		$select=$this->Mobile_user_model->check_login_with_mobile($mobile);
		if(count($select)>0){
			$otp = mt_rand(100000, 999999);
			$username=$this->config->item('smsusername');
			$pass=$this->config->item('smspassword');
			$sender=$this->config->item('sender');
			$msg = "Login Otp is : ".$otp;
			$ch2 = curl_init();
			curl_setopt($ch2, CURLOPT_URL,"http://trans.smsfresh.co/api/sendmsg.php");
			curl_setopt($ch2, CURLOPT_POST, 1);
			curl_setopt($ch2, CURLOPT_POSTFIELDS,'user='.$username.'&pass='.$pass.'&sender='.$sender.'&phone='.$mobile.'&text='.$msg.'&priority=ndnd&stype=normal');
			curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
			//echo '<pre>';print_r($ch);exit;
			$server_output = curl_exec ($ch2);
			curl_close ($ch2);
			$token_data=array('token'=>$token,'login_otp'=>$otp,'opt_created_time'=>date('Y-m-d H:i:s'));
			$update_token=$this->Mobile_user_model->update_token($select['a_u_id'],$token_data);
			$message = array('status'=>1,'user_id'=>$select['a_u_id'],'message'=>'Otp sent to register mobile');
			$this->response($message, REST_Controller::HTTP_OK);
		}else{
			$message = array('status'=>0,'message'=>'Invalid login details.Please try again');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	}
	public function login_otp_verify_post(){
		$user_id=$this->post('user_id');
		$otp=$this->post('otp');
		$token=$this->post('token');
		if($user_id==''){
			$message = array('status'=>0,'message'=>'User id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($otp==''){
			$message = array('status'=>0,'message'=>'Otp is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($token==''){
			$message = array('status'=>0,'message'=>'token id required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$user_detail=$this->Mobile_user_model->get_user_details($user_id);
		//echo $this->db->last_query();exit;
		if(count($user_detail)>0){
			if($user_detail['login_otp']==$otp){
				$u_d=array('verified'=>1);
				$this->Mobile_user_model->update_token($user_id,$u_d);
				$message = array('status'=>1,'details'=>$user_detail,'message'=>'User Successfully login');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>1,'user_id'=>$user_detail['a_u_id'],'message'=>'Otp Is wrong. Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
			
		}else{
			$message = array('status'=>0,'message'=>'Invalid User id.Please try again');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	}
	public function resend_otp_post(){
		$user_id=$this->post('user_id');
		$token=$this->post('token');
		if($user_id==''){
			$message = array('status'=>0,'message'=>'User id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($token==''){
			$message = array('status'=>0,'message'=>'token id required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$user_detail=$this->Mobile_user_model->get_user_details($user_id);
		if(count($user_detail)>0){
			$otp = mt_rand(100000, 999999);
			$username=$this->config->item('smsusername');
			$pass=$this->config->item('smspassword');
			$sender=$this->config->item('sender');
			$msg = "Login Otp is : ".$otp;
			$ch2 = curl_init();
			curl_setopt($ch2, CURLOPT_URL,"http://trans.smsfresh.co/api/sendmsg.php");
			curl_setopt($ch2, CURLOPT_POST, 1);
			curl_setopt($ch2, CURLOPT_POSTFIELDS,'user='.$username.'&pass='.$pass.'&sender='.$sender.'&phone='.$user_detail['mobile'].'&text='.$msg.'&priority=ndnd&stype=normal');
			curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
			//echo '<pre>';print_r($ch);exit;
			$server_output = curl_exec ($ch2);
			curl_close ($ch2);
			$token_data=array('token'=>$token,'login_otp'=>$otp,'opt_created_time'=>date('Y-m-d H:i:s'));
			$update_token=$this->Mobile_user_model->update_token($user_detail['a_u_id'],$token_data);
			$message = array('status'=>1,'user_id'=>$user_detail['a_u_id'],'message'=>'Otp sent to register mobile');
			$this->response($message, REST_Controller::HTTP_OK);
		}else{
			$message = array('status'=>0,'message'=>'Invalid login details.Please try again');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	}
	public function register_post(){
		$name=$this->post('name');
		$email=$this->post('email');
		$mobile=$this->post('mobile');
		$city=$this->post('city');
		$token=$this->post('token');
		if($name==''){
			$message = array('status'=>0,'message'=>'Name is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($email==''){
			$message = array('status'=>0,'message'=>'Email Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($mobile==''){
			$message = array('status'=>0,'message'=>'Mobile Number is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($token==''){
			$message = array('status'=>0,'message'=>'token id required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$check_email=$this->Mobile_user_model->check_email_already_exits($email,$mobile);
		if(count($check_email)>0){
				if($check_email['email']==$email && $check_email['mobile']==$mobile){
						$message = array('status'=>0,'message'=>'Mobile Number and Email already exists. Please use another Mobile Number and Email');
						$this->response($message, REST_Controller::HTTP_OK);
				}else if($check_email['mobile']==$mobile){
						$message = array('status'=>0,'message'=>'Mobile Number already exists. Please use another Mobile Number');
						$this->response($message, REST_Controller::HTTP_OK);
				}else if($check_email['email']==$email){
						$message = array('status'=>0,'message'=>'Email Id already exists. Please use another email id');
						$this->response($message, REST_Controller::HTTP_OK);
				}
		}else{
					
					$otp = mt_rand(100000, 999999);
					$username=$this->config->item('smsusername');
					$pass=$this->config->item('smspassword');
					$sender=$this->config->item('sender');
					$msg = "Your register Otp is : ".$otp;
					$ch2 = curl_init();
					curl_setopt($ch2, CURLOPT_URL,"http://trans.smsfresh.co/api/sendmsg.php");
					curl_setopt($ch2, CURLOPT_POST, 1);
					curl_setopt($ch2, CURLOPT_POSTFIELDS,'user='.$username.'&pass='.$pass.'&sender='.$sender.'&phone='.$mobile.'&text='.$msg.'&priority=ndnd&stype=normal');
					curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
					//echo '<pre>';print_r($ch);exit;
					$server_output = curl_exec ($ch2);
					curl_close ($ch2);
					$wallet_amt_list=$this->Mobile_model->get_wallet_amount();
						$add=array(
						'name'=>isset($name)?$name:'',
						'email'=>isset($email)?$email:'',
						'mobile'=>isset($mobile)?$mobile:'',
						'city'=>isset($city)?$city:'',
						'wallet_amount'=>isset($wallet_amt_list['wallet_amount'])?$wallet_amt_list['wallet_amount']:'',
						'wallet_amount_id'=>isset($wallet_amt_list['w_a_id'])?$wallet_amt_list['w_a_id']:'',
						'remaining_wallet_amount'=>isset($wallet_amt_list['wallet_amount'])?$wallet_amt_list['wallet_amount']:'',
						'status'=>1,
						'create_at'=>date('Y-m-d H:i:s')
						);
					$save=$this->Mobile_model->save_appointment_user($add);
					if(count($save)>0){
						$token_data=array('token'=>$token,'login_otp'=>$otp,'opt_created_time'=>date('Y-m-d H:i:s'));
						$update_token=$this->Mobile_model->update_user_pushnotification_token($save,$token_data);						
						$get_userdata=$this->Mobile_model->get_user_mobile_details($mobile);
						if(count($get_userdata)>0){
							$update=array('a_u_id'=>$save);
							$this->Mobile_model->update_user_mobile_data($get_userdata['card_id'],$update);
							
						}
						$message = array('status'=>1,'a_u_id'=>$save,'message'=>'User successfully created');
						$this->response($message, REST_Controller::HTTP_OK);
					}else{
						$message = array('status'=>0,'message'=>'Technical problem will occured. Please try again.');
						$this->response($message, REST_Controller::HTTP_OK);
					}
		}

		
		
		
	}
	
	
	
	

}
