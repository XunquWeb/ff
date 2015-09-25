<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Shanghai');
class Act extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->id){
			redirect('');
		}
    }


	public function index(){
		$this->load->view('header');
		$this->load->view('channel_act');
		$this->load->view('footer');
	}


	public function display($ch_id=0,$select=0,$state=0){

		$this->load->model('act_model');
		$data['choose']=array($ch_id,$select,$state);
		if($data['row'] = $this->act_model->index($ch_id,$select,$state)){
			//var_dump($data);
			for($i=0; $i<count($data['row']); $i++){
				$r = $data['row'][$i];
				$data['row'][$i]['a_state'] = $this->modifya_state($r['deadline'], $r['start_time'], $r['end_time'], $r['a_state'], $r['a_id']);
			}
			$this->load->view('header');		
			$this->load->view('display_act',$data);
			$this->load->view('footer');
		}
		else{
			//var_dump($data);
			$data['row'] = 0;
			$this->load->view('header');		
			$this->load->view('display_act',$data);
			$this->load->view('footer');

		}

	}
	//不可以先select再排除 否则会有漏选


	//活动列表ajax
	public function display_ajax($ch_id=0, $page=1){
		$this->load->model('act_model');
		if($data['row'] = $this->act_model->display_ajax($ch_id, $page)){
			var_dump($data['row']);
			for($i=0; $i<count($data['row']); $i++){
				$r = $data['row'][$i];
				$data['row'][$i]['a_state'] = $this->modifya_state($r['deadline'], $r['start_time'], $r['end_time'], $r['a_state'], $r['a_id']);
			}
			//json code to echo


		}
		else{
			echo "no more activities";
		}
	}


	//发布活动
	public function submit(){
		if($this->input->method()=='get'){
			$this->load->view('header');
			$this->load->view('submit_act');
			$this->load->view('footer');
		}else{
			//echo $_POST['Title'];
			$this->load->model('act_model');
			if($act_id = $this->act_model->submit()){
				//将组织者加入act_man表
				// if($this->join_in($act_id, 1)){
				// 	//echo '<script>alert("恭喜您，发布成功!");window.location="index";</script>';
				// }
				$url = base_url("act/detail/")."/".$act_id;
				redirect($url);
			}
			else{
				//echo "<script>alert(".$_POST['Title'].");</script>";
				$url = base_url("act/submit");
				echo "<script>alert('请补全填写项');windows.location.href="."'".$url."'"." </script>";
				//redirect($url);
			}
			
		}
		
	}


	//载入活动报名页面
	public function join($a_id=1){
		$this->load->model('act_model');
		if($data = $this->act_model->join($a_id)){
			//var_dump($data);
			$this->load->view('header');
			$this->load->view('join_act',$data);
			$this->load->view('footer');
		}else{

		}
		
	}


	//活动报名submit
	public function join_in($a_id=1,$is_sponsor=0){
		//判断是否已报名
		$this->load->model('act_model');
		if($this->act_model->is_exist($a_id)){
			$url = base_url("act/detail/")."/".$a_id;
			redirect($url);
		}
		else{
			//判断是否是活动发起人
			if($is_sponsor){
				$is_check = 3;
			}
			else{
				//判断该活动是否需要审核
				$is_check = $this->act_model->is_check($a_id);
			}
				
			if($data = $this->act_model->join_in($a_id,$is_check)){
				echo '<script>alert(/join in success/);</script>';
			}else{
				
			}
					
		}


		
	}


	public function my_act(){
			$this->load->model('act_model');
			$this->load->view('header');
			$this->load->view('my_act');
			$this->load->view('footer');

	}

	
	//详细活动内容
	public function detail($a_id=1){
		$this->load->model('act_model');
		if($data = $this->act_model->detail(intval($a_id))){
			//var_dump($data);
			$this->load->view('header');		
			$this->load->view('detail_act',$data);
			//$this->load->view('footer');
		}
				
	}


	public function actlikes($a_id=1)
	{
		$this->load->model('act_model');
		if($state=$this->act_model->actlikes(intval($a_id))){
			//$data["state"] = $state;
			echo $state;
			return true;
		}
				
	}


	//判断并修改活动状态
	public function modifya_state($deadline, $start_time, $end_time, $a_state, $a_id){
		$new_state = 0;
		$current = date("Y-m-d h:i:s");
		if(strtotime($current) <= strtotime($deadline) and $a_state != "求队友"){
			$new_state = "求队友";
		}
		elseif (strtotime($current) > strtotime($deadline) 
			and strtotime($current) < strtotime($start_time)
			and $a_state != "酝酿中") {
			$new_state = "酝酿中";
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


	public function manage_list($ch_id){
		$this->load->model('act_model');
		$data['empty'] = false;
		//var_dump($data);
		if($data['row'] = $this->act_model->index($ch_id)){
			if(count($data['row'])>0){
				for($i=0; $i<count($data['row']); $i++){
					$r = $data['row'][$i];
					$data['row'][$i]['a_state'] = $this->modifya_state($r['deadline'], $r['start_time'], $r['end_time'], $r['a_state'], $r['a_id']);
				}
			}
			else $data['empty'] = true;
			$this->load->view('header_manage_list');		
			$this->load->view('manage_list',$data);
			$this->load->view('footer');
		}
		else{
			$data['empty'] = true;
			$this->load->view('header_manage_list');		
			$this->load->view('manage_list',$data);
			$this->load->view('footer');
		}
	}

	//活动管理界面
	public function manage($a_id=1){
		$this->load->model('act_model');
		if($this->act_model->is_sponsor($a_id)){
			if($data = $this->act_model->manage($a_id)){
					//var_dump($data);
					$i = 0;
					foreach($data as $r)
					{
						$r['am_jointime'] = date("Y-m-d", strtotime($r['am_jointime']));
						$data[$i]['am_jointime']= $r['am_jointime'];
						$i = $i + 1;
					}
					$sr['list'] = $data;
			}
			else{
				$sr['list'] = 0;
			}
			$this->load->view('header_manage',$sr);
			$this->load->view('footer');

		}
		else{
			//redirect没有权限页面
			echo "no authority";
		}
	}

}
