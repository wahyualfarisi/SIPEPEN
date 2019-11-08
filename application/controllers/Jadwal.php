<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
        $this->load->view('peserta/include/header');
        $this->load->view('peserta/jadwal');
		$this->load->view('peserta/include/footer');
	}

	public function detail()
	{
		$this->load->view('peserta/include/header');
		$this->load->view('peserta/detail_jadwal');
		$this->load->view('peserta/include/footer');
	}

	public function join()
	{
		$this->load->view('peserta/include/header');
		$this->load->view('peserta/formulir_join');
		$this->load->view('peserta/include/footer');
	}

	
}
