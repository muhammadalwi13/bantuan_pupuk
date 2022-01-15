<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));

        if ($this->form_validation->run()) {
            $nik = $this->input->post('nik');
            $password = $this->input->post('password');
            $this->user_login->login($nik, $password);
        }

        $data = array(
            'title' => 'Login ',
            
        );
              $this->load->view('auth/v_login', $data, FALSE);
        
    }
    public function logout()
    {
        $this->user_login->logout();
    }
}

/* End of file Login.php */
