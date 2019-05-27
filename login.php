<?php

/**
 *  login
 */
class login extends CI_Controller
{
	


	
	public function index()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('uemail','User Email','required|valid_email');
		$this->form_validation->set_rules('pass','password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        
     if ($this->form_validation->run()){

      $uemail=$this-> input -> post('uemail');
       $pass=$this-> input -> post('pass');

      $this->load->model('loginmodel');
      if($this->loginmodel->isvalidate($uemail,$pass))

       {

      	
       $this->load->library('session');
       $this->session ->set_userdata('email',$uemail);

       $this->load->view('dashboard.php');

      }

      
      else{

      	echo "Details not matched";
      }

     }
        else{

        	$this->load->view('login');
        }

	}







	
}

?>