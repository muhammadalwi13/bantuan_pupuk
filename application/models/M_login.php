<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function login($nik,$password)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where(array('nik'=>$nik,'password'=>$password));
        return $this->db->get()->row();

    }

}

/* End of file ModelName.php */
