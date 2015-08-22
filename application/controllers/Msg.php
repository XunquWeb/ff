<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msg extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		if(!$this->session->id){
			redirect('');
		}
    }

    //获取用户所有消息
	public function index()
	{
		$this->load->model('msg_model');
		if($result = $this->msg_model->index()){
			//var_dump($result);
			foreach ($result as $r) {
				$data[$r['s_name']][] = $r;
			}
			//var_dump($data);
			$this->load->view('header');
			$this->load->view('message_line_top');
			$this->load->view('message_detail_list',$data);//it's not the page display after you click the particular message;
			$this->load->view('footer');
		}
		
	}

	public function submit()
	{
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

	//所有消息ajax的函数，返回各类未读消息的数值
	public function msg_ajax(){
		$this->load->model('msg_model');
		if($data = $this->msg_model->msg_ajax()){
			//var_dump($data);
			foreach ($data as $r) {
				echo $r['s_name'] . '&' . $r['COUNT(*)'] . '#';
			}
		}
	}

}
