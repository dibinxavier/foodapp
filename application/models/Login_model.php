<?php
class Login_model extends CI_Model {

	    function __construct() {
	        parent::__construct();
	        $this->load->database();
	    }

        public function get_data_by_email()
        {
			$this->db->where('email', $_POST['email']);
			$q = $this->db->get('users');
			$data = $q->result_array();
            return $data;
        }

        public function insert_entry()
        {
                $this->name    	= $_POST['name']; // please read the below note
                $this->email    = $_POST['email'];
                $this->mob    = $_POST['mob'];
                $this->password  	= md5($_POST['password']);
                //$this->date     = date();
                //print_r($this->date);exit;
                return $this->db->insert('users', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}