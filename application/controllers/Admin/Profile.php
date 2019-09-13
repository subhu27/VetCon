<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function __construct()
    {
       	parent::__construct();
       	$this->load->model('User_model');
       	$this->load->helper('date');
        $this->load->library('form_validation');
       	$userCheck = $this->user_handler->isAdmin();
       	if ($userCheck === FALSE ) {
       		$this->user_handler->index();
       	}

    }

  public function editUserProfile(){
      $vuser_email = $this->session->userdata('userEmail');
      $this->load->view('backend/admin/adminDashboardHeaderSidebar');
      $edit=$this->User_model->find_user($vuser_email);
      $this->load->view('backend/edit_user',['user'=>$edit]);
      $this->load->view('backend/admin/adminFooter');
      
      
    }

  }



?>