<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_eskul extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->table = "eskul";
	}

	function select($where = null)
	{
		if($where != null)
		{
			$ths->db->where($where);
		}
		$query = $this->db->get($this->table);
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
	function getAllGroups()
	{
		$quer = $this->db->query('SELECT * FROM eskul');
		return $quer->result_array();
	}
	function filter($da)
	{
		$que = $this->db->query("SELECT * FROM eskul WHERE nama_eskul='$da'");
		return $que->result_array();
	}

	/*function selectmakan()
	{
		$query = $this->db->query("SELECT * FROM eskul WHERE jenis='makanan'");
		return $query->result_array();
	}

	function selectminum()
	{
		$query = $this->db->query("SELECT * FROM menu WHERE jenis='minuman'");
		return $query->result_array();
	}*/
}
