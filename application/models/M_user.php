<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function simpan($data)
    {
        $this->db->insert('tbl_daftarkelompok', $data);
        
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->order_by('id_user', 'desc');
        return $this->db->get()->result();
    
        
    }
  
}

/* End of file M_sekolah.php */
