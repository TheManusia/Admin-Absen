<?php

class User_model extends CI_Model
{

    public function getAllData() {
        return $this->db->get('detail_absensi')->result_array();
    }

    public function getAbsenById($id) {
        return $this->db->get_where('detail_absensi', ['username' => $id])->row_array();
    }

    public function getUserById($id) {
        return $this->db->get_where('user', ['username' => $id])->row_array();
    }

    public function updateAbsen() {
        $data1 = [
            "izin" => $this->input->post('izin', true),
            "alpa" => $this->input->post('alpa', true)
        ];

        $data2 = [
            "id_user" => $this->input->post('username', true),
            "tanggal" => date("Y-m-d"),
            "type" => "izin"
        ];

        $this->db->where('id_detail', $this->input->post('id_detail'))->update('detail_absensi', $data1);
        $this->db->insert('laporan', $data2);
        $this->session->set_flashdata('flash', 'diubah');
    }

    public function updateUser() {
        $data = [
            "nama" => $this->input->post('nama', true)
        ];

        $this->db->where('username', $this->input->post('username'));
        $this->db->update('user', $data);
        $this->session->set_flashdata('flash', 'diubah');
    }

    public function resetPass($id) {
        $password = md5('password123');
        $data = [
            "password" => $password
        ];
        $this->db->where('username', $id)->update('user', $data);
        $this->session->set_flashdata('flash', 'direset');
    }
}
