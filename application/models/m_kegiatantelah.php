<?php

class m_kegiatantelah extends CI_Model{
    
    public function tampil_Data()
    {
        return $this->db->get('form_kegiatantelah')->result_array();
    }

    public function get_count()
    {
        $sql = "SELECT count(id) as id FROM form_kegiatantelah";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }
    public function input_data($data){
        $this->db->insert('form_kegiatantelah',$data);
    }
    public function delkegiatantelah($id)
    {
     $this->db->delete('form_kegiatantelah',['id' => $id]);
    }
}

?>