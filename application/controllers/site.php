<?php
class Site extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}


	function user_area(){
		$this->load->view('user_area');
	}

	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in != true){
			echo '<a href="../login/index">请重新登录</a>';
			die();
		}
	}

}

?>
