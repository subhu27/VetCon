<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disease_model extends CI_Model 
{


		public function __construct()
    	{
	        parent::__construct();
	        $this->load->model('Farm_model');
	        $this->load->helper('url_helper');
        }



       public function register()
       {
       	  $data = array(
	        'vdisease_name' => $this->input->post('dName'),
	        'vdisease_symptoms' => $this->input->post('dSymptoms'),
	        'vdisease_description' => $this->input->post('dDescription')
	    );

	    $this->db->insert('vdisease', $data);
	    if ($this->db->affected_rows()==1) {
	    	return redirect('Login');
	    }

       }



       public function getDisease()
       {
       	$this->db->from('vdisease');
		$this->db->order_by('vdisease_name','asc');
		$query = $this->db->get();
		return $query->result();
       }

}


?>