<?php defined('BASEPATH') OR exit('No direct script access allowed');


class m_dinas extends CI_Model
{
	//private $_table="tb_dinas";

	
public function index()
{
	$this->db->select("*");
	$this->db->from("tb_dinas");
	$query = $this->db->get();
	return $query->result();
}
	}