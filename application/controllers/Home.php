<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('peserta/include/header');
		$this->load->view('peserta/main');
		$this->load->view('peserta/include/footer');
	}

	public function jadwal()
	{
		$this->load->view('peserta/include/header');
		$this->load->view('peserta/include/footer');
	}

	public function kegiatan()
	{

	}
}
