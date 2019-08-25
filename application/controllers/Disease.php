<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disease extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      		$this->load->model('Disease_model');
       		$this->load->model('User_model');
       		$user_status = $this->session->userdata('is_logged_in');
       		if ($user_status == FALSE) 
       		{
       			redirect('Login');
       		}
    	}

    	public function index()
    	{
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/addDisease');
	    	$this->load->view('backend/backend_footer');

    	}

    	public function display()
    	{
    		$result_rows['query'] = $this->Disease_model->getDisease();
    		$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/disease',$result_rows);
	    	$this->load->view('backend/backend_footer');
    	}

    	public function addDisease()
    	{
	    	$this->load->library('form_validation');
			$this->form_validation->set_rules('dName', 'Disease Name', 'trim|required');
	    	$this->form_validation->set_rules('dDescription', 'dDescription', 'trim|required');
	    	$this->form_validation->set_rules('dSymptoms', 'Disease Symptoms', 'trim|required');

	    	if ($this->form_validation->run() === FALSE)
	    	{
	            $this->index();
		     }
		     else{
		     	$this->Disease_model->register();
	            $this->index();
	             }
    	}



    	public function editDisease($disease_id)
    	{

    	$this->load->view('backend/backend_header_sidebar');
    	/*$this->load->view('backend/edit_user');*/
    	
    	$this->load->view('backend/backend_footer');
    	$this->load->model('Disease_model');
         $edit=$this->Disease_model->findDisease($disease_id);
         $this->load->view('backend/editDisease',['disease'=>$edit]);

    	}
    	
    public function updateDisease($disease_id)
    {

    	$this->load->model('Disease_model');
    	$result = $this->Disease_model->updateDisease($disease_id);
    	if ($result===TRUE) {
    		return redirect('Disease/display');
    	}
    	else{
    		$this->editDisease($disease_id);

    	 
    	}
    }

    public function deleteDisease($disease_id){

    	//$this->load->model('')
    	$delete = $this->Disease_model->deleteDisease($disease_id);

	}

}


?>