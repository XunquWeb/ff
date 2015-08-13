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

	public function index()
	{
		if($this->input->method()=='post'){
				$this->load->model('msg_model');
				if($res= $this->msg_model->index()){
					foreach($res as $row){
						echo $row['from_u_id'].'&'.$row['to_u_id'].'&'.urlencode($row['data']).'&'.$row['time'].'#';
					}
				}
			
		}else{
			show_404();
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
			foreach ($data as $row) {
				switch (intval($row['source'])) {
					case 0:echo '系统消息&' . $row['COUNT(*)'] . '#';break;
					case 1:echo '用户私信&' . $row['COUNT(*)'] . '#';break;
					case 2:echo '活动评论&' . $row['COUNT(*)'] . '#';break;
					case 3:echo '广场消息&' . $row['COUNT(*)'] . '#';break;
					default:echo 'error';break;
				}
			}
			
			
		}
	}

}
