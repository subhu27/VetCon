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


       public function findDisease($disease_id){
		$data=$this->db->where ('vdisease_id',$disease_id)
        ->get('vdisease');
        return $data->row();
	}

	public function updateDisease($disease_id)
	{
	    $data = array(
	        'vdisease_name' => $this->input->post('dName'),
	        'vdisease_symptoms' => $this->input->post('dSymptoms'),
	        'vdisease_description' => $this->input->post('dDescription')
	    );

	    $this->db->where('vdisease_id',$disease_id);
	    $this->db->update('vdisease',$data);
	    if ($this->db->affected_rows()==1) {
	    	return TRUE;
	    }
	    else{
	    	return FALSE;
	    }
	}


	public function deleteDisease($disease_id)
	{
		$this->db->where('vdisease_id',$disease_id);
		$this->db->delete('vdisease');
		return redirect('Disease/display');
	}



}


?>