<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Case_model extends CI_Model 
{


		public function __construct()
    	{
	        parent::__construct();
	        $this->load->model('Farm_model');
	        $this->load->helper('url_helper');
        }


        public function getFarm()
        {
        $this->db->from('vcase');
		$this->db->order_by('vcase_time','asc');
		$query = $this->db->get();
		return $query->result();


        }



       public function register()
       {
       	//$time= time('h-m-s');
       	$date = time();
       	  $data = array(
       	  	'vcase_date' => $date,
	        'vcase_description' => $this->input->post('caDescription'),
	        'vcase_symptoms' => $this->input->post('caSymptoms'),
	        'vcase_diagnosis' => $this->input->post('caDiagnosis'),
	        'vcase_prescription' => $this->input->post('caPrescription'),
	        'vClient_vclient_id' => $this->input->post('caClient')
	    );
       	  //$client = $this->input->post('caClient');
       	  //var_dump($client);

	    $this->db->insert('vcase', $data);
	    if ($this->db->affected_rows()==1) {
	    	$id = $this->db->insert_id();
	    	$data  = array(
	    		'vCase_vcase_id' => $id,
	    		'vDisease_vdisease_id' => $this->input->post('caDisease')
	    	);
	    	$this->db->insert('vcase_has_vdisease', $data);
	    	return redirect('Login');

	    }

       }

}


?>