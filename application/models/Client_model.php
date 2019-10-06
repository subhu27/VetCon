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

        //inserts the client data in the  vclient table
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
	    if ($this->db->affected_rows()===1) {
	    	return TRUE;
	    }
	    else{
	    	return FALSE;
	    }
        }

        //queries vclient table to extract all the data in the client table
        public function getClient()
        {
        	$this->db->from('vclient');
        	$query = $this->db->get();
        	return $query->result();

        }

        //joins vclient and vfarm table gives the client and farm details
        public function getClientDetails()
        {
        	$this->db->select('*');
        	$this->db->from('vclient');
        	$this->db->join('vfarm','vfarm.vfarm_id = vclient.vFarm_vfarm_id');
        	$this->db->order_by('vclient_fname','asc');
        	$query = $this->db->get();
        	return $query->result();
        }

        //get the farm details specifically using the client id, also joins table vclient and vfarm
        public function getClientDetailsByID($id){
        	$this->db->select('*');
        	$this->db->from('vclient');
        	$this->db->join('vfarm','vfarm.vfarm_id = vclient.vFarm_vfarm_id','left');
        	$this->db->where('vclient.vclient_id',$id);
        	$query = $this->db->get();
        	//var_dump($query->result());
        	return $query->row();

        }

        //joins vclient, vfarm and vbatch table and give all the associated results
        public function getClientFarmDetails($id){
        	$this->db->select('*');
        	$this->db->from('vclient');
        	$this->db->join('vfarm','vfarm.vfarm_id = vclient.vFarm_vfarm_id');
        	$this->db->join('vbatch','vbatch.vFarm_vfarm_id = vfarm.vfarm_id');
        	$this->db->where('vclient.vclient_id',$id);
        	$query = $this->db->get();
        	return $query->result();

        }

        //gives the client specific data using the client data from vclient table
        public function findClient($client_id){
        	$this->db->select('*');
        	$this->db->from('vclient');
        	$this->db->where('vclient_id',$client_id);
        	$query = $this->db->get();
        	if (isset($query)) {
        		return $query;
        		# code...
        	}
        	else{
        		return $error="no client found please search";
        	}
        }
        	//needs to use $query->row() function to get the row in the view
        public function checkClientID($id){
        	$this->db->select('vclient_fname','vclient_id');
        	$this->db->from('vclient');
        	$this->db->where('vclient_id',$id);
        	$query = $this->db->get();
        	if($query->num_rows()===1){
        		return TRUE;
        	}
        	else{
        		return FALSE;
        	}

        }	


        //update the client data in vclient table
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
	        'vFarm_vfarm_id' => $this->input->post('cFarm')
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
