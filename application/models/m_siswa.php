<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->table = "daftar";
		$this->tables = "junk";
	}

	function select($where = null)
	{
		if($where != null)
		{
			$ths->db->where($where);
		}
		$query = $this->db->query("SELECT * FROM daftar WHERE status ='belum'");
		return $query->result_array();
	}
	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	function update($data, $where)
	{
		$this->db->where($where);
		$this->db->update($this->table, $data);
	}

	function delete($where)
	{
		$this->db->where($where);
		$this->db->delete($this->table);
	}
	function select2($where = null)
	{
		if($where != null)
		{
			$ths->db->where($where);
		}
		$query = $this->db->query("SELECT * FROM daftar WHERE status ='selesai'");
		return $query->result_array();
	}
	function limitcheck($limit)
	{
		$quer = $this->db->query("SELECT * FROM daftar WHERE nip ='$limit'");
		return $quer->result_array();
	}
	function sementara($tara)
	{
		$this->db->insert($this->tables, $tara);
	}
	function naon($waw)
	{
		$que = $this->db->query("SELECT * FROM junk WHERE nip ='$waw'");
		return $que->result_array();
	}
	function filter($wew)
	{
		$wue = $this->db->query("SELECT * FROM daftar WHERE eskul_pilihan ='$wew' && status='selesai'");
		return $wue->result_array();
	}
	function filter2($waw="", $wuw="")
	{
		$hew = $this->db->query("SELECT * FROM daftar WHERE angkatan ='$waw' && status='selesai' && kelas='$wuw'");
		return $hew->result_array();
	}
}