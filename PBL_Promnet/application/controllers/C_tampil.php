<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tampil extends CI_Controller {

	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('V_matpel');	
	}

	public function t_versi1()
	{
		$this->load->view('V_versi1');	
	}

	public function t_versi2()
	{
		$this->load->view('V_versi2');	
	}

	public function t_soal()
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectSoal()->result();
		$this->load->view('V_soal', $data);
	}

	public function t_siswa()
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectSiswa()->result();
		$this->load->view('V_siswa', $data);
	}

	public function t_pembelajaran()
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectPembelajaran()->result();
		$this->load->view('V_pembelajaran', $data);
	}


	public function t_pem()
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectPembelajaran()->result();
		$this->load->view('V_pembelajaran2', $data);
	}
	
	public function t_matpel()
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectMatpel()->result();
		$this->load->view('V_matpel', $data);
	}
	
	public function t_edit($id)
	{
		$this->load->model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectById($id)->result();
		$data['ID_pm'] = $id;
		$this->load->view('V_soal', $data);
	}	


	public function t_linkMatpel($id)
	{
		$this->load->model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectById2($id)->result();
		$data['ID_matpel'] = $id;
		$this->load->view('V_pembelajaran', $data);
	}

	public function t_pengayaan()
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectMatpel()->result();
		$this->load->view('V_pengayaan', $data);
	}

	public function t_linkPengayaan($id)
	{
		$this->load->model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectById3($id)->result();
		$data['ID_pm'] = $id;
		$this->load->view('V_pengayaan', $data);
	}

	public function t_ketuntasan()
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectKetuntasan()->result();
		$this->load->view('V_pengayaan', $data);
	}

	public function t_linkKetuntasan($id)
	{
		$this->load->model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectById($id)->result();
		$data['ID_pm'] = $id;
		$this->load->view('V_ketuntasan', $data);
	}

	public function t_tugas($id)
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectById5($id)->result();
		$data['ID_pm'] = $id;
		$this->load->view('V_jawabantugas', $data);
	}

	public function do_upload(){
		$config['upload_path']          = 'upload/';
		$config['allowed_types']        = 'gif|jpg|png|docx|pdf|pptx|rar';
 
		$this->load->library('upload', $config);
 		//$this->load->Model('M_input');

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('V_jawabantugas', $error);
		}else{
			// $data = array('upload_data' => $this->upload->data());

			$data = $this->upload->data();
            $query = array(
                    	'jawaban_tugas' => $data['file_name'],
                    	'ID_siswa' => $this->session->userdata('ID_siswa')
       				);
			$this->M_input->insertFiletugas($query);
			$this->load->view('V_mantap');
		}
	}

	public function t_linkSesi($id)
	{
		$this->load->model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectById6($id)->result();
		$data['ID_pm'] = $id;
		$this->load->view('V_sesi', $data);
	}

	public function t_lihatnilaiP()
	{
		$this->load->Model('M_tampil');
		$data['data'] = $this->M_tampil->selectNilaip()->result();
		$this->load->view('V_nilaiketuntasan', $data);
	}

	public function t_lihatnilai()
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectNilai()->result();
		$data['data'] = $this->M_tampil->selectNilaip()->result();
		$data['tugas'] = $this->M_tampil->selectNilait()->result();
		$this->load->view('V_nilaiketuntasan', $data);
	}


	public function insertJawabanTesSesi(){		

   		$id = $this->input->post('ID_pm');
        $idsiswa =  $this->session->userdata('ID_siswa');
        $data['soal'] = $this->M_tampil->selectById($id)->result();
        $score=0;
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        foreach ($data['soal'] as $key) { 
        	echo "$key->ID_soal";
          $jawaban = $this->input->post($key->ID_soal);
          echo "$jawaban <br>";
          $this->M_input->jawabsoal($idsiswa,$key->ID_soal,$jawaban);
          if ($key->Kunci_Jawaban==$jawaban) {
          echo "Benar <br>";
          $score = $score + 20;
          }else{
          echo "Salah";
          }

          //$this->M_tampil->insertjawaban($save); 
        }echo "Scorenya = $score";
        $this->M_input->nilaisoal($id,$score,$idsiswa);
        // print_r($save);
        // print_r($data);
        // $save['score'] = $score;
        // $this->Mtes->insertDetail($save);
        redirect(site_url('C_tampil/t_matpel'));

 }
 public function insertJawabanPengayaan(){
 		$id = $this->input->post('ID_pm');
        $idsiswa =  $this->session->userdata('ID_siswa');
        $data['soal'] = $this->M_tampil->selectById($id)->result();
       
        redirect(site_url('C_tampil/t_matpel'));
 	}

 public function t_tugas1()
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectjawabanTugas()->result();
		$this->load->view('V_jawabanT', $data);
	}

 public function t_pengayaan1()
	{
		$this->load->Model('M_tampil');
		$data['datauser'] = $this->M_tampil->selectjawabanP()->result();
		$this->load->view('V_jawabanP', $data);
	}

	public function t_tambahsesi(){
		$id = $this->input->post('ID_pm');
        $data['datauser']= $this->M_tampil->selectById5($id)->result();
       	$this->load->view('V_tambahsesi', $data);
        
	}
}