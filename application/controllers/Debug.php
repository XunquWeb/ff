<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debug extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('channel_act');
		$this->load->view('footer');
	}
	public function display()
	{
		$this->load->view('header');
		$this->load->view('display_act');
		$this->load->view('footer');
	}
	public function personal()
	{
		$this->load->view('personal_info');
		$this->load->view('footer');
	}
	public function homehome()
	{
		$this->load->view('home/home');
		$this->load->view('footer');
	}
}
