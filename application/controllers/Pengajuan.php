<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengajuan');
    }


    public function index()
    {
        $data = array(
            'title' => 'Data Pengajuan  ',
            'pengajuanpupuk' => $this->m_pengajuan->tampiluser(),
            'isi' => 'v_pengajuan_pupuk'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
    public function input()
    {

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('ktp', 'Foto KTP Asli', 'upload', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('kk', 'Foto Kartu Keluarga Asli', 'upload', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('kartutani', 'Foto Kartu Tani', 'upload', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('kelompok_tani', 'Nama Kelompok Tani', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('luas_lahan', 'Luas Lahan', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('komoditas', 'Komoditas', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('no_telpon', 'Nomor Telpon', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
      

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Form Pengajuan Pupuk',
                
                'isi' => 'v_form_pengajuan'
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'ktp' => 'default.jpg',
                'kk' => 'default.jpg',
                'kartutani' => 'default.jpg',
                'kelompok_tani' => $this->input->post('kelompok_tani'),
                'luas_lahan' => $this->input->post('luas_lahan'),
                'komoditas' => $this->input->post('komoditas'),
                'no_telpon' => $this->input->post('no_telpon'),
               
            );
            return $data;
            $this->m_pengajuan->simpan($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('bantuan');
        }
    }
    public function update($id_pengajuan)
    {
            $data = array(
                'status' => '1'
          
            );
            $where = array(
                'id_pengajuan' => $id_pengajuan
            );
            $this->m_pengajuan->update_data($where, $data, 'tbl_pengajuanpupuk');
            $this->session->set_flashdata('pesan', 'Data Berhasil Disetujui..');
            redirect('pengajuan');
    }
public function edit($id_pengajuan){

   $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('ktp', 'Foto KTP Asli', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('kk', 'Foto Kartu Keluarga Asli', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('kartutani', 'Foto Kartu Tani', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('kelompok_tani', 'Nama Kelompok Tani', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('luas_lahan', 'Luas Lahan', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('komoditas', 'Komoditas', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('no_telpon', 'Nomor Telpon', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
      

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Data Pengajuan',
                'isi' => 'v_data'
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'ktp' => 'default.jpg',
                'kk' => 'default.jpg',
                'kartutani' => 'default.jpg',
                'kelompok_tani' => $this->input->post('kelompok_tani'),
                'luas_lahan' => $this->input->post('luas_lahan'),
                'komoditas' => $this->input->post('komoditas'),
                'no_telpon' => $this->input->post('no_telpon'),
            );
            $this->m_pengajuan->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Edit');
            redirect('bantuan');
        }
}
     
    
    public function hapus($id_pengajuan)
    {
        $data =  array('id_pengajuan' => $id_pengajuan);
        $this->m_pengajuan->hapus($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus..');
        redirect('pengajuan');
    }
}
