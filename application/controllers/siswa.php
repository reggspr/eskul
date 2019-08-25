<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswa');
		$this->load->model('m_login');
	}

	public function index()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('user'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
			$data['siswa'] = $this->m_siswa->select();
			//$data['limit'] = $this->m_siswa->limitcheck($this->input->post('nip'));
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_siswa', $data);
			$this->load->view('modal');
			$this->load->view('footer_admin');
		}
		else
		{
			redirect('login','refresh');
		}
	}
	function insert_data()
	{
		$data = array(
					'nama_siswa' => $this->input->post('nama_siswa'),
					'nip' => $this->input->post('nip'),
					'angkatan' => $this->input->post('angkatan'),
					'eskul_pilihan' => $this->input->post('eskul_pilihan'),
					'nilai' => $this->input->post('nilai')
				);
			$this->m_siswa->insert($data);
			redirect('siswa','refresh');
	}
	function edit_data()
	{
		$id = $this->input->post('id');
		$data = array('status' => $this->input->post('status'));
		$where = array('id' => $id);
		$this->m_siswa->update($data, $where);
		echo '<script>alert("Telah dikonfirmasi");</script>';

		redirect('siswa','refresh');
	}
	function delete_data()
	{
		$id = $this->input->post('id');
		$where = array ('id' => $id);
		$this->m_siswa->delete($where);
		redirect('eskul','refresh');
	}
}
