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
}