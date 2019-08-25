<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswa');
		$this->load->model('m_eskul');
	}
	public function index()
	{
		$data['limit'] = $this->m_siswa->limitcheck($this->input->post('nip'));
		$this->load->view('header');
		$this->load->view('navhome');
		$this->load->view('daftar_view', $data);
		$this->load->view('footer');
	}
	function insert_data()
	{
		$data = array(
					
					'nip' => $this->input->post('nip')//,
					/*'angkatan' => $this->input->post('angkatan'),
					'eskul_pilihan' => $this->input->post('eskul_pilihan'),
					'nilai' => $this->input->post('nilai'),
					'status' => $this->input->post('status')*/
				);
		$this->m_siswa->sementara($data);
		$data['jay'] = $this->m_siswa->naon($this->input->post('nip'));
		$data['eskul'] = $this->m_eskul->select();
		$data['limit'] = $this->m_siswa->limitcheck($this->input->post('nip'));
		$this->load->view('header');
		$this->load->view('navhome');
		$this->load->view('daftar_lanjut', $data);
		$this->load->view('footer');
	}
	function masuk()
	{
		$data = array(
					'nama_siswa' => $this->input->post('nama_siswa'),
					'nip' => $this->input->post('nip'),
					'angkatan' => $this->input->post('angkatan'),
					'kelas' => $this->input->post('kelas'),
					'eskul_pilihan' => $this->input->post('eskul_pilihan'),
					'nilai' => $this->input->post('nilai'),
					'status' => $this->input->post('status')
				);
		$this->m_siswa->insert($data);
		echo '<script>alert("Akan diproses");</script>';
		redirect('daftar','refresh');
	}
}
