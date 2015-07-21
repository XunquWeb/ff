<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    public function __construct(){
		parent::__construct();
		$this->load->database();
    }

	public function login(){
		$this->form_validation->set_rules('u', 'Username', 'required|max_length[255]|valid_email');
		$this->form_validation->set_rules('p', 'Password', 'required|min_length[6]|max_length[255]');
		if($this->form_validation->run()){
			$sql = "SELECT id,name,email,phone FROM user WHERE email = ? AND pwd = password( ? ) limit 1";
			$query = $this->db->query($sql, array( $_POST['u'] , $_POST['p'] ));
			if ($query->num_rows() > 0){
				return $query->result_array()[0];
			}
		}
		return 0;
	}
	public function signup(){
		$this->form_validation->set_rules('e', 'Username', 'required|max_length[255]|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('p', 'Password', 'required|min_length[6]|max_length[255]');
		if($this->form_validation->run()){
			$sql = "INSERT INTO user ( email , pwd ) values ( ? , password( ? ))";
			$sql = $this->db->compile_binds($sql, array($_POST['e'],$_POST['p']));
			return $this->db->simple_query($sql);
		}
		return FALSE;
	}

	public function register(){
		$this->form_validation->set_rules('reg_t', 'register_text', 'required|max_length[255]');
		if($this->form_validation->run()){
			$sql = "INSERT INTO reg (u_id, reg_text) values (?, ?)";
			$sql = $this->db->complie_binds($sql, array($this->session->id, $_POST['reg_t']));
			return $this->db->simple_query($sql);
		}
		return FALSE;
	}

	public function myinfo_edit(){
		$this->form_validation->set_rules('nickname','Nickname','required|max_length[14]');
		$this->form_validation->set_rules('school','School','required');
		$this->form_validation->set_rules('major','Major','required');
		$this->form_validation->set_rules('year','Entryy','required');
		$this->form_validation->set_rules('describe','self_describe','required|max_length[30]');
		$this->form_validation->set_rules('birthday','Birthday');
		$this->form_validation->set_rules('home','Home');
		$this->form_validation->set_rules('hobby','Hobby');
		$this->form_validation->set_rules('status','Status');
		if($this->form_validation->run()){
			$sql = "UPDATE user SET nname=?, college=?, major=?, entryy=?, sign=?, birth=?, home=?, hobby=?, estate=? WHERE id=?";
			$sql = $this->db->compile_binds($sql, 
				array($_POST['nickname'],$_POST['school'],$_POST['major'],$_POST['year'],
					$_POST['describe'],$_POST['birthday'],$_POST['home'],$_POST['hobby'],
					$_POST['status'],$this->session->id));
			return $this->db->simple_query($sql);
		}
		return False;
	}

	public function myinfo_get(){
		$sql = "SELECT name,nname,college,major,entryy,sign,birth,home,hobby,estate FROM user WHERE id=?";
		$query = $this->db->query($sql, $this->session->id);
		if ($query->num_rows() > 0){
			return $query->result_array()[0];
		}
		return 0;
	}

}
