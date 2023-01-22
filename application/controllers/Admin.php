<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model(array('ppid'));
		$this->load->library('session');

		if($this->session->userdata('level')!="admin") {
			redirect('user/login');
		}
	}

	public function index()
	{
		$data['title'] = "DATA INFORMASI PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['data'] = $this->ppid->selectAll('tb_ip')->result_object();
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/index');
		$this->load->view('admin/layout/footer');
	}

	// Form list keberatan
	public function list_keberatan()
	{
		$data['title'] = "DATA PERNYATAAN KEBERATAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['belum_diproses'] = $this->ppid->get_by_role2();
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/list_keberatan');
		$this->load->view('admin/layout/footer');
	}

	public function list_diterima2()
	{
		$data['title'] = "DATA PERNYATAAN KEBERATAN YANG DITERIMA | PPID Dinas Komunikasi dan Informatika Singkawang";
		//$data['data'] = $this->ppid->selectAll('tb_pip')->result_object();
		$data['diterima'] = $this->ppid->get_by_diterima2();
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/list_diterima2');
		$this->load->view('admin/layout/footer');
	}

	public function list_ditolak2()
	{
		$data['title'] = "DATA PERNYATAAN KEBERTAN YANG DITOLAK | PPID Dinas Komunikasi dan Informatika Singkawang";
		//$data['data'] = $this->ppid->selectAll('tb_pip')->result_object();
		$data['ditolak'] = $this->ppid->get_by_ditolak2();
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/list_ditolak2');
		$this->load->view('admin/layout/footer');
	}

	//form list pip

	public function list()
	{
		$data['title'] = "DATA PEMOHON INFORMASI PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		//$data['data'] = $this->ppid->selectAll('tb_pip')->result_object();
		$data['belum_diproses'] = $this->ppid->get_by_role();
		$data['kategori'] = $this->ppid->get_kategori_query();
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/list');
		$this->load->view('admin/layout/footer');
	}

	public function list_diterima()
	{
		$data['title'] = "DATA PEMOHON INFORMASI PUBLIK YANG DITERIMA | PPID Dinas Komunikasi dan Informatika Singkawang";
		//$data['data'] = $this->ppid->selectAll('tb_pip')->result_object();
		$data['diterima'] = $this->ppid->get_by_diterima();
		$data['kategori'] = $this->ppid->get_kategori_query();
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/list_diterima');
		$this->load->view('admin/layout/footer');
	}

	public function list_ditolak()
	{
		$data['title'] = "DATA PEMOHON INFORMASI PUBLIK YANG DITOLAK | PPID Dinas Komunikasi dan Informatika Singkawang";
		//$data['data'] = $this->ppid->selectAll('tb_pip')->result_object();
		$data['ditolak'] = $this->ppid->get_by_ditolak();
		$data['kategori'] = $this->ppid->get_kategori_query();
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/list_ditolak');
		$this->load->view('admin/layout/footer');
	}

	public function v_pipid($id_pip)
	{
		$data['title'] = "FORMULIR PERMOHONAN INFORMASI PUBLIK";
		$data['r'] = $this->ppid->select('tb_pip', array('id_pip' => $id_pip))->row();
		$data['ppid'] = $this->ppid->get_by_role();
		//$this->data['ppid'] = $this->db->get('tb_pip')->result_array();
		$this->load->view('admin/v_pipid', $data);
	}

	public function v_keberatan($id_keberatan)
	{
		$data['title'] = "FORMULIR PERNYATAAN KEBERATAN INFORMASI PUBLIK";
		$data['r'] = $this->ppid->select('tb_keberatan', array('id_keberatan' => $id_keberatan))->row();
		//$this->data['ppid'] = $this->db->get('tb_pip')->result_array();
		$this->load->view('admin/v_keberatan', $data);
	}

	public function tambah()
	{
		$data['title'] = "Tambah IP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['kategori'] = $this->ppid->get_kategori_query();
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/tambah',$data);
		$this->load->view('admin/layout/footer');
	}
	
	public function atambah()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|jpg|png';
		$config['max_size']  = '2000';
		//$config['max_width'] = '5000';
		//$config['max_height'] = '5000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
		$data['pesan'] = "Maaf ukuran file terlalu besar min 2000kb atau format tidak sesuai hanya(pdf,doc,docx), silahkan coba lagi";
		$data['title'] = "Tambah IP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['kategori'] = $this->ppid->get_kategori_query();
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/tambah',$data);
		$this->load->view('admin/layout/footer');		
		
			
		}
		else{
			
			
		$dok = $this->upload->data();
			$up_data = $dok['file_name'];
			$data = array('nama' 				=> $this->input->post('nama'),
					  	  'kategori' 			=> $this->input->post('kategori'),
					      'pejabat' 			=> $this->input->post('pejabat'),
					  	  'penanggung_jawab' 	=> $this->input->post('penanggung_jawab'),
					  	  'tahun'				=> $this->input->post('tahun'),
					  	  'tempat' 				=> $this->input->post('tempat'),
					  	  'informasi' 			=> $this->input->post('informasi'),
					  	  'jangka' 				=> $this->input->post('jangka'),
					  	  'up_data' 			=> $up_data);

		$query = $this->ppid->insert('tb_ip',$data);
		redirect('admin/index','refresh');
		}

	}

	public function edit($id_ip)
	{
		$data['title'] = "Edit IP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['r'] = $this->ppid->select('tb_ip', array('id_ip' => $id_ip))->row();
		$this->data['ppid'] = $this->db->get('tb_ip')->result_array();
		$data['kategori'] = $this->ppid->get_kategori_query();
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/edit');
		$this->load->view('admin/layout/footer');
	}



	public function aedit()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|png|jpg';
		$config['max_size']  = '2000';
		//$config['max_width'] = '5000';
		//$config['max_height'] = '5000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
		echo 'Upload gagal';

		}
		else{		
		$file = $this->upload->data();
			$up_data = $file['file_name'];
			$id_ip = array('id_ip' => $this->input->post('id_ipa'));
			$data = array('nama' 				=> $this->input->post('nama'),
					  	  'kategori' 			=> $this->input->post('kategori'),
					      'pejabat' 			=> $this->input->post('pejabat'),
					  	  'penanggung_jawab' 	=> $this->input->post('penanggung_jawab'),
					  	  'tahun'				=> $this->input->post('tahun'),
					  	  'tempat' 				=> $this->input->post('tempat'),
					  	  'informasi' 			=> $this->input->post('informasi'),
					  	  'jangka' 				=> $this->input->post('jangka'),
					  	  'up_data' 			=> $up_data);

		$query = $this->ppid->update('tb_ip', $data, $id_ip);
		redirect('admin/index','refresh');
		}

	}

	public function hapus($id)
	{
		$data = array('id_ip' => $id);
		$query = $this->ppid->delete('tb_ip', $data);
		redirect('admin/index','refresh');
	}

	public function hapus2($id)
	{
		$data = array('id_pip' => $id);
		$query = $this->ppid->delete('tb_pip', $data);
		redirect('admin/list_ditolak','refresh');
	}

	public function hapus3($id)
	{
		$data = array('id_keberatan' => $id);
		$query = $this->ppid->delete('tb_keberatan', $data);
		redirect('admin/list_ditolak2','refresh');
	}

	public function logout()
	{
		$this->session->set_userdata('email', FALSE);
		$this->session->sess_destroy();
		redirect('user/index');
	}

	public function cetak_pip()
	{
		$data['title'] = "DAFTAR PEMOHON INFORMASI PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['data'] = $this->ppid->get_by_role();
		//$data['data'] = $this->ppid->selectAll('tb_pip')->result_object();
		$this->load->view('admin/cetak_pip', $data);
	}

	public function cetak_keberatan()
	{
		$data['title'] = "DAFTAR PERNYATAAN KEBERATAN PERMOHONAN INFORMASI PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['data'] = $this->ppid->get_by_role();
		//$data['data'] = $this->ppid->selectAll('tb_pip')->result_object();
		$this->load->view('admin/cetak_keberatan', $data);
	}

	// button pip

	public function diterima($id_pip='')
	{
		# code...
		$query = $this->ppid->update('tb_pip', array('status' => 'diterima') , array( 'id_pip' => $id_pip));
		redirect('admin/list','refresh');
	}

	public function ditolak($id_pip='')
	{
		# code...
		$query = $this->ppid->update('tb_pip', array('status' => 'ditolak') , array( 'id_pip' => $id_pip));
		redirect('admin/list','refresh');
	}

	// button keberatan
	public function diterima2($id_keberatan='')
	{
		# code...
		$query = $this->ppid->update('tb_keberatan', array('status' => 'diterima') , array( 'id_keberatan' => $id_keberatan));
		redirect('admin/list_keberatan','refresh');
	}

	public function ditolak2($id_keberatan='')
	{
		# code...
		$query = $this->ppid->update('tb_keberatan', array('status' => 'ditolak') , array( 'id_keberatan' => $id_keberatan));
		redirect('admin/list_keberatan','refresh');
	}


	
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */