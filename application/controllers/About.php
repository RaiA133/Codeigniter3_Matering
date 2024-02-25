<?php 

class About extends CI_Controller {
    public function index($nama = 'User') 
    {
        $data['nama'] = $nama;
        $data["judul"] = "Halaman About";
        $this->load->view('templates/Header', $data);
        $this->load->view('pages/AboutPage', $data);
        $this->load->view('templates/Footer');
    }
}