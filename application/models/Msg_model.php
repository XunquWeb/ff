<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Msg_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}
	public function index(){
		$sql = "SELECT * from msg WHERE to_u_id = ?";
		$query = $this->db->query($sql,array($this->session->id));
		return $query->result_array();
	}
//	public function signup(){
//		$this->form_validation->set_rules('e', 'Username', 'required|max_length[255]|valid_email|is_unique[user.email]');
//		$this->form_validation->set_rules('p', 'Password', 'required|min_length[6]|max_length[255]');
//		if($this->form_validation->run()){
//			$sql = "INSERT INTO user ( email , pwd ) values ( ? , password( ? ))";
//			$sql = $this->db->compile_binds($sql, array($_POST['e'],$_POST['p']));
//			return $this->db->simple_query($sql);
//		}
//		return FALSE;
//	}
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
}
