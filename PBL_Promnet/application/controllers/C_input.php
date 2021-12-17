<?php 
 
class C_input extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}
 
	public function index(){
		$this->load->view('V_input', array('error' => ' ' ));
	}

    public function insertsoal(){
        $data['ID_pm'] = $this->input->post('ID');
        $data['Pertanyaan'] = $this->input->post('Pertanyaan');
        $data['Pilihan1'] = $this->input->post('Pilihan1');
        $data['Pilihan2'] = $this->input->post('Pilihan2');
        $data['Pilihan3'] = $this->input->post('Pilihan3');
        $data['Pilihan4'] = $this->input->post('Pilihan4');
        $data['Pilihan5'] = $this->input->post('Pilihan5');
        $data['Kunci_Jawaban'] = $this->input->post('Kunci');
        
        //memasukan data yang sudah diinput di form V_input ke database
        $this->load->Model('M_input');
        $this->M_input->insertSoal($data);
        redirect(site_url('C_tampil/t_soal'));
    }

     public function insertsoalpengayaan(){
        $data['ID_pm'] = $this->input->post('ID_pm');
        $data['Soal'] = $this->input->post('Soal');
        
        //memasukan data yang sudah diinput di form V_input ke database
        $this->load->Model('M_input');
        $this->M_input->insertsoalpengayaan($data);
        redirect(site_url('C_tampil/t_soalPengayaan'));        
    }

     public function insertnilaitugas(){
        $data['ID_pm'] = $this->input->post('ID');
        $data['ID_siswa'] = $this->input->post('IDS');
        $data['nilai'] = $this->input->post('nilai');
        
        //memasukan data yang sudah diinput di form V_input ke database
        $this->load->Model('M_input');
        $this->M_input->insertjawabanT($data);
        redirect(site_url('C_tampil/t_tugas1'));        
    }

     public function insertjawaban(){
        $data['Jawaban'] = $this->input->post('Jawaban');
        $data['ID_siswa'] = $this->session->userdata('ID_siswa');
                       
        //memasukan data yang sudah diinput di form V_input ke database
        $this->load->Model('M_input');
        $this->M_input->insertjwb($data);
        redirect(site_url('C_tampil/t_linkSesi/'.$data['ID_siswa']));        
    }

     public function insertnilaip(){
        $data['ID_pm'] = $this->input->post('IDS');
        $data['ID_siswa'] = $this->input->post('ID');
        $data['nilai'] = $this->input->post('nilai');
        
        //memasukan data yang sudah diinput di form V_input ke database
        $this->load->Model('M_input');
        $this->M_input->insertjawabanp($data);
        redirect(site_url('C_tampil/t_versi1'));        
    }

    public function tambahsesi(){
        $data['ID_pm'] = $this->input->post('ID');
        $data['Nama_sesi'] = $this->input->post('Nama_sesi');
        $data['Topik'] = $this->input->post('Topik');
        $data['Uraian'] = $this->input->post('Uraian');
        $data['Konten1'] = $this->input->post('Konten1');
        $data['Konten2'] = $this->input->post('Konten2');
        $data['Konten3'] = $this->input->post('Konten3');
        $data['Tugas'] = $this->input->post('Tugas');
        $data['ID_matpel'] = $this->input->post('ID_matpel');

        $this->load->Model('M_input');
        $this->M_input->insertNewSesi($data);
        redirect(site_url('C_tampil/t_tambahsesi'));
    }
  

	public function aksi_upload(){
		$config['upload_path']          = './upload/';
        $config['allowed_types']        = 'doc|docx|pdf';

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    // $this->load->view('v_petugas', $error);
                //redirect(site_url('c_petugas'));
                }
                else
                {                	
                	$data = $this->upload->data();
                    $query = array(
                    	'Konten1' => $data['file_name']
       				);

					$this->m_Petugas->insertFile($query);
                    // $this->load->view('v_petugas', $data);
                
                }
	
                }
            }




