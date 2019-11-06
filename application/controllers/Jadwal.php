<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
        $this->load->view('peserta/include/header');
        $this->load->view('peserta/jadwal');
		$this->load->view('peserta/include/footer');
	}

	
}
