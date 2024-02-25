<?php 

class Mahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAll();
        $this->load->view('templates/Header', $data);
        $this->load->view('pages/MahasiswaPage', $data);
        $this->load->view('templates/Footer');
    }
}