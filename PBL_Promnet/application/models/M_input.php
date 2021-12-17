<?php
	class M_input extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
		}

		function insertFile($data){
			$this->db->insert('t_pembelajaran', $data);
		}

		function insertSoal($data){
			$this->db->insert('t_soal', $data);
		}

		function insertjawabanT($data){
			$this->db->insert('t_nilaitugas', $data);
		}
		function insertjawabanp($data){
			$this->db->insert('t_nilaipengayaan', $data);
		}

		function insertjwb($data){
			$this->db->insert('t_jawabanpengayaan', $data);
		}
		

		function jawabsoal($idsiswa,$idsoal,$jawaban){
			$this->db->query("insert into t_jawabanketuntasan values (null,'$idsiswa','$idsoal','$jawaban')");
		}

		function nilaisoal($idpm,$nilai,$idsiswa){
			$this->db->query("insert into t_nilaiketuntasan values (null,'$idpm','$nilai','$idsiswa')");
		}

		function insertFiletugas($query){
			$this->db->insert('t_jawabantugs', $query);
		}

		function insertNewSesi($data){
			$this->db->insert('t_pembelajaran', $data);
		}
	}
?>
