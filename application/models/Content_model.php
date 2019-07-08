<?php
class Content_model extends CI_Model {

	    function __construct() {
	        parent::__construct();
	        $this->load->database();
	    }

        // public function insert_entry()
        // {
        //     $this->name      = $_POST['name']; // please read the below note
        //     $this->email     = $_POST['email'];
        //     $this->password      = md5($_POST['password']);
        //     return $this->db->insert('users', $this);
        // }
        //Theme
        public function put_theme($id)
        {
            $data=array('content_value'=>$id);
            $this->db->where('content_key','theme');
            $this->db->update('website_contents',$data);
            redirect('home'); 
        }
        //Theme

        //Footer Text
        public function get_footer_text()
        {
			$this->db->where('content_key', 'footer_text');
			$q = $this->db->get('website_contents');
			$data = $q->result_array();
            // print_r($data[0]['content_value']);exit;
            return $data[0]['content_value'];
        }
        public function put_footer_text()
        {
            $data=array('content_value'=>$_POST['footertext']);
            $this->db->where('content_key','footer_text');
            $this->db->update('website_contents',$data);
        }
        //Footer Text

        //Footer Social

        public function get_footersocial()
        {
            $this->db->where('content_key', 'social');
            $q = $this->db->get('website_contents');
            $data = $q->result_array();
            // print_r($data[0]['content_value']);exit;
            return $data[0]['content_value'];
        }
        public function put_footersocial($social_data)
        {

            $data=array('content_value'=>$social_data);
            $this->db->where('content_key','social');
            $this->db->update('website_contents',$data);
        }
        
        //Footer Social

}