<?php 

class Mahasiswa_model extends CI_Model {
    public function GetAll()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
}