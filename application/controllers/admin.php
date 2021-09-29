<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        // if(!$this->session->userdata('email')){
        //     redirect('auth');
        // }

        $this->load->model("m_kegiatantelah","",TRUE);
        $this->load->model("m_kegiatan","",TRUE);
        $this->load->model("m_pengaduan","",TRUE);
        $this->load->helper('url');
    }
            public function kegiatan (){
                $data['title']='Form Kegiatan akan dilaksanakan';
                $this->load->view('templates/admin_header',$data);
                $this->load->view('admin/form_kegiatan_akandilaksanakan');
                $this->load->view('templates/admin_footer');

 }
            public function kegiatantelah (){
        
                $data['title']='Form Kegiatan telah dilaksanakan';
                $this->load->view('templates/admin_header',$data);
                $this->load->view('admin/form_kegiatantelahdilaksanakan');
                $this->load->view('templates/admin_footer');

}
       
         public function kegiatanakandilaksanakan()
	{
		$data['title']='kegiatan akan dilaksanakan';
        $data['kegiatan'] = $this->m_kegiatan->tampil_Data();
		$this->load->view('user/kegiatan_akandilaksanakan',$data);
        
		
	}
    
	public function kegiatantelahdilaksanakan()
	{
        $data['title']='kegiatan Telah  dilaksanakan';
        $data['telah'] = $this->m_kegiatantelah->tampil_Data();
		$this->load->view('user/kegiatan_dilaksanakan',$data);
	}

    // tambah data kegiatan yang akan di laksanakan
    public function tambah_aksi(){
        
        $nama_kegiatan   =   $this->input->post('kegiatan');
        $tempat   =   $this->input->post('lokasi');
        $dari_tanggal =   $this->input->post('firstdate');
        $sampai_tanggal   =   $this->input->post('endate');

        $data = array(
            'nama_kegiatan '                =>$nama_kegiatan ,
            'tempat'                            =>$tempat,
            'dari_tanggal'                     =>$dari_tanggal,
            'sampai_tanggal'                  =>$sampai_tanggal

        );
        $this->m_kegiatan->input_Data($data,'form_kegiatanakan'); 
        $this->session->set_flashdata('message','<div class="alert-success" role="alert">Anda Berhasil menginputkan data</div>'); 
        redirect('admin/kegiatan');
    }
    // end  tambah data kegiatan yang akan di laksanakan


    // tambah data kegiatan yang telah di laksanakan
    public function tambah_aksitelah(){
        
        $nama_kegiatan   =   $this->input->post('kegiatan');
        $tempat   =   $this->input->post('lokasi');
        $dari_tanggal =   $this->input->post('firstdate');
        $sampai_tanggal   =   $this->input->post('endate');
        $keterangan   =   $this->input->post('ket');

        $data = array(
            'nama_kegiatan'                    =>$nama_kegiatan ,
            'tempat'                            =>$tempat,
            'dari_tanggal'                        =>$dari_tanggal,
            'sampai_tanggal'                      =>$sampai_tanggal,
            'keterangan'                         =>$keterangan

        );
        $this->m_kegiatantelah->input_Data($data,'form_kegiatantelah');  
        $this->session->set_flashdata('message','<div class="alert-success" role="alert">Anda Berhasil menginputkan data</div>');
        redirect('admin/kegiatantelah');
    }
       // end tambah data kegiatan yang telah di laksanakan

       public function kegiatantelahdilaksanakanadmin()
	{
      
		$data['title']='kegiatan telah dilaksanakan';
        $data['user']=$this->db->get_where('user',['email' =>
        $this->session-> userdata('email')])->row_array();
        $this->load->view('templates/admin_header',$data);
        $data['telah'] = $this->m_kegiatantelah->tampil_Data();
		$this->load->view('admin/lihat_Data_telah',$data);
        $this->load->view('templates/admin_footer');
	}
    public function kegiatanakandilaksanakanadmin()
	{
		$data['title']='kegiatan akan dilaksanakan';
        $data['user']=$this->db->get_where('user',['email' =>
        $this->session-> userdata('email')])->row_array();
        $this->load->view('templates/admin_header',$data);
        $data['kegiatan'] = $this->m_kegiatan->tampil_Data();
		$this->load->view('admin/lihat_data_akan',$data);
		$this->load->view('templates/admin_footer');
	}
    // hapus data kegiatan yang telah di laksanakan
    public function del($id)
	{
        $this->m_pengaduan->delkegiatantelah($id);
        redirect('admin/kegiatantelahdilaksanakanadmin');
	}
     // end  hapus data kegiatan yang telah di laksanakan

    //  hapus data kegiatan akan dilaksankan
     public function delakan($id)
	{
        $this->m_pengaduan->delkegiatanakan($id);
        redirect('admin/kegiatanakandilaksanakanadmin');
	}
     //  end  hapus data kegiatan akan dilaksankan
    
     //edit kegiatan akan dilaksanakan
     public function edit($id){
        $where = array('id' => $id);
       
        $data['title']='kegiatan akan dilaksanakan';
        $this->load->view('templates/admin_header',$data); 
      
        
        $data['kegiatan'] = $this->m_kegiatan->edit_data($where,'form_kegiatanakan')->result();
        $this->load->view('admin/edit_data_akan',$data);
    
    }
    // 
    function update(){

        $id = $this->input->post('id');
        $nama_kegiatan   =   $this->input->post('kegiatan');
        $tempat   =   $this->input->post('lokasi');
        $dari_tanggal =   $this->input->post('firstdate');
        $sampai_tanggal   =   $this->input->post('endate');
        
        $data = array(
           
            'nama_kegiatan '                =>$nama_kegiatan ,
            'tempat'                            =>$tempat,
            'dari_tanggal'                     =>$dari_tanggal,
            'sampai_tanggal'                  =>$sampai_tanggal

        );
        $where = array(
            'id'                =>$id
        );
        $this->m_kegiatan->update_Data($where,$data,'form_kegiatanakan'); 
	    redirect('admin/kegiatanakandilaksanakanadmin');
    }
}

?>