<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Handler {


  protected $CI;
 

	public function __construct()
    {
       	
      $this->CI =& get_instance();
             
    }

  
  public function index(){
  
          $userPost = $this->CI->session->userdata('userPost');

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