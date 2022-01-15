<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function index()
    {
        
        $data = array(
            'title' => 'Dashboard',
            'isi' =>'v_pupuk'
        );
        $this->load->view('front-end/wrapper', $data, FALSE);
        
    }


}

