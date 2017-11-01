<?php

/**
* 
*/
class Mlogin extends CI_Model

{
	public function login($datalogin)
	{
		$this->db->where($datalogin);
		$query=$this->db->get('user');
		$hasil=$query->num_rows();
		return $hasil;

	}

	public function level($datalogin)

	{
		$this->db->where($datalogin);
		$query=$this->db->get('user');
		$hasil=$query->row();

		return $hasil;
	}
	
	
}



