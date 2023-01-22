<body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar container py-0 bg-white" role="banner">

      <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <img src="<?php echo base_url();?>/assets/images/PPID2.png" style="width: 190%; ">
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?php echo site_url('user/index');?>">BERANDA</a></li>
                <li class="has-children">
                  <a href="<?php echo site_url('user/profil'); ?>">PROFIL</a>
                  <ul class="dropdown">
                     <li class="has-children">
                      <a href="<?php echo site_url('user/profil'); ?>">DISKOMINFO</a>
                       <ul class="dropdown">
                        <li><a href="<?php echo site_url('user/struktur_org');?>">Struktur ORG</a></li>
                        <li><a href="<?php echo site_url('user/tugas_fungsi');?>">Tugas dan Fungsi</a></li>
                        <li><a href="<?php echo site_url('user/visi_misi'); ?>">Visi-Misi-Tujuan</a></li>
                        <li><a href="<?php echo site_url('user/renstra'); ?>">Rencana Strategis</a></li>
                        <li><a href="<?php echo site_url('user/program_kegiatan'); ?>">Program/Kegiatan</a></li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/rka2018'); ?>">RK.Anggaran 2018</a>
                          <ul class="dropdown">
                            <li><a href="#">Pedoman Anggaran</a></li>
                          </ul>
                        </li>
                        <li><a href="<?php echo site_url('user/profil_pejabat'); ?>">Profil Pejabat</a></li>
                        <li><a href="#">Satuan Kerja</a></li>
                        <li><a href="<?php echo site_url('user/upt'); ?>">Unit P.Teknis</a></li>
                        <li><a href="<?php echo site_url('user/lhkpn') ?>">LHKPN</a></li>
                        <li><a href="<?php echo site_url('user/kode_etik'); ?>">Kode Etik</a></li>
                        <li><a href="#">Nilai 2 DISKOMINFO</a></li>
                       </ul>
                    </li>
                    <li class="has-children">
                      <a href="<?php echo site_url('user/profil_ppid'); ?>">PPID</a>
                      <ul class="dropdown">
                        <li><a href="#">Dasar Operational</a></li>
                        <li class="has-children"><a href="<?php echo site_url('user/tugas_ppid');?>">Tugas PPID</a>
                          <ul class="dropdown">
                            <li><a href="<?php echo site_url('user/avppid') ?>">AV.PPID</a></li>
                              <li><a href="<?php echo site_url('user/avbp') ?>">AV.BADAN PUBLIK</a></li>
                          </ul>
                        </li>
                        <li><a href="<?php echo site_url('user/struktur_ppid'); ?>">Struktur ORG</a></li>
                        <li class="has-children"><a href="<?php echo site_url('user/pedoman_pi'); ?>">Pedoman PI</a>
                          <ul class="dropdown">
                            <li><a href="<?php echo site_url('user/sid_lip'); ?>">SID-LIP</a></li>
                          </ul>
                        </li>
                        <li class="has-children"><a href="<?php echo site_url('user/standar_layanan'); ?>">Standar Layanan</a>
                          <ul class="dropdown">
                            <li><a href="<?php echo site_url('user/maklumat'); ?>">MAKLUMAT</a></li>
                            <li class="has-children">
                              <a href="<?php echo site_url('user/hak_tatacara'); ?>">HAK PEMOHON IP</a>
                            <ul class="dropdown">
                              <li><a href="<?php echo site_url('user/avhaip'); ?>">AV.HAK ATAS IP</a></li>
                            </ul>
                          </li>
                            <li class="has-children"><a href="<?php echo site_url('user/cara_memperoleh'); ?>">Cara Memperoleh</a>
                              <ul class="dropdown">
                                <li><a href="<?php echo site_url('user/formulir_permintaan'); ?>">Formulir Permintaan</a></li>
                                  <li><a href="<?php echo site_url('user/avmekanisme'); ?>">AV. MEKANISME</a></li>
                              </ul>
                            </li>
                            <li><a href="<?php echo site_url('user/waktu_layanan'); ?>">WAKTU LAYANAN</a></li>
                            <li><a href="<?php echo site_url('user/tarif_biaya'); ?>">TARIF - BIAYA</a></li>
                            <li class="has-children">
                              <a href="<?php echo site_url('user/keberatan'); ?>">KEBERATAN</a>
                              <ul class="dropdown">
                                <li><a href="<?php echo site_url('user/tata_cara'); ?>">Tata cara</a></li>
                                <li><a href="<?php echo site_url('user/formulir_keberatan'); ?>">Formulir Keberatan</a></li>
                              </ul>
                            </li>
                            <li class="has-children"><a href="<?php echo site_url('user/lokasi_ppid'); ?>">LOKASI PPID</a>
                              <ul class="dropdown">
                                <li><a href="<?php echo site_url('user/simpul_layanan'); ?>">SIMPUL LAYANAN</a></li>
                              </ul>
                            </li>
                            <li><a href="<?php echo site_url('user/pakta_integritas'); ?>">PAKTA INTEGRITAS</a></li>
                            <li><a href="<?php echo site_url('user/quick_wins'); ?>">QUICK WINS</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Survey Kepuasan ...</a></li>
                        <li><a href="#">Penghargaan</a></li>
                        <li><a href="<?php echo site_url('user/call_centerppid'); ?>">Call Center</a></li>
                        <li><a href="<?php echo site_url('user/lokasi_ppid'); ?>">Alamat PPID</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="<?php echo site_url('user/reformasi_birokrasi'); ?>">Reformasi B...</a>
                      <ul class="dropdown">
                        <li><a href="<?php echo site_url('user/manajemen_perubahan'); ?>">M. Perubahan</a></li>
                        <li><a href="<?php echo site_url('user/organisasi'); ?>">Organisasi</a></li>
                        <li><a href="<?php echo site_url('user/perundang'); ?>">Perundang-Undangan</a></li>
                        <li><a href="<?php echo site_url('user/sdm'); ?>">Sumber Daya Manusia</a></li>
                        <li><a href="<?php echo site_url('user/tata_laksana'); ?>">Tata Laksana</a></li>
                        <li><a href="<?php echo site_url('user/pengawasan'); ?>">Pengawasan</a></li>
                        <li><a href="<?php echo site_url('user/akuntabilitas_k'); ?>">Akuntabilitas Kinerja</a></li>
                        <li><a href="<?php echo site_url('user/pelayanan_publik'); ?>">Pelayanan Publik</a></li>
                      </ul>
                    </li>
                    <li><a href="<?php echo site_url('user/zona_integritas'); ?>">Zona Integritas</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="<?php echo site_url('user/standar_layanan'); ?>">INFO LAYANAN</a>
                  <ul class="dropdown">
                     <li><a href="<?php echo site_url('user/maklumat'); ?>">Maklumat</a></li>
                    <li><a href="<?php echo site_url('user/hak_tatacara'); ?>">Hak Pemohon IP</a></li>
                    <li class="has-children"><a href="<?php echo site_url('user/cara_memperoleh'); ?>">Cara memperoleh</a>
                      <ul class="dropdown">
                        <li><a href="<?php echo site_url('user/formulir_permintaan'); ?>">Formulir permintaan</a></li>
                      </ul>
                    </li>
                    <li><a href="<?php echo site_url('user/waktu_layanan'); ?>">Waktu Layanan</a></li>
                    <li><a href="<?php echo site_url('user/tarif_biaya'); ?>">Tarif Biaya</a></li>
                    <li class="has-children">
                      <a href="<?php echo site_url('user/keberatan'); ?>">Keberatan</a>
                      <ul class="dropdown">
                        <li><a href="<?php echo site_url('user/tata_cara'); ?>">Tata Cara</a></li>
                        <li><a href="<?php echo site_url('user/formulir_keberatan'); ?>">Formulir Keberatan</a></li>
                      </ul>
                    </li>
                    <li><a href="<?php echo site_url('user/sengketa_ip'); ?>">Sengketa IP</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="<?php echo site_url('user/ip'); ?>">INFORMASI PUBLIK</a>
                  <ul class="dropdown">
                    <li class="has-children">
                      <a href="<?php echo site_url('pip/ip_berkala'); ?>">IP Berkala</a>
                      <ul class="dropdown">
                        <li><a href="<?php echo site_url('user/profil');?>">Profil DISKOMINFO</a></li>
                        <li><a href="<?php echo site_url('user/lhkpn'); ?>">LHKPN</a></li>
                        <li><a href="<?php echo site_url('user/program_kegiatan'); ?>">Program/Kegiatan</a></li>
                        <li><a href="<?php echo site_url('user/rka2018') ?>">RK. Anggaran 2018</a></li>
                        <li class="has-children">
                          <a href="#">LAP. Kinerja</a>
                          <ul class="dropdown">
                            <li><a href="<?php echo site_url('user/lkin2018'); ?>">2018</a></li>
                            <li><a href="<?php echo site_url('user/lkin2017'); ?>">2017</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="#">Laporan Keuangan</a>
                          <ul class="dropdown">
                            <li><a href="<?php echo site_url('user/lk2018'); ?>">2018</a></li>
                            <li><a href="<?php echo site_url('user/lk2017'); ?>">2017</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="#">LAP. Akses IP</a>
                          <ul class="dropdown">
                            <li><a href="#">2018</a></li>
                            <li><a href="#">2017</a></li>
                             <li><a href="#">JML. Pemohon IP</a></li>
                          </ul>
                        </li>
                        <li><a href="<?php echo site_url('user/regulasi'); ?>">Regulasi</a></li>
                        <li><a href="<?php echo site_url('user/hak_tatacara'); ?>">Hak dan Tata Cara</a></li>
                        <li><a href="<?php echo site_url('user/pengaduan_masy'); ?>">Pengaduan Masy...</a></li>
                        <li><a href="<?php echo site_url('user/pengadaan_bj'); ?>">Pengadaan B/J</a></li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/sop'); ?>">SOP DISKOMINFO</a>
                          <ul class="dropdown">
                          
                                 <li class="has-children">
                                  <a href="<?php echo site_url('user/sop_egov'); ?>">E-GOV</a>
                                  <ul class="dropdown">
                                    <li><a href="<?php echo site_url('user/sop_egova'); ?>">E-GOV A</a></li>
                                    <li><a href="<?php echo site_url('user/sop_egovb'); ?>">E-GOV B</a></li>
                                    <li><a href="<?php echo site_url('user/sop_egovc'); ?>">E-GOV C</a></li>
                                  </ul>
                                </li>
                                  <li class="has-children">
                                    <a href="<?php echo site_url('user/sop_ikp'); ?>">IKP</a>
                                    <ul class="dropdown">
                                      <li><a href="<?php echo site_url('user/sop_ikpa'); ?>">IKP A</a></li>
                                      <li><a href="<?php echo site_url('user/sop_ikpb'); ?>">IKP B</a></li>
                                      <li><a href="<?php echo site_url('user/sop_ikpc'); ?>">IKP C</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="<?php echo site_url('user/sop_pka'); ?>">PKA</a></li>
                                  <li><a href="<?php echo site_url('user/sop_uk'); ?>">UK</a></li>
                                  <li><a href="<?php echo site_url('user/sop_dpa'); ?>">DPA</a></li>
                                  <li><a href="<?php echo site_url('user/sop_umum'); ?>">SOP UMUM KEPEG</a></li>
                                  <li><a href="<?php echo site_url('user/sop_rekap'); ?>">REKAP SOP</a></li>
                                  <li><a href="<?php echo site_url('user/sop_sekretariat'); ?>">REKAP SOP SEKRETARIAT</a></li>
                              
                          </ul>
                        </li>
                        <li><a href="<?php echo site_url('user/beasiswa_kominfo'); ?>">Beasiswa KOMINFO</a></li>
                        <li><a href="<?php echo site_url('user/penerimaan_cpns'); ?>">Penerimaan CPNS</a></li>
                      </ul>
                    </li>
                    
                    <li class="has-children">
                      <a href="<?php echo site_url('pip/ip_sertamerta') ?>">IP Serta Merta</a>
                      <ul class="dropdown">
                        <li><a href="<?php echo site_url('user/tanggap_darurat'); ?>">Tanggap Darurat</a></li>
                        <li><a href="<?php echo site_url('user/darurat112'); ?>">Darurat 112</a></li>
                        <li><a href="<?php echo site_url('user/sim_bencana'); ?>">SIM Bencana</a></li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/sop'); ?>">SOP DISKOMINFO</a>
                          <ul class="dropdown">
                                 <li class="has-children">
                                  <a href="<?php echo site_url('user/sop_egov'); ?>">E-GOV</a>
                                  <ul class="dropdown">
                                    <li><a href="<?php echo site_url('user/sop_egova'); ?>">E-GOV A</a></li>
                                    <li><a href="<?php echo site_url('user/sop_egovb'); ?>">E-GOV B</a></li>
                                    <li><a href="<?php echo site_url('user/sop_egovc'); ?>">E-GOV C</a></li>
                                  </ul>
                                </li>
                                  <li class="has-children">
                                    <a href="<?php echo site_url('user/sop_ikp'); ?>">IKP</a>
                                    <ul class="dropdown">
                                      <li><a href="<?php echo site_url('user/sop_ikpa'); ?>">IKP A</a></li>
                                      <li><a href="<?php echo site_url('user/sop_ikpb'); ?>">IKP B</a></li>
                                      <li><a href="<?php echo site_url('user/sop_ikpc'); ?>">IKP C</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="<?php echo site_url('user/sop_pka'); ?>">PKA</a></li>
                                  <li><a href="<?php echo site_url('user/sop_uk'); ?>">UK</a></li>
                                  <li><a href="<?php echo site_url('user/sop_dpa'); ?>">DPA</a></li>
                                   <li><a href="<?php echo site_url('user/sop_umum'); ?>">SOP UMUM KEPEG</a></li>
                            <li><a href="<?php echo site_url('user/sop_rekap'); ?>">REKAP SOP</a></li>
                               <li><a href="<?php echo site_url('user/sop_sekretariat'); ?>">REKAP SOP SEKRETARIAT</a></li>
                          </ul>
                        </li>
                        <li><a href="<?php echo site_url('user/panduan_flagging'); ?>">Panduan Flagging</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="<?php echo site_url('pip/ip_setiapsaat'); ?>">IP Setiap Saat</a>
                      <ul class="dropdown">
                        <li><a href="<?php echo site_url('user/daftar_informasi'); ?>">Daftar Informasi</a></li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/pm_kominfo'); ?>">PM. KOMINFO</a>
                          <ul class="dropdown">
                              <li><a href="#">2018</a></li>
                              <li><a href="#">2017</a></li>
                              <li><a href="#">2016</a></li>
                              <li><a href="#">2015</a></li>
                              <li><a href="#">2014</a></li>
                          </ul>
                        </li>
                        <li><a href="<?php echo site_url('user/mou'); ?>">M O U</a></li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/pedoman_pengelolaan'); ?>">Pedoman Pengelolaan</a>
                          <ul class="dropdown">
                              <li><a href="<?php echo site_url('user/ppo'); ?>">- Organisasi</a></li>
                              <li><a href="<?php echo site_url('user/ppa'); ?>">- Administrasi</a></li>
                              <li><a href="<?php echo site_url('user/ppp'); ?>">- Personil</a></li>
                              <li><a href="<?php echo site_url('user/ppk'); ?>">- Keuangan</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/pelayanan_terpadu'); ?>">Pelayanan Terpadu</a>
                          <ul class="dropdown">
                             <li><a href="<?php echo site_url('user/pengaduan_masy'); ?>">Kontak Layanan</a></li>
                              <li class="has-children">
                                <a href="#">Perizinan</a>
                                <ul class="dropdown">
                                   <li><a href="#">Telekomunikasi</a></li>
                                    <li><a href="<?php echo site_url('user/penyiaran'); ?>">Penyiaran</a></li>
                                </ul>
                              </li>
                          </ul>
                        </li>
                        <li><a href="<?php echo site_url('user/tcppw'); ?>">Tata Cara Penyalahgunaan Wewenang</a></li>
                        <li><a href="<?php echo site_url('user/abp'); ?>">Agenda BP</a></li>
                        <li><a href="<?php echo site_url('user/renstra'); ?>">Rencana Strategis</a></li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/rka2018'); ?>">RK. Anggaran 2018</a>
                          <ul class="dropdown">
                             <li><a href="#">Pedoman Anggaran</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/rakornas'); ?>">RAKORNAS</a>
                          <ul class="dropdown">
                             <li><a href="<?php echo site_url('user/ra2015'); ?>">2015</a></li>
                              <li><a href="<?php echo site_url('user/ra2014'); ?>">2014</a></li>
                               <li><a href="<?php echo site_url('user/ra2013'); ?>">2013</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Data TIK</a></li>
                        <li class="has-children">
                          <a href="#">Statistik</a>
                          <ul class="dropdown">
                            <li><a href="#">Tahun 2017 SEM.2</a></li>
                            <li><a href="#">Tahun 2017 SEM.1</a></li>
                            <li><a href="#">Tahun 2016 SEM.1</a></li>
                            <li><a href="#">Tahun 2015 SEM.2</a></li>
                            <li><a href="#">Tahun 2015 SEM.1</a></li>
                            <li><a href="#">Tahun 2014 SEM.2</a></li>
                            <li><a href="#">Tahun 2014 SEM.1</a></li>
                            <li><a href="#">Tahun 2013 SEM.2</a></li>
                            <li><a href="#">Tahun 2013 SEM.1</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/penelitian'); ?>">Penelitian</a>
                          <ul class="dropdown">
                             <li class="has-children">
                              <a href="<?php echo site_url('user/dhp'); ?>">DAFTAR HASIL PENELITIAN</a>
                              <ul class="dropdown">
                                 <li><a href="#">2016</a></li>
                                  <li><a href="#">2012</a></li>
                                   <li><a href="#">2011</a></li>
                                    <li><a href="#">2010</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/ict'); ?>">ICT White-Paper</a>
                          <ul class="dropdown">
                             <li><a href="#">2015</a></li>
                              <li><a href="#">2013</a></li>
                               <li><a href="#">2012</a></li>
                          </ul>
                        </li>
                        <li><a href="<?php echo site_url('user/e_jurnal'); ?>">e-Jurnal</a></li>
                        <li><a href="<?php echo site_url('user/jmlppid'); ?>">Jumlah PPID</a></li>
                        <li><a href="<?php echo site_url('user/regdomainppid'); ?>">REG Domain .ID</a></li>
                        <li><a href="<?php echo site_url('user/e_cliptik'); ?>">e-Clip TIK</a></li>
                        <li><a href="<?php echo site_url('user/videografis'); ?>">Videografis</a></li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/infografis'); ?>">Infografis</a>
                          <ul class="dropdown">
                             <li><a href="#">Palapa Ring II</a></li>
                              <li><a href="#">Amnesti Pajak</a></li>
                               <li><a href="#">Sail Karimata 2016</a></li>
                                <li><a href="#">Revolusi Mental</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                   </ul>
                  </li>
                <li><a href="http://jdih.singkawangkota.go.id/">REGULASI</a></li>
                </li>
                <li class="has-children">
                  <a href="#">LAPORAN</a>
                  <ul class="dropdown">
                    <li class="has-children">
                      <a href="#">LAP.KEUANGAN</a>
                      <ul class="dropdown">
                        <li><a href="<?php echo site_url('user/lk2018'); ?>">2018</a></li>
                        <li><a href="<?php echo site_url('user/lk2017') ?>">2017</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="#">LAP.KINERJA</a>
                      <ul class="dropdown">
                        <li><a href="<?php echo site_url('user/lkin2018'); ?>">2018</a></li>
                        <li><a href="<?php echo site_url('user/lkin2017'); ?>">2017</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="#">LAP.AKSES IP</a>
                      <ul class="dropdown">
                        <li><a href="#">2019</a></li>
                        <li><a href="#">2018</a></li>
                        <li><a href="#">2017</a></li>
                        <li><a href="#">2016</a></li>
                        <li><a href="#">2015</a></li>
                        <li><a href="#">2014</a></li>
                        <li><a href="#">2013</a></li>
                        <li><a href="#">2012</a></li>
                        <li><a href="#">2011</a></li>
                        <li><a href="#">2010</a></li>
                        <li><a href="#">JML.PEMOHON IP</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="#">LAP.TAHUNAN PPID</a>
                      <ul class="dropdown">
                        <li><a href="#">2017</a></li>
                        <li><a href="#">2016</a></li>
                        <li><a href="#">2015</a></li>
                        <li><a href="#">2014</a></li>
                        <li><a href="#">2013</a></li>
                        <li><a href="#">2012</a></li>
                        <li><a href="#">2011</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="#">LAP.SENGKETA IP</a>
                      <ul class="dropdown">
                       <li><a href="#">TAHUN 2010 - 2018</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
               
                
                <li class="has-children">
                  <a href="#">GALERI</a>
                 <ul class="dropdown">
                    <li class="has-children">
                      <a href="#">FK-PPID</a>
                      <ul class="dropdown">
                        <li><a href="#">PPID Kementerian</a></li>
                        <li><a href="#">PPID LPNK</a></li>
                        <li><a href="#">PPID Provinsi</a></li>
                        <li><a href="#">PPID Kabupaten</a></li>
                        <li><a href="#">PPID Kotamadya</a></li>
                      </ul>
                    </li>
                        <li class="has-children">
                          <a href="#">REFERENSI</a>
                          <ul class="dropdown">
                            <li><a href="#">NAWACITA</a></li>
                            <li><a href="#">NILAI-NILAI</a></li>
                            <li><a href="#">MODEL OPID</a></li>
                            <li><a href="#">PEDOMAN PI</a></li>
                            <li><a href="#">STANDAR LAYANAN</a></li>
                            <li><a href="#">BIMTEK PPID</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="<?php echo site_url('user/foto'); ?>">FOTO</a>
                          <ul class="dropdown">
                            <li><a href="<?php echo site_url('user/logo');?>">LOGO HUT RI KE.71</a></li>
                            <li><a href="<?php echo site_url('user/cgm18'); ?>">CAP GO MEH 2018</a></li>
                            <li><a href="<?php echo site_url('user/pc18'); ?>">PRESS CONFERENCE 2018</a></li>
                            <li><a href="<?php echo site_url('user/au'); ?>">Hari Autis Sedunia</a></li>
                            <li><a href="<?php echo site_url('user/dsl'); ?>">ULTAH DAMKAR,SATPOL PP,LINMAS</a></li>
                            <li><a href="<?php echo site_url('user/gow'); ?>">KEGIATAN GOW</a></li>
                            <li><a href="<?php echo site_url('user/tbc'); ?>">Hari TBC</a></li>
                            <li><a href="<?php echo site_url('user/dkla'); ?>">Deklarasi Kota Layak Anak</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="#">VIDEO</a>
                          <ul class="dropdown">
                            <li><a href="<?php echo site_url('user/bandara'); ?>">Bandara</a></li>
                            <li><a href="<?php echo site_url('user/cgm_2019'); ?>">CGM 2019</a></li>
                            <li><a href="<?php echo site_url('user/darurat112'); ?>">DARURAT 112</a></li>
                            <li><a href="<?php echo site_url('user/rkp'); ?>">Registrasi Kartu Prabayar</a></li>
                            <li><a href="<?php echo site_url('user/gade_run'); ?>">Gade Run</a></li>
                            <li><a href="<?php echo site_url('user/malam_lampion'); ?>">Malam Lampion</a></li>
                            <li><a href="<?php echo site_url('user/sim_bencana'); ?>">INFORMASI BENCANA</a></li>
                            <li><a href="<?php echo site_url('user/zona_integritas'); ?>">ZONA INTEGRITAS</a></li>
                            <li><a href="<?php echo site_url('user/musdad'); ?>">MUSDAD</a></li>
                            <li><a href="<?php echo site_url('user/pelantikan'); ?>">PELANTIKAN</a></li>
                            <li><a href="<?php echo site_url('user/smp7'); ?>">SMP 7</a></li>
                            <li><a href="<?php echo site_url('user/bawaslu'); ?>">Sosialisasi Bawaslu</a></li>
                            <li><a href="<?php echo site_url('user/tbc_lapas'); ?>">TBC Lapas</a></li>
                          </ul>
                        </li>
                        <li><a href="#">STREAMING</a></li>
                        <li class="has-children">
                          <a href="#">Layanan Lainnya :</a>
                          <ul class="dropdown">
                            <li><a href="#">REG. DOMAIN ID</a></li>
                            <li class="has-children">
                              <a href="#">PERIZINAN</a>
                              <ul class="dropdown">
                                <li><a href="#">e-Penyiaran</a></li>
                                <li><a href="#">e-Licensing</a></li>
                              </ul>
                            </li>
                            <li class="has-children">
                              <a href="#">PERPUSTAKAAN</a>
                              <ul class="dropdown">
                                <li><a href="#">KOLEKSI PERPUSTAKAAN</a></li>
                              </ul>
                            </li>
                            <li><a href="#">PAMERAN IP</a></li>
                          </ul>
                        </li>
                  </ul>
                </li>
                <li><a href="<?php echo site_url('user/faq'); ?>">FAQ</a></li>
                <li><a href="http://sikedip.kalbarprov.go.id/depan" target="_blank">SIKEDIP</a></li>
                <li class="ml-xl-3 login"><a href="<?php echo site_url('user/login');?>"><span class="border-left pl-xl-4"></span>Log In</a></li>
                <li><a href="<?php echo site_url('user/registrasi');?>">Registrasi</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      <!-- </div> -->
      
    </header>