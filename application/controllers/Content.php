<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	function __construct() { 
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('content_model');
		// if(empty($this->session->userdata('userdata')))
		// {
		// 	header( "Location: ".base_url()."login");
		// }
    }
	public function index()
	{
		echo "test";exit;
	}

	public function footer_text()
	{
		// echo "text";exit;
		$result = $this->content_model->get_footer_text();
		// echo json_encode($result);
		echo $result;exit;
	}
	public function footer_text_update()
	{
		// echo "text";exit;
		$result = $this->content_model->put_footer_text();
		// echo json_encode($result);
		echo $result;exit;
	}


}