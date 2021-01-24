<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {

        parent::__construct();
        // $this->load->helper(form);
		$this->load->model('login_model');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper(array('cookie', 'url'));
		if( !empty($this->session->userdata('userdata')))
		{
			header( "Location: ".base_url());
			// exit;
		}
    }

	public function index()
	{
		$this->load->view('login');
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
	 {//echo "test";exit;
		//$this->session->sess_destroy();
		$result = $this->login_model->get_data_by_email();
		if(empty($result)){
			echo '0';
		} else {
			if($result[0]['password']==md5($_POST['pass'])){
				$this->session->set_userdata('userdata',$result[0]);

				// $this->db->where('email',  $_POST['email']);
				// $this->db->delete('users');

				// $data = array('access_token' => 'NULL');
				// $this->db->where('email',  $_POST['email']);      
				// $this->db->update('users', $data);


				$this->db->set('access_token', 'UUID()',FALSE);
				$this->db->set('refresh_token', 'UUID()',FALSE);
				$this->db->where('email', $_POST['email']);
				$this->db->update('users');

				$this->db->select('access_token, refresh_token');
				$this->db->where('email', $_POST['email']);
				$query = $this->db->get('users');
				$tokens=$query->result();
				// print_r($tokens);exit;
				set_cookie('access_token',$tokens[0]->access_token,'3600','','','','',TRUE); 

				// $this->db->update('users', $this, array('email' => $_POST['email']));
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_header(200)
					->set_output(json_encode(array(
						'refresh_token' => $tokens[0]->refresh_token,
						'access_token' => $tokens[0]->access_token,
						'expiry' =>'3600',
						'name' => $result[0]['name']
					)));
					echo json_encode($result);

				
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
