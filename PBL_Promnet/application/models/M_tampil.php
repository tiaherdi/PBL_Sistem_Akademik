 <?php

class M_tampil extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
	}

	/*menampilkan semua data yang ada di tabel data_mahasiswa*/


	function selectSiswa(){
		$this->db->select('*');
		$this->db->from('t_siswa');

		return $this->db->get();
	}

	function selectSoal(){
		$this->db->select('*');
		$this->db->from('t_soal');

		return $this->db->get();
	}

	function selectPembelajaran(){
		$this->db->select('*');
		$this->db->from('t_pembelajaran');

		return $this->db->get();
	}

	function selectMatpel(){
		$this->db->select('*');
		$this->db->from('t_matpel');

		return $this->db->get();
	}


	// menampilkan data sesuai idnya
	function selectById($id){
		$this->db->select('*');
		$this->db->from('t_soal');
		$this->db->where('ID_pm',$id);
		
		return $this->db->get();
		
	}

	function selectById2($id){
		$this->db->select('*');
		$this->db->from('t_pembelajaran');
		$this->db->where('ID_matpel',$id);
		
		return $this->db->get();
		
	}

	function selectPengayaan(){
		$this->db->select('*');
		$this->db->from('t_pengayaan');

		return $this->db->get();
	}

	function selectById3($id){
		$this->db->select('*');
		$this->db->from('t_pengayaan');
		$this->db->where('ID_pm',$id);
		
		return $this->db->get();
		
	}

	function selectKetuntasan(){
		$this->db->select('*');
		$this->db->from('t_ketuntasan');

		return $this->db->get();
	}

	function selectById4($id){
		$this->db->select('*');
		$this->db->from('t_ketuntasan');
		$this->db->where('ID_pm',$id);
		
		return $this->db->get();
	}

	function selectById5($id){
		$this->db->select('*');
		$this->db->from('t_pembelajaran');
		$this->db->where('ID_pm',$id);
		
		return $this->db->get();
	}

	function selectById6($id){
		$this->db->select('*');
		$this->db->from('t_pembelajaran');
		$this->db->where('ID_pm',$id);
		
		return $this->db->get();
	}

	function selectNilaip(){
		$this->db->select('*');
		$this->db->from('t_nilaiPengayaan');
		$idsiswa =  $this->session->userdata('ID_siswa');
		$this->db->where('ID_siswa',$idsiswa);

		return $this->db->get();

		
	}
	function selectNilait(){
		$this->db->select('*');
		$this->db->from('t_nilaiTugas');
		$idsiswa =  $this->session->userdata('ID_siswa');
		$this->db->where('ID_siswa',$idsiswa);

		return $this->db->get();

		
	}
	function selectNilai(){
		$this->db->select('*');
		$this->db->from('t_nilaiketuntasan');
		$idsiswa =  $this->session->userdata('ID_siswa');
		$this->db->where('ID_siswa',$idsiswa);

		return $this->db->get();
		selectNilaip();
		selectNilait();

	}

	function insertjawaban($data){
		$this->db->insert('t_jawabanketuntasan',$data);
	}

	function selectjawabanTugas(){
		$this->db->select('*');
		$this->db->from('t_jawabantugs');

		return $this->db->get();
	}

	function selectjawabanP(){
		$this->db->select('*');
		$this->db->from('t_jawabanpengayaan');

		return $this->db->get();
	}

	function insertnewsesi($data){
		$this->db->insert('t_pembelajaran', $data);
	}
}
?>