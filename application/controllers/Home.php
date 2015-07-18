<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function home(){
		if($this->session->id){
			$this->load->model('user_model');
			$this->load->view('home/home');
		}
		else{
			redirect('');
		}
	}
}
