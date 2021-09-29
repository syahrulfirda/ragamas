<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        parent::__construct();

        $this->load->model("m_pengaduan","",TRUE);
        
    }
	public function index()
	{
			$data['count'] = $this->m_pengaduan->get_count();
			$this->load->view('templates/beranda_header');
            $this->load->view('user/beranda',$data);
            $this->load->view('templates/beranda_footer');
	
	}
	public function ginting()
	{
		$this->load->view('templates/info_header');
		$this->load->view('templates/info_footer');
		$this->load->view('user/ginting');
	}
	public function antusias()
	{
		$this->load->view('templates/info_header');
		$this->load->view('templates/info_footer');
		$this->load->view('user/antusias');
	}
	public function ppkm()
	{
		$this->load->view('templates/info_header');
		$this->load->view('templates/info_footer');
		$this->load->view('user/PPKM');
	}
	public function geliat()
	{
		$this->load->view('templates/info_header');
		$this->load->view('templates/info_footer');
		$this->load->view('user/geliat');
	}
	public function kebakaran()
	{
		$this->load->view('templates/info_header');
		$this->load->view('templates/info_footer');
		$this->load->view('user/kebakaran');
	}
	public function tracer()
	{
		$this->load->view('templates/info_header');
		$this->load->view('templates/info_footer');
		$this->load->view('user/tracer');
	}
	public function vaksinasi()
	{
		$this->load->view('templates/info_header');
		$this->load->view('templates/info_footer');
		$this->load->view('user/vaksinasi');
	}
	public function pengaduan()
	{
		$this->load->view('templates/info_header');
		$this->load->view('templates/info_footer');
		$this->load->view('user/pengaduan');
	}
}
