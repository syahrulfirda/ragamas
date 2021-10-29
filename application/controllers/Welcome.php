<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model("m_kegiatanakan","",TRUE);
		$this->load->model("m_kegiatantelah","",TRUE);
        $this->load->model("m_pengaduan","",TRUE);
		$this->load->model("m_info","",TRUE);
		$this->load->model("m_cetak","",TRUE);
        
    }
	public function index()
	{		$data['info'] = $this->m_info->tampil_Data();

			$data['count_akan'] = $this->m_kegiatanakan->get_count();
			$data['count_telah'] = $this->m_kegiatantelah->get_count();
			$data['count'] = $this->m_pengaduan->get_count();
			$data['count_info'] = $this->m_info->get_count();

			$this->load->view('templates/beranda_header');
            $this->load->view('user/beranda',$data);
            $this->load->view('templates/beranda_footer');
	
	}
	
// melihat informasi kecamatan cimahi selatan pada hal	aman beranda
	public function info($id){
        $data['info'] = $this->m_info->lihatinfo($id);
		$this->load->view('templates/beranda_header');
        $this->load->view('user/ppkm',$data);
		$this->load->view('templates/beranda_footer');
    }
// selesai

public function formpengaduan()
	{

		$data['title']='Lapor Pengaduan Anda';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('user/mas_pengaduan',$data);
		$this->load->view('templates/auth_footer');
	}
	public function panduan()
	{
		$data['title']='Panduan';
		$this->load->view('templates/kegiatan_header',$data);
		$this->load->view('user/panduan',$data);
		$this->load->view('templates/kegiatan_footer');
	
	}

	// halaaman tampil data kegiatan yang akan di laksankan pada beranda
	public function kegiatan_akan_welcome()
	{
		$data['title']='Rencana kegiatan KCS';
        $this->load->view('templates/kegiatan_header',$data);
        $data['kegiatan'] = $this->m_kegiatanakan->tampil_Data();
		$this->load->view('user/kegiatan_akandilaksanakan',$data);
        $this->load->view('templates/kegiatan_footer',$data);
	}
// selesai


// halaman tampil data kegiatan sudah selesai pada beranda
public function kegiatan_telah_welcome()
{
	$data['title']='kegiatan Telah  selesai KCS';
	$this->load->view('templates/kegiatan_header',$data);
	$data['telah'] = $this->m_kegiatantelah->tampil_Data();
	$this->load->view('user/kegiatan_dilaksanakan',$data);
	$this->load->view('templates/kegiatan_footer',$data);
}
// selesai
}
