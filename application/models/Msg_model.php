<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msg_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function index($type){
		$sql = "SELECT m_id,from_u_id,user.nname as from_nname,m_content,unrd,m_time,s_name FROM msg,user,source WHERE from_u_id=user.id and msg.s_id=source.s_id and to_u_id = ? and msg.s_id!=2";
		$query1 = $this->db->query($sql, $this->session->id);
		$sql = "SELECT m_id,from_u_id,user.nname as from_nname,m_content,unrd,m_time,s_name,a_name FROM msg,user,source,act WHERE from_u_id=user.id and msg.s_id=source.s_id and to_u_id = ? and msg.s_id=2 and act.a_id=msg.a_id";
		$query2 = $this->db->query($sql, $this->session->id);
		return array_merge($query1->result_array(),$query2->result_array());
	}

	public function read($type){
		if($type == 1){
			$sql = "UPDATE msg SET unrd = 0 WHERE s_id = 1 and to_u_id = ?";
			$this->db->query($sql,array($this->session->id));
		}
		if($type == 2){
			$sql = "UPDATE msg SET unrd = 0 WHERE s_id!=1 and to_u_id = ?";
			$this->db->query($sql,array($this->session->id));
		}
	}

	public function submit(){
		$this->form_validation->set_rules('tid', 'tid', 'required|integer');
		$this->form_validation->set_rules('data', 'data', 'required|max_length[60000]|');
		if($this->form_validation->run()){
			$sql = "INSERT INTO msg (from_u_id,to_u_id,data) values ( ? , ? , ? )";
			$sql = $this->db->compile_binds($sql,$this->session->id,$_POST['tid'],$_POST['data']);
			return $this->db->simple_query($sql);
		}
		return FALSE;	
	}

	public function msg_ajax(){
		$sql = "SELECT COUNT(*),s_name FROM msg,source WHERE to_u_id= ? and unrd=1 and msg.s_id=source.s_id";
		if($query = $this->db->query($sql,$this->session->id)){
			return $query->result_array();
		}
	}

	public function welcome_msg(){
		$text = "欢迎注册，寻找身边的乐趣从这里开始！";
		$sql = "INSERT INTO msg(s_id, unrd,m_content,from_u_id,to_u_id) VALUES (0, 1,?,2,?);";
		$this->db->query($sql,array($text,$this->session->id));
	}
}
