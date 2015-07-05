<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		if(!$this->session->id){
			die("err:login");
		}else if(!($this->input->method()=='post')){
			show_404();
		}
    }

	public function get_act_para(){
				$this->load->model('act_model');
				if($res=$this->act_model->get_para()){
					echo "data:";
					foreach($res as $row){
						echo $row['name'].'&'.$row['tag'].'&'.$row['view'].'#';
					}
				}else{
					echo 'err:unknown';
				}
	}

	public function get_unrd_msg()
	{
				$this->load->model('msg_model');
				if($res= $this->msg_model->index()){
					foreach($res as $row){
						echo $row['from_u_id'].'&'.$row['to_u_id'].'&'.urlencode($row['data']).'&'.$row['time'].'#';
					}
				}	
	}

	public function send_msg()
	{
				$this->load->model('msg_model');
				if($this->msg_model->submit()){
					echo 'msg:success';
				}else{
					$error=$this->db->error();
					echo 'err:'.$error['code'];
				}
	}

}
