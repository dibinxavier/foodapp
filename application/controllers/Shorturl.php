<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shorturl extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		if(empty($this->session->userdata('userdata')))
		{
			header( "Location: ".base_url()."login");
		}
    }
	public function index()
	{
		$this->load->view('shorturl');
	}
	public function shortit()
	{
		$this->long_url = $_POST['url'];
		$length=5;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
        $this->short_url =base_url()."tn/y/".$randomString;
        $this->token =$randomString;

        $this->db->insert('shorturl', $this);
        echo $this->short_url;

	}

}
