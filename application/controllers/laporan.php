<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_siswa');
	}

	public function index()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('user'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
			$data['laporan'] = $this->m_siswa->select2();
			$data['siswa'] = $this->m_siswa->filter2($this->input->post('tahun'));
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_laporan', $data);
			$this->load->view('modal');
			$this->load->view('footer_admin');
		}
		else
		{
			redirect('login','refresh');
		}
	}
	function filterisasi()
	{
		$data['laporan'] = $this->m_siswa->select2();
		$data['siswa'] = $this->m_siswa->filter2($this->input->post('angkatan'), $this->input->post('kelas'));
		$this->load->view('header_admin');
		$this->load->view('navigation');
		$this->load->view('v_laporan', $data);
		$this->load->view('modal');
		$this->load->view('footer_admin');
	}
}