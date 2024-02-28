<?php 

class Mahasiswa_model extends CI_Model {
    public function GetAll()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
    public function PostData()
    {
        $data = [
            "nama" => $this->input->post('nama', true), // true = sudah anti XSS attack (htmlspecialchar) 
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
            "gambar" => $this->input->post('gambar', true),
        ];

        // insert data ke 
        $this->db->insert('mahasiswa', $data);
    }
    public function deleteByID($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}