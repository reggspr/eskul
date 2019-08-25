<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswa');
		$this->load->model('m_eskul');
		$this->load->model('m_login');
	}

	public function index()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('user'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
			$data['siswa'] = $this->m_siswa->select2();
			$data['eskul'] = $this->m_eskul->select();
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_nilai', $data);
			$this->load->view('modal');
			$this->load->view('footer_admin');
		}
		else
		{
			redirect('login','refresh');
		}
	}
	function edit_data()
	{
		$id = $this->input->post('id');
		$data = array('nilai' => $this->input->post('nilai'));
		$where = array('id' => $id);
		$this->m_siswa->update($data, $where);
		echo '<script>alert("Nilai ditambahkan");</script>';

		redirect('nilai','refresh');
	}
	function filterisasi()
	{
		$data['siswa'] = $this->m_siswa->filter($this->input->post('eskul'));
		$data['eskul'] = $this->m_eskul->select();
		$this->load->view('header_admin');
		$this->load->view('navigation');
		$this->load->view('v_nilai', $data);
		$this->load->view('modal');
		$this->load->view('footer_admin');
	}
}
