<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
        parent::__construct();
        // $this->load->helper(form);
		$this->load->model('login_model');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
		$this->load->library('form_validation');

		if(empty($this->session->userdata('userdata')))
		{
			header( "Location: ".base_url());
		}
    }

	// public function index()
	// {
	// 	$this->load->view('login');
	// }
	
	public function list()
	{
		$this->load->database();
		$this->db->select('*')
         ->from('users')
         ->order_by("name", "asc");
		
		$query = $this->db->get();
		// echo $this->db->last_query();exit;
		$users= $query->result_array();
		$data['users']=$users;
		$this->load->view('list_users',$data);
	}
	public function delete()
	{
		$this->db->where('id', $_POST['id']);
    	$this->db->delete('users');
    	$this->session->set_flashdata('success', 'User deleted Successfully!');
		redirect('users/list','refresh');
	}



}
