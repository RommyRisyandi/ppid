<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('ppid');
	}

	public function proseslogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$ceklogin = $this->ppid->proseslogin($email,$password);

		if($ceklogin){
			foreach ($ceklogin as $row) {
				$this->session->set_userdata('nik', $row->nik);
				$this->session->set_userdata('alamat', $row->alamat);
				$this->session->set_userdata('no_kontak', $row->no_kontak);
				$this->session->set_userdata('nama', $row->nama);
				$this->session->set_userdata('email', $row->email);
				$this->session->set_userdata('level', $row->level);

				if($this->session->userdata('level')=="admin"){
					redirect('admin/index');
				}elseif($this->session->userdata('level')=="user"){
					redirect('pip/index');
				}
			}
		}else{
			$data['title'] = " LOGIN | PPID Dinas Komunikasi dan Informatika Singkawang";
			$data['pesan']="Maaf, Email atau Password anda Salah!!!";
			$this->load->view('user/layout/head', $data);
			$this->load->view('user/layout/header');
			$this->load->view('user/login', $data);
			$this->load->view('user/layout/footer');
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */