<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function index(){
		$sql1 = "SELECT m_id,user.nname,from_u_id,m_content,m_time FROM msg,user WHERE s_id=3 and msg.from_u_id=user.id and floor=0 ORDER BY m_time DESC limit 10";
		$query1 = $this->db->query($sql1);
		$sql2 = "UPDATE user SET latest_m_id=(SELECT MAX(m_id) FROM msg) WHERE user.id=?";
		$query2 = $this->db->query($sql2,array($this->session->id));
		return $query1->result_array();
	}

	public function forum_comment_ajax($m_id){
		$sql = "SELECT m1.m_id,m1.from_u_id,u1.nname as from_nname,m1.to_u_id,u2.nname as to_nname,m1.m_content,m1.m_time,m1.rp_id,m1.floor FROM user as u1,user as u2,(SELECT * FROM msg as A WHERE A.rp_id in (SELECT B.m_id FROM msg as B WHERE B.rp_id=? and B.s_id=3 ORDER BY A.m_time) UNION SELECT * FROM msg WHERE rp_id=? and s_id=3 ORDER BY m_time) as m1 WHERE u1.id=m1.from_u_id and u2.id=m1.to_u_id";
		$query = $this->db->query($sql, array($m_id,$m_id));
		return $query->result_array();
	}

	public function history_ajax($page=1){
		$sql = "SELECT m_id,user.nname,from_u_id,m_content,m_time FROM msg,user WHERE s_id=3 and msg.from_u_id=user.id and floor=0 ORDER BY m_time DESC limit ?,10";
		$query = $this->db->query($sql,array(10*$page));
		return $query->result_array();
	}

	public function new_message_ajax(){
		$sql1 = "SELECT m_id,nname,from_u_id,m_content,m_time FROM msg,user WHERE s_id=3 and floor=0 and user.id=msg.from_u_id and m_id>(SELECT latest_m_id FROM user WHERE user.id=?) and m_id<=(SELECT MAX(m_id) FROM msg) ORDER BY m_time DESC";
		$query1 = $this->db->query($sql1,array($this->session->id));
		$sql2 = "UPDATE user SET latest_m_id=(SELECT MAX(m_id) FROM msg) WHERE user.id=?";
		$query2 = $this->db->query($sql2,array($this->session->id));
		return $query1->result_array();
	}

}
