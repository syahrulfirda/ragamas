<?php

class m_kegiatantelah extends CI_Model{
    
    public function tampil_Data()
    {
        return $this->db->get('form_kegiatantelah')->result_array();
    }
    public function input_data($data){
        $this->db->insert('form_kegiatantelah',$data);
    }

}

?>