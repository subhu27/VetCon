<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
    {
       	parent::__construct();
       	$this->load->model('User_model');
       	$user_status = $this->session->userdata('is_logged_in');
       	if ($user_status == FALSE) {
       		redirect('Login');
       	}
    }

	
	public function index()
	{

		$this->load->helper('url');
		$this->load->view('backend/backend_header_sidebar');
		$this->load->view('backend/dashboard');
		$this->load->view('backend/backend_footer');
	}


}

?>