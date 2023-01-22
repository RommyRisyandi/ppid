<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ppid', TRUE);
	}

	public function index()
	{
		$data['title'] = "PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['tot_doc'] = $this->ppid->getTotRow('tb_ip', 'id_ip');
		$data['tot_pip'] = $this->ppid->getTotRow('tb_pip', 'id_pip');
		$data['tot_down'] = $this->ppid->getTotRow('tb_download', 'id_download');
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/index');
		$this->load->view('user/layout/footer');

	}
	
	public function profil()
	{
		$data['title'] = "PROFIL DISKOMINFO | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/profil');
		$this->load->view('user/layout/footer');

	}

	public function struktur_org()
	{
		$data['title'] = "STRUKTUR ORGANISASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/struktur_org');
		$this->load->view('user/layout/footer');

	}

	public function tugas_fungsi()
	{
		$data['title'] = "TUGAS DAN FUNGSI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/tugas_fungsi');
		$this->load->view('user/layout/footer');

	}

	public function visi_misi()
	{
		$data['title'] = " VISI-MISI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/visi_misi');
		$this->load->view('user/layout/footer');

	}

	public function listing()
	{
		$data['title'] = "LISTING | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/listing');
		$this->load->view('user/layout/footer');

	}

	public function logo()
	{
		$data['title'] = "LOGO HUT RI KE-71 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/logo');
		$this->load->view('user/layout/footer');

	}

	public function frekuensi()
	{
		$data['title'] = "FREKUENSI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/frekuensi');
		$this->load->view('user/layout/footer');

	}

	public function tugas_ppid()
	{
		$data['title'] = "TUGAS PPID | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/tugas_ppid');
		$this->load->view('user/layout/footer');

	}

	public function struktur_ppid()
	{
		$data['title'] = "STRUKTUR ORG PPID | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/struktur_ppid');
		$this->load->view('user/layout/footer');

	}

	public function registrasi()
	{
		$data['title'] = "REGISTRASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$data['provinsi'] = $this->ppid->get_provinsi_query();
		$this->load->view('user/layout/head', $data);    
		$this->load->view('user/layout/header');
		$this->load->view('user/registrasi', $data);
		$this->load->view('user/layout/footer');

	}

	public function aregistrasi()
	{
		$data = array('nama' 		=> $this->input->post('nama'),
					  'nik'  		=> $this->input->post('nik'),
					  'alamat' 		=> $this->input->post('alamat'),
					  'provinsi' 	=> $this->input->post('provinsi'),
					  'kota'  		=> $this->input->post('kota'),
					  'no_kontak' 	=> $this->input->post('no_kontak'),
					  'email'		=> $this->input->post('email'),
					  'password'	=> SHA1($this->input->post('password')),
					  'level'		=> $this->input->post('level'));
		
		$query = $this->ppid->insert('tb_user', $data);
		$data['pesan']="Registrasi berhasil, Silahkan Login";
		redirect('user/login','refresh');
	}

	public function get_kota()
	{
		$id_provinsi = $this->input->post('id_provinsi');
		$kota = $this->ppid->get_kota_query($id_provinsi);
		if(count($kota)>0)
		{
			$pro_select_box = '';
			$pro_select_box = '<option value="">Pilih Kota/Kabupaten</option>';
			foreach ($kota as $kota) {
				$pro_select_box .= '<option value="'.$kota->id_kota.'">'.$kota->nama_kota.'</option>';
			}
		}
		echo json_encode($pro_select_box);
	}

	public function login()
	{
		$data['title'] = " LOGIN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/login');
		$this->load->view('user/layout/footer');

	}

	public function proses_login()
	{

	}
	
	public function lk2017()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "LAPORAN KEUANGAN 2017 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/lk2017');
		$this->load->view('user/layout/footer');

	}

	public function lkin2017()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "LAPORAN KINERJA 2017 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/lkin2017');
		$this->load->view('user/layout/footer');
	}

	public function rka2018()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "RK ANGGARAN 2018 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/rka2018');
		$this->load->view('user/layout/footer');
	}

	public function profil_pejabat()
	{
		$data['title'] = "PROFIL PEJABAT | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/profil_pejabat');
		$this->load->view('user/layout/footer2');
	}

	public function renstra()
	{
		$data['title'] = "RENCANA STRATEGIS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/renstra');
		$this->load->view('user/layout/footer');
	}

	public function regulasi()
	{
		$data['title'] = "REGULASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/regulasi');
		$this->load->view('user/layout/footer');
	}

	public function profil_ppid()
	{
		$data['title'] = "PROFIL PPID | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/profil_ppid');
		$this->load->view('user/layout/footer');
	}

	public function lkin2018()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "LAPORAN KINERJA 2018 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/lkin2018');
		$this->load->view('user/layout/footer');
	}

	public function lk2018()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}
		$data['title'] = "LAPORAN KEUANGAN 2018 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/lk2018');
		$this->load->view('user/layout/footer');
	}

	public function program_kegiatan()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "PROGRAM/KEGIATAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/program_kegiatan');
		$this->load->view('user/layout/footer');
	}

	public function darurat112()
	{
		$data['title'] = "DARURAT 112 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/darurat112');
		$this->load->view('user/layout/footer');
	}

	public function rkp()
	{
		$data['title'] = "REGISTRASI KARTU PRABAYAR | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/rkp');
		$this->load->view('user/layout/footer');
	}

	public function upt()
	{
		$data['title'] = "UNIT PELAKSANA TEKNIS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/upt');
		$this->load->view('user/layout/footer');
	}

	public function lhkpn()
	{
		$data['title'] = "LHKPN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/lhkpn');
		$this->load->view('user/layout/footer');
	}

	public function kode_etik()
	{
		$data['title'] = "KODE ETIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/kode_etik');
		$this->load->view('user/layout/footer');
	}

	public function avbp()
	{
		$data['title'] = "AV. BADAN PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/avbp');
		$this->load->view('user/layout/footer');
	}

	public function pedoman_pi()
	{
		$data['title'] = "PEDOMAN PI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pedoman_pi');
		$this->load->view('user/layout/footer');
	}

	public function sid_lip()
	{
		$data['title'] = " SID-LIP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sid_lip');
		$this->load->view('user/layout/footer');
	}

	public function avppid()
	{
		$data['title'] = "AV. PPID | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/avppid');
		$this->load->view('user/layout/footer');
	}

	public function standar_layanan()
	{
		$data['title'] = "STANDAR LAYANAN IP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/standar_layanan');
		$this->load->view('user/layout/footer');
	}

	public function maklumat()
	{
		$data['title'] = "MAKLUMAT | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/maklumat');
		$this->load->view('user/layout/footer');
	}

	public function hak_tatacara()
	{
		$data['title'] = "HAK DAN TATACARA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/hak_tatacara');
		$this->load->view('user/layout/footer');
	}

	public function avhaip()
	{
		$data['title'] = "AV. HAK ATAS IP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/avhaip');
		$this->load->view('user/layout/footer');
	}

	public function cara_memperoleh()
	{
		$data['title'] = "CARA MEMPEROLEH INFORMASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/cara_memperoleh');
		$this->load->view('user/layout/footer');
	}

	public function formulir_permintaan()
	{
		$data['title'] = "FORMULIR PERMINTAAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/formulir_permintaan');
		$this->load->view('user/layout/footer');
	}

	public function waktu_layanan()
	{
		$data['title'] = "WAKTU LAYANAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/waktu_layanan');
		$this->load->view('user/layout/footer');
	}

	public function tarif_biaya()
	{
		$data['title'] = "TARIF-BIAYA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/tarif_biaya');
		$this->load->view('user/layout/footer');
	}

	public function keberatan()
	{
		$data['title'] = "KEBERATAN ATAS IP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/keberatan');
		$this->load->view('user/layout/footer');
	}

	public function tata_cara()
	{
		$data['title'] = "TATA CARA PENGAJUAN KEBERATAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/tata_cara');
		$this->load->view('user/layout/footer');
	}

	public function lokasi_ppid()
	{
		$data['title'] = "LOKASI PPID | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/lokasi_ppid');
		$this->load->view('user/layout/footer');
	}

	public function simpul_layanan()
	{
		$data['title'] = "SIMPUL LAYANAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/simpul_layanan');
		$this->load->view('user/layout/footer');
	}

	public function pakta_integritas()
	{
		$data['title'] = "PAKTA INTEGRITAS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pakta_integritas');
		$this->load->view('user/layout/footer');
	}

	public function quick_wins()
	{
		$data['title'] = "QUICK WINS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/quick_wins');
		$this->load->view('user/layout/footer');
	}

	public function call_centerppid()
	{
		$data['title'] = "CALL CENTER PPID | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/call_centerppid');
		$this->load->view('user/layout/footer');
	}

	public function reformasi_birokrasi()
	{
		$data['title'] = "REFORMASI BIROKASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/reformasi_birokrasi');
		$this->load->view('user/layout/footer');
	}

	public function manajemen_perubahan()
	{
		$data['title'] = "MANAJEMEN PERUBAHAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/manajemen_perubahan');
		$this->load->view('user/layout/footer');
	}

	public function organisasi()
	{
		$data['title'] = "PENATAAN DAN PENGUATAN ORGANISASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/organisasi');
		$this->load->view('user/layout/footer');
	}

	public function perundang()
	{
		$data['title'] = "PERUNDANG-UNDANGAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/perundang');
		$this->load->view('user/layout/footer');
	}

	public function sdm()
	{
		$data['title'] = "PENATAAN SUMBER DAYA MANUSIA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sdm');
		$this->load->view('user/layout/footer');
	}

	public function tata_laksana()
	{
		$data['title'] = "PENATAAN TATA LAKSANA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/tata_laksana');
		$this->load->view('user/layout/footer');
	}

	public function pengawasan()
	{
		$data['title'] = "PENGUATAN PENGAWASAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pengawasan');
		$this->load->view('user/layout/footer');
	}

	public function akuntabilitas_k()
	{
		$data['title'] = "PENGUATAN AKUNTABILITAS KINERJA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/akuntabilitas_k');
		$this->load->view('user/layout/footer');
	}

	public function pelayanan_publik()
	{
		$data['title'] = "PENINGKATAN KUALITAS PELAYANAN PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pelayanan_publik');
		$this->load->view('user/layout/footer');
	}

	public function zona_integritas()
	{
		$data['title'] = "ZONA INTEGRITAS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/zona_integritas');
		$this->load->view('user/layout/footer');
	}

	public function sengketa_ip()
	{
		$data['title'] = "SENGKETA IP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sengketa_ip');
		$this->load->view('user/layout/footer');
	}

	public function ip()
	{
		$data['title'] = "INFORMASI PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ip');
		$this->load->view('user/layout/footer');
	}

	public function formulir_keberatan()
	{
		$data['title'] = "FORMULIR KEBERATAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/formulir_keberatan');
		$this->load->view('user/layout/footer');
	}

	public function pengaduan_masy()
	{
		$data['title'] = "LAYANAN DAN PENGADUAN MASYARAKAT | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pengaduan_masy');
		$this->load->view('user/layout/footer');
	}

	public function pengadaan_bj()
	{
		$data['title'] = "PENGADAAN BERANG/JASA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pengadaan_bj');
		$this->load->view('user/layout/footer');
	}

	public function beasiswa_kominfo()
	{
		$data['title'] = "BEASISWA KOMINFO | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/beasiswa_kominfo');
		$this->load->view('user/layout/footer');
	}

	public function penerimaan_cpns()
	{
		$data['title'] = "PENERIMAAN CPNS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/penerimaan_cpns');
		$this->load->view('user/layout/footer');
	}

	public function tanggap_darurat()
	{
		$data['title'] = "INFORMASI TANGGAP DARURAT | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/tanggap_darurat');
		$this->load->view('user/layout/footer');
	}

	public function sim_bencana()
	{
		$data['title'] = "SISTEM PENYAMPAIAN INFORMASI KEBENCANAAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sim_bencana');
		$this->load->view('user/layout/footer');
	}

	public function panduan_flagging()
	{
		$data['title'] = "PANDUAN FLAGGING | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/panduan_flagging');
		$this->load->view('user/layout/footer');
	}

	public function pedoman()
	{
		$data['title'] = "PEDOMAN PETUNJUK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pedoman');
		$this->load->view('user/layout/footer');
	}

	public function standar_kompetensi()
	{
		$data['title'] = "STANDAR KOMPETENSI KERJA NASIONAL INDONESIA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/standar_kompetensi');
		$this->load->view('user/layout/footer');
	}

	public function pranata_humas()
	{
		$data['title'] = "JABATAN FUNGSIONAL PRANATA HUMAS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pranata_humas');
		$this->load->view('user/layout/footer');
	}

	public function ip_setiapsaat()
	{
		$data['title'] = "IP SETIAP SAAT | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ip_setiapsaat');
		$this->load->view('user/layout/footer');
	}

	public function ip_sertamerta()
	{
		$data['title'] = "IP SERTA MERTA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ip_sertamerta');
		$this->load->view('user/layout/footer');
	}

	public function daftar_informasi()
	{
		$data['title'] = "DAFTAR INFORMASI PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/daftar_informasi');
		$this->load->view('user/layout/footer');
	}

	public function mou()
	{
		$data['title'] = "MEMORY OF UNDERSTANDING | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/mou');
		$this->load->view('user/layout/footer');
	}

	public function pedoman_pengelolaan()
	{
		$data['title'] = "PEDOMAN PENGELOLAAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pedoman_pengelolaan');
		$this->load->view('user/layout/footer');
	}

	public function ppo()
	{
		$data['title'] = "PENGELOLAAN ORGANISASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ppo');
		$this->load->view('user/layout/footer');
	}

	public function ppa()
	{
		$data['title'] = "PENGELOLAAN ADMINISTRASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ppa');
		$this->load->view('user/layout/footer');
	}

	public function ppp()
	{
		$data['title'] = "PENGELOLAAN PERSONIL |PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ppp');
		$this->load->view('user/layout/footer');
	}

	public function ppk()
	{
		$data['title'] = "PENGELOLAAN KEUANGAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ppk');
		$this->load->view('user/layout/footer');
	}

	public function pelayanan_terpadu()
	{
		$data['title'] = "PELAYANAN TERPADU | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pelayanan_terpadu');
		$this->load->view('user/layout/footer');
	}

	public function tcppw()
	{
		$data['title'] = "TATA CARA PENGADUAN PENYALAHGUNAAN WEWENANG | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/tcppw');
		$this->load->view('user/layout/footer');
	}

	public function abp()
	{
		$data['title'] = "AGENDA BADAN PUBLIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/abp');
		$this->load->view('user/layout/footer');
	}

	public function ra2015()
	{
		$data['title'] = "RAKORNAS BIDANG KOMINFO 2015 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ra2015');
		$this->load->view('user/layout/footer');
	}

	public function ra2014()
	{
		$data['title'] = "RAKORNAS BIDANG KOMINFO 2014 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ra2014');
		$this->load->view('user/layout/footer');
	}

	public function ra2013()
	{
		$data['title'] = "RAKORNAS BIDANG KOMINFO 2013 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ra2013');
		$this->load->view('user/layout/footer');
	}

	public function rakornas()
	{
		$data['title'] = "RAKORNAS BIDANG KOMINFO | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/rakornas');
		$this->load->view('user/layout/footer');
	}

	public function e_jurnal()
	{
		$data['title'] = "E-JURNAL | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/e_jurnal');
		$this->load->view('user/layout/footer');
	}

	public function penelitian()
	{
		$data['title'] = "PENELITIAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/penelitian');
		$this->load->view('user/layout/footer');
	}

	public function ict()
	{
		$data['title'] = "ICT WHITE PAPER | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/ict');
		$this->load->view('user/layout/footer');
	}

	public function jmlppid()
	{
		$data['title'] = "JUMLAH PPID | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/jmlppid');
		$this->load->view('user/layout/footer');
	}

	public function regdomainppid()
	{
		$data['title'] = "REGISTRASI DOMAIN PPID | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/regdomainppid');
		$this->load->view('user/layout/footer');
	}

	public function e_cliptik()
	{
		$data['title'] = "E-CLIPTIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/e_cliptik');
		$this->load->view('user/layout/footer');
	}

	public function videografis()
	{
		$data['title'] = "VIDEOGRAFIS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/videografis');
		$this->load->view('user/layout/footer');
	}

	public function infografis()
	{
		$data['title'] = "INFOGRAFIS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/infografis');
		$this->load->view('user/layout/footer');
	}

	public function data_pribadi()
	{
		$data['title'] = "DATA PRIBADI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/data_pribadi');
		$this->load->view('user/layout/footer');
	}

	public function tarif()
	{
		$data['title'] = "TARIF | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/tarif');
		$this->load->view('user/layout/footer');
	}

	public function penyiaran()
	{
		$data['title'] = "PENYIARAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/penyiaran');
		$this->load->view('user/layout/footer');
	}

	public function telekomunikasi()
	{
		$data['title'] = "TELEKOMUNIKASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/telekomunikasi');
		$this->load->view('user/layout/footer');
	}

	public function menara_bersama()
	{
		$data['title'] = "MENARA BERSAMA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/menara_bersama');
		$this->load->view('user/layout/footer');
	}

	public function sertifikasi_alat()
	{
		$data['title'] = "SERTIFIKASI ALAT | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sertifikasi_alat');
		$this->load->view('user/layout/footer');
	}

	public function e_penyiaran()
	{
		$data['title'] = " E-PENYIARAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/e_penyiaran');
		$this->load->view('user/layout/footer');
	}

	public function e_licensing()
	{
		$data['title'] = "E-LICENSING | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/e_licensing');
		$this->load->view('user/layout/footer');
	}

	public function pos()
	{
		$data['title'] = "POS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pos');
		$this->load->view('user/layout/footer');
	}

	public function penyiaran2()
	{
		$data['title'] = "PENYIARAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/penyiaran2');
		$this->load->view('user/layout/footer');
	}

	public function radio()
	{
		$data['title'] = "RADIO | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/radio');
		$this->load->view('user/layout/footer');
	}

	public function televisi()
	{
		$data['title'] = "TELEVISI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/televisi');
		$this->load->view('user/layout/footer');
	}

	public function sistem_elektronik()
	{
		$data['title'] = "SISTEM ELEKTRONIK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sistem_elektronik');
		$this->load->view('user/layout/footer');
	}

	public function keamanan_informasi()
	{
		$data['title'] = "KEAMANAN INFORMASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/keamanan_informasi');
		$this->load->view('user/layout/footer');
	}

	public function internet_protocol()
	{
		$data['title'] = "INTERNET PROTOCOL | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/internet_protocol');
		$this->load->view('user/layout/footer');
	}

	public function domain_ind()
	{
		$data['title'] = "DOMAIN INDONESIA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/domain_ind');
		$this->load->view('user/layout/footer');
	}

	public function jasa()
	{
		$data['title'] = "PENYELENGGARAAN JASA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/jasa');
		$this->load->view('user/layout/footer');
	}

	public function kearsipan()
	{
		$data['title'] = "RETENSI ARSIP SUBTATIF | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/kearsipan');
		$this->load->view('user/layout/footer');
	}

	public function index_keterbukaan()
	{
		$data['title'] = "INDEKS KETERBUKAAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/index_keterbukaan');
		$this->load->view('user/layout/footer');
	}

	public function pemerintahan()
	{
		$data['title'] = "ADMINISTRASI PEMERINTAHAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pemerintahan');
		$this->load->view('user/layout/footer');
	}

	public function uu()
	{
		$data['title'] = "UNDANG-UNDANG BIDANG KOMINFO | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/uu');
		$this->load->view('user/layout/footer');
	}

	public function kependudukan()
	{
		$data['title'] = "ADMINISTRASI KEPENDUDUKAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/kependudukan');
		$this->load->view('user/layout/footer');
	}

	public function keuangan()
	{
		$data['title'] = "ADMINISTRASI KEUANGAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/keuangan');
		$this->load->view('user/layout/footer');
	}

	public function dana_desa()
	{
		$data['title'] = "PERATURAN DANA DESA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/dana_desa');
		$this->load->view('user/layout/footer');
	}

	public function korupsi()
	{
		$data['title'] = "STOP KORUPSI & SUAP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/korupsi');
		$this->load->view('user/layout/footer');
	}

	public function pp()
	{
		$data['title'] = "PP BIDANG KOMINFO | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pp');
		$this->load->view('user/layout/footer');
	}

	public function perpres()
	{
		$data['title'] = "PERATURAN PRESIDEN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/perpres');
		$this->load->view('user/layout/footer');
	}


	public function inpres()
	{
		$data['title'] = "INSTRUKSI PRESIDEN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/inpres');
		$this->load->view('user/layout/footer');
	}

	public function kepres()
	{
		$data['title'] = "KEPUTUSAN PRESIDEN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/kepres');
		$this->load->view('user/layout/footer');
	}

	public function koordinasi()
	{
		$data['title'] = "KOORDINASI | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/koordinasi');
		$this->load->view('user/layout/footer');
	}

	public function rancangan_peraturan()
	{
		$data['title'] = "RANCANGAN PERATURAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/rancangan_peraturan');
		$this->load->view('user/layout/footer');
	}

	public function english()
	{
		$data['title'] = "ENGLISH VERSION | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/english');
		$this->load->view('user/layout/footer');
	}

	public function bandara()
	{
		$data['title'] = "BANDARA SINGKAWANG | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/bandara');
		$this->load->view('user/layout/footer');
	}

	public function cgm_2019()
	{
		$data['title'] = "CAP GO MEH 2019 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/cgm_2019');
		$this->load->view('user/layout/footer');
	}

	public function musdad()
	{
		$data['title'] = "MUSDAD | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/musdad');
		$this->load->view('user/layout/footer');
	}

	public function gade_run()
	{
		$data['title'] = "GADE NIGHT RUN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/gade_run');
		$this->load->view('user/layout/footer');
	}

	public function malam_lampion()
	{
		$data['title'] = "MALAM LAMPION | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/malam_lampion');
		$this->load->view('user/layout/footer');
	}

	public function pelantikan()
	{
		$data['title'] = "PELANTIKAN | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pelantikan');
		$this->load->view('user/layout/footer');
	}

	public function smp7()
	{
		$data['title'] = "SMP 7 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/smp7');
		$this->load->view('user/layout/footer');
	}

	public function bawaslu()
	{
		$data['title'] = "BAWASLU | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/bawaslu');
		$this->load->view('user/layout/footer');
	}

	public function tbc_lapas()
	{
		$data['title'] = "TBC LAPAS | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/tbc_lapas');
		$this->load->view('user/layout/footer');
	}

	public function faq()
	{
		$data['title'] = "FAQ | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/faq');
		$this->load->view('user/layout/footer');
	}

	public function sop()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP DISKOMINFO | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop');
		$this->load->view('user/layout/footer');
	}


	public function sop_egov()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP E-GOV | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_egov');
		$this->load->view('user/layout/footer');
	}

	public function sop_egova()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP E-GOV A | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_egova');
		$this->load->view('user/layout/footer');
	}

	public function sop_egovb()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP E-GOV B | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_egovb');
		$this->load->view('user/layout/footer');
	}

	public function sop_egovc()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP E-GOV C | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_egovc');
		$this->load->view('user/layout/footer');
	}

	public function sop_ikp()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP IKP | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_ikp');
		$this->load->view('user/layout/footer');
	}

	public function sop_ikpa()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP IKP A | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_ikpa');
		$this->load->view('user/layout/footer');
	}

	public function sop_ikpb()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP IKP B | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_ikpb');
		$this->load->view('user/layout/footer');
	}

	public function sop_ikpc()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP IKP C | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_ikpc');
		$this->load->view('user/layout/footer');
	}

	public function sop_pka()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP PKA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_pka');
		$this->load->view('user/layout/footer');
	}

	public function sop_uk()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP UK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_uk');
		$this->load->view('user/layout/footer');
	}

	public function sop_umum()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP UMUM KEPEG. KOMINFO | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_umum');
		$this->load->view('user/layout/footer');
	}

	public function sop_dpa()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "SOP DPA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_dpa');
		$this->load->view('user/layout/footer');
	}

	public function sop_rekap()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}

		$data['title'] = "REKAP SOP DISKOMINFO | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_rekap');
		$this->load->view('user/layout/footer');
	}

	public function sop_sekretariat()
	{
		if($this->session->userdata('level')!="user") {
			redirect('user/login');
		}
		
		$data['title'] = "Rekap SOP Sekretariat ( UP & PKA ) | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/sop_sekretariat');
		$this->load->view('user/layout/footer');
	}

	public function foto()
	{
		$data['title'] = "FOTO | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/foto');
		$this->load->view('user/layout/footer');
	}

	public function au()
	{
		$data['title'] = "HARI AUTIS SEDUNIA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/au');
		$this->load->view('user/layout/footer');
	}

	public function dsl()
	{
		$data['title'] = "ULTAH DAMKAR KE 100,SATPOL PP KE 69, LINMAS KE 57 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/dsl');
		$this->load->view('user/layout/footer');
	}

	public function gow()
	{
		$data['title'] = "GABUNGAN ORGANISASI WANITA | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/gow');
		$this->load->view('user/layout/footer');
	}

	public function dkla()
	{
		$data['title'] = "DEKLARASI KOTA LAYAK ANAK | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/dkla');
		$this->load->view('user/layout/footer');
	}

	public function tbc()
	{
		$data['title'] = "HARI TBC | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/tbc');
		$this->load->view('user/layout/footer');
	}

	public function cgm18()
	{
		$data['title'] = "PEMBAKARAN NAGA SETELAH CAP GO MEH 2018 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/cgm18');
		$this->load->view('user/layout/footer');
	}

	public function pc18()
	{
		$data['title'] = "PRESS CONFERENCE 2018 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pc18');
		$this->load->view('user/layout/footer');
	}

	public function pm_2018()
	{
		$data['title'] = "PM 2018 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pm_2018');
		$this->load->view('user/layout/footer');
	}

	public function pm_2017()
	{
		$data['title'] = "PM 2017 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pm_2017');
		$this->load->view('user/layout/footer');
	}

	public function pm_2016()
	{
		$data['title'] = "PM 2016 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pm_2016');
		$this->load->view('user/layout/footer');
	}

	public function pm_2015()
	{
		$data['title'] = "PM 2015 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pm_2015');
		$this->load->view('user/layout/footer');
	}

	public function pm_2014()
	{
		$data['title'] = "PM 2014 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/pm_2014');
		$this->load->view('user/layout/footer');
	}

	public function km_2015()
	{
		$data['title'] = "KM 2015 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/km_2015');
		$this->load->view('user/layout/footer');
	}

	public function km_2016()
	{
		$data['title'] = "KM 2016 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/km_2016');
		$this->load->view('user/layout/footer');
	}

	public function km_2017()
	{
		$data['title'] = "KM 2017 | PPID Dinas Komunikasi dan Informatika Singkawang";
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/km_2017');
		$this->load->view('user/layout/footer');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */