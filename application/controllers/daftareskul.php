<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftareskul extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_eskul');
	}
	public function index()
	{
		$data['eskul'] = $this->m_eskul->select();
		$data['pilihan'] = $this->m_eskul->filter($this->input->post('eskul'));
		$this->load->view('header');
		$this->load->view('navhome');
		$this->load->view('list_view', $data);
		$this->load->view('footer');
	}
	function filterisasi()
	{
		$data['eskul'] = $this->m_eskul->select();
		$data['pilihan'] = $this->m_eskul->filter($this->input->post('eskul'));
		$this->load->view('header');
		$this->load->view('navhome');
		$this->load->view('list_view', $data);
		$this->load->view('footer');
	}
}
