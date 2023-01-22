<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ppid extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}
	public function insert($table,$data)
	{
		
		$query = $this->db->insert($table, $data);
		return $query;
	}

	public function select($table,$where)
	{
		return $query = $this->db->get_where($table, $where);
	}

	public function selectAll($table)
	{
		return $query = $this->db->get($table);
	}

	public function update($table,$where,$id)
	{
		return $query = $this->db->update($table, $where, $id);
	}

	public function delete($table,$where)
	{
		return $query = $this->db->delete($table, $where);
	}

	public function selectLimit($table,$data,$limit,$offset)
	{
	return $query = $this->db->order_by('id', 'desc')->get_where($table, $data, $limit,$offset);	
	}

	public function get_provinsi_query()
	{
		$this->db->order_by('nama_provinsi', 'ASC');
		$query = $this->db->get('tb_provinsi');
		return $query->result();
	}

	public function get_kota_query($id_provinsi)
	{
		$this->db->order_by('nama_kota', 'ASC');
		$query = $this->db->get_where('tb_kota', array('id_provinsi' => $id_provinsi));
		return $query->result();
	}

	public function get_kategori_query()
	{
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('tb_kategori');
		return $query->result();
	}

	public function get_opd_query()
	{
		$this->db->order_by('nama_opd', 'ASC');
		$query = $this->db->get('tb_opd');
		return $query->result();
	}

	public function get_by_berkala()
	{
		$this->db->select('*');
		$this->db->from('tb_ip');
		$this->db->like('kategori', '1');
	}

	public function get_by_sertamerta()
	{
		$this->db->select('*');
		$this->db->from('tb_ip');
		$this->db->like('kategori', '2');
	}

	public function get_by_setiapsaat()
	{
		$this->db->select('*');
		$this->db->from('tb_ip');
		$this->db->like('kategori', '3');
	}

	public function proseslogin($email,$password)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where(array('email'=> $email,
							   'password' => SHA1($password)));
		//$this->db->where('password', SHA1($password));
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

	public function download($id_ip)
	{
		
		$query = $this->db->get_where('tb_ip',array('id_ip'=>$id_ip));
		return $query->row_array();
	}

	public function get_by_role()
	{
	  $this->db->select('tb_pip.*, tb_opd.nama_opd');
      $this->db->join('tb_opd', 'tb_opd.id_opd = tb_pip.id_opd', 'left');
      $this->db->from('tb_pip');
      $this->db->like('status', 'belum diproses');
      $query = $this->db->get();
      return $query->result();
	}

	// form keberatan
	public function get_by_role2()
	{
		$this->db->select('*');
		$this->db->from('tb_keberatan');
		$this->db->like('status', 'belum diproses');
		$query = $this->db->get();
        return $query->result();
	}

	public function get_by_diterima2()
	{
		$this->db->select('*');
		$this->db->from('tb_keberatan');
		$this->db->like('status', 'diterima');
		$query = $this->db->get();
        return $query->result();
	}

	public function get_by_ditolak2()
	{
		$this->db->select('*');
		$this->db->from('tb_keberatan');
		$this->db->like('status', 'ditolak');
		$query = $this->db->get();
        return $query->result();
	}

	// form permohonan
	public function get_by_diterima()
	{
		$this->db->select('tb_pip.*, tb_opd.nama_opd');
      $this->db->join('tb_opd', 'tb_opd.id_opd = tb_pip.id_opd', 'left');
      $this->db->from('tb_pip');
      $this->db->like('status', 'diterima');
      $query = $this->db->get();
      return $query->result();
	}

	public function get_by_ditolak()
	{
	  $this->db->select('tb_pip.*, tb_opd.nama_opd');
      $this->db->join('tb_opd', 'tb_opd.id_opd = tb_pip.id_opd', 'left');
      $this->db->from('tb_pip');
      $this->db->like('status', 'ditolak');
      $query = $this->db->get();
      return $query->result();
	}

	// get data user login pemohon
	public function pemohon()
	{
		$this->db->select('tb_pip.*, tb_opd.nama_opd');
		$this->db->where('tb_pip.nik', $this->session->userdata('nik'));
      	$this->db->join('tb_opd', 'tb_opd.id_opd = tb_pip.id_opd', 'left');
   		$this->db->from('tb_pip');
   		// $this->db->like('nama_pemohon', $this->session->userdata('nama_pemohon'));

   		$query = $this->db->get();
   		return $query->result();
	}

	// get data user login keberatan
	public function keberatan()
	{
		$this->db->select('*');
		$this->db->where('tb_keberatan.nik', $this->session->userdata('nik'));
   		$this->db->from('tb_keberatan');
   		// $this->db->like('nama', $this->session->userdata('nama'));
		$query = $this->db->get();
   		return $query->result(); 
	}

	// get total row
	public function getTotRow($tb, $key)
	{
		$this->db->select($key);
		return $this->db->get($tb)->num_rows();
	}

	



}

/* End of file ppid.php */
/* Location: ./application/models/ppid.php */