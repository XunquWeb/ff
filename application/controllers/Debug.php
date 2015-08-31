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


	public function test(){
		$array = array(array("name" => "aaaa", "value" => 489, 'time' => "2015-03-31 12:25:30"),
			array("value" => 596, 'time' => "2006-05-03 03:15:24"), 
			array("name" => "cccc", "value" => 25, 'time' => "2014-06-09 05:16:24"),
			array("name" => "dddd", 'time' => "2014-12-09 17:18:24"));
		var_dump($array);

		foreach ($array as $r) {
			$time[] = strtotime($r['time']);
		}
		array_multisort($time, SORT_DESC, SORT_STRING, $array);

		var_dump($array);

	}


}
