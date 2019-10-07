<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch_model extends CI_Model 
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
	        'vbatch_start_date' => $this->input->post('bSDate'),
	        'vbatch_end_date' => $this->input->post('bEDate'),
	        'vbatch_type' => $this->input->post('bType'),
	        'vbatch_death' => $this->input->post('bDeath'),
	        'vbatch_flocks' => $this->input->post('bFlock'),
	        'vbatch_heads' => $this->input->post('bHeads'),
	        'vFarm_vfarm_id' => $this->input->post('bFarm')
	    );

	    $this->db->insert('vbatch', $data);
	    if ($this->db->affected_rows()==1) {
	    	return redirect('Login');
	    }

       }

       public function getBatchData($id){
       	$this->db->select('*');
       	$this->db->from('vbatch');
  		$this->db->where('vbatch_id',$id);
  		$query = $this->db->get();
  		return $query->result();

       }

}


?>