<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{

         $data['title']='Admin';
        $data['user']=$this->db->get_where('user',['email' =>
        $this->session->userdata('email')])->row_array();
		$this->load->view('user/index',$data);
	}
	public function pengaduan()
	{
         $data['title']='Pengaduan';
        $data['user']=$this->db->get_where('user',['email' =>
        $this->session->userdata('email')])->row_array();
		redirect('welcome');
		// $this->load->view('welcome/beranda',$data);
		
	}
	public function formpengaduan()
	{
		$data['title']='Lapor Pengaduan Anda';
		
		$this->load->view('user/mas_pengaduan',$data);
		
		
	}
	
	
}
