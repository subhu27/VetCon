<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Handler {


  protected $CI;
  var $user_status;
  protected $superAdmin;
  protected $admin;
  protected $doctor;
  var $userPost;

	public function __construct()
    {
       	
      $this->CI =& get_instance();
      $user_status = $this->CI->session->userdata('is_logged_in');
      $superAdmin = $this->CI->session->userdata('superAdmin');
      $admin = $this->CI->session->userdata('admin');
      $doctor = $this->CI->session->userdata('doctor');
      $userPost = $this->CI->session->userdata('userPost');        
    }

  
  public function index(){
  
    $userPost = $this->CI->session->userdata('userPost')
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