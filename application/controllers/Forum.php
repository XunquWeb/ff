<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->id){
			redirect('');
		}
    }

	public function public_forum(){
		$this->load->model('forum_model');
		if($data = $this->forum_model->index()){
			//var_dump($data);
			$this->load->view('header');
			$this->load->view('public_forum',$data);
			$this->load->view('footer');
		}
		
	}

	public function forum_comment_ajax($m_id){
		$this->load->model('forum_model');
		if($result = $this->forum_model->forum_comment_ajax($m_id)){
			//var_dump($result);
			foreach ($result as $row) {
				if(intval($row['floor']) == 1){
					$data[] = $row;
					foreach ($result as $r) {
						if(intval($r['floor']) == 2 and intval($r['rp_id']) == intval($row['m_id'])){						
							$data[count($data)-1]['more'][] = $r;
						}
					}
				}
			}
			//var_dump($data);
			foreach ($data as $value) {
				var_dump($value);
			}
			
			/*
			//ajax输出，但有一些问题，需讨论
			foreach ($data as $d) {
				echo $d['m_id'].'|'.$d['from_u_id'].'|'.$d['from_nname'].'|'.$d['to_u_id']
					.'|'.$d['to_nname'].'|'.$d['m_content'].'|'.$d['m_time'].'|'.$d['rp_id']
					.'|'.$d['floor'].'&';
				foreach ($d['more'] as $v) {
					echo $v['m_id'].'|'.$v['from_u_id'].'|'.$v['from_nname'].'|'.$v['to_u_id']
					.'|'.$v['to_nname'].'|'.$v['m_content'].'|'.$v['m_time'].'|'.$v['rp_id']
					.'|'.$v['floor'].'&';
				}
				echo '#';
			}
			*/
		}
		else{
			echo "no comments";
		}
	}

	public function history_ajax($page=1){
		$this->load->model('forum_model');
		if($data = $this->forum_model->history_ajax($page)){
			//var_dump($data);
			foreach ($data as $r) {
				echo $r['m_id'].'&'.$r['nname'].'&'.$r['from_u_id'].'&'.$r['m_content'].'&'.$r['m_time'].'#';
			}
		}
		else{
			echo "no more history";
		}
	}

	public function new_message_ajax(){
		$this->load->model('forum_model');
		if($data = $this->forum_model->new_message_ajax()){
			//var_dump($data);
			foreach ($data as $r) {
				echo $r['m_id'].'&'.$r['nname'].'&'.$r['from_u_id'].'&'.$r['m_content'].'&'.$r['m_time'].'#';
			}
		}
		else{
			echo "no new message";
		}
	}

}
