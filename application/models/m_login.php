<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model{

	function cek_user($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('tb_ruangan');
	}
}