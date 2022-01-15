<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
    }
	public function index()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
		if ($this->form_validation->run() == FALSE) {
		$data = array(
            'title' => 'Login',
            'isi' =>'v_login'
        );
              $this->load->view('auth/v_login', $data, FALSE);
    }else{
		$this->_login();
	}
}

private function _login()
{
			$nik = $this->input->post('nik');
            $password = $this->input->post('password');

			$user = $this->db->get_where('tbl_user', ['nik' => $nik])->row_array();
		if($user){
			if($user['is_active'] == 1){
				if($password = $user['password']){
					$data = [
						'nik' => $user['nik'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id'] == 1 ){
						redirect('admin');
					}else {
						redirect('home');
					}
					
				}else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" 
					role="alert">Password salah!!!
				</div>');
					redirect('auth');
				}

			}else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" 
					role="alert">NIK belum diaktifasi!!!!
				</div>');
					redirect('auth');
			}
		}else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" 
				role="alert">NIK Belum Terdaftar!!!
			</div>');
				redirect('auth');
				}
		}
	public function register()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
       
		if ($this->form_validation->run() == FALSE) {
		$data = array(
            'title' => 'Register',
            'isi' =>'v_register'
        );
              $this->load->view('auth/v_register', $data, FALSE);
    }else {
		$data = array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'role_id' => 2,
			'is_active' => 1,
			
		);
		$this->db->insert('tbl_user', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" 
		role="alert">Selamat ..! Anda sudah Terdaftar. Silahkan Login?
	  </div>');
		redirect('auth');
	}
	
}
}

/* End of file Controllername.php */
