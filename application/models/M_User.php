<?php
class M_User extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

	public function login()
	{
		$query = $this->db->get('user');
		return $query->result_array();
	}
}