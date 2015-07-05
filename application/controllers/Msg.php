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

}
