<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		if(!$this->session->id){
			redirect('');
		}
    }

	public function public_forum()
	{
		$this->load->view('header');
		$this->load->view('public_forum');
		$this->load->view('footer');
	}



}
