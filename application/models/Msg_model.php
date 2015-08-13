<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msg_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function index(){
		$sql = "SELECT m_id,from_u_id,user.nname as from_nname,m_content,unrd,m_time,s_name FROM msg,user,source WHERE from_u_id=user.id and msg.s_id=source.s_id and to_u_id = ? and msg.s_id!=2";
		$query1 = $this->db->query($sql, $this->session->id);
		$sql = "SELECT m_id,from_u_id,user.nname as from_nname,m_content,unrd,m_time,s_name,a_name FROM msg,user,source,act WHERE from_u_id=user.id and msg.s_id=source.s_id and to_u_id = ? and msg.s_id=2 and act.a_id=msg.a_id";
		$query2 = $this->db->query($sql, $this->session->id);
		return array_merge($query1->result_array(),$query2->result_array());
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
		$sql = "SELECT COUNT(*),s_name FROM msg,source WHERE to_u_id= ? and unrd=1 and msg.s_id=source.s_id GROUP BY msg.s_id";
		if($query = $this->db->query($sql,$this->session->id)){
			return $query->result_array();
		}
	}
}
