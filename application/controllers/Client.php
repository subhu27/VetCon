<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      		$this->load->model('Farm_model');
      		$this->load->model('Client_model');
       		$this->load->model('User_model');
            $this->load->library('form_validation');
       		$userCheck = $this->user_handler->isSuperAdmin();
        if ($userCheck === FALSE ) {
          $this->user_handler->index();
        }
    	}

    	public function index()
    	{
    		$this->load->model('Farm_model');
	    	$farmView['query'] = $this->Farm_model->getFarm();
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/addClient',$farmView);
	    	$this->load->view('backend/backend_footer');

    	}

        public function addClient(){
            $validation = $this->validateClientDetails();
            if($validation === FALSE){
	           $this->index();
	       }
           else{
                $registeration = $this->Client_model->register();
                if ($registeration===TRUE) {
                    return redirect('Client/displayClients');
                }
                else{
                    $this->index();
                }
	       }
    	}

        public function validateClientDetails(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('cFName', 'first Name', 'trim|required');
            $this->form_validation->set_rules('cLName', 'last Name', 'trim|required');
            $this->form_validation->set_rules('cEmail', 'email', 'trim');
            $this->form_validation->set_rules('cPhone', 'phone Number', 'trim|required|integer|max_length[10]|min_length[10]');
            $this->form_validation->set_rules('cAddress', 'address', 'trim|required');
            $this->form_validation->set_rules('cTole', 'tole', 'trim|required');
            $this->form_validation->set_rules('cFarm', 'Farm Name', 'trim|required');
            $this->form_validation->set_rules('cDesciption', 'Description', 'trim');

            if ($this->form_validation->run() === FALSE){
                return FALSE;
            }
            else{
                return TRUE;
            }          
        }


    	public function displayClients()
    	{
	    	$clientView['query'] = $this->Client_model->getClientDetails();
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/client',$clientView);
	    	$this->load->view('backend/backend_footer');

    	}

    	public function editClient($client_id)
    	{
    		$clientDetails['client'] = $this->Client_model->findClient($client_id);
    		$farmViews['farmView'] = $this->Farm_model->getFarm();
    		$data = array_merge($clientDetails+$farmViews);
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/editClient',$data);
	    	$this->load->view('backend/backend_footer');

    	}


    	public function updateClient($client_id){  
            $validation = $this->validateClientDetails();
            if($validation === FALSE){
               $this->editClient($client_id);
           }
           else{
                $result = $this->Client_model->updateClient($client_id);
                if ($result===TRUE) {
                    return redirect('Client/displayClients');
                }
                else{
                    $this->editClient($client_id);
                } 
    	   }
    	}

        //receives the client, farm and batch details by client id
        public function viewClient($id){
            $check=$this->checkID($id);
            if ($check===TRUE) {
                $allData['details'] = $this->getClientDetails($id);
                $farmData['farm'] = $this->getClientFarm($id);
                $clientData['client'] = $this->getClient($id);
                $data = array_merge($allData+$farmData+$clientData);
                $this->load->view('backend/backend_header_sidebar');
                $this->load->view('backend/clientDetails',$data);
                $this->load->view('backend/backend_footer');
            }
            else{
                show_error('No client data found, please use the appropriate parameters.','404','Not Found');
            }
        }

        //receives the client details by client id
        public function getClient($id){
            $check=$this->checkID($id);
            if ($check===TRUE) {
                $data = $this->Client_model->findClient($id);
                $data = $data->row();
                $data  = array('clientName' =>$data->vclient_fname.' '.$data->vclient_lname,
                    'clientAddress'=> $data->vclient_address.', '.$data->vclient_tole,
                    'clientPhone'=>$data->vclient_phone,
                    'clientEmail'=>$data->vclient_email,
                    'clientDescription'=>$data->vclient_description);
                return $data;
            }
            else{
                show_error('No client data found, please use the appropriate parameters.','404','Not Found');
            }
        }

        //receives the farm details by client id
        private function getClientFarm($id){
            $check=$this->checkID($id);
            if ($check===TRUE) {
                $data = $this->Client_model->getClientDetailsByID($id);
                return $data;
            }
            else{
                show_error('No client data found, please use the appropriate parameters.','404','Not Found');
            }
        }
        //checks is the $id is in the database or not
        private function checkID($id){
            $result = $this->Client_model->checkClientID($id);
            return $result;
        }

        public function getClientDetails($id){
            $details = $this->Client_model->getClientFarmDetails($id);
            return $details;
            //var_dump($details);
            /*
            $client['info']=$this->Client_model->findClient($id);
            $farm['info']=$this->Farm_model->getFarm($id);
            $batch['info']=$this->Batch_mode->getBatch();
            $data = array_merge($client + $farm + $batch);
            */
        }
}


?>