<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_handler {
 

	public function __construct()
    {
       	
      $this->CI =& get_instance();
      //$userPost = $this->CI->session->userdata('userPost');
             
    }

  protected $CI;

  
  public function index(){
  
        $userPost = $this->CI->session->userdata('userPost');

          switch($userPost) {

                  case 'Admin':

                    $_SESSION['admin'] = TRUE;
                    $_SESSION['doctor'] = FALSE;
                    $_SESSION['superAdmin'] = FALSE;
                    return redirect('Admin/Admin_dashboard');

                    break;

                  case 'Doctor':

                    $_SESSION['doctor'] = TRUE;
                    $_SESSION['admin'] = FALSE;
                    $_SESSION['superAdmin'] = FALSE;
                    return redirect('Doctor/Doctor_dashboard');

                    break;

                  case 'Super Admin':

                    $_SESSION['superAdmin'] = TRUE;
                    $_SESSION['doctor'] = FALSE;
                    $_SESSION['admin'] = FALSE;
                    return redirect('Dashboard');

                    break;

                  default:

                    return redirect('Login');
                    break;
            
  
      }
    }

    /*
     * checking if the user is of Admin classification or not
    */
    public function isAdmin(){
       $userPost = $this->CI->session->userdata('userPost');
       $logged_in = $this->CI->session->userdata('is_logged_in');
       if ($logged_in === TRUE && $userPost === 'Admin') {

          return TRUE;
        }
        else{
          return FALSE;
        }
      }

        /*
        * checking if the user is of Super Admin classification or not
        */

    public function isSuperAdmin(){
       $userPost = $this->CI->session->userdata('userPost');
       $logged_in = $this->CI->session->userdata('is_logged_in');
       //var_dump($userPost);
       if ($logged_in === TRUE && $userPost === 'Super Admin') {

          return TRUE;
        }
        else{
          return FALSE;
        }


      }

       /* Checking if the user is classified as doctor or not
       */


    public function isDoctor(){
       $userPost = $this->CI->session->userdata('userPost');
       $logged_in = $this->CI->session->userdata('is_logged_in');
       if ($logged_in === TRUE && $userPost === 'Doctor') {

          return TRUE;
        }
        else{
          return FALSE;
        }
      }


        /**
            Checking both all users type
        */
    public function isAnyUser(){
       $userPost = $this->CI->session->userdata('userPost');
       $logged_in = $this->CI->session->userdata('is_logged_in');
       if ($logged_in === TRUE && ($userPost === 'Doctor'  || $userPost === 'Admin'  || $userPost === 'Super Admin')) {

          return TRUE;
        }
        else{
          return FALSE;
        }


    }
}

?>