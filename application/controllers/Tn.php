<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tn extends CI_Controller {

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
	public function y()
	{
		$link = $_SERVER['REQUEST_URI'];
	    $link_array = explode('/',$link);
	    $short_url = end($link_array);

	    $this->db->select('long_url');
	    $this->db->from('shorturl');
	    $this->db->where('token', $short_url );
		$query = $this->db->get();
        $result = $query->result();   

        header( "Location: ".$result[0]->long_url);     
	    //print_r($result[0]->long_url) ;exit;
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
        $this->short_url =base_url()."tny/".$randomString;

        print_r($this->long_url);
        print_r($this->short_url);
        return $this->db->insert('shorturl', $this);

	}

}
