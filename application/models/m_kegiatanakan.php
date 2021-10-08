<?php

class m_kegiatanakan extends CI_Model{
    
    public function tampil_Data()
    {
        return $this->db->get('form_kegiatanakan')->result_array();
    }
    public function get_count()
    {
        $sql = "SELECT count(id) as id FROM form_kegiatanakan";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }
    public function input_data($data){
        $this->db->insert('form_kegiatanakan',$data);
    }
    public function delkegiatanakan($id)
    {
     $this->db->delete('form_kegiatanakan',['id' => $id]);
    }

}
?>