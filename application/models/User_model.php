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
			$sql = "SELECT id,name,nname,email,phone,sign,rating FROM user WHERE email = ? AND pwd = password( ? ) limit 1";
			$query = $this->db->query($sql, array( $_POST['u'] , $_POST['p'] ));
			if ($query->num_rows() > 0){
				return $query->result_array()[0];
			}
		}
		return 0;
	}
	public function updatesession(){
		
			$sql = "SELECT name,nname,email,phone,sign,rating FROM user WHERE id = ?  limit 1";
			$query = $this->db->query($sql, array( $this->session->id ));
			if ($query->num_rows() > 0){
				return $query->result_array()[0];
			}	
			else return 0;
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
		$this->form_validation->set_rules('info_school','School');
		$this->form_validation->set_rules('info_major','Major');
		$this->form_validation->set_rules('signature','self_describe','required|max_length[30]');
		$this->form_validation->set_rules('info_sex','Info_sex');
		$this->form_validation->set_rules('info_date','Info_date');
		$this->form_validation->set_rules('info_home','Home');
		$this->form_validation->set_rules('info_hobby','Hobby');
		$this->form_validation->set_rules('info_contact','Contact');
		$this->form_validation->set_rules('info_state','Status');
		$this->form_validation->set_rules('info_contact','Phone');
		if($this->form_validation->run()){
			$sql = "UPDATE user SET nname=?, college=?, major=?, constellation=?, sign=?,  home=?, hobby=?, estate=?, sex=?, phone=? WHERE id=?";
			$sql = $this->db->compile_binds($sql, 
				array($_POST['nickname'],$_POST['info_school'],$_POST['info_major'],$_POST['info_date'],
					$_POST['signature'],$_POST['info_home'],$_POST['info_hobby'],
					$_POST['info_state'],$_POST['info_sex'],$_POST['info_contact'],$this->session->id));
			return $this->db->simple_query($sql);
		}
		return False;
	}

	public function myinfo_edit_get(){
		$sql = "SELECT name,sex,nname,college,major,entryy,sign,birth,home,hobby,estate,constellation,phone FROM user WHERE id=?";
		$query = $this->db->query($sql, $this->session->id);
		if ($query->num_rows() > 0){
			return $query->result_array()[0];
		}
		return 0;
	}

	public function myinfo_get($user_id){
		//用户基本信息
		$sql = "SELECT id,nname,sex,college,major,entryy,sign,birth,home,hobby,estate,email,follow_num,browse_num,constellation,phone FROM user WHERE id=?";
		$query = $this->db->query($sql, $user_id);
		if ($query->num_rows() > 0){
			$t = $query->result_array();
			
			//组织的活动
			$sql = "SELECT a_id,a_name,start_time as time,extra,'act_arrange' as type FROM act WHERE u_id =?";
			$query = $this->db->query($sql, $user_id);
			$temp['act_arrange'] = $query->result_array();

			//参与的活动
			$sql = "SELECT a_id,a_name,start_time as time,extra,'act_join' as type FROM act WHERE act.a_id in (SELECT act_man.a_id FROM act_man WHERE u_id=? and am_state<>?)";
			$query = $this->db->query($sql, array($user_id,3));
			$temp['act_join'] = $query->result_array();

			//用户的签名更改
			$sql = "SELECT sn_content, sn_time as time, 'sign_change' as type FROM sign WHERE u_id =?";
			$query = $this->db->query($sql, $user_id);
			$temp['sign_change'] = $query->result_array();

			//用户发布的状态
			$sql = "SELECT us_content, us_time as time, 'user_state' as type FROM user_state WHERE u_id =?";
			$query = $this->db->query($sql, $user_id);
			$temp['user_state'] = $query->result_array();

			//广场发起的消息（不包括评论）
			$sql = "SELECT m_content, m_time as time, 'forum' as type FROM msg WHERE from_u_id =? and s_id=? and floor=?";
			$query = $this->db->query($sql, array($user_id, 3, 0));
			$temp['forum'] = $query->result_array();

			//用户关注
			$sql = "SELECT followed_id,nname,f_time as time,'follow' as type FROM follow,user WHERE user.id=follow.followed_id and follower_id=?";
			$query = $this->db->query($sql, $user_id);
			$temp['follow'] = $query->result_array();
			//更新用户关注数量
			$sql = "SELECT * FROM follow where followed_id=?";
			$query = $this->db->query($sql,$user_id);
			$follownum = $query->num_rows();
			$sql = "UPDATE user set follow_num=? where id=? ";
			$query = $this->db->query($sql, array( $follownum, $user_id));
			$temp['follow_num'] = $follownum;

			$query = array_merge($t[0],$temp);
			return $query;
		}
		return 0;
	}

	public function followed_show($user_id){
		$sql="SELECT follow.followed_id,follow.follower_id,user.name AS followedname, user.sign AS sign FROM follow LEFT JOIN user ON follow.follower_id = user.id WHERE follow.followed_id= ?";
		$query=$this->db->query($sql, array($user_id));
			if ($query->num_rows() > 0){
				return $query->result_array();
			}
		return 0;
	}

	public function follower_show($user_id){
		$sql="SELECT follow.followed_id,follow.follower_id,user.name AS followername, user.sign AS sign FROM follow LEFT JOIN user ON follow.followed_id = user.id WHERE follow.follower_id= 11";
		$query=$this->db->query($sql, array($user_id));
			if ($query->num_rows() > 0){
				return $query->result_array();
			}
		return 0;
	}


	public function following($user_id){
		$sql = "SELECT * FROM follow WHERE follower_id = ? and followed_id = ?";
		$query = $this->db->query($sql, array($this->session->id, $user_id));
		if ($query->num_rows() > 0){
			return true;
		}
		else return false;
	}

	public function follow($user_id){
		$sql = "INSERT INTO follow(follower_id,followed_id) VALUES (? , ?)";
		return $this->db->query($sql, array($this->session->id, $user_id));

	}

	public function unfollow($user_id){
		$sql = "DELETE FROM follow WHERE follower_id = ? and followed_id = ?";
		return $this->db->query($sql, array($this->session->id, $user_id));
	}

	public function viewcounter($user_id){
		$sql = "UPDATE user SET browse_num = browse_num+1 where id = ?";
		return $this->db->query($sql,$user_id);
	}
}
