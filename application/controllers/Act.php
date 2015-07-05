<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Act extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		if(!$this->session->id){
			redirect('');
		}
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('channel_act');
		$this->load->view('footer');
	}

	public function display($ch_id=0, $page=0)
	{
		//var_dump($ch_id);

		$this->load->model('act_model');
		if($data = $this->act_model->index(intval($ch_id), intval($page))){
			foreach($data as $row){
				//var_dump($row);
				//echo $row['u_id'].'&'.$row['name'].'#';
		 	}
		}

		$this->load->view('header');		
		$this->load->view('display_act');
		$this->load->view('footer');
	}

	public function submit()
	{

			if($this->input->method()=='get'){
				$this->load->view('header');
				$this->load->view('submit_act');
				$this->load->view('footer');
			}else{
				$this->load->model('act_model');
				$this->act_model->submit();
			}
		
	}
	public function join()
	{
		
			$this->load->model('act_model');
			if($this->act_model->join()){
				echo 'success';
			}else{
				echo 'failed';
			}
		
	}
	public function my_act()
	{
			$this->load->model('act_model');
			$this->load->view('header');
			$this->load->view('my_act');
			$this->load->view('footer');

	}

}
