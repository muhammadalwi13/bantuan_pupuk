
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index()
        {
            $data = array(
                'title' => 'Data User',
                'user' => $this->m_user->tampil(),
                'isi' =>'v_user'
            );
                  $this->load->view('layout/wrapper', $data, FALSE);
        
    }
}




/* End of file Controllername.php */
