<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_login
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
            $nik = $cek->nik;
            $password = $cek->password;

            $this->ci->session->set_userdata('nik', $nik);
            $this->ci->session->set_userdata('password', $password);
            $this->ci->session->set_flashdata('pesan', 'Anda Berhasil Login!!');
            redirect('bantuan');
        } else {
            //jika salah password
            $this->ci->session->set_flashdata('pesan', 'Username Atau Password Salah!!');
            redirect('login');
        }
    }
    public function cek_login()
    {
        if ($this->ci->session->set_userdata('nik') == "") {
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




