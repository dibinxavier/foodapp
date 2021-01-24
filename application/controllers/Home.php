<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	{   //print_r($this->session->userdata('userdata')['id']);exit;
		$json = file_get_contents('https://jsonplaceholder.typicode.com/posts');
		$resultsObj = json_decode($json);
		$myArray=array();
		if($this->session->userdata('userdata')['id']==0) {
			$myArray=$resultsObj;
		} else{
		foreach($resultsObj as $result) {
			// echo $result->userId;
			if($result->userId==$this->session->userdata('userdata')['id']){
				array_push($myArray,$result);
			}
		}
		}
		$data['mydata']=$myArray;
		$this->load->view('home',$data);
	}

}
