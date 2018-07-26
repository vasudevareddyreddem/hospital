<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller {

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
	
		$this->load->model('Cron_model');
		$this->load->library('zend');
			
		}
	public function index()
	{	
		
		$all_appointments=$this->Cron_model->get_all_appointments();
		foreach($all_appointments as $list){
			
			echo $current_date=date('Y-m-d H:i A');
			$appoint_date=$list['date'].' '.$list['time'];
			
			echo date('h:i:s a m-d-y', strtotime($current_date));
			if($current_date > $appoint_date){
				echo "error";
			}else{
				echo "done";
			}
			echo '<pre>';print_r($list);exit;
			
		}
		echo '<pre>';print_r($all_appointments);exit;
	}
	

	
	
	
}
