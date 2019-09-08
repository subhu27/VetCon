<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Handler {


	public function __construct()
    {
       	
        /*
        parent::__construct();
        //$this->load->library('session');
       	$user_status = $this->session->userdata('is_logged_in');
       	$superAdmin = $this->session->userdata('superAdmin');
        $admin = $this->session->userdata('admin');
        $doctor = $this->session->userdata('doctor');
        $userPost = $this->session->userdata('userPost');
        */
        
    }

    public function index(){
  
        $user_status = $this->session->userdata('is_logged_in');
        $superAdmin = $this->session->userdata('superAdmin');
        $admin = $this->session->userdata('admin');
        $doctor = $this->session->userdata('doctor');
        $userPost = $this->session->userdata('userPost');

        switch($userPost) {
                case 'Admin':
                  $_SESSION['admin'] = TRUE;
                  return redirect('Admin');
                  break;

                case 'Doctor':
                  $_SESSION['doctor'] = TRUE;
                  return redirect('Doctor');
                  break;

                case 'Super Admin':
                  $_SESSION['superAdmin'] = TRUE;
                  return redirect('Dashboard');
                  break;
        }
    }
}

?>