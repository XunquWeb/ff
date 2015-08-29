<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msg extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->id){
			redirect('');
		}
    }


    //获取用户所有消息
	public function index(){
		$this->load->model('msg_model');
		$result = $this->msg_model->index();
		//var_dump($result);
		if($result){
			foreach ($result as $r) {
				$data[$r['s_name']][] = $r;
			}		
		}
		else{
			$data['empty'] = true;	
		}
		//var_dump($data);
		$this->load->view('header');
		$this->load->view('message_line_top');
		$this->load->view('message_detail_list',$data);
		$this->load->view('footer');
		
	}


	//发送私信
	public function submit(){
		if($this->input->method()=='post'){
			$this->load->model('msg_model');
			if($this->msg_model->submit()){
				echo 'msg:success';
			}else{
				$error=$this->db->error();
				echo 'err:'.$error['code'];
			}
			
		}else{
			show_404();
		}
	}


	//所有消息ajax的函数，返回各类未读消息的数值,系统消息&用户私信&活动评论
	public function msg_ajax(){
		if($this->input->method() == 'post'){
			$this->load->model('msg_model');
			if($data = $this->msg_model->msg_ajax()){
				//var_dump($data);
				foreach ($data as $r){
					if(isset($r['s_name'])){
						echo $r['COUNT(*)'] . '|';
					}
					else{
						echo '0|';
					}
				}
			}
		}
		else{
			exit('No direct script access allowed');
		}
	}

}
