<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model 
{


		public function __construct()
    	{
	        parent::__construct();
	        $this->load->model('User_model');
	        $this->load->helper('url_helper');
        }


        public function register()
        {
	    $data = array(
	        'vclient_phone' => $this->input->post('cPhone'),
	        'vclient_fname' => $this->input->post('cFName'),
	        'vclient_lname' => $this->input->post('cLName'),
	        'vclient_email' => $this->input->post('cEmail'),
	        'vclient_description' => $this->input->post('cDescription'),
	        'vclient_address' => $this->input->post('cAddress'),
	        'vclient_tole' => $this->input->post('cTole'),
	        'vFarm_vfarm_id' => $this->input->post('cFarm'),
	    );

	    $this->db->insert('vclient', $data);
	    if ($this->db->affected_rows()==1) {
	    	return redirect('Login');
	    }
        }
}

?>
