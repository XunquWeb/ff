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
		if($data['row'] = $this->act_model->index(intval($ch_id), intval($page))){
			//var_dump($data);
			for($i=0; $i<10; $i++){
				$r = $data['row'][$i];
				$data['row'][$i]['a_state'] = $this->modifya_state($r['deadline'], $r['start_time'], $r['end_time'], $r['a_state'], $r['a_id']);
			}
			$this->load->view('header');		
			$this->load->view('display_act',$data);
			$this->load->view('footer');
		}

		
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
	
	public function detail($a_id=1)
	{
		$this->load->model('act_model');
		if($data = $this->act_model->detail(intval($a_id))){
			//var_dump($data);
			$this->load->view('header');		
			$this->load->view('detail_act',$data);
			$this->load->view('footer');
		}
				
	}

	public function actlikes($a_id=1)
	{
		$this->load->model('act_model');
		if($this->act_model->actlikes(intval($a_id))){
			return true;
		}
				
	}

	//判断并修改活动状态
	public function modifya_state($deadline, $start_time, $end_time, $a_state, $a_id){
		$new_state = 0;
		$current = date("Y-m-d h:i:s");
		if(strtotime($current) <= strtotime($deadline) and $a_state != "报名中"){
			$new_state = "报名中";
		}
		elseif (strtotime($current) > strtotime($deadline) 
			and strtotime($current) < strtotime($start_time)
			and $a_state != "待进行") {
			$new_state = "待进行";
		}
		elseif (strtotime($current) >= strtotime($start_time) 
			and strtotime($current) <= strtotime($end_time)
			and $a_state != "进行中") {
			$new_state = "进行中";
		}
		elseif(strtotime($current) > strtotime($end_time) and $a_state != "已结束"){
			$new_state = "已结束";
		}

		if($new_state){
			$this->load->model('act_model');
			if($this->act_model->modifya_state($new_state, $a_id)){
				return $new_state;
			}
		}
		else{
			$new_state = $a_state;
			return $new_state;
		}

	}

}
