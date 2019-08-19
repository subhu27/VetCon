<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farm_model extends CI_Model 
{


		public function __construct()
    	{
	        parent::__construct();
	        $this->load->model('Farm_model');
	        $this->load->helper('url_helper');
        }


        public function getFarm()
        {
        $this->db->from('vfarm');
		$this->db->order_by('vfarm_name','asc');
		$query = $this->db->get();
		return $query->result();


        }



       public function register()
       {
       	  $data = array(
	        'vfarm_name' => $this->input->post('faName'),
	        'vfarm_address' => $this->input->post('faAddress'),
	        'vfarm_tole' => $this->input->post('faTole'),
	        'vfarm_estd' => $this->input->post('faEst')
	    );

	    $this->db->insert('vfarm', $data);
	    if ($this->db->affected_rows()==1) {
	    	return redirect('Login');
	    }

       }

}


?>