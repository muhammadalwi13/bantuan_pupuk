
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengajuan');
    }

    public function index()
    {
        $data = array(
            'title' => 'Bantuan Pupuk Subsidi',
            'isi' =>'v_form_pengajuan'
        );
              $this->load->view('front-end/wrapper', $data, FALSE);
    }

    public function input()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        // $this->form_validation->set_rules('ktp', 'Foto KTP Asli', 'required', array(
        //     'required' => '%s Harus Diisi!!!!'
        // ));
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
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2000';
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('ktp')) {
                echo($this->upload->display_errors());
            }
            $this->upload->do_upload('ktp');
            $hasil = $this->upload->data();
            $this->upload->do_upload('kk');
            $hasil2 = $this->upload->data();
            $this->upload->do_upload('kartutani');
            $hasil3 = $this->upload->data();
            
            $data = array(
                'nama' => $this->input->post('nama'),
                'ktp' => $hasil['file_name'],
                'kk' => $hasil2['file_name'],
                'kartutani' => $hasil3['file_name'],
                'kelompok_tani' => $this->input->post('kelompok_tani'),
                'luas_lahan' => $this->input->post('luas_lahan'),
                'komoditas' => $this->input->post('komoditas'),
                'no_telpon' => $this->input->post('no_telpon'),
                'nik' => $this->session->userdata['nik'],
            );
            
            $this->m_pengajuan->simpan($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('bantuan');

                
        }else {
            $data = array(
                'title' => 'Data Pengajuan',
                'error_upload' => $this->upload->display_errors(),
                'isi' => 'v_form_pengajuan'
            );
            $this->load->view('front-end/wrapper', $data, FALSE);
        }
      
    }
}

 
        
 


/* End of file Controllername.php */
