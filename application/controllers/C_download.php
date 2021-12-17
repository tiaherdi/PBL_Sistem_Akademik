<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}
 
	public function index(){		
		$this->load->view('V_download');
	}
 
	public function lakukan_download(){				
		force_download('./upload/analisis_metode_dan_tujuan_penelitian.docx', NULL);
	}	
 
}