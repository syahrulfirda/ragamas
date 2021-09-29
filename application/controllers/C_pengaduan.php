<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pengaduan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // pemblokiran hak akses
        //   if(!$this->session->userdata('email')){
        // redirect('auth');
        // }
       

        $this->load->model("m_cetak","",TRUE);
        $this->load->model("m_pengaduan","",TRUE);
        
    }
    // Halaman pengaduan admin
	public function index()
	{

        
        $data['title'] = 'Form pengaduan';
        $data['user']=$this->db->get_where('user',['email' =>
        $this->session-> userdata('email')])->row_array();
        $data['count'] = $this->m_pengaduan->get_count();
        $this->load->view('templates/admin_header',$data);
        $data['formpengaduan'] = $this->m_pengaduan->tampil_Data();
        $this->load->view('admin/form_pengaduan',$data);
		$this->load->view('templates/admin_footer');
     
		
	}
       // end Halaman pengaduan admin

    //    tambah data pengaduan
    public function tambah_aksi(){
        
        
        $nama_pelopor    =   $this->input->post('nama');
        $nik             =   $this->input->post('nik');
        $judul_laporan   =   $this->input->post('judul');
        $detail_pengaduan   =   $this->input->post('detail');
        $tanggal   =   $this->input->post('tanggal');
        $kontak_pelopor   =   $this->input->post('kontak');
        $tempat_tinggal   =   $this->input->post('tempat');
        $bukti              =$_FILES['bukti'];
        if($bukti=''){}else{
            $config['upload_path']      ='./asset/img/bukti';
            $config['allowed_types']    ='jpg|png|gif';

            $this->load->library('upload',$config);
            if($this->upload->do_upload('bukti')){
                $bukti=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_pelopor'              =>$nama_pelopor,
            'nik'                       =>$nik,
            'judul_laporan'           =>$judul_laporan,
            'detail_pengaduan'         =>$detail_pengaduan,
            'tanggal'                  =>$tanggal,
            'kontak_pelopor'      =>$kontak_pelopor,
            'tempat_tinggal'      =>$tempat_tinggal,
            'bukti'      =>$bukti
        );
        
      $this->m_pengaduan->input_Data($data,'pengaduan');  
    
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Selamat! Anda Berhasil Melaporkan Aduan Anda Ke Kecamatan Cimahi Selatan</h4>
      <p>Terima Kasih,Telah melaporkan Aduan anda,<b>aduan anda akan di respon 3X24 Jam</b>.</p>
      <hr>
      <p class="mb-0">Respon aduan anda akan kami tanggapi Melalui Whatsapp/Sms melalui Nomor anda yang telah Di isi.</p>
    </div>'); 
      redirect('user/formpengaduan');
    }
       //    endtambah data pengaduan

    // public function pengaduan()
	// {
        
    //      $data['title']='Pengaduan';
    //      $this->load->view('templates/admin_header',$data);
    //     $data['user']=$this->db->get_where('user',['email' =>
    //     $this->session-> userdata('email')])->row_array();
	// 	$this->load->view('admin/form_pengaduan',$data);
    //     $this->load->view('templates/admin_footer');
	// }

    // hapus data pengaduan
    public function del($id)
	{

        $this->m_pengaduan->del($id);
        $this->session->set_flashdata('message','<div class="alert-success" role="alert">Anda Berhasil menghapus Data Pengaduan</div>');
        redirect('C_pengaduan  ');
	}
    // end hapus data pengaduan

    // print data pengaduan
    public function print($id){
        
        $data['formpengaduan'] = $this->m_cetak ->lihat($id);
        $this->load->view('user/print_pengaduan',$data);
        
    }
    // end print
    
    // public function pdf()
    // {
    //     $this->load->library('dompdf_gen');
    //     $data['formpengaduan'] = $this->m_pengaduan->tampil_Data('pengaduan');
    //     $this->load->view('user/print_pengaduan',$data);

    //     $paper_size  = 'A4';
    //     $orientation = 'landscape';
    //     $html = $this->output->get_output();
    //     $this->dompdf->set_paper($paper_size, $orientation );

    //     $this->dompdf->load_html($html);
    //     $this->dompdf->render();
    //     $this->dompdf->stream("pengaduan.pdf", array("Attachment" =>0));
    // }
    
       
    }

