<?php

class m_pengaduan extends CI_Model{
    
    public function tampil_Data()
    {
        return $this->db->get('pengaduan')->result_array();
    }
    // menghitung jumlah data laporan pengaduan yang masuk
    public function get_count()
    {
        $sql = "SELECT count(id) as id FROM pengaduan";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }
    // end menghitung jumlah data laporan pengaduan yang masuk
    public function input_data($data){
        $this->db->insert('pengaduan',$data);
    }
// hapus data pengaduan
    function del($id){
		$this->db->delete('pengaduan',['id' => $id]);
	}
    // end hapus data pengaduan
    public function delkegiatantelah($id)
    {
     $this->db->delete('form_kegiatantelah',['id' => $id]);
    }
    public function delkegiatanakan($id)
    {
     $this->db->delete('form_kegiatanakan',['id' => $id]);
    }
    public function get_keyword($search)
    {
        $this->db->select('*');
		$this->db->from('pengaduan');
	
			$this->db->like('nama_pelopor',$search);
		
		return $this->db->get()->result_array();
	}
}


?>