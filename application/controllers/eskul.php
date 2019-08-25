<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eskul extends CI_Controller {

	function __construct()
	{
		parent::__construct();
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
			$data['eskul'] = $this->m_eskul->select();
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_eskul', $data);
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
		$config['upload_path'] = "./assets/uploads/";
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors(),
			'eskul' => $this->m_eskul->select());
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_eskul', $error);
			$this->load->view('modal');
			$this->load->view('footer_admin');
		}else
		{
			$file_data = $this->upload->data();
			$data = array(
						'nama_eskul' => $this->input->post('nama_eskul'),
						'deskripsi' => $this->input->post('deskripsi'),
						'gambar' => base_url().'/assets/uploads/'.$file_data['file_name']
					);
			$this->m_eskul->insert($data);
			redirect('eskul','refresh');
		}
	}
	function edit_data()
	{
		$id = $this->input->post('id');
		$config['upload_path'] = "./assets/uploads/";
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors(),
			'eskul' => $this->m_eskul->select());
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_eskul', $error);
			$this->load->view('modal');
			$this->load->view('footer_admin');
		}else
		{
			$file_data = $this->upload->data();
			$data = array(
						'nama_eskul' => $this->input->post('nama_eskul'),
						'deskripsi' => $this->input->post('deskripsi'),
						'gambar' => base_url().'/assets/uploads/'.$file_data['file_name']
					);
			$where = array('id' => $id);
			$this->m_eskul->update($data, $where);

			redirect('eskul','refresh');
		}
	}
	function delete_data()
	{
		$id = $this->input->post('id');
		$where = array ('id' => $id);
		$this->m_eskul->delete($where);
		redirect('eskul','refresh');
	}
}
