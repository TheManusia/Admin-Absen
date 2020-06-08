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

    public function register()
    {
        $nama = $this->input->post('nama', true);
        $username = $this->input->post('username', true);
        $check = $this->db->select('username')->get_where('admin', ['username' => $username])->num_rows();

        if ($check == 0) {
            $user = [
                'nama' => $nama,
                'username' => $username,
                'password' => md5('password123')
            ];

            $this->db->insert('admin', $user);
            $this->session->set_flashdata('flash', 'ditambahkan');
        } else {
            $this->session->set_flashdata('gagal', 'Username ' . $username . ' sudah terpakai');
        }
    }
}