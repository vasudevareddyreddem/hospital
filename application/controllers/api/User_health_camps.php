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

}