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
	public function manage()
	{
		$this->load->view('header');
		$this->load->view('manage_act');
		$this->load->view('footer');
	}
	public function test()
	{
		if("dab"){
			$zero1 = date("Y-m-d h:i:s");
			$zero2 = "2015-08-08 21:07:00";
			echo "zero1的时间为：" . $zero1 . "<br>";
			echo "zero2的时间为：" . $zero2 . "<br>";
			if(strtotime($zero1) < strtotime($zero2)){
				echo "zero1早于zero2";
			}else{
				echo "zero2早于zero1";
			}
		}
	}
}
