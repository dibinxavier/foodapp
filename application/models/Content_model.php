<?php
class Content_model extends CI_Model {

	    function __construct() {
	        parent::__construct();
	        $this->load->database();
	    }

        public function get_footer_text()
        {
			$this->db->where('content_key', 'footer_text');
			$q = $this->db->get('website_contents');
			$data = $q->result_array();
            // print_r($data[0]['content_value']);exit;
            return $data[0]['content_value'];
        }

        public function insert_entry()
        {
                $this->name    	= $_POST['name']; // please read the below note
                $this->email 	= $_POST['email'];
                $this->password  	= md5($_POST['password']);
                //$this->date     = date();
                //print_r($this->date);exit;
                return $this->db->insert('users', $this);
        }

        public function put_footer_text()
        {

            $data=array('content_value'=>$_POST['footertext']);
            // $this->db->set('last_login','current_login',false);
            $this->db->where('content_key','footer_text');
            $this->db->update('website_contents',$data);


                // $this->footertext    = $_POST['footertext'];
                // $this->db->update('website_contents', $this, array('content_key' => 'footer_text'));
        }

}