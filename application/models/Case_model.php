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

       	$date = date('d-m-y');
       	var_dump($date);
       	var_dump($time);
       	$time = time('h-m-s');
       	var_dump($time);
       	$s=$time%(60*60);
       	var_dump($s);
       	  $data = array(
       	  	'vcase_date' => $date,
       	  	'vcase_time' => $time,
	        'vcase_description' => $this->input->post('caDescription'),
	        'vcase_symptoms' => $this->input->post('caSymptoms'),
	        'vcase_diagnosis' => $this->input->post('caDiagnosis'),
	        'vcase_prescription' => $this->input->post('caPrescription'),
	        'vClient_vclient_phone' => $this->input->post('caClient')
	    );
       	  $client = $this->input->post('caClient');
       	  var_dump($client);

	    $this->db->insert('vcase', $data);
	    if ($this->db->affected_rows()==1) {
	    	return redirect('Login');
	    }

       }

}


?>