<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      	}
      

    	public function index()
    	{
    		
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/Cases');
	    	$this->load->view('backend/backend_footer');

    	}

  }


?>