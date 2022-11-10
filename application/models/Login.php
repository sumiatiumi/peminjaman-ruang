<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_model{

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	


	
}