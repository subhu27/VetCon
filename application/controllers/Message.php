<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      		$this->load->model('Message_model');
       		$this->load->model('User_model');
       		$this->load->library('form_validation');
          $userCheck = $this->user_handler->isSuperAdmin();
        if ($userCheck === FALSE ) {
          $this->user_handler->index();
        }
       		
    	}

    	public function index()
    	{
    		$user_status = $this->session->userdata('is_logged_in');
       		if ($user_status != TRUE ) 
       		{
       			return redirect('Login');
       		}
       		else{

	    		$messageView['query'] = $this->Message_model->getMessage();
	    		//$this->changeDate($messageView);
	    		$this->load->view('backend/backend_header_sidebar');
	    		$this->load->view('backend/messageView',$messageView);
	    		$this->load->view('backend/backend_footer');
	    		//var_dump($messageView);
	   		}


    	}

    	/*
    	public function changeDate($messages){
    		$formatedTime=[];
    		$dateString = $datestring = 'Day: %d Month: %m  Year: %Y';
    		echo "<br> <br> from change date function dumping the array";
    		//var_dump($messages);
    		//$messagesRow = $messages->row();
    		echo "<br> <br> after getting the messages->row <br>";
    		//var_dump($messagesRow);
    		$i=0;

    		foreach ($messages as $message) {
    			$newTime = $message->vmessage_timestamp;
    			$newTime = mdate($datestring,$newTime);
    			$formatedTime[$i] = $newTime;
    		}
    		var_dump($formatedTime);
    	}

    	*/

}


?>