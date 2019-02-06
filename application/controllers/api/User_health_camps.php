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
class User_health_camps extends REST_Controller 
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
    }

public function get_health_camps_notifi_post()
{
$user_id=$this->post('user_id');
  $ures=$this->User_health_camps_model->user_checking($user_id);
     if(count($ures)>0){

     }
     else{
         $message = array('status'=>0,'message'=>'user not existed');
                     $this->response($message, REST_Controller::HTTP_OK);

     }
$res=$this->User_health_camps_model->get_user_notifications($user_id);
if(count($res)>0){
    
    $message = array('status'=>1,'list'=>$res);
            $this->response($message, REST_Controller::HTTP_OK);

}
else{
      $message = array('status'=>0,'list'=>$res);
            $this->response($message, REST_Controller::HTTP_OK);

}

}
public function get_health_camp_details_post()
{
    $camp_id=$this->post('camp_id');
    $user_id=$this->post('user_id');
      $ures=$this->User_health_camps_model->user_checking($user_id);
     if(count($ures)>0){

     }
     else{
         $message = array('status'=>0,'message'=>'user not existed');
                     $this->response($message, REST_Controller::HTTP_OK);

     }
    $data=array('camp_id'=>$camp_id,
'a_u_id'=>$user_id,
'created_date'=>date('Y-m-d H:i:s')
);
$res=$this->User_health_camps_model->get_health_camp_details($camp_id,$user_id,$data);
if(count($res)>0){
    
    $message = array('status'=>1,'camp_info'=>$res);
            $this->response($message, REST_Controller::HTTP_OK);

}
else{
      $message = array('status'=>0,'camp_info'=>$res);
            $this->response($message, REST_Controller::HTTP_OK);

}

}
public function get_hos_city_post(){
    $user_id=$this->post('user_id');
     $ures=$this->User_health_camps_model->user_checking($user_id);
     if(count($ures)>0){

     }
     else{
         $message = array('status'=>0,'message'=>'user not existed');
                     $this->response($message, REST_Controller::HTTP_OK);

     }
    $res=$this->User_health_camps_model->get_hos_cities();
    if(count($res)>0){
         $message = array('status'=>1,'cities'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);


    }
         $message = array('status'=>0,'cities'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);


}
public function get_hospitals_post(){
   $user_id=$this->post('user_id');
   $ures=$this->User_health_camps_model->user_checking($user_id);
     if(count($ures)>0){

     }
     else{
         $message = array('status'=>0,'message'=>'user not existed');
                     $this->response($message, REST_Controller::HTTP_OK);

     }
     $city=$this->post('city');
     $res=$this->User_health_camps_model->get_hospitals($city);
      if(count($res)>0){
         $message = array('status'=>1,'hos_list'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);


    }
         $message = array('status'=>0,'hos_list'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);


}
public function get_departments_post(){
      $user_id=$this->post('user_id');
   $ures=$this->User_health_camps_model->user_checking($user_id);
     if(count($ures)>0){

     }
     else{
         $message = array('status'=>0,'message'=>'user not existed');
                     $this->response($message, REST_Controller::HTTP_OK);

     }
     $hos_id=$this->post('hos_id');

     $res=$this->User_health_camps_model->get_depts($hos_id);
    //echo  $this->db->last_query();exit;
           if(count($res)>0){
         $message = array('status'=>1,'dept_list'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);


    }
         $message = array('status'=>0,'dept_list'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);



}
public function get_camp_date_post(){
      $user_id=$this->post('user_id');
   $ures=$this->User_health_camps_model->user_checking($user_id);
     if(count($ures)>0){

     }
     else{
         $message = array('status'=>0,'message'=>'user not existed');
                     $this->response($message, REST_Controller::HTTP_OK);

     }
     $hos_id=$this->post('hos_id');
     $dept_name=$this->post('dept_name');
     //$camp_id=$this->post('camp_id');

     $res=$this->User_health_camps_model->get_camp_dates($hos_id,$dept_name);
     echo $this->db->last_query();exit;
           if(count($res)>0){
         $message = array('status'=>1,'camp_date_det'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);


    }
         $message = array('status'=>0,'camp_date_det'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);

}
public function get_camp_times_post(){
  $user_id=$this->post('user_id');
   $ures=$this->User_health_camps_model->user_checking($user_id);
     if(count($ures)>0){

     }
     else{
         $message = array('status'=>0,'message'=>'user not existed');
                     $this->response($message, REST_Controller::HTTP_OK);

     }

     $hos_id=$this->post('hos_id');
     $dept_name=$this->post('dept_name');
     $date=$this->post('cdate');

     $res=$this->User_health_camps_model->get_camp_times($hos_id,$dept_name,$date);
    // echo $this->db->last_query();exit;
           if(count($res)>0){
         $message = array('status'=>1,'camp_time_det'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);


    }
         $message = array('status'=>0,'camp_time_det'=>$res);
                     $this->response($message, REST_Controller::HTTP_OK);


}
public function user_select_health_camp_post(){
        $user_id=$this->post('user_id');
   $ures=$this->User_health_camps_model->user_checking($user_id);
     if(count($ures)>0){

     }
     else{
         $message = array('status'=>0,'message'=>'user not existed');
                     $this->response($message, REST_Controller::HTTP_OK);

     }
     $camp_id=$this->post('camp_id');

     $name=$this->post('name');
     $age=$this->post('age');
     $mobile=$this->post('mobile');
    // $sta=$this->User_health_camps_model->check_camp_exists($user_id,$camp_id);
    // if(count($sta)>0){
    //              $message = array('status'=>0,'message'=>'You already Selected this camp');
    //                  $this->response($message, REST_Controller::HTTP_OK);


    // }
     $data=array('camp_id'=>$camp_id,
                 'user_id'=>$user_id,
                 'patient_name'=>$name,
                  'mobile'=>$mobile,
                  'age'=>$age,
                  'created_date'=>date('Y-m-d H:i:s'),
                  'camp_status'=>2
                   );
        $flag=$this->User_health_camps_model->save_user_select_camp($data);
        if($flag==1){
                     $message = array('status'=>1,'message'=>'Camp Request Sent Successfully');
                     $this->response($message, REST_Controller::HTTP_OK);

        }
  $message = array('status'=>1,'message'=>'Camp Request Not Sent,Try again');
                     $this->response($message, REST_Controller::HTTP_OK);





}

}