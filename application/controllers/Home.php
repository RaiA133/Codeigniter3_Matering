<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Halaman Home';
		$this->load->view('templates/Header', $data);
		$this->load->view('pages/HomePage', $data);
		$this->load->view('templates/Footer');
	}
}
