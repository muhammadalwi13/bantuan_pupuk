<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengajuan');
        $this->load->model('m_user');
    }

    public function index()
    {
        
        $data = array(
            'title' => 'Dashboard',
            'pengajuanpupuk' => $this->m_pengajuan->tampiluser(),
            'pengajuanditerima'=> $this->m_pengajuan->diterima(),
            'datauser'=> $this->m_user->tampil(),
            'isi' =>'v_admin'
        );
              $this->load->view('layout/wrapper', $data, FALSE);
        
    }


}

