<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfb_details extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      	}
      

    	public function index()
    	{
    		
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/Cfb_details');
	    	$this->load->view('backend/backend_footer');

    	}

  }


?>