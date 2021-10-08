<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("m_info","",TRUE);
        $this->load->model("m_kegiatantelah","",TRUE);
        $this->load->model("m_kegiatanakan","",TRUE);
        $this->load->model("m_pengaduan","",TRUE);
        $this->load->helper('url');
    }
    // form tambah data kegiatan yang akan pada admin
            public function form_tambah_kegiatan_akan (){
                $data['title']='Form Kegiatan akan dilaksanakan';
                $data['user']=$this->db->get_where('user',['email' =>
                $this->session-> userdata('email')])->row_array();

                $this->load->view('templates/admin_header',$data);
                $this->load->view('admin/form_kegiatan_akandilaksanakan');
                $this->load->view('templates/admin_footer');
 }
//  selesai

    // aksi tambah data kegiatan yang akan di laksanakan
    public function tambah_kegiatan_akan_aksi(){
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
        $this->m_kegiatanakan->input_Data($data,'form_kegiatanakan'); 
        $this->session->set_flashdata('message','<div class="alert-success" role="alert">Anda Berhasil menginputkan data</div>'); 
        redirect('admin/form_tambah_kegiatan_akan');
    }
    // selesai

    // form tambah data kegiatan yang akan pada admin
    public function form_tambah_kegiatan_telah (){
        $data['title']='Form Kegiatan telah dilaksanakan';
        $data['user']=$this->db->get_where('user',['email' =>
        $this->session-> userdata('email')])->row_array();

        $this->load->view('templates/admin_header',$data);
        $this->load->view('admin/form_kegiatantelahdilaksanakan');
        $this->load->view('templates/admin_footer');
}
//  selesai
    // aksi tambah data kegiatan yang telah di laksanakan
    public function tambah_kegiatan_telah_aksi(){
        
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
        redirect('admin/form_tambah_kegiatan_telah ');
    }
       // selesai

       public function kegiatantelahdilaksanakanadmin()
	{
		$data['title']='kegiatan telah dilaksanakan';
        $data['user']=$this->db->get_where('user',['email' =>
        $this->session-> userdata('email')])->row_array();
        
        $data['count_telah'] = $this->m_kegiatantelah->get_count();

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

        $data['count_akan'] = $this->m_kegiatanakan->get_count();

        $this->load->view('templates/admin_header',$data);
        $data['kegiatan'] = $this->m_kegiatanakan->tampil_Data();
		$this->load->view('admin/lihat_data_akan',$data);
		$this->load->view('templates/admin_footer');
	}
    // hapus data kegiatan yang telah di laksanakan
    public function delete_akan($id)
	{
        $this->m_kegiatanakan->delkegiatanakan($id);
        redirect('admin/kegiatanakandilaksanakanadmin');
	}
     // selesai

    //  hapus data kegiatan akan dilaksankan
     public function delete_telah($id)
	{
        $this->m_kegiatantelah->delkegiatantelah($id);
        redirect('admin/kegiatantelahdilaksanakanadmin');
	}
     //  selesai
    
    // melihat data informasi info cimahi pada admin
    public function lihat_info()
	{
      
		$data['title']='Info Cimahi';
        $data['user']=$this->db->get_where('user',['email' =>
        $this->session-> userdata('email')])->row_array();
        
        $this->load->view('templates/admin_header',$data);
        $data['info'] = $this->m_info->tampil_Data();
		$this->load->view('admin/lihat_info',$data);
        $this->load->view('templates/admin_footer');
	}
    // selesai

    // mengisi data tambah info cimahi pada admin
    public function infocimahi(){

        $data['title']='Form Info Cimahi';
        $data['info'] = $this->m_info->tampil_Data();
        $data['user']=$this->db->get_where('user',['email' =>
        $this->session-> userdata('email')])->row_array();
        
        $this->load->view('templates/admin_header',$data); 
        $this->load->view('admin/form_infocimahi',$data);
        $this->load->view('templates/admin_footer');
    }
    // selesai

    // fungsi tambah info cimahi
    public function infocimahi_tambah(){
        $judul_berita   =   $this->input->post('judul_berita');
        $isi_berita   =   $this->input->post('isi_berita');
        $gambar              =$_FILES['gambar'];

        if($gambar=''){}else{
            $config['upload_path']      ='./asset/img/gambarberita';
            $config['allowed_types']    ='jpg|png|gif';

            $this->load->library('upload',$config);
            if($this->upload->do_upload('gambar')){
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'judul_berita '                =>$judul_berita ,
            'isi_berita'                     =>$isi_berita,
            'gambar'                        =>$gambar
            

        );
        $this->m_info->input_Data($data,'infocimahiselatan'); 
        $this->session->set_flashdata('message','<div class="alert-success" role="alert">Anda Berhasil menginputkan data</div>'); 
        redirect('admin/infocimahi');
    }
    // selesai

    // hapus info cimahi
    public function hapusinfo($id)
	{

        $this->m_info->del($id);
        $this->session->set_flashdata('message','<div class="alert-success" role="alert">Anda Berhasil menghapus Data Pengaduan</div>');
        redirect('admin/lihat_info');
	}
    // selesai

    public function panduan_admin()
{
    $data['title']='Panduan Admin';
    $this->load->view('templates/kegiatan_header',$data);
    $this->load->view('admin/panduan_admin',$data);
    $this->load->view('templates/kegiatan_footer');
}
}


?>