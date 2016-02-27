<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class User_controller extends REST_Controller {

   	public function getUsers(){
   		$this->load->model('Users_model');
   		$data["users"] = $this->Users_model->readUsers();
   		$this->load->view('Welcome', $data);
   	}

   	function users_post() {
        $params = json_decode(file_get_contents('php://input'), TRUE);
        $this->load->model('Users_model');
        $data = $this->Users_model->readUsers();
         if($data != NULL) {
        	$this->response($data, 200);
        } else {
        	$this->response($data, 404);
        }
   }
}
