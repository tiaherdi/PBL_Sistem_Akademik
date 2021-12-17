<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('tampilan_login');
	}

	public function getlogin(){

		if($this->model_login->getlogin($this->input->post('NISN'),$this->input->post('Password'))){

			$data = $this->model_login->selectByUsername($this->input->post('NISN'))->row_array();

			$userdata = array(
				'ID_siswa' => $data['ID_siswa'], 
				'NISN' => $data['NISN'], 
				'Nama' => $data['Nama'], 
				'Password' => $data['Password'],
				'logged_in' => true		 
			);

			$this->session->set_userdata($userdata);
			
			redirect('C_tampil/t_matpel');
		}else{
			$username = $this->input->post("NISN");
  			$password = $this->input->post("Password");
			if($username=="guru" && $password=="guru"){
			   //jika benar
			   $this->session->set_userdata(array('NISN'=>$username));
			   redirect('C_tampil/t_versi1');
			}
			redirect('login');
	}}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}


}
