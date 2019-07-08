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
    //Theme
    public function theme($id)
	{
		// echo $id;exit;
		$result = $this->content_model->put_theme($id);
		echo $result;exit;
	}
	//Theme
	//Footer Text
	public function footer_text()
	{
		$result = $this->content_model->get_footer_text();
		echo $result;exit;
	}
	public function footer_text_update()
	{
		$result = $this->content_model->put_footer_text();
		echo $result;exit;
	}
	//Footer Text

	//Footer Social
	public function footer_social()
	{
		// echo "text";exit;
		$result = $this->content_model->get_footersocial();
		// echo $result;exit;
		echo $result;
	}
	public function footer_social_update()
	{
		// $footer_array = array("fa-facebook"=>"https://www.facebook.com/dibinxavier","fa-instagram"=>"https://www.instagram.com/im_dibin","fa-twitter"=>"https://www.twitter.com/dibinxavier369");

		// $footer_json = json_encode($footer_array);
		$social_data = json_encode($this->input->post('socialdata'));

		print_r($social_data) ;
		print_r("----------") ;
		// exit;
		

		// $marr = json_decode($myJSON);
		// print_r($marr);
		// exit;

		// echo "text";exit;
		$result = $this->content_model->put_footersocial($social_data);
		// echo json_encode($result);
		echo $result;exit;
	}
	//Footer Social


}