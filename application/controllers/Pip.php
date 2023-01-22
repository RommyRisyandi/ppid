<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pip extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model(array('ppid'));
		$this->load->library('session');

		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}
	}

	public function index()
	{
		$data['title'] = "DATA INFORMASI PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['data'] = $this->ppid->selectAll('tb_ip')->result_object();
		$this->load->view('pip/layout/head', $data);
		$this->load->view('pip/layout/header');
		$this->load->view('pip/layout/nav');
		$this->load->view('pip/index');
		$this->load->view('pip/layout/footer');
	}

	public function ip_berkala()
	{
		$data['title'] = "DATA INFORMASI PUBLIK SECARA BERKALA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['berkala'] = $this->ppid->select('tb_ip',array('kategori' => '1'))->result_object();
		$this->load->view('pip/layout/head', $data);
		$this->load->view('pip/layout/header');
		$this->load->view('pip/layout/nav');
		$this->load->view('pip/ip_berkala');
		$this->load->view('pip/layout/footer');
	}

	public function ip_sertamerta()
	{
		$data['title'] = "DATA INFORMASI PUBLIK SECARA SERTA MERTA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['sertamerta'] = $this->ppid->select('tb_ip',array('kategori' => '2'))->result_object();
		$this->load->view('pip/layout/head', $data);
		$this->load->view('pip/layout/header');
		$this->load->view('pip/layout/nav');
		$this->load->view('pip/ip_sertamerta');
		$this->load->view('pip/layout/footer');
	}

	public function ip_setiapsaat()
	{
		$data['title'] = "DATA INFORMASI PUBLIK SETIAP SAAT | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['setiapsaat'] = $this->ppid->select('tb_ip',array('kategori' => '3'))->result_object();
		$this->load->view('pip/layout/head', $data);
		$this->load->view('pip/layout/header');
		$this->load->view('pip/layout/nav');
		$this->load->view('pip/ip_setiapsaat');
		$this->load->view('pip/layout/footer');
	}
	
	//Form Permohonan

	public function permohonan_saya()
	{
		$data['title'] = "PERMOHONAN SAYA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['data'] = $this->ppid->pemohon();
		$data['kategori'] = $this->ppid->get_kategori_query();
		$this->load->view('pip/layout/head', $data);
		$this->load->view('pip/layout/header');
		$this->load->view('pip/layout/nav');
		$this->load->view('pip/permohonan_saya');
		$this->load->view('pip/layout/footer');
	}
	// Form Keberatan
	public function keberatan_saya()
	{
		$data['title'] = "KEBERATAN SAYA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['data'] = $this->ppid->keberatan();
		$this->load->view('pip/layout/head', $data);
		$this->load->view('pip/layout/header');
		$this->load->view('pip/layout/nav');
		$this->load->view('pip/keberatan_saya');
		$this->load->view('pip/layout/footer');
	}

	public function tambah()
	{
		$data['title'] = "Tambah Pemohon IP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['opd'] = $this->ppid->get_opd_query();
		$this->load->view('pip/layout/head', $data);
		$this->load->view('pip/layout/header');
		$this->load->view('pip/layout/nav');
		$this->load->view('pip/tambah');
		$this->load->view('pip/layout/footer');
	}

	public function atambah()
	{
		$config['upload_path'] = './scan/';
		$config['allowed_types'] = 'img|jpg|png';
		$config['max_size']  = '300';
		$config['max_width'] = '1000';
		$config['max_height'] = '1000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
		$data['pesan'] = "Maaf ukuran file terlalu besar min 300kb atau format tidak sesuai hanya(img,jpg,png), silahkan coba lagi";
		$data['title'] = "Tambah Pemohon IP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['opd'] = $this->ppid->get_opd_query();
		$this->load->view('pip/layout/head', $data);
		$this->load->view('pip/layout/header');
		$this->load->view('pip/layout/nav');
		$this->load->view('pip/tambah', $data);
		$this->load->view('pip/layout/footer');
		}
		else{
				
		  
			$scan = $this->upload->data();
			$scan_ktp = $scan['file_name'];
			$data = array('id_opd' 		  => $this->input->post('id_opd'),
					  	  'nama_pemohon' 	  => $this->input->post('nama_pemohon'),
					      'jenis_kelamin' 	  => $this->input->post('jenis_kelamin'),
					  	  'usia' 			  => $this->input->post('usia'),
					  	  'nik'				  => $this->input->post('nik'),
					  	  'alamat' 			  => $this->input->post('alamat'),
					  	  'telepon' 		  => $this->input->post('telepon'),
					  	  'fax' 			  => $this->input->post('fax'),
					  	  'email' 			  => $this->input->post('email'),
					  	  'informasi_diminta' => $this->input->post('informasi_diminta'),
					  	  'alasan' 			  => $this->input->post('alasan'),
					  	  'tindak_lanjut' 	  => $this->input->post('tindak_lanjut'),
					  	  'status'			  => $this->input->post('status'),
					  	  'scan_ktp' 		  => $scan_ktp);

		$query = $this->ppid->insert('tb_pip',$data);
		redirect('pip/index','refresh');

			}
	}

	//Form Keberatan
	public function tambah_k()
	{
		$data['title'] = "Tambah Keberatan PIP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('pip/layout/head', $data);
		$this->load->view('pip/layout/header');
		$this->load->view('pip/layout/nav');
		$this->load->view('pip/tambah_k');
		$this->load->view('pip/layout/footer');
	}

	public function a_tambah_k()
	{
		$data = array(	  'id_keberatan' 	  => $this->input->post('id_keberatan'),
					  	  'tujuan' 	  		  => $this->input->post('tujuan'),
					      'nama' 	  		  => $this->input->post('nama'),
					  	  'alamat_p' 		  => $this->input->post('alamat_p'),
					  	  'pekerjaan'		  => $this->input->post('pekerjaan'),
					  	  'no_hpp' 			  => $this->input->post('no_hpp'),
					  	  'nama_kp' 		  => $this->input->post('nama_kp'),
					  	  'alamat_kp' 		  => $this->input->post('alamat_kp'),
					  	  'no_hpkp' 		  => $this->input->post('no_hpkp'),
					  	  'status'			  => $this->input->post('status'),
					  	  'alasan2' 		  => $this->input->post('alasan2'));

		$query = $this->ppid->insert('tb_keberatan',$data);
		redirect('pip/index','refresh');
	}

	public function download($id_ip)
	{
			$data = array('id_ip'=>$id_ip);
			$this->db->insert('tb_download', $data);
			$this->load->helper('download');
			$fileinfo = $this->ppid->download($id_ip);
			$r = 'uploads/'.$fileinfo['up_data'];
			force_download($r, NULL);
		
	}



	public function cetak()
	{
		$data['title'] = "DAFTAR INFORMASI PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		//$data['data'] = $this->ppid->selectAll('tb_ip')->result_object();
		$data['berkala'] = $this->ppid->select('tb_ip',array('kategori' => '1'))->result_object();
		$data['sertamerta'] = $this->ppid->select('tb_ip',array('kategori' => '2'))->result_object();
		$data['setiapsaat'] = $this->ppid->select('tb_ip',array('kategori' => '3'))->result_object();
		$this->load->view('pip/cetak', $data);
	}

	public function cetak_berkala()
	{
		$data['title'] = "DAFTAR INFORMASI PUBLIK SECARA BERKALA | PPID Dinas Komunikasi dan Informatika Singkawang";
		//$data['data'] = $this->ppid->selectAll('tb_ip')->result_object();
		$data['berkala'] = $this->ppid->select('tb_ip',array('kategori' => '1'))->result_object();
		$this->load->view('pip/cetak_berkala', $data);
	}

	public function cetak_sertamerta()
	{
		$data['title'] = "DAFTAR INFORMASI PUBLIK SECARA SERTA MERTA | PPID Dinas Komunikasi dan Informatika Singkawang";
		//$data['data'] = $this->ppid->selectAll('tb_ip')->result_object();
		$data['sertamerta'] = $this->ppid->select('tb_ip',array('kategori' => '2'))->result_object();
		$this->load->view('pip/cetak_sertamerta', $data);
	}

	public function cetak_setiapsaat()
	{
		$data['title'] = "DAFTAR INFORMASI PUBLIK SECARA SETIAP SAAT | PPID Dinas Komunikasi dan Informatika Singkawang";
		//$data['data'] = $this->ppid->selectAll('tb_ip')->result_object();
		$data['setiapsaat'] = $this->ppid->select('tb_ip',array('kategori' => '3'))->result_object();
		$this->load->view('pip/cetak_setiapsaat', $data);
	}

	public function logout()
	{
		$this->session->set_userdata('email', FALSE);
		$this->session->sess_destroy();
		redirect('user/index');
	}

}

/* End of file Pip.php */
/* Location: ./application/controllers/Pip.php */