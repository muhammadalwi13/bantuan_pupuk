<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pendaftaran');
    }


    public function index()
    {
        $data = array(
            'title' => 'Pendaftaran',
            'pendaftaran' => $this->m_pendaftaran->tampil(),
            'isi' => 'v_pendaftaran'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
    
}

/* End of file Sekolah.php */
