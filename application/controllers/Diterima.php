
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DIterima extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengajuan');
    }

    public function index()
        {
            $data = array(
                'title' => 'Status Diterima',
                'pengajuanpupuk' => $this->m_pengajuan->diterima(),
                'isi' =>'v_diterima'
            );
                  $this->load->view('layout/wrapper', $data, FALSE);
        }
        public function data($id_pengajuan){
        
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
                    'pengajuan' => $this->m_pengajuan->detail($id_pengajuan),
                    'isi' => 'v_diterima'
                );
                $this->load->view('layout/wrapper', $data, FALSE);
            } else {
                $data = array(
                    'id_pengajuan' => $id_pengajuan,
                    'nama' => $this->input->post('nama'),
                    'ktp' => 'default.jpg',
                    'kk' => 'default.jpg',
                    'kartutani' => 'default.jpg',
                    'kelompok_tani' => $this->input->post('kelompok_tani'),
                    'luas_lahan' => $this->input->post('luas_lahan'),
                    'komoditas' => $this->input->post('komoditas'),
                    'no_telpon' => $this->input->post('no_telpon'),
                  
                );
                $this->m_pengajuan->simpan($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                redirect('pengajuan');
            }
    }
}




/* End of file Controllername.php */
