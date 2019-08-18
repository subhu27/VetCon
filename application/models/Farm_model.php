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

}


?>