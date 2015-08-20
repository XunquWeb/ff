<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function index(){
		$sql = "SELECT user.nname,from_u_id,m_content,m_time FROM msg,user WHERE s_id=3 and msg.from_u_id=user.id and floor=0 ORDER BY m_time DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function forum_comment_ajax($m_id){
		$sql = "SELECT m1.m_id,m1.from_u_id,u1.nname as from_nname,m1.to_u_id,u2.nname as to_nname,m1.m_content,m1.m_time,m1.rp_id,m1.floor FROM user as u1,user as u2,(SELECT * FROM msg as A WHERE A.rp_id in (SELECT B.m_id FROM msg as B WHERE B.rp_id=? and B.s_id=3 ORDER BY A.m_time) UNION SELECT * FROM msg WHERE rp_id=? and s_id=3 ORDER BY m_time) as m1 WHERE u1.id=m1.from_u_id and u2.id=m1.to_u_id";
		$query = $this->db->query($sql, array($m_id,$m_id));
		return $query->result_array();
	}


}
