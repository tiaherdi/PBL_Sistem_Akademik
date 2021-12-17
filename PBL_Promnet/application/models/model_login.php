<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function getlogin($nisn, $pwd)
	{
		$this->db->select('*');
		$this->db->from('t_siswa');
		$this->db->where('NISN', $nisn);
		$this->db->where('Password', $pwd);

		if($this->db->get()->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}

	public function selectByUsername($nisn){
		$this->db->select('*');
		$this->db->from('t_siswa');
		$this->db->where('NISN', $nisn);

		return $this->db->get();
		
	}
	
}