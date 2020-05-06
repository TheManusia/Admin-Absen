<?php

class Login_model extends CI_Model {
    public function login() {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $check = $this->db->select('*')->get_where('admin', ['username' => $username, 'password' => md5($password)])->num_rows();

        if  ($check == 1) {
            $a = $this->db->select('*')->get_where('admin', ['username' => $username, 'password' => md5($password)])->row_array();
            $data = [
                'username' => $username,
                'nama' => $a['nama'],
                'status'=> "login"
            ];
            $this->session->set_userdata($data);
            redirect(base_url());
        } else {
            $this->session->set_flashdata('flash', 'Username atau Password salah');
            $this->load->view('login/index');
        }
    }

    public function logout() {
        session_destroy();
        redirect(base_url('login'));
    }
}