<?php

class Login extends CI_Controller{
	
	function index(){
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template', $data);
	
	}

	function validate_credentials(){
		$this->load->model('user_model');
		$query = $this->user_model->validate();
		if($query){
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);

			$this->session->set_userdata($data);
			redirect('site/user_area');
		}

		else{
			$this->index();
		}
	}
	

	function signup(){
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template', $data);
	}


	function create_user(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', '姓名', 'trim|required');
		$this->form_validation->set_rules('stu_num', '学号', 'trim|required');
		$this->form_validation->set_rules('email', '邮箱', 'trim|required');
		$this->form_validation->set_rules('password', '密码', 'trim|required');
		$this->form_validation->set_rules('password2', '确认密码', 'trim|required|matches[password]');

		if($this->form_validation->run() == false){
			$this->signup();
		}
		else{
			$this->load->model('user_model');
			if($query = $this->user_model->create_user()){
				$data['main_content'] = 'signup_success';
				$this->load->view('includes/template', $data);
			}
			else{
				$this->load->view('signup_form');
			}
		}
	}



}


?>
