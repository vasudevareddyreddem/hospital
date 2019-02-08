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
class Reception_appoint_list extends REST_Controller 
{

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
        $this->load->model('User_health_camps_model');
        $this->load->model('Api_recep_user_list_model');
        $this->load->model('Wallet_model');
    
    }
    public function recep_login_post(){
        $email=$this->post('email');
        $password=$this->post('password');
          $res=$this->Api_recep_user_list_model->recep_login_checking($email,$password);
         // echo $this->db->last_query();exit;
          if(count($res)>0){
             $message = array('status'=>1,'user'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);
          }
            $message = array('status'=>0,'user'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);
      


    }
	
	public function forgotpassword_post(){
        $email=$this->post('email');
		if($email==''){
			$message = array('status'=>0,'message'=>'Email Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$check=$this->Api_recep_user_list_model->check_user_details_ortheir($email);
		if(count($check)>0){
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->to($check['a_email_id']);
				$this->email->from('customerservice@ealthinfra.com', 'Ehealthinfra'); 
				$this->email->subject('Forgot Password'); 
				$body = "<b> Your Account login Password is </b> : ".$check['a_org_password'];
				$this->email->message($body);
				$this->email->send();
				$message = array('status'=>1,'message'=>'Password sent to your registered email address. Please Check your registered email address');
                $this->response($message, REST_Controller::HTTP_OK);
		}else{
			$message = array('status'=>0,'message'=>'Entered Email id not registered.Please try again');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	}
    public function appointment_list_post(){
        $user_id=$this->post('user_id');
         $res=$this->Api_recep_user_list_model->user_checking($user_id);
         if(count($res)>0){

         }
         else{
             $message = array('status'=>0,'message'=>'user does not exist');
                     $this->response($message, REST_Controller::HTTP_OK);

         }
         $userdetails=$this->Api_recep_user_list_model-> get_all_resouce_details($user_id);
         $appoint_list=$this->Api_recep_user_list_model->get_app_appointment_list($userdetails['hos_id']);
         if(count($appoint_list)>0){
          $message = array('status'=>1,'appointment_list'=>$appoint_list);
                     $this->response($message, REST_Controller::HTTP_OK);
                 }
                 $message = array('status'=>0,'appointment_list'=>$appoint_list);
                     $this->response($message, REST_Controller::HTTP_OK);

    }
    public function appointment_accepted_list_post(){
        $user_id=$this->post('user_id');
         $res=$this->Api_recep_user_list_model->user_checking($user_id);

         if(count($res)>0){

         }
         else{
             $message = array('status'=>0,'message'=>'user does not exist');
                     $this->response($message, REST_Controller::HTTP_OK);

         }

         $userdetails=$this->Api_recep_user_list_model-> get_all_resouce_details($user_id);
         //$appoint_list=$this->Api_recep_user_list_model->get_accepted_appointment_list($userdetails['hos_id']);
        $appoint_list=$this->Api_recep_user_list_model->get_website_appiontment_list($userdetails['hos_id']);
       // echo $this->db->last_query();exit;
         if(count($appoint_list)>0){
          $message = array('status'=>1,'appointment_list'=>$appoint_list);
                     $this->response($message, REST_Controller::HTTP_OK);
                 }
                 $message = array('status'=>0,'appointment_list'=>$appoint_list);
                     $this->response($message, REST_Controller::HTTP_OK);

    }
     public function appointment_rejected_list_post(){
        $user_id=$this->post('user_id');
         $res=$this->Api_recep_user_list_model->user_checking($user_id);
         if(count($res)>0){

         }
         else{
             $message = array('status'=>0,'message'=>'user does not exist');
                     $this->response($message, REST_Controller::HTTP_OK);

         }
         $userdetails=$this->Api_recep_user_list_model-> get_all_resouce_details($user_id);
         $appoint_list=$this->Api_recep_user_list_model->get_rejected_appointment_list($userdetails['hos_id']);
         if(count($appoint_list)>0){
          $message = array('status'=>1,'appointment_list'=>$appoint_list);
                     $this->response($message, REST_Controller::HTTP_OK);
                 }
                 $message = array('status'=>0,'appointment_list'=>$appoint_list);
                     $this->response($message, REST_Controller::HTTP_OK);

    }

public function appointment_status_change_post(){
      $user_id=$this->post('user_id');

      $bid=$this->post('bid');
      $status=$this->post('status');
      $time=$this->post('time');
      $bdate=$this->post('bdate');

     
         $res=$this->Api_recep_user_list_model->user_checking($user_id);
       
         if(count($res)>0){

         }
         else{
             $message = array('status'=>0,'message'=>'user does not exist');
                     $this->response($message, REST_Controller::HTTP_OK);

         }
        
          if($res['role_id']==3){
         $data=array('status'=>$status,
                    'updated_by'=>$user_id,
                    'updated_date'=>date('Y-m-d H:i:s'),
);
         if(!$time==null){
            $data['time']=$time;
         }
         if(!$bdate==null){
            $data['date']=$bdate;
         }
         $flag=$this->Api_recep_user_list_model->change_appoint_status($data,$bid);

       
         if($flag==1){
            if($status=1){
            	$userdetails=$this->Api_recep_user_list_model->get_all_resouce_details($user_id);
            	$bid_det=$this->Api_recep_user_list_model->get_bidding_det($bid);


				
					$post=$this->input->post();
					$add=array(
					'hos_id'=>$bid_det['hos_id'],
					'patinet_name'=>$bid_det['patinet_name'],
					'age'=>$bid_det['patinet_name'],
					'mobile'=>$bid_det['mobile'],
					'department'=>$bid_det['department'],
					'specialist'=>$bid_det['specialist'],
					'doctor_id'=>$bid_det['doctor_id'],
					'date'=>$bid_det['date'],
					'time'=>$bid_det['time'],
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$user_id,
					'coming_through'=>1,
					'b_id'=>$bid
					);
					//echo '<pre>';print_r($userdetails);exit;
					$save=$this->Api_recep_user_list_model->save_appointments($add);
				
				/* accept message */
							$details=$this->Api_recep_user_list_model->get_appointment_bid_user_details($bid);
							$this->load->model('Appointments_model');
							$get_coupon=$this->Appointments_model->get_hospital_counpon_code($details['hos_id']);
							$hos_conatct=$this->Appointments_model->get_appoinment_hospital_details($details['hos_id']);
							//echo '<pre>';print_r($details);exit;
							$mobile=$details['mobile'];
							$username=$this->config->item('smsusername');
							$pass=$this->config->item('smspassword');
							$sender=$this->config->item('sender');
							$msg = "Dear ".$details['patinet_name'].", your appointment  is confirmed, for the ".$details['hos_bas_name'].", on ".$details['date'].$details['time'].".Use coupon code ".ucfirst($get_coupon['coupon_code'])." to avail discounts.Any queries call ".$hos_conatct['hos_rep_contact'];
							 /* seller purpose*/
							$ch2 = curl_init();
							curl_setopt($ch2, CURLOPT_URL,"http://trans.smsfresh.co/api/sendmsg.php");
							curl_setopt($ch2, CURLOPT_POST, 1);
							curl_setopt($ch2, CURLOPT_POSTFIELDS,'user='.$username.'&pass='.$pass.'&sender='.$sender.'&phone='.$mobile.'&text='.$msg.'&priority=ndnd&stype=normal');
							curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
							//echo '<pre>';print_r($ch);exit;
							$server_output = curl_exec ($ch2);
							curl_close ($ch2);
				/* accept message */

				
					$message = array('status'=>1,'message'=>'Patient Appointment Accepted ');
                     $this->response($message, REST_Controller::HTTP_OK);
                 }
                  $message = array('status'=>1,'message'=>'Patient Appointment Rejected ');
                     $this->response($message, REST_Controller::HTTP_OK);

                 }

                 $message = array('status'=>0,'message'=>'Patient Appointment not updated, try again');
                     $this->response($message, REST_Controller::HTTP_OK);
                 }
                 else{
                 	  $message = array('status'=>0,'message'=>'You dont have permissions');
                     $this->response($message, REST_Controller::HTTP_OK);

                 }

}

public function  receptionist_bill_post(){
	$user_id=$this->post('user_id');
	$appointment_user_id=$this->post('appointment_user_id');
	$category=$this->post('category');
	$payment_type=$this->post('payment_type');
	$patient_id=$this->post('patient_id');
    $cardnumber=$this->post('cardnumber');
    $name=$this->post('name');
    $mobile=$this->post('mobile');
    $amount=$this->post('amount');
    $coupon_discount_amount=$this->post('coupon_discount_amount');
    $coupon_code_id=$this->post('coupon_code_id');
    $couponcode=$this->post('couponcode');
    $pay_amount=$this->post('pay_amount');
	if($user_id==''){
			$message = array('status'=>0,'message'=>'User Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	if($appointment_user_id==''){
			$message = array('status'=>0,'message'=>'Appoinment User Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	if($category==''){
			$message = array('status'=>0,'message'=>'Category is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	if($payment_type==''){
			$message = array('status'=>0,'message'=>'Payment Type is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	if($patient_id==''){
			$message = array('status'=>0,'message'=>'Patient_id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	if($cardnumber==''){
			$message = array('status'=>0,'message'=>'Card Number is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	if($name==''){
			$message = array('status'=>0,'message'=>'Name is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	if($mobile==''){
		$message = array('status'=>0,'message'=>'Mobile is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($amount==''){
		$message = array('status'=>0,'message'=>'Amount is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}if($coupon_discount_amount==''){
		$message = array('status'=>0,'message'=>'coupon discount amount is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($coupon_code_id==''){
		$message = array('status'=>0,'message'=>'Coupon code id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($couponcode==''){
		$message = array('status'=>0,'message'=>'Coupon code is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($pay_amount==''){
		$message = array('status'=>0,'message'=>'Pay amount is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
			$userdetails=$this->Api_recep_user_list_model->get_login_resouce_details($user_id);
			$billing_id=$this->Api_recep_user_list_model->get_patient_billing_id($patient_id);
			$add=array(
				'hos_id'=>isset($userdetails['hos_id'])?$userdetails['hos_id']:'',
				'patient_id'=>isset($patient_id)?$patient_id:'',
				'billing_id'=>isset($billing_id['b_id'])?$billing_id['b_id']:'',
				'card_number'=>isset($cardnumber)?$cardnumber:'',
				'p_name'=>isset($name)?$name:'',
				'p_mobile'=>isset($mobile)?$mobile:'',
				'p_amount'=>isset($amount)?$amount:'',
				'coupon_code'=>isset($couponcode)?$couponcode:'',
				'pay_amount'=>isset($pay_amount)?$pay_amount:'',
				'category_type'=>isset($category)?$category:'',
				'payment_type'=>isset($payment_type)?$payment_type:'',
			);
			$save_billing=$this->Api_recep_user_list_model->save_billing_data($add);
			if(count($save_billing)>0){
				if(isset($appointment_user_id) && $appointment_user_id!=''){
						if($category==2){
							$ip="IP";
						}else{
							$ip="Lab";
						}
							$code_details=array(
								'b_id'=>isset($billing_id['b_id'])?$billing_id['b_id']:'',
								'type'=>$ip,
								'type_id'=>isset($category)?$category:'',
								'amount'=>$amount,
								'p_id'=>$patient_id,
								'coupon_code'=>$couponcode,
								'coupon_code_amount'=>(($amount)-($coupon_discount_amount)),
								'purpose'=>'Ip billing Purpose',
								'created_at'=>date('Y-m-d H:i:s'),
								'created_by'=>$user_id,
								'appointment_user_id'=>$appointment_user_id,
								);
								$this->Api_recep_user_list_model->save_coupon_code_history($code_details);
								$wallet_detials=$this->Api_recep_user_list_model->get_wallet_amt_details($appointment_user_id);
								if($category==3){
									$amt_data=array('remaining_wallet_amount'=>(($wallet_detials['remaining_wallet_amount'])-(($amount)-($coupon_discount_amount))));

								}else{
									$amt_data=array('remaining_wallet_amount'=>(($wallet_detials['remaining_wallet_amount'])-(($amount)-($coupon_discount_amount))));

								}
								$amount_update=$this->Api_recep_user_list_model->update_op_wallet_amt_details($appointment_user_id,$amt_data);
						
				
				}
				
				$message = array('status'=>1,'billing_id'=>$save_billing,'message'=>'Billing data successfully added.');
				$this->response($message, REST_Controller::HTTP_OK);
				
			}else{
				$message = array('status'=>0,'message'=>'Technical problem will occurred. Please try again.');
				$this->response($message, REST_Controller::HTTP_OK);
			}
}

public  function couponcode_apply_post(){
	$user_id=$this->post('user_id');
	$patient_id=$this->post('patient_id');
	$couponcode=$this->post('couponcode');
	$coupon_code_id=$this->post('coupon_code_id');
	$pay_amount=$this->post('pay_amount');
	$category=$this->post('category');
	if($user_id==''){
		$message = array('status'=>0,'message'=>'User Id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($patient_id==''){
			$message = array('status'=>0,'message'=>'Patient_id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	if($coupon_code_id==''){
		$message = array('status'=>0,'message'=>'Coupon code id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($couponcode==''){
		$message = array('status'=>0,'message'=>'Coupon code is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($pay_amount==''){
		$message = array('status'=>0,'message'=>'Pay amount is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($category==''){
			$message = array('status'=>0,'message'=>'Category is required');
			$this->response($message, REST_Controller::HTTP_OK);
	}
	
		$userdetails=$this->Api_recep_user_list_model->get_login_resouce_details($user_id);
		
		$details=$this->Api_recep_user_list_model->get_coupon_code_details($couponcode,$coupon_code_id,$userdetails['hos_id'],$category);
		if(count($details)>0){
			if($category==2){
							$current_time=$details['created_at'];
							$date=date('Y-m-d H:i:s');
							$datetime1 = new DateTime($current_time);
							$datetime2 = new DateTime($date);
							$interval = $datetime1->diff($datetime2);
							$diff_in_hrs =$interval->format('%h');
				              if($diff_in_hrs >=0 && $diff_in_hrs <2){
									$wallet_detials=$this->Api_recep_user_list_model->get_wallet_amt_details($details['created_by']);
									//echo '<pre>';print_r($wallet_detials);
									$billing_id=$this->Api_recep_user_list_model->get_patient_billing_id($patient_id);
									//echo '<pre>';print_r($billing_id);exit;
									$percent=($pay_amount)*($details['ip_amount_percentage']);
									$percen_amount=$percent/100;
									$amount=($pay_amount)-($percen_amount);
									//echo $percen_amount;
									if($wallet_detials['remaining_wallet_amount']>=$percen_amount){
										$data['msg']=1;
										$data['amt']=$amount;
										$data['billing_id']=$billing_id['b_id'];
										$data['cou_amt']=$details['ip_amount_percentage'];
										$data['appointment_user_id']=$details['created_by'];
										$message = array('status'=>1,'appointment_user_id'=>$details['created_by'],'pay_amount'=>$amount,'billing_id'=>$billing_id['b_id'],'message'=>"Coupon Code applied Successfully. Payable Amount is ".$details['ip_amount_percentage']." % decreased");
										$this->response($message, REST_Controller::HTTP_OK);
					}else{
						$message = array('status'=>0,'message'=>'Your wallet having insufficient amount. Please recharge again');
			           $this->response($message, REST_Controller::HTTP_OK);
							}
					
					}else{
						 $message = array('status'=>0,'message'=>'Coupon Code is expired. Please try another one');
						 $this->response($message, REST_Controller::HTTP_OK);
					}
				
			}else{
							$current_time=$details['created_at'];
							$date=date('Y-m-d H:i:s');
							$datetime1 = new DateTime($current_time);
							$datetime2 = new DateTime($date);
							$interval = $datetime1->diff($datetime2);
							//echo '<pre>';print_r($interval);exit;
							$diff_in_hrs =$interval->format('%h');
							if($diff_in_hrs >=0 && $diff_in_hrs <2){
									$wallet_detials=$this->Api_recep_user_list_model->get_wallet_amt_details($details['created_by']);
									$billing_id=$this->Api_recep_user_list_model->get_patient_billing_id($patient_id);
									$percent=($pay_amount)*($details['lab_amount_percentage']);
									$percen_amount=$percent/100;
									$amount=($pay_amount)-($percen_amount);
									//echo $percen_amount;
								if($wallet_detials['remaining_wallet_amount']>=$percen_amount){
										$data['msg']=1;
										$data['amt']=$amount;
										$data['billing_id']=$billing_id['b_id'];
										$data['cou_amt']=$details['lab_amount_percentage'];
										$data['appointment_user_id']=$details['created_by'];
										$message = array('status'=>1,'pay_amount'=>$amount,'billing_id'=>$billing_id['b_id'],'message'=>"Coupon Code applied Successfully. Payable Amount is ".$details['lab_amount_percentage']." % decreased");
										$this->response($message, REST_Controller::HTTP_OK);
								}else{
									$message = array('status'=>0,'message'=>'Your wallet having insufficient amount. Please recharge again');
									$this->response($message, REST_Controller::HTTP_OK);
								}
						
						}else{
							 $message = array('status'=>0,'message'=>'Coupon Code is expired. Please try another one');
							 $this->response($message, REST_Controller::HTTP_OK);
						}
					
					
					
			}
							
		}else{
			$message = array('status'=>0,'message'=>'Coupon code was not correct. Please try again once');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	
	
	
}
public  function billing_list_post(){
	$user_id=$this->post('user_id');
	if($user_id==''){
		$message = array('status'=>0,'message'=>'User Id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	$userdetails=$this->Api_recep_user_list_model->get_login_resouce_details($user_id);
	$billing_list=$this->Api_recep_user_list_model->get_all_billing_list($userdetails['hos_id']);
	if(count($billing_list)>0){
		$message = array('status'=>1,'list'=>$billing_list,'message'=>'Your billing list are displayed');
		$this->response($message, REST_Controller::HTTP_OK);
	}else{
		 $message = array('status'=>0,'message'=>'Your billing list are not displayed');
		 $this->response($message, REST_Controller::HTTP_OK);
	}

}
public  function billappoitment_user_post(){
	$appointment_id=$this->post('appointment_id');
	if($appointment_id==''){
		$message = array('status'=>0,'message'=>'Appoinment id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	$user_details=$this->Api_recep_user_list_model->get_appointment_user_details($appointment_id);
	if(count($user_details)>0){
		$add=array(
		'hos_id'=>isset($user_details['hos_id'])?$user_details['hos_id']:'',
		'p_c_name'=>isset($user_details['city'])?$user_details['city']:'',
		'name'=>isset($user_details['patinet_name'])?$user_details['patinet_name']:'',
		'age'=>isset($user_details['age'])?$user_details['age']:'',
		'mobile'=>isset($user_details['mobile'])?$user_details['mobile']:'',
		);
		$save_bill=$this->Api_recep_user_list_model->save_billing_for_patient($add);
		if(count($save_bill)>0){
			$a_u_p=array('patient_id'=>$save_bill);
			$this->Api_recep_user_list_model->update_appointments_user_id($appointment_id,$a_u_p);
			$billing=array(
			'p_id'=>isset($save_bill)?$save_bill:'',
			'treatment_id'=>isset($user_details['department'])?$user_details['department']:'',
			'doct_id'=>isset($user_details['doctor_id'])?$user_details['doctor_id']:'',
			'specialist_id'=>isset($user_details['specialist'])?$user_details['specialist']:'',
			);
			$bill_id=$this->Api_recep_user_list_model->save_billing_data_for_patient($billing);
			$message = array('status'=>1,'appointment_id'=>$appointment_id,'billing_id'=>$bill_id,'patient_id'=>$save_bill,'message'=>'successfully data updated');
			$this->response($message, REST_Controller::HTTP_OK);
			
		}else{
			$message = array('status'=>0,'message'=>'Technical problem will occured. Please try again');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		
	}else{
		$message = array('status'=>0,'message'=>'Appointment user details are not getting');
		$this->response($message, REST_Controller::HTTP_OK);
	}
}
public  function apply_coupon_code_post(){
	$patient_id=$this->post('patient_id');
	$billing_id=$this->post('billing_id');
	$total_amt=$this->post('total_amt');
	$payment_mode=$this->post('payment_mode');
	$payable_amt=$this->post('payable_amt');
	$receivied_from=$this->post('receivied_from');
	$coupon_code=$this->post('coupon_code');
	$user_id=$this->post('user_id');
	$appointment_user_id=$this->post('appointment_user_id');
	if($user_id==''){
		$message = array('status'=>0,'message'=>'User Id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($appointment_user_id==''){
		$message = array('status'=>0,'message'=>'Appoinment User Id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($patient_id==''){
		$message = array('status'=>0,'message'=>'Patient id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($billing_id==''){
		$message = array('status'=>0,'message'=>'Billing id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}if($total_amt==''){
		$message = array('status'=>0,'message'=>'Billing id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}if($payment_mode==''){
		$message = array('status'=>0,'message'=>'Payment mode is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}if($payable_amt==''){
		$message = array('status'=>0,'message'=>'Payable Amount is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}if($receivied_from==''){
		$message = array('status'=>0,'message'=>'Receivied From is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}if($coupon_code==''){
		$message = array('status'=>0,'message'=>'Coupon code is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	
	$userdetails=$this->Api_recep_user_list_model->get_login_resouce_details($user_id);
	$billing=array(
		'patient_payer_deposit_amount'=>isset($total_amt)?$total_amt:'',
		'payment_mode'=>isset($payment_mode)?$payment_mode:'',
		'bill_amount'=>isset($payable_amt)?$payable_amt:'',
		'coupon_code'=>isset($coupon_code)?$coupon_code:'',
		'coupon_code_amount'=>$total_amt-$payable_amt,
		'with_out_coupon_code'=>isset($total_amt)?$total_amt:'',
		'received_form'=>isset($receivied_from)?$receivied_from:'',
		'completed'=>1,
		'updated_at'=>date('Y-m-d H:i:s')
		);
		$update=$this->Api_recep_user_list_model->update_patient_billing_details($billing_id,$billing);
		if(count($update)>0){
			$details=$this->Api_recep_user_list_model->get_coupon_code_deatils($coupon_code,$userdetails['hos_id']);
			/* coupon code hostory*/
						$code_details=array(
							'b_id'=>$post['b_id'],
							'type'=>'Op',
							'type_id'=>1,
							'p_id'=>$post['pid'],
							'amount'=>isset($total_amt)?$total_amt:'',
							'coupon_code'=>$coupon_code,
							'coupon_code_amount'=>$total_amt-$payable_amt,
							'purpose'=>'Op appointment Purpose',
							'created_at'=>date('Y-m-d H:i:s'),
							'created_by'=>$user_id,
							'appointment_user_id'=>$appointment_user_id,
							);
					$this->Wallet_model->save_coupon_code_history($code_details);
					$wallet_detials=$this->Wallet_model->get_wallet_amt_details($appointment_user_id);
					$amt_data=array('remaining_wallet_amount'=>(($wallet_detials['remaining_wallet_amount'])-(($total_amt)-($payable_amt))));
					$amount_update=$this->Wallet_model->update_op_wallet_amt_details($appointment_user_id,$amt_data);

			$message = array('status'=>1,'message'=>'Bill details successfully updated');
			$this->response($message, REST_Controller::HTTP_OK);				
			
		}else{
			$message = array('status'=>0,'message'=>'Technical problem will occured. Please try again');
			$this->response($message, REST_Controller::HTTP_OK);
		}
}

public  function opcouponcodeapply_post(){
	
	$user_id=$this->post('user_id');
	$appointment_id=$this->post('appointment_id');
	$patient_id=$this->post('patient_id');
	$billing_id=$this->post('billing_id');
	$total_amt=$this->post('total_amt');
	$coupon_code=$this->post('coupon_code');
	if($user_id==''){
		$message = array('status'=>0,'message'=>'User Id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($appointment_id==''){
		$message = array('status'=>0,'message'=>'Appoinment id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($patient_id==''){
		$message = array('status'=>0,'message'=>'Patient id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($billing_id==''){
		$message = array('status'=>0,'message'=>'Billing id is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	if($total_amt==''){
		$message = array('status'=>0,'message'=>'Total Amount is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}if($coupon_code==''){
		$message = array('status'=>0,'message'=>'Coupon Code is required');
		$this->response($message, REST_Controller::HTTP_OK);
	}
	
	$userdetails=$this->Api_recep_user_list_model->get_login_resouce_details($user_id);
	$details=$this->Api_recep_user_list_model->get_op_patient_coupon_code_details($coupon_code,$patient_id,$userdetails['hos_id']);
	//echo $this->db->last_query();
	//echo '<pre>';print_r($details);exit;
	if(count($details)>0){
							$current_time=$details['created_at'];
							$date=date('Y-m-d H:i:s');
							$datetime1 = new DateTime($current_time);
							$datetime2 = new DateTime($date);
							$interval = $datetime1->diff($datetime2);
							//echo '<pre>';print_r($interval);
							$diff_in_hrs =$interval->format('%h');
				if($diff_in_hrs >=0 && $diff_in_hrs <2){
					$wallet_detials=$this->Wallet_model->get_wallet_amt_details($details['create_by']);
					//echo $this->db->last_query();
					//echo '<pre>';print_r($wallet_detials);exit;
					
					$percent=($total_amt)*($details['op_amount_percentage']);
					$percen_amount=$percent/100;
					$amount=($total_amt)-($percen_amount);
					//echo $percen_amount;
					if($wallet_detials['remaining_wallet_amount']>=$percen_amount){
						
							$data['msg']=1;
							$data['amt']=$amount;
							$data['appointment_user_id']=$details['ap_create_by'];
							$data['cou_amt']=$details['op_amount_percentage'];
							$message = array('status'=>1,'pay_amount'=>"$amount",'billing_id'=>$billing_id,'appointment_user_id'=>$details['ap_create_by'],'message'=>"Coupon Code applied Successfully. Payable Amount is ".$details['op_amount_percentage']." % decreased");
							$this->response($message, REST_Controller::HTTP_OK);
					}else{
						$message = array('status'=>0,'message'=>'Your wallet having insufficient amount. Please recharge again');
						$this->response($message, REST_Controller::HTTP_OK);
					}
			
			}else{
				 $message = array('status'=>0,'message'=>'Coupon Code is expired. Please try another one');
				 $this->response($message, REST_Controller::HTTP_OK);
			}
		}else{
			$message = array('status'=>0,'message'=>'Coupon code was not correct. Please try again once');
			$this->response($message, REST_Controller::HTTP_OK);
		}
}


public function get_health_camp_users_post(){
	$user_id=$this->post('user_id');
	  $user_id=$this->post('user_id');
         $res=$this->Api_recep_user_list_model->user_checking($user_id);
         if(count($res)>0){

         }
         else{
             $message = array('status'=>0,'message'=>'user does not exist');
                     $this->response($message, REST_Controller::HTTP_OK);

         }
          if($res['role_id']==3){
          	$userdetails=$this->Api_recep_user_list_model->get_all_resouce_details($admindetails['a_id']);
          	$camp_users=$this->Api_recep_user_list_model->get_camp_users($userdetails['hos_id']);
          	if(count($camp_users)>0){

                   $message = array('status'=>1,'camp_list'=>$camp_users);
                     $this->response($message, REST_Controller::HTTP_OK);

          	}
          	else{
          		 $message = array('status'=>0,'camp_list'=>$camp_users);
                     $this->response($message, REST_Controller::HTTP_OK);

          	}


          }
          	else{
          		$message = array('status'=>0,'message'=>'You are not authanticated user');
			$this->response($message, REST_Controller::HTTP_OK);

          	}


}
public function get_health_camp_ausers_post(){
	$user_id=$this->post('user_id');
	  $user_id=$this->post('user_id');
         $res=$this->Api_recep_user_list_model->user_checking($user_id);
         if(count($res)>0){

         }
         else{
             $message = array('status'=>0,'message'=>'user does not exist');
                     $this->response($message, REST_Controller::HTTP_OK);

         }
          if($res['role_id']==3){
          	$userdetails=$this->Api_recep_user_list_model->get_all_resouce_details($admindetails['a_id']);
          	$camp_users=$this->Api_recep_user_list_model->get_acamp_users($userdetails['hos_id']);
          	if(count($camp_users)>0){

                   $message = array('status'=>1,'camp_list'=>$camp_users);
                     $this->response($message, REST_Controller::HTTP_OK);

          	}
          	else{
          		 $message = array('status'=>0,'camp_list'=>$camp_users);
                     $this->response($message, REST_Controller::HTTP_OK);

          	}


          }
          	else{
          		$message = array('status'=>0,'message'=>'You are not authanticated user');
			$this->response($message, REST_Controller::HTTP_OK);

          	}


}
public function get_health_camp_rusers_post(){
	$user_id=$this->post('user_id');
	  $user_id=$this->post('user_id');
         $res=$this->Api_recep_user_list_model->user_checking($user_id);
         if(count($res)>0){

         }
         else{
             $message = array('status'=>0,'message'=>'user does not exist');
                     $this->response($message, REST_Controller::HTTP_OK);

         }
          if($res['role_id']==3){
          	$userdetails=$this->Api_recep_user_list_model->get_all_resouce_details($admindetails['a_id']);
          	$camp_users=$this->Api_recep_user_list_model->get_rcamp_users($userdetails['hos_id']);
          	if(count($camp_users)>0){

                   $message = array('status'=>1,'camp_list'=>$camp_users);
                     $this->response($message, REST_Controller::HTTP_OK);

          	}
          	else{
          		 $message = array('status'=>0,'camp_list'=>$camp_users);
                     $this->response($message, REST_Controller::HTTP_OK);

          	}


          }
          	else{
          		$message = array('status'=>0,'message'=>'You are not authanticated user');
			$this->response($message, REST_Controller::HTTP_OK);

          	}


}



}