<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
	public function simpanData($data = null)
	{
		$this->db->insert('user', $data);
	}

	public function cekData($where = null)
	{
		return $this->db->get_where('user', $where);
	}

	public function getUserWhere($where = null)
	{
		return $this->db->get_where('user', $where);
	}

	public function cekUserAccess($where = null)
	{
		$this->db->select('*');
		$this->db->from('access_menu');
		$this->db->where($where);
		return $this->db->get();
	}

	public function getUserLimit()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->limit(10, 0);
		return $this->db->get();
	}

	public function joinKategoriBuku($where)
	{
		$this->db->from('buku');
		$this->db->join('kategori', 'kategori.id = buku.id_kategori');
		$this->db->where($where);
		return $this->db->get();
	}

	public function getUserWithRole()
	{
		return $this->db->query("SELECT user.nama, user.email, user.image, user.role_id, user.tanggal_input, role.id, role.role as role_name FROM user JOIN role ON user.role_id=role.id")->result_array();
	}
}
