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
	    	return redirect('Client/displayClients');
	    }
        }


        public function getClient()
        {
        	$this->db->from('vclient');
        	$query = $this->db->get();
        	return $query->result();

        }


        public function getClientDetails()
        {
        	$this->db->select('*');
        	$this->db->from('vclient');
        	$this->db->join('vfarm','vfarm.vfarm_id = vclient.vFarm_vfarm_id');
        	$this->db->order_by('vclient_fname','asc');
        	$query = $this->db->get();
        	return $query->result();

        }

        public function findClient($client_id)
        {
        	$this->db->from('vclient');
        	$this->db->where('vclient_id',$client_id);
        	$query = $this->db->get();
        	return $query;

        }

        public function updateClient($client_id)
        {
        	 $data = array(
	        'vclient_fname' => $this->input->post('cFName'),
	        'vclient_lname' => $this->input->post('cLName'),
	        'vclient_email' => $this->input->post('cEmail'),
	        'vclient_phone' => $this->input->post('cPhone'),
	        'vclient_address' => $this->input->post('cAddress'),
	        'vclient_tole' => $this->input->post('cTole'),
	        'vclient_description' => $this->input->post('cDescription'),
	    );

	    $this->db->where('vclient_id',$client_id);
	    $this->db->update('vclient',$data);
	    if ($this->db->affected_rows()==1) {
	    	return TRUE;
	    }
	    else{
	    	return FALSE;
	    }
        }
}

?>
