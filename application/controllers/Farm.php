<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {


	public function __construct()
    {
       	parent::__construct();
       	$this->load->model('Farm_model');
       	$this->load->model('User_model');
       	$user_status = $this->session->userdata('is_logged_in');
       	if ($user_status == FALSE) {
       		redirect('Login');
       	}
    }




    public function selectFarm()
    {
    	$data = $this->Farm_model->getFarm();
    	return $data;

    }

    public function dropdownFarm()
    {
    	$farmView = $this->selectFarm();
    	$this->load->view('backend/backend_header_sidebar');
    	$this->load->view('backend/addClient',$farmView);
    	$this->load->view('backend/backend_footer');
    }

}

?>