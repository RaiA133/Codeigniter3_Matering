<?php 

class Mahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
        // $this->form_validation->set_error_delimiters('', ''); // untuk membuat tag <p> pada pesan error hilang/berubah
    }
    public function index()
    {
        $data['judul'] = 'Halaman Mahasiswa';

        $data['mahasiswa'] = $this->Mahasiswa_model->getAll();
        $this->load->view('templates/Header', $data);
        $this->load->view('pages/MahasiswaPage', $data);
        $this->load->view('templates/Footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mahasiswa';

        // set rules form validation
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');

        // form validation return codition
        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/Header', $data);
            $this->load->view('pages/TambahMahasiswaPage');
            $this->load->view('templates/Footer');
        } else {
            $this->Mahasiswa_model->PostData();
            $this->session->set_flashdata('query', 'Tambah');
            redirect('mahasiswa');
        }
    }
    public function hapus($id)
    {
        $this->Mahasiswa_model->deleteByID($id);
        $this->session->set_flashdata('query', 'Hapus');
        redirect('mahasiswa');
    }
}