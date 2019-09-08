<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model 
{


		public function __construct()
    	{
	        parent::__construct();
	        $this->load->model('User_model');
	        $this->load->helper('url_helper');
        }


        public function addMessage()
        {
	    $data = array(
	        'vmessage_name' => $this->input->post('name'),
	        'vmessage_phone' => $this->input->post('phone'),
	        'vmessage_subject' => $this->input->post('subject'),
	        'vmessage_message' => $this->input->post('message')
	    );

	    $this->db->insert('vmessage', $data);
	    if ($this->db->affected_rows()==1) {
	    	return TRUE;
	    }
	    else{
	    	return FALSE;
	    }
        }


        public function getMessage()
        {
        	$this->db->from('vmessage');
        	$this->db->order_by('vmessage_timestamp','dsc');
        	$query = $this->db->get();
        	return $query->result();

        }
}

?>
