<?php

class Admin_model extends CI_Model {
    public function getAdminDetailById($id) {
        return $this->db->get_where('admin', ['username' => $id])->row_array();
    }

    public function getAdmin() {
        return $this->db->get('admin')->result_array();
    }

    public function resetPass($id) {
        $password = md5('password123');
        $data = [
            "password" => $password
        ];
        $this->db->where('username', $id)->update('admin', $data);
        $this->session->set_flashdata('flash', 'direset');
    }

    public function updateAdmin() {
        $data = [
            "nama" => $this->input->post('nama', true)
        ];

        $this->db->where('username', $this->input->post('username'));
        $this->db->update('admin', $data);
        $this->session->set_flashdata('flash', 'diubah');
    }
}