<?php

class Setting_model extends CI_Model {
    public function edit() {
        $data = [
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        ];

        $check = $this->db->select('*')->get_where('admin', $data)->num_rows();

        if ($check == 1) {
            $this->db->set('nama', $this->input->post('nama'));
            $this->db->set('password', md5($this->input->post('newpass')));
            $this->db->where('username', $this->input->post('username', true));
            $this->db->update('admin');
            $this->session->set_flashdata('flash', 'diubah');
            $this->session->set_userdata('nama', $this->input->post('nama'));
        } else {
            $this->session->set_flashdata('gagal', 'Password salah');
        }
    }   
}