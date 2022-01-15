<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_login');
    }

    
    public function login($username, $password)
    {
        $cek = $this->ci->m_login->login($username, $password);
        if ($cek) {
            $nama = $cek->nama;
            $username = $cek->username;

            $this->ci->session->set_userdata('nama', $nama);
            $this->ci->session->set_userdata('username', $username);
            if ($nama['role_id'] == 1) {
                redirect('pengajuan');
            }else{
                redirect('bantuan');
            }
            $this->ci->session->set_flashdata('pesan', 'Anda Berhasil Login!!');
            
        } else {
            //jika salah password
            $this->ci->session->set_flashdata('pesan', 'Username Atau Password Salah!!');
            redirect('login');
        }
    }
    public function cek_login()
    {
        if ($this->ci->session->set_userdata('username') == "") {
            $this->ci->session->set_flashdata('pesan', 'Anda Belum Login Silahkan Login Dulu!!');
            redirect('login');
        }
    }
    public function logout()
    {

        $this->ci->session->unset_userdata('nama');
        $this->ci->session->unset_userdata('username');
        $this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout!!');

        redirect('login');
    }
}

/* End of file User_login.php */




