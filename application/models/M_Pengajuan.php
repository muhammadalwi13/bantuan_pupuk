<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengajuan extends CI_Model {

    public function simpan($data)
    {
        $this->db->insert('tbl_pengajuanpupuk', $data);
        
    }

    public function tampil()
    {
        $nik = $this->session->userdata['nik'];
        $this->db->select('*');
        $this->db->from('tbl_pengajuanpupuk');
        $this->db->where('nik', $nik);
        $this->db->order_by('id_pengajuan', 'desc');
        return $this->db->get()->result();
    
        
    }
    public function diterima()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengajuanpupuk');
        $this->db->where('status', 'Disetuju');
        $this->db->order_by('id_pengajuan', 'desc');
        return $this->db->get()->result();
    
        
    }
    public function tampiluser()
    {
       
        $this->db->select('*');
        $this->db->from('tbl_pengajuanpupuk');
        $this->db->order_by('id_pengajuan', 'desc');
        return $this->db->get()->result();
    
    }
    public function detail($id_pengajuan)
    {
        $this->db->select('*');
        $this->db->from('tbl_pengajuanpupuk');
        $this->db->where('id_pengajuan', $id_pengajuan);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_pengajuan', $data['id_pengajuan']);
        $this->db->update('tbl_pengajuanpupuk', $data);
        
        
    }
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
    public function hapus($data){
        $this->db->where('id_pengajuan', $data['id_pengajuan']);
        $this->db->delete('tbl_pengajuanpupuk', $data);
    }
    
}



/* End of file M_sekolah.php */
