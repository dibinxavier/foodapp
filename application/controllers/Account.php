<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');

		if(empty($this->session->userdata('userdata')))
		{
			header( "Location: ".base_url()."login");
		}
    }

	public function index()
	{
		$this->load->view('account');
	}
	public function register()
	{
		$result = $this->login_model->get_data_by_email();
		
		if(!empty($result)){
			echo '0';
		} else {
			$result = $this->login_model->insert_entry();
			if($result){
				echo '1';
			}else {
				echo '2';
			}
			
		}
		//echo $result;
	}
	public function login()
	{
		$this->session->sess_destroy();
		$result = $this->login_model->get_data_by_email();

		if(empty($result)){
			echo '0';
		} else {
			if($result[0]['password']==md5($_POST['pass'])){
				echo json_encode($result);;
			} else {
				echo '0';
			}
		}
	}
	public function forgot()
	{
		$result = $this->login_model->get_data_by_email();
		if(empty($result)){
			echo '0';
		} else {
			echo json_encode($result[0]['email']);;
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();	
		header( "Location: ".base_url()."login");
 	}
}
