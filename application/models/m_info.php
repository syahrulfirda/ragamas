<?php

class m_info extends CI_Model{
    
    public function tampil_Data()
    {
        return $this->db->get('infocimahiselatan')->result_array();
    }
    
    public function input_data($data){
        $this->db->insert('infocimahiselatan',$data);
    }
    public function lihatinfo($id)
{
    $this->db->where("id",$id);
    $query=$this->db->get('infocimahiselatan');
    return $query->result_array();
}
function del($id){
    $this->db->delete('infocimahiselatan',['id' => $id]);
}

public function get_count()
    {
        $sql = "SELECT count(id) as id FROM infocimahiselatan";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }
   
}
?>