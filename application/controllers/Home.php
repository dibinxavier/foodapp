<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() { 
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		// if(empty($this->session->userdata('userdata')))
		// {
		// 	header( "Location: ".base_url()."login");
		// }
    }
	public function index()
	{
		$this->load->view('home');
	}

}
