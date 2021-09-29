<?php

class m_cetak extends CI_Model{
    
    public function lihat($id)
{
    $this->db->where("id",$id);
    $query=$this->db->get('pengaduan');
    return $query->result_array();
}
}
?>