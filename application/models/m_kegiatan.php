<?php

class m_kegiatan extends CI_Model{
    
    public function tampil_Data()
    {
        return $this->db->get('form_kegiatanakan')->result_array();
    }
    public function input_data($data){
        $this->db->insert('form_kegiatanakan',$data);
    }

    function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->nama_kegiatan = $post["kegiatan"];
    //     $this->tempat = $post["lokasi"];
    //     $this->dari_tanggal = $post["firstdate"];
    //     $this->sampai_tanggal = $post["enddate"];
    //     $this->db->update($this->_table, $this, array('form_kegiatanakan' => $post['kegiatan']));
    // }

    function update_data($where,$data,$table){
		$this->db->where($where,$data);
		$this->db->update($table,$data);
	}	
}
?>