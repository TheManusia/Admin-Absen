<?php

class Register_model extends CI_Model {
    public function register() {
        $nama = $this->input->post('nama', true);
        $username = $this->input->post('username', true);
        $check = $this->db->select('username')->get_where('user', ['username' => $username])->num_rows();

        if ($check == 0) {
            $user = [
                'nama' => $nama,
                'username' => $username,
                'password' => md5('password123')
            ];
            $detail = [
                'username' => $username,
                'hadir' => 0,
                'alpa' => 0,
                'izin' => 0
            ];

            $this->db->insert('user', $user);
            $this->db->insert('detail_absensi', $detail);
            $this->session->set_flashdata('flash', 'ditambahkan');
        } else {
            $this->session->set_flashdata('gagal', 'Username '. $username. ' sudah terpakai');
        }

    }
}