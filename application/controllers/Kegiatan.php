<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function index()
	{
		$this->load->view('peserta/include/header');
		$this->load->view('peserta/kegiatan');
		$this->load->view('peserta/include/footer');
	}
}
