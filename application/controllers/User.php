<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Shanghai');
class User extends CI_Controller {
	public function index()
	{
		if($this->session->id){
			redirect('act');
		}else{
			$this->load->view('welcome');
		}
	}
	public function login()
	{
		if($this->session->id){
			redirect('act');
		}else{
			$data['login_error']='';
			if($this->input->method()=='get'){
				$this->load->view('login',$data);
			}else{
				$this->load->model('user_model');
				if($res=$this->user_model->login()){
					$this->session->set_userdata($res);
					redirect('act');
				}else{
					$data['login_error']='Error Username or Password';
						$this->load->view('login',$data);
				}
			}
		}
	}

	public function signup()
	{
//		if($this->session->id){
//			echo $this->session->email;
//		}else{
		///////////////
			// if($this->input->method()=='get'){
			// 	$this->load->view('signup');
			// }else{
			// 	$this->load->model('user_model');
			// 	$this->load->model('msg_model');
			// 	if($this->user_model->signup()){
			// 		$this->msg_model->welcome_msg();
			// 		echo '<script>alert(/success/);window.location="login";</script>';
			// 	}else{
			// 		$this->load->view('signup');
			// 	}
			// }
		//////////////

			if($this->input->method()=='get'){
				$this->load->view('signup');
			}else{
				$this->load->model('user_model');
				$this->load->model('msg_model');
				if($this->user_model->signup()){
					//$this->msg_model->welcome_msg();
					if($toid = $this->user_model->signid()){
						//var_dump($toid);
						$this->msg_model->welcome_msg($toid);
						echo '<script>alert(/success/);window.location="login";</script>';
					}
					
					//echo '<script>alert(/success/);window.location="login";</script>';
				}else{
					$this->load->view('signup');
				}
			}

//		}
	}
	public function logout()
	{
		session_destroy();
		redirect('');
	}

	public function register(){
		if($this->session->id){
			$this->load->model('user_model');
			if($this->user_model->register()){
				echo "success";
			}
			else{
				$temp = $this->db->error();
				echo "err:".$temp['code'];
			}
		}
		else{
			redirect('');
		}
	}

	public function myinfo($user_id){
		//$user_id = $this->session->id;
		if($this->session->id){
			$this->load->model('user_model');
			if($data = $this->user_model->myinfo_get($user_id)){
				$data['authority'] = ($this->session->id == $user_id ? true : false);			
				//var_dump($data);

				$t['act_arrange'] = $data['act_arrange'];
				$t['act_join'] = $data['act_join'];
				foreach ($data as $k => $d) {
					if(is_array($d)){
						while(count($data[$k]) != 0){
							$data['more'][] = array_pop($data[$k]);
						}
						unset($data[$k]);
					}
				}
				$data['act_arrange'] = $t['act_arrange'];
				$data['act_join'] = $t['act_join'];
				//var_dump($data);

				//按时间降序排序
				foreach ($data['more'] as $d) {
					$time[] = strtotime($d['time']);
				}
				array_multisort($time, SORT_DESC, SORT_STRING, $data['more']);
				//var_dump($data);


				$this->load->view('user_info/user_info',$data);
			}
			else{
				echo "data error";
			}
		}
		else{
			redirect('');
		}
	}
	public function viewcounter($user_id){
		if($this->session->id){
			$this->load->model('user_model');
			$this->user_model->viewcounter($user_id);
		}
		else{
			redirect('');
		}
	}

	public function home(){
		if($this->session->id){
			$this->load->model('user_model');
			$this->load->view('home/home');
		}
		else{
			redirect('');
		}
	}

	public function inv_classify(){
		if($this->session->id){
			$this->load->model('user_model');
			$this->load->view('classify/inv_classify');
		}
		else{
			redirect('');
		}
	}

	public function myinfo1(){
		if($this->session->id){
			$this->load->model('user_model');
			$this->load->view('user_info/user_info1');
		}
		else{
			redirect('');
		}
	}
	public function account_info(){
		if($this->session->id){
			$this->load->model('user_model');
			$data = $this->user_model->myinfo_edit_get();
			$this->load->view('user_info/account_info',$data);
		}
		else{
			redirect('');
		}
	}
	public function myinfo_edit(){
		if($this->session->id){
			$this->load->model('user_model');
			$data = $this->user_model->myinfo_edit_get();
			if($this->input->method()=='get'){
				$this->load->view('user_info/account_info',$data);
			}
			else{
				$this->load->model('user_model');
				if($this->user_model->myinfo_edit()){
					//////////
					$res=$this->user_model->updatesession();
					$this->session->set_userdata($res);
					//////////
					echo '<script>alert(/success/);</script>';
					$data = $this->user_model->myinfo_edit_get();
					$this->load->view('user_info/account_info',$data);
				}	
				else{
					$data = $this->user_model->myinfo_edit_get();
					$this->load->view('user_info/account_info',$data);
				}
			}	
		}
		else{
			redirect('welcome');
		}
	}

//	public function info_post(){
//		$this->load->model('user_model');
//		if($this->session->id){
//			if($this->input->method()=='get'){
//				$this->load->view('personal_info');
//			}else{
//				if($this->user_model->myinfo_edit()){
//					echo '<script>alert(/success/);window.location="myinfo";</script>';
//				}else{
//					echo 'failed';
//				}
//			}
//		}
//	}



	public function message($type=0){
		$this->load->model('msg_model');
		$result = $this->msg_model->index($type);
		$this->msg_model->read($type);
		//var_dump($result);
		$data['empty'] = true;
		$data['empty2'] = true;
		$data['utu_msg'] = array();
		$data['system_msg'] = array();
		if($result){
			foreach ($result as $r) {
				switch($r['s_name']){
					case '用户私信':
					  $tmp = 'utu_msg';
					  $data['empty'] = false;
					  break;
					default:
					  $tmp = 'system_msg';
					  $data['empty2'] = false;
					  break;  
				}
				array_push($data[$tmp],$r);
			}		
		}
		//var_dump($data);

		//$data[] = array_merge($data,$result);
		
		$data['msg_type'][0] = $type;

		$this->load->view('header');
		$this->load->view('message_line_top'.$type);
		$this->load->view('message_detail_list',$data);
		$this->load->view('footer');

		//redirect('Msg');
	}

	public function following($user_id){
		if($this->session->id){
			$this->load->model('user_model');
			if($this->user_model->following($user_id)){
				echo 1;
			}
			else{
				echo 0;
			}
		}
		else{
			redirect('');
		}
	}

	public function follow($user_id=1){
		if($this->session->id){
			if($this->session->id != $user_id){			//A cannot follow A
				$this->load->model('user_model');
				if($this->user_model->follow($user_id)){
					//echo '<script>alert(/follow success/);</script>';
					redirect(base_url("user/myinfo")."/".$user_id);
					return true;
				}
			}
			else
				echo '<script>alert("cant follow your self");</script>';
		}
		else{
			redirect('');
		}
	}

	public function follow_list($type=0){
		if($this->session->id){
			$this->load->model('user_model');
			if($type == 0)
			{
				if($data['arr']=$this->user_model->follower_show($this->session->id)){
					//var_dump($data);
					$this->load->view('header');
					$this->load->view('follow_line_top_ed');
					$this->load->view('followed',$data);
					$this->load->view('footer');
				}
				else{
					$data['arr'] = 123;
					$this->load->view('header');
					$this->load->view('follow_line_top_ed');
					$this->load->view('followed',$data);
					$this->load->view('footer');			
				}
			}
			else{
				if($data['arr']=$this->user_model->followed_show($this->session->id)){
					//var_dump($data);
					$this->load->view('header');
					$this->load->view('follow_line_top_er');
					$this->load->view('follower',$data);
					$this->load->view('footer');
				}
				else{
					$data['arr'] = 123;
					$this->load->view('header');
					$this->load->view('follow_line_top_er');
					$this->load->view('follower',$data);
					$this->load->view('footer');			
				}
			}
		}
		else{
			redirect('');
		}
	}

	public function unfollow($user_id=1){
		if($this->session->id){
			if($this->session->id != $user_id){			//A cannot unfollow A
				$this->load->model('user_model');
				if($this->user_model->unfollow($user_id)){
					//echo '<script>alert(/unfollow success/);</script>';
					redirect(base_url("user/myinfo")."/".$user_id);
					return true;
				}
			}
		}
		else{
			redirect('');
		}
	}
	public function post_photo(){
		if($this->session->id){
			$type=$_FILES["file"]["type"];
			if ((($type == "image/gif") || ($type == "image/jpeg") || ($type == "image/pjpeg")) && ($_FILES["file"]["size"][$i] < 10000)) {
				if ($_FILES["file"]["error"] > 0) echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
				else {
				echo "Upload: " . $_FILES["file"]["name"] . "<br />";
				if (file_exists("upload/" . $_FILES["file"]["name"])) {
					echo $_FILES["file"]["name"][$i] . " already exists. ";
					}
					else {
						move_uploaded_file($_FILES["file"]["tmp_name"],
						"image/photo/" . $this->session->id);
						echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
						}
						}
				  }
			else echo "Invalid file:";
		}else{
			redirect('');
		}
	}
	public function get_newest_follower(){
		if($this->session->id){
			$this->load->model('user_model');
			$data=$this->user_model->follower_show($this->session->id);
			$data=end($data);
		}
		else{
			redirect('');
		}
	}

}
