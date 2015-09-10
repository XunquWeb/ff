<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Act_model extends CI_Model {


	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


	public function index($ch_id=0){
		if($ch_id == 0){
			$sql = "SELECT * FROM act,type WHERE act.t_id=type.id ORDER BY act.a_id DESC limit 10";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		else{
			$sql = "SELECT * FROM act,type WHERE act.t_id=? and act.t_id=type.id ORDER BY act.a_id DESC limit 10";
			$query = $this->db->query($sql,array($ch_id));
			return $query->result_array();
		}
		
	}


	public function display_ajax($ch_id=0,$page=1){
		if($ch_id == 0){
			$sql = "SELECT * FROM act,type WHERE act.t_id=type.id ORDER BY act.a_id DESC limit ?,10";
			$query = $this->db->query($sql, array(10*$page));
			return $query->result_array();
		}
		else{
			$sql = "SELECT * FROM act,type WHERE act.t_id=? and act.t_id=type.id ORDER BY act.a_id DESC limit ?,10";
			$query = $this->db->query($sql,array($ch_id, 10*$page));
			return $query->result_array();
		}
	}


	public function detail($a_id){
		$sql = "UPDATE act SET browse=browse+1 WHERE a_id= ? ";			//浏览量 + 1
		$result = $this->db->compile_binds($sql, $a_id);
		if($this->db->simple_query($result)){
			//获取活动基本信息
			$sql = "SELECT a_id,u_id,user.name,a_name,deadline,create_time,start_time,end_time,extra,place,max_num,join_num,t_name,a_state,browse,a_like,share 
				FROM act,type,user WHERE act.t_id=type.id and user.id=act.u_id and act.a_id=? limit 1";
			$query1 = $this->db->query($sql, array($a_id));
			
			//获取活动参与者信息
			$sql = "SELECT user.nname,user.id FROM user WHERE user.id in (SELECT act_man.u_id FROM act,act_man WHERE act.a_id=act_man.a_id and act.a_id=?)";
			$query2 = $this->db->query($sql, array($a_id));
			$temp['involves'] = $query2->result_array();
			
			//获取活动点赞者信息
			$sql = "SELECT nname,user.id FROM user WHERE user.id in (SELECT act_likes.u_id FROM act_likes WHERE act_likes.a_id= ? ) limit 10";
			$query3 = $this->db->query($sql, array($a_id));
			$temp['likes'] = $query3->result_array();

			//获取活动评论者信息
			$sql = "SELECT A.nname as from_nname,B.nname as to_nname,m_content,m_time FROM user as A,user as B,msg WHERE A.id=msg.from_u_id and B.id=msg.to_u_id and msg.s_id=2 and msg.a_id=? ORDER BY m_time DESC";
			$query4 = $this->db->query($sql, array($a_id));
			$temp['comments'] = $query4->result_array();
			$query = array_merge($query1->result_array()[0],$temp);

			return $query;
		}
	}


	//点赞
	public function actlikes($a_id){
		$sql = "INSERT INTO act_likes (u_id,a_id) values ( ? , ? )";
		$result = $this->db->compile_binds($sql, array($this->session->id, $a_id));
		return $this->db->simple_query($result);
	}


	public function submit(){
		$this->form_validation->set_rules('Title','title','required|max_length[50]');
		$this->form_validation->set_rules('Deadline','deadline','required');
		$this->form_validation->set_rules('Start','start_time','required');
		$this->form_validation->set_rules('End','end_time','required');
		$this->form_validation->set_rules('College','college','required');
		$this->form_validation->set_rules('Address','address','required|max_length[255]');
		$this->form_validation->set_rules('Max_num','max number','required|less_than[500]|is_natural');
		$this->form_validation->set_rules('Description','description','required|min_length[10]|max_length[255]');
		$this->form_validation->set_rules('Type','type','required');
		$dl=strtotime($_POST['Deadline']);
		$st=strtotime($_POST['Start']);
		$ed=strtotime($_POST['End']);
		// $dl=date('Y-m-d H:i:s',$_POST['Deadline']);
		// $st=date('Y-m-d H:i:s',$_POST['Start']);
		// $ed=date('Y-m-d H:i:s',$_POST['End']);
		$dl=date('Y-m-d H:i:s',$dl);
		$st=date('Y-m-d H:i:s',$st);
		$ed=date('Y-m-d H:i:s',$ed);
		if($this->form_validation->run()){
			$sql = "INSERT INTO act (u_id,a_name,deadline,start_time,end_time,extra,a_college,place,max_num,t_id) VALUES (?,?,?,?,?,?,?,?,?,?)";
			$sql = $this->db->compile_binds($sql,array($this->session->id,$_POST['Title'],$dl,$st,$ed,$_POST['Description'],$_POST['College'],$_POST['Address'],$_POST['Max_num'],$_POST['Type']));
			if($this->db->simple_query($sql)){
				return $this->db->insert_id();
			}
			else{
				return false;
			}
		}
		return false;

	}


	public function join($a_id=1){
		$sql = "SELECT a_id,a_name,start_time,a_college,place FROM act WHERE a_id=? limit 1";
		if($query = $this->db->query($sql, array($a_id))){
			$temp = $query->result_array();
			return $temp[0];
		}	
	}


	public function join_in($a_id=1,$is_check=0){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|integer|exact_length[11]');
		$this->form_validation->set_rules('college', 'College', 'required');
		$this->form_validation->set_rules('description', 'Description', 'max_length[255]');
		//$this->form_validation->set_rules('email', 'Email', 'required|max_length[255]|valid_email');
		//$this->form_validation->set_rules('sex', 'Sex', 'required');
		//$this->form_validation->set_rules('year', 'Year', 'required|integer');

		if($this->form_validation->run()){
			$sql = "INSERT INTO act_man (a_id,u_id,am_state,am_name,am_phone,am_college,am_extra) VALUES (?,?,?,?,?,?,?)";
			$sql = $this->db->compile_binds($sql,array($a_id,intval($this->session->id),$is_check,$_POST['name'],$_POST['phone'],$_POST['college'],isset($_POST['description'])? $_POST['description']: null));
			return $this->db->simple_query($sql);
		}
		return FALSE;
	}


	public function is_exist($a_id=1){
		$sql = "SELECT * FROM act_man WHERE a_id=? and u_id=? limit 1";
		$query = $this->db->query($sql, array(intval($a_id),intval($this->session->id)));
		if($query->num_rows()){
			return 1;
		}
		else{
			return 0;
		}
	}


	public function is_check($a_id=1){
		$sql = "SELECT a_check FROM act WHERE a_id=? limit 1";
		$query = $this->db->query($sql, array(intval($a_id)));
		$t = $query->result_array();
		return $t[0]['a_check'];
	}


	public function get_para(){
		$this->form_validation->set_rules('t', 'tid', 'required|integer');
		if($this->form_validation->run()){
			$sql = "SELECT name,tag,view FROM type_para WHERE t_id = ? ORDER BY num";
			$query = $this->db->query($sql,array(intval($_POST['t'])));
			return $query->result_array();
		}
		return 0;
	}


	public function modifya_state($new_state, $a_id){
		$sql = "UPDATE act SET a_state= ? WHERE a_id= ?";
		return $this->db->query($sql, array($new_state, $a_id));
	}



	public function manage($a_id){
		$sql = "SELECT * FROM act_man WHERE a_id=?";
		$query = $this->db->query($sql, array($a_id));
		return $query->result_array();
	}


	public function is_sponsor($a_id=1){
		$sql = "SELECT * FROM act WHERE a_id=? and u_id=?";
		$query = $this->db->query($sql, array($a_id, $this->session->id));
		if($query->num_rows() > 0){
			return true;
		}
		return false;
	}

	
}
