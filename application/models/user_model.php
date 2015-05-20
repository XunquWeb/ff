<?php 

class User_model extends CI_Model{
	
	function validate(){
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('user');

		if($query->num_rows() == 1){
			return true;
		}

	}


	function create_user(){
		$user_data = array(
			'username' => $this->input->post('username'),
			'stu_num' => $this->input->post('stu_num'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);

		$sql = <<<TR
			INSERT INTO user(username, stu_num, email, password) 
			VALUES ("{$user_data['username']}", "{$user_data['stu_num']}", "{$user_data['email']}", "{$user_data['password']}")
TR;
		$insert = $this->db->query($sql);
		return $insert;
	}

}





?>
