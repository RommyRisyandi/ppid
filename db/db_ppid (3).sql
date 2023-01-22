-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jul 2019 pada 04.58
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_download`
--

CREATE TABLE `tb_download` (
  `id_download` int(11) NOT NULL,
  `id_ip` int(11) NOT NULL,
  `tanggal_download` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_download`
--

INSERT INTO `tb_download` (`id_download`, `id_ip`, `tanggal_download`) VALUES
(1, 24, '2019-07-23 02:47:29'),
(5, 24, '2019-07-23 02:52:54'),
(6, 24, '2019-07-23 02:52:55'),
(7, 24, '2019-07-23 02:52:55'),
(8, 24, '2019-07-23 02:52:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ip`
--

CREATE TABLE `tb_ip` (
  `id_ip` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `pejabat` varchar(50) NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `informasi` varchar(30) NOT NULL,
  `jangka` varchar(20) NOT NULL,
  `up_data` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ip`
--

INSERT INTO `tb_ip` (`id_ip`, `kategori`, `nama`, `pejabat`, `penanggung_jawab`, `tahun`, `tempat`, `informasi`, `jangka`, `up_data`) VALUES
(24, '1', 'Visi dan Misi Kota Singkawang 2018', 'Sekretaris', 'Kasubag UK', 2017, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'VISI_DAN_MISI.pdf'),
(25, '1', 'Laporan Kinerja 2018', 'Sekretaris', 'Kasubag PKA', 2017, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'LAPORAN_KINERJA_TAHUNAN_(2).pdf'),
(26, '1', 'Laporan Kinerja 2017', 'Sekretaris', 'Kasubag PKA', 2016, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'LAPORAN_KINERJA_TAHUNAN.pdf'),
(28, '1', 'RKA Pemeliharaan dan Pengembangan Website 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '2_Pemeliharaan_dan_Pengembangan_Website.pdf'),
(29, '1', 'Buku Profil Dinas Komunikasi dan Informatika Singkawang 2018', 'Sekretaris', 'Kasubag UK', 2017, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'PROFIL_DISKOMINFO.pdf'),
(30, '1', 'RKA LPSE 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '1_LPSE.pdf'),
(31, '1', 'RKA Pembangunan Jaringan CCTV 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '3_Pembangunan_Jaringan_CCTV.pdf'),
(32, '1', 'RKA Pembangunan Jaringan Telekomunikasi 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '4_Pembangunan_Jaringan_Telekomunikasi.pdf'),
(33, '1', 'RKA CONTROL ROOM 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '5_CONTROL_ROOM.pdf'),
(34, '1', 'RKA Penyusunan Masterplan TIK 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '6_Penyusunan_Masterplan_TIK.pdf'),
(35, '1', 'RKA Pengembangan dan Pengelolaan Aplikasi Generik 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '7_Pengembangan_dan_Pengelolaan_Aplikasi_Generik.pd'),
(36, '1', 'RKA Manajemen Data dan Informasi Pemerintah Daerah Kabupaten 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '8_Manajemen_Data_dan_Informasi_Pemerintah_Daerah_K'),
(37, '1', 'RKA Pembinaan dan pengembangan sumberdaya komunikasi dan informasi 2019', 'Kabid IKP ', 'Kasi PIKP', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '1_Pembinaan_dan_pengembangan_sumberdaya_komunikasi'),
(38, '1', 'RKA Perencanaan dan pengembangan kebijakan komunikasi dan informasi 2019', 'Kabid IKP ', 'Kasi PIKP', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '2_Perencanaan_dan_pengembangan_kebijakan_komunikas'),
(39, '1', 'RKA Pengelolaan Konten dan Perencanaan Media Komunikasi Publik 2019', 'Kabid IKP ', 'Kasi PIKP', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '3_Pengelolaan_Konten_dan_Perencanaan_Media_Komunik'),
(40, '1', 'RKA Pelatihan SDM dalam bidang informasi dan komunikasi 2019', 'Kabid IKP ', 'Kasi Peliputan', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '4_Pelatihan_SDM_dalam_bidang_informasi_dan_komunik'),
(41, '1', 'RKA Penyebarluasan informasi pembangunan daerah 2019', 'Kabid IKP ', 'Kasi Peliputan', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '5_Penyebarluasan_informasi_pembangunan_daerah.pdf'),
(42, '1', 'RKA Penyebarluasan informasi penyelenggaraan pemerintahan daerah 2019', 'Kabid IKP ', 'Kasi Peliputan', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '6,Penyebarluasan_informasi_penyelenggaraan_pemerin'),
(43, '1', 'RKA Penyebarluasan informasi yang bersifat penyuluhan bagi masyarakat 2019', 'Kabid IKP ', 'Kasi SKDI', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '7_Penyebarluasan_informasi_yang_bersifat_penyuluha'),
(44, '1', 'RKA Pengelolaan Media Komunikasi Publik 2019', 'Kabid IKP ', 'Kasi PIKP', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '8_Pengelolaan_Media_Komunikasi_Publik.pdf'),
(45, '1', 'RKA Peningkatan Kapasitas Sumber Daya Pengelola Informasi Publik 2019', 'Kabid IKP ', 'Kasi SKDI', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '9_Peningkatan_Kapasitas_Sumber_Daya_Pengelola_Info'),
(46, '1', 'RKA Optimalisasi Fungsi Persandian dan Pengamanan Informasi dan Jaringan Komunikasi 2019', 'Kabid IKP ', 'Kasi PIKP', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '10_Optimalisasi_Fungsi_Persandian_dan_Pengamnana_I'),
(47, '1', 'RKA penyusunan dan Pengumpuan data dan Statistik daerah', 'Kabid IKP ', 'Kasi PIKP', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '11_Penyusunan_dan_pengumpulan_data_dan_statistik_d'),
(48, '1', 'RKA Pengolahan, Updating dan Analisis data dan Statistik Daerah 2019', 'Kabid IKP ', 'Kasi SKDI', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '12_Pengolahan,_updating_dan_analisis_data_dan_stat'),
(49, '1', 'RKA Konferensi Pers 2019', 'Kabid IKP ', 'Kasi Peliputan', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '13_Konferensi_Pers.pdf'),
(50, '1', 'RKA Penyediaan Jasa Komunikasi, Sumber Daya Air dan Listrik 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '2_Penyediaan_Jasa_Komunikasi,_Sumber_Daya_Air_dan_'),
(51, '1', 'RKA Penyediaan Jasa Pemeliharaan dan Perizinan Kendaraan Dinas 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '3_Penyediaan_jasa_pemeliharaan_dan_perizinan_kenda'),
(52, '1', 'RKA Penyediaan Jasa Kebersihan Kantor 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '4_Penyediaan_Jasa_Kebersihan_Kantor.pdf'),
(53, '1', 'RKA Penyediaan Alat Tulis Kantor 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '5_Penyediaan_Alat_Tulis_Kantor.pdf'),
(54, '1', 'RKA Penyediaan Barang Cetakan dan Penggandaan 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '6_Penyediaan_Barang_Cetakan_dan_Penggandaan.pdf'),
(55, '1', 'RKA Penyediaan Komponen Instalasi Listrik 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '7_Penyediaan_Komponen_Instalasi_Listrik.pdf'),
(56, '1', 'RKA Penyediaan Peralatan dan Perlengkapan Kantor 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '8_Penyediaan_peralatan_dan_perlengkapan_kantor.pdf'),
(57, '1', 'RKA Penyediaan Bahan Bacaan dan Peraturan Perundang-undangan 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '9_Penyediaan_bahan_bacaan_dan_peraturan_perundang-'),
(58, '1', 'RKA Penyediaan Makanan dan Minuman 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '10_Penyediaan_Makanan_dan_Minuman.pdf'),
(59, '1', 'RKA Rapat-rapat Koordinasi dan Konsultasi ke Luar Daerah 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '11_Rapat-Rapat_Koordinasi_dan_Konsultasi_ke_Luar_D'),
(60, '1', 'RKA Penyediaan Jasa Pendukung Administrasi Perkantoran 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '12_Penyediaan_Jasa_Pendukung_Administrasi_Perkanto'),
(61, '1', 'RKA Penyediaan Pelayanan Administrasi Keuangan 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '13_Penyediaan_Pelayanan_Administrasi_Keuangan.pdf'),
(62, '1', 'RKA Pengadaan Kendaraan Dinas 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '14_Pengadaan_kendaraan_dinas.pdf'),
(63, '1', 'RKA Pembangunan Sarana dan Prasarana Lingkungan Kantor 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '15_Pembangunan_Sarana_dan_Prasarana_Lingkungan_Kan'),
(64, '1', 'RKA Pemeliharaan Rutin Berkala Kendaraan Dinas Operasional 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '16_Pemeliharaan_rutinberkala_kendaraan_dinasoperas'),
(65, '1', 'RKA Pemeliharaan Rutin Berkala Peralatan Gedung Kantor 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '17_Pemeliharaan_rutinberkala_peralatan_gedung_kant'),
(66, '1', 'RKA Penyusunan Laporan Capaian Kinerja dan Ikhtisar Realisasi Kinerja SKPD 2019', 'Sekretaris', 'Kasubag PKA', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '18_Penyusunan_laporan_capaian_kinerja_dan_ikhtisar'),
(67, '1', 'RKA Penyusunan Pelaporan Keuangan Akhir Tahun 2019', 'Sekretaris', 'Kasubag PKA', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '19_Penyusunan_pelaporan_keuangan_akhir_tahun.pdf'),
(68, '1', 'RKA Penyusunan Renja SKPD 2019', 'Sekretaris', 'Kasubag PKA', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '20_Penyusunan_Renja_SKPD.pdf'),
(69, '1', 'RKA Expo Kinerja SKPD 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', '21_Expo_Kinerja_SKPD.pdf'),
(70, '1', 'RKA Penyediaan Jasa Surat Menyurat 2019', 'Sekretaris', 'Kasubag UK', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Penyediaan_jasa_surat_menyurat.pdf'),
(71, '1', 'RKA SKPD 2019', 'Sekretaris', 'Kasubag PKA', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'RKA_22.pdf'),
(72, '1', 'SALINAN PERWAKO 24 TAHUN 2018 TTG SOP LAYANAN INFORMASI PUBLIK', 'Kabid IKP ', 'Kasi PIKP', 2017, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'SALINAN_PERWAKO_24_TAHUN_2018_TTG_SOP_LAYANAN_INFO'),
(73, '1', 'Tata Cara Pembentukan PPID', 'Kabid IKP ', 'Kasi PIKP', 2017, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Tata_Cara_Pembentukan_PPID.pdf'),
(74, '1', 'Sistem Kerja Lapor', 'Kabid IKP ', 'Kasi PIKP', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'sistem-kerja-lapor.jpg'),
(75, '1', 'RUP Belanja Jasa Hosting  2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Jasa_Hosting3.png'),
(76, 'disabled', 'RUP Belanja Kawat, Faksimil, Internet, Tv Kabel 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_kawat,faksimil,internet,Tv_kabel2.png'),
(77, '1', 'RUP Belanja Modal Pengadaan Alat Bengkel tidak Bermesin 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Alat_Bengkel_tak_Bermesin.'),
(78, '1', 'RUP Belanja Modal Pengadaan Alat Kantor 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Alat_Kantor1.png'),
(79, '1', 'RUP Belanja Modal Pengadaan Alat Pemadam Kebakaran 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Alat_Pemadam_Kebakaran.png'),
(80, '1', 'RUP Belanja Modal Pengadaan Alat Pendingin 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Alat_Pendingin.png'),
(81, '1', 'RUP Belanja Modal Pengadaan Alat Rumah Tangga Lainnya (Home Use) 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Alat_Rumah_Tangga_Lainnya_'),
(82, '1', 'RUP Belanja Modal Pengadaan Alat Ukur 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Alat_Ukur.png'),
(83, '1', 'RUP Belanja Modal Pengadaan Bangunan Gedung Tempat Kerja Lainnya 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Bangunan_Gedung_Tempat_Ker'),
(84, '1', 'RUP Belanja Modal Pengadaan Electric Generating Set 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Elektrik_Generating_Set.pn'),
(85, '1', 'RUP Belanja Modal Pengadaan Komputer Unit, Jaringan 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Komputer_Unit,Jaringa.png'),
(86, '1', 'RUP Belanja Modal Pengadaan Komputer Unit, Jaringan 2 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Komputer_Unit,Jaringan_(MT'),
(87, '1', 'RUP Belanja Modal Pengadaan Meubelair 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Meubelair.png'),
(88, '1', 'RUP Belanja Modal Pengadaan Peralatan Jaringan 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Peralatan_Jaringan.png'),
(89, '1', 'RUP Belanja Modal Pengadaan Peralatan Komputer Mainframe 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Peralatan_Komputer_Mainfra'),
(90, '1', 'RUP Belanja Modal Pengadaan Peralatan Personal Kantor 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Peralatan_Personal_Kantor.'),
(91, '1', 'RUP Belanja Modal Pengadaan Peralatan Studio Visual 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Peralatan_Studio_Visual.pn'),
(92, '1', 'RUP Belanja Modal Pengadaan Peralatan Studio Visual 2 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Peralatan_Studio_Visual2.p'),
(93, '1', 'RPU Belanja Modal Pengadaan Alat Bengkel Bermesin 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Perkakas_Alat_Bengkel_Berm'),
(94, '1', 'RUP Belanja Modal Pengadaan Software, Aplikasi 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Software,Aplikasi.png'),
(95, '1', 'RUP Belanja Modal Pengadaan Software, Aplikasi 2 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Software,Aplikasi2.png'),
(96, '1', 'RUP Belanja Modal Pengadaan Sound System 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Sound_System.png'),
(97, '1', 'RUP Belanja Modal Pengadaan Televisi 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Modal_Pengadaan_Televisi.png'),
(98, '1', 'RUP Belanja Pemeliharaan Peralatan dan Perlengkapan Kantor 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Pemeliharaan_Peralatan,Perlengkapan_Kantor'),
(99, '1', 'RUP Belanja Pemeliharaan Sarana dan Prasarana Komunikasi, Sistem Informasi Pemeliharaan Server Update 2019 ', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Pemeliharaan_Sarana_dan_Prasarana_Komunika'),
(100, '1', 'RUP Belanja Pemeliharaan 2019', 'Kabid E-gov', 'Kasi E-gov', 2019, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Pemeliharaan.png'),
(101, '1', 'RUP Jasa Konsul Pengawasan Control Room 2019', 'Kabid E-gov', 'Kasi E-gov', 2019, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Jasa_Konsul_Pengawasan_Control_Room2.png'),
(102, '1', 'RUP Jasa Konsultan Perencanaan Control Room 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Jasa_Konsultan_Perencanaan_Control_Room.png'),
(103, '2', 'Poster Lomba LKP 2018', 'Kabid IKP ', 'Kasi SKDI', 2019, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'downloadfile-1558669832-poster-lomba-lkp-2018.pdf'),
(104, '1', 'RUP Belanja Air Penydiaan Jasa Komunikasi, Sumber Daya Air dan Listrik', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Air_Penyediaan_Jasa_Komunikasi,_Sumber_Day'),
(105, '1', 'RUP Belanja Alat Listrik dan Elektronik (lampu pijar, batery kering) 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_alat_listrik_dan_elektronik_(_lampu_pijar,'),
(106, '1', 'RUP Belanja Alat Tulis Kantor kegiatan Pengemnbangan  dan Pengelolaan Aplikasi Generik 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_alat_tulis_kantor_kegiatan_Pengembangan_da'),
(107, '1', 'RUP Belanaja Alat Tulis Kantor Konferensi Pers 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Alat_Tulis_Kantor_Konferensi_Pers_-_Rencan'),
(108, '1', 'RUP Belanja Alat Tulis Kantor LPSE 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_alat_tulis_kantor_LPSE_-_Rencana_Umum_Peng'),
(109, '1', 'RUP Belanja Alat Tulis Kantor 2019 Manajemen data dan Informasi Pemerintah Daerah Kabupaten/Kota 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'Belanja_Alat_Tulis_Kantor_Manajemen_Data_dan_Infor'),
(110, '1', 'RUP Belanja Alat Tulis Kantor Masterplan TIK 2019', 'Kabid E-gov', 'Kasi E-gov', 2018, 'Singkawang', 'Hard Copy & Soft Copy', '1', 'BELANJA_ALAT_TULIS_KANTOR_MASTERPLAN_TIK_-_Rencana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama`) VALUES
(1, 'Berkala'),
(2, 'Serta Merta'),
(3, 'Setiap Saat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keberatan`
--

CREATE TABLE `tb_keberatan` (
  `id_keberatan` int(11) NOT NULL,
  `tujuan` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat_p` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no_hpp` varchar(100) NOT NULL,
  `nama_kp` varchar(100) NOT NULL,
  `alamat_kp` text NOT NULL,
  `no_hpkp` varchar(100) NOT NULL,
  `alasan2` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_pernyataan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_keberatan`
--

INSERT INTO `tb_keberatan` (`id_keberatan`, `tujuan`, `nama`, `alamat_p`, `pekerjaan`, `no_hpp`, `nama_kp`, `alamat_kp`, `no_hpkp`, `alasan2`, `status`, `tanggal_pernyataan`) VALUES
(1, '<p>Uji Coba</p>\r\n', 'Hery Zajuli', '<p>Jl.Pasiran</p>\r\n', 'Administrasi Perkantoran', '085652211163', 'Andi Rommy Rizky Risyandi', '<p>Jl.Rawasari</p>\r\n', '083149106849', 'Permohonan Informasi Ditolak', 'ditolak', '2019-07-09 03:22:59'),
(2, '<p>Uji Coba Saja</p>\r\n', 'Hery Zajuli', '<p>Jl.Pasiran</p>\r\n', 'Administrasi Perkantoran', '085652211163', 'Andi Rommy Rizky Risyandi', '<p>Jl.Rawasari</p>\r\n', '083149106849', 'Permintaan Informasi Tidak Ditanggapi', 'diterima', '2019-07-09 05:53:36'),
(3, '<p>Uji Coba</p>\r\n', 'Andi Rommy Rizky Risyandi', '<p>jl.rawasari</p>\r\n', 'Administrasi Perkantoran', '083149106849', 'Budi', '<p>Jl.pertiwi</p>\r\n', '085652211163', 'Permohonan Informasi Ditolak', 'belum diproses', '2019-07-11 01:51:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kota`
--

INSERT INTO `tb_kota` (`id_kota`, `id_provinsi`, `nama_kota`) VALUES
(1, 1, 'Kabupaten Sintang'),
(2, 1, 'Kabupaten Sanggau'),
(3, 1, 'Kabupaten Bengkayang'),
(4, 1, 'Kabupaten Sekadau'),
(6, 1, 'Kabupaten Ketapang'),
(7, 1, 'Kota Singkawang'),
(8, 1, 'Kota Pontianak'),
(9, 2, 'Kota Samarinda'),
(10, 2, 'Kabupaten Berau'),
(11, 2, 'Kabupaten Kutai Barat'),
(12, 2, 'Kabupaten Kutai Kartanegara'),
(13, 2, 'Kabupaten Kutai Timur'),
(14, 2, 'Kabupaten Mahakam Ulu'),
(15, 2, 'Kabupaten Penajam Paser'),
(16, 2, 'Kabupaten Penajam Paser Utara'),
(17, 2, 'Kota BalikPapan'),
(18, 2, 'Kota Bontang'),
(19, 9, 'Kabupaten Aceh barat'),
(20, 9, 'Kabupaten Aceh barat daya'),
(21, 9, 'Kabupaten Aceh besar'),
(22, 9, 'Kabupaten Aceh jaya'),
(23, 9, 'Kabupaten Aceh selatan'),
(24, 9, 'Kabupaten Aceh singkil'),
(25, 9, 'Kabupaten Aceh tamiang'),
(26, 9, 'Kabupaten Aceh tengah'),
(27, 9, 'Kabupaten Aceh tenggara'),
(28, 9, 'Kabupaten Aceh timur'),
(29, 9, 'Kabupaten Aceh utara'),
(30, 9, 'Kabupaten bener meriah'),
(31, 9, 'Kabupaten bireuen'),
(32, 9, 'Kabupaten Gayo lues'),
(33, 9, 'Kabupaten Aceh tenggara '),
(34, 9, 'Kabupaten Aceh timur'),
(35, 9, 'Kabupaten Aceh utara'),
(36, 9, 'Kabupaten Bener meriah'),
(37, 9, 'Kota lhoksumawe'),
(38, 9, 'Kota sabang'),
(42, 3, 'Kabupaten Hulu Sungai Selatan'),
(43, 3, 'Kabupaten Hulu Sungai Tengah'),
(44, 3, 'Kabupaten Hulu Sungai Utara'),
(45, 3, 'Kabupaten KotaBaru'),
(46, 3, 'Kabupaten Tabalong'),
(47, 3, 'Kabupaten Tanah Bumbu'),
(48, 3, 'Kabupaten Tanah Laut'),
(49, 3, 'Kabupaten Tapin'),
(50, 3, 'Kota BanjarBaru'),
(51, 3, 'Kota Banjarmasin'),
(52, 4, 'Kabupaten Nunukan'),
(53, 4, 'Kabupaten Malinau'),
(54, 4, 'Kabupaten Bulungan'),
(55, 4, 'Kabupaten Tana Tidung'),
(56, 4, 'Kota Tarakan'),
(57, 6, 'Kabupaten Tapanuli Tengah'),
(58, 6, 'Kabupaten Tapanuli Selatan'),
(59, 6, 'Kabupaten Tapanuli Utara'),
(60, 6, 'Kabupaten Nias'),
(61, 6, 'Kabupaten Langkat'),
(62, 6, 'Kabupaten Karo'),
(63, 6, 'Kabupaten Deli Serdang'),
(64, 6, 'Kabupaten Simalungun'),
(65, 6, 'Kabupaten asahan'),
(66, 6, 'Kabupaten Labuhan Batu'),
(67, 6, 'Kabupaten Dairi'),
(68, 6, 'Kabupaten Toba Samosir'),
(69, 6, 'Kabupaten Mandailing Natal'),
(70, 6, 'Kabupaten Nias Selatan'),
(71, 6, 'Kabupaten Pakpak Barat'),
(72, 6, 'Kabupaten Humbang Hasundutan'),
(73, 6, 'Kabupaten Samosir'),
(74, 6, 'Kaupaten Serdang Bedagai'),
(75, 6, 'Kabupaten Batubara'),
(76, 6, 'Kabupaten Padang Lawas Utara'),
(77, 6, 'Kabupaten Padang Lawas'),
(78, 6, 'Kabupaten LabuhanBatu Selatan'),
(79, 6, 'Kabupaten LabuhanBatu Utara'),
(80, 6, 'Kabupaten Nias Utara'),
(81, 6, 'Kabupaten Nias Barat'),
(82, 6, 'Kota Medan'),
(83, 6, 'Kota Pematang Siantar'),
(84, 6, 'Kota Sibolga'),
(85, 6, 'Kota Tanjung Balai'),
(86, 6, 'Kota Binjai'),
(87, 6, 'Kota Tebing Tinggi'),
(88, 6, 'Kota PadangSidempuan'),
(89, 6, 'Kota GunungSitoli'),
(90, 10, 'Kabupaten Bima'),
(91, 10, 'Kabupaten Dompu'),
(92, 10, 'Kabupaten Lombok Barat '),
(93, 10, 'Kabupaten Lombok Tengah'),
(94, 10, 'Kabupaten Lombok Timur'),
(95, 10, 'Kabupaten Lombok Utara'),
(96, 10, 'Kabupaten Sumbawa'),
(97, 10, 'Kabupaten Sumbawa Barat'),
(98, 10, 'Kota Bima'),
(99, 10, 'Kota Mataram'),
(100, 11, 'Kabupaten Alor'),
(101, 11, 'Kabupaten Belu'),
(102, 11, 'Kabupaten Flores Timur'),
(103, 11, 'Kabupaten Kupang'),
(104, 11, 'kabupaten lembata'),
(105, 11, 'Kabupaten malaka'),
(106, 11, 'Kabupaten Manggarai'),
(107, 11, 'Kabupaten Manggarai Timur'),
(108, 11, 'Kabupaten ngada'),
(109, 11, 'Kabupaten Nagekeo'),
(110, 11, 'Kabupaten Rote Ndao'),
(111, 11, 'Kabupaten sabu raijua'),
(112, 11, 'Kabupaten Sikka'),
(113, 11, 'Kabupaten Sumba Barat'),
(114, 11, 'Kabupaten Sumba Barat Daya'),
(115, 11, 'Kabupaten Sumba Tengah'),
(116, 11, 'Kabupaten Sumba Timur'),
(117, 11, 'Kabupaten Timor tengah Selatan'),
(118, 11, 'Kabupaten Timor Tengah Utara'),
(119, 11, 'Kota Kupang'),
(121, 13, 'Kabupaten Bolaang Mongondow'),
(122, 13, 'Kabupaten Bolaang Mongondow Selatan'),
(123, 13, 'Kabupaten Bolaang Mongondow Timur'),
(124, 13, 'Kabupaten Bolaang Mongondow Utara'),
(125, 13, 'Kabupaten Kepulauan Sangihe'),
(126, 13, 'Kabupaten Kepulauan Siaun Tagulandang Biaro'),
(127, 13, 'Kabupaten Kepulauan Talaud'),
(128, 13, 'Kabupaten Minahasa'),
(129, 13, 'Kabupaten Minahasa Selatan'),
(130, 13, 'Kabupaten Minahasa Tenggara'),
(131, 13, 'Kabupaten Minahasa Utara'),
(132, 13, 'Kota Bitung'),
(133, 13, 'Kota Kotamobagu'),
(134, 13, 'Kota Manado'),
(135, 13, 'Kota Tomohon'),
(142, 14, 'Kabupaten Majene'),
(143, 14, 'Kabupaten Mamasa'),
(144, 14, 'Kabupaten Mamuju'),
(145, 14, 'Kabupaten Mamuju Tengah'),
(146, 14, 'Kabupaten Pasangkayu'),
(147, 14, 'Kabupaten PolewaliMandar'),
(148, 15, 'Kabupaten Banggai'),
(149, 15, 'Kabupaten Banggai Kepulauan'),
(150, 15, 'Kabupaten Banggai Laut'),
(151, 15, 'Kabupaten Buol'),
(152, 15, 'Kabupaten Donggala'),
(153, 15, 'Kabupaten Morowali Utara'),
(154, 15, 'Kabupaten Morowali'),
(155, 15, 'Kabupaten parigi Moutong'),
(156, 15, 'Kabupaten Poso'),
(157, 15, 'Kabupaten Sigi'),
(158, 15, 'Kabupaten Tojo Una-Una'),
(159, 15, 'Kabupaten Tolitoli'),
(160, 15, 'Kota Palu'),
(161, 16, 'Kabupaten Bantaeng'),
(162, 16, 'Kabupaten Barru'),
(163, 16, 'Kabupaten Bone'),
(164, 16, 'Kabupaten Bulukumba'),
(165, 16, 'Kabupaten Enrekang'),
(166, 16, 'Kabupaten Gowa'),
(167, 16, 'Kabupaten Jeneponto'),
(168, 16, 'Kabupaten Kepulauan Selayar'),
(169, 16, 'Kabupaten Luwu'),
(170, 16, 'Kabupaten Luwu Timur'),
(171, 16, 'Kabupaten Luwu Utara'),
(172, 16, 'Kabupaten Maros'),
(173, 16, 'Kabupaten Pangkajene dan Kepulauan'),
(174, 16, 'Kabupaten Pinrang'),
(175, 16, 'Kabupaten Sidenreng Rappang'),
(176, 16, 'Kabupaten Sinjai'),
(177, 16, 'Kabupaten Soppeng'),
(178, 16, 'Kabupaten Takalar'),
(179, 16, 'Kabupaten Tana Toraja'),
(180, 16, 'Kabupaten Toraja Utara'),
(181, 19, 'Kabupaten Buru'),
(182, 19, 'Kabupaten Buru Selatan'),
(183, 19, 'Kabupaten Kepulauan Aru'),
(184, 19, 'Kabupaten Maluku Barat Daya'),
(185, 19, 'Kabupaten Maluku Tengah'),
(186, 19, 'Kabupaten Maluku Tenggara'),
(187, 19, 'Kabupaten Kepulauan Tanimbar'),
(188, 19, 'Kabupaten  Seram Bagian Barat'),
(189, 19, 'Kabupaten Seram Bagian Timur'),
(190, 19, 'Kota Ambon'),
(191, 19, 'Kota Tual'),
(203, 20, 'Kabupaten Fakfak'),
(204, 20, 'Kabupaten Kaimana'),
(205, 20, 'Kabupaten Manokwari'),
(206, 20, 'Kabupaten Manokwari Selatan'),
(207, 20, 'Kabupaten Maybrat'),
(208, 20, 'Kabupaten Pegunungan Arfak'),
(209, 20, 'Kabupaten Raja Ampat'),
(210, 20, 'Kabupaten Sorong '),
(211, 20, 'Kabupaten Sorong Selatan'),
(212, 20, 'Kabupaten Tambrauw'),
(213, 20, 'Kabupaten Teluk Bintuni'),
(214, 20, 'Kabupaten Teluk Wondama'),
(215, 20, 'Kota Sorong'),
(216, 21, 'Kabupaten Asmat'),
(217, 21, 'Kabupaten Biak Numfor'),
(218, 21, 'Kabupaten Bioven Digoel'),
(219, 21, 'Kabupaten Dogiyai'),
(220, 21, 'Kabupaten Intan Jaya'),
(221, 21, 'Kabupaten Jayapura'),
(222, 21, 'Kabupaten Jayawijaya'),
(223, 21, 'Kabupaten Keerom'),
(224, 21, 'Kabupaten Kepulauan Yapen'),
(225, 21, 'Kabupaten Lanny Jaya'),
(226, 21, 'Kabupaten Mamberamo Raya'),
(227, 21, 'Kabupaten Mamberamo Tengah'),
(228, 21, 'Kabupaten Mappi'),
(229, 21, 'Kabupaten Merauke'),
(230, 21, 'Kabupaten Mimika'),
(231, 21, 'Kabupaten Nabire'),
(232, 21, 'Kabupaten Nduga'),
(233, 21, 'Kabupaten Paniai'),
(234, 21, 'Kabupaten Pegunungan Bintang'),
(235, 21, 'Kabupaten Puncak'),
(236, 21, 'Kabupaten Puncak Jaya'),
(237, 21, 'Kabupaten Sarmi'),
(238, 21, 'Kabupaten Supiori'),
(239, 21, 'Kabupaten Tolikara'),
(240, 21, 'Kabupaten Waropen'),
(241, 21, 'Kabupaten Yahukimo'),
(242, 21, 'Kota Jayapura'),
(252, 22, 'Kabupaten Badung'),
(253, 22, 'Kabupaten Bangli'),
(254, 22, 'Kabupaten Buleleng'),
(255, 22, 'Kabupaten Gianyar'),
(256, 22, 'Kabupaten Jembrana'),
(257, 22, 'Kabupaten Karangasem'),
(258, 22, 'Kabupaten Klungkung'),
(259, 22, 'Kabupaten Tabanan'),
(260, 22, 'Kota Denpasar'),
(261, 24, 'Kabupaten Bantul'),
(262, 24, 'Kabupaten GunungKidul'),
(263, 24, 'Kabupaten KulonProgo'),
(264, 24, 'Kabupaten Sleman'),
(265, 24, 'Kota Yogyakarta'),
(266, 24, ''),
(267, 25, 'Kabupaten Bangkalan'),
(268, 25, 'Kabupaten Banyuwangi'),
(269, 25, 'Kabupaten Blitar'),
(270, 25, 'Kabupaten Bojonegoro'),
(271, 25, 'Kabupaten Bondowoso'),
(272, 25, 'Kabupaten Gresik'),
(273, 25, 'Kabupaten Jember'),
(274, 25, 'Kabupaten Jombang'),
(275, 25, 'Kabupaten Kediri'),
(276, 25, 'Kabupaten Lamongan'),
(277, 25, 'Kabupaten Lumajang'),
(278, 25, 'Kabupaten Madiun'),
(279, 25, 'Kabupaten Magetan'),
(280, 25, 'Kabupaten Malang'),
(281, 25, 'Kabupaten Mojokerto'),
(282, 25, 'Kabupaten Nganjuk'),
(283, 25, 'Kabupaten Ngawi'),
(284, 25, 'Kabupaten Pacitan'),
(285, 25, 'Kabupaten Pamekasan'),
(286, 25, 'Kabupaten Pasuruan'),
(287, 25, 'Kabupaten Ponorogo'),
(288, 25, 'Kabupaten Probolinggo'),
(289, 25, 'Kabupaten Sampang'),
(290, 25, 'Kabupaten Sidoarjo'),
(291, 25, 'Kabupaten Situbondo'),
(292, 26, 'Kabupaten Banjarnegara'),
(293, 26, 'Kabupaten Banyumas'),
(294, 26, 'Kabupaten Batang'),
(295, 26, 'Kabupaten Blora'),
(296, 26, 'Kabupaten Boyolali'),
(297, 26, 'Kabupaten Brebes'),
(298, 26, 'Kabupaten Cilacap'),
(299, 26, 'Kabupaten Demak'),
(300, 26, 'Kabupaten Grobogan'),
(301, 26, 'Kabupaten Jepara'),
(302, 26, 'Kabupaten karanganyar'),
(303, 26, 'Kabupaten Kebumen'),
(304, 26, 'Kabupaten Kendal'),
(305, 26, 'Kabupaten Kendal'),
(306, 26, 'Kabupaten Klaten '),
(307, 26, 'Kabupaten Kudus'),
(308, 26, 'Kabupaten Magelang'),
(309, 26, 'Kabupaten Pati'),
(310, 26, 'Kabupaten Pekalongan'),
(311, 26, 'Kabupaten Pemalang'),
(312, 26, 'Kabupaten Purbalingga'),
(313, 26, 'Kabupaten Purworejo'),
(314, 26, 'Kabupaten Rembang'),
(315, 26, 'Kabupaten Semarang'),
(316, 26, 'Kabupaten Sragen'),
(317, 26, 'Kabupaten Sukaharjo'),
(318, 26, 'Kabupaten Tegal'),
(319, 26, 'Kabupaten Temanggung'),
(320, 26, 'Kabupaten Wonogiri'),
(321, 26, 'Kabupaten Wonosobo'),
(322, 26, 'Kota Magelang'),
(323, 26, 'Kota Pekalongan'),
(324, 26, 'Kota Salatiga'),
(325, 26, 'Kota Semarang'),
(326, 26, 'Kota Surakarta'),
(327, 26, 'Kota Tegal'),
(328, 32, 'Lampung Tengah'),
(329, 32, 'Lampung Utara'),
(330, 32, 'Lampung Selatan'),
(331, 32, 'Lampung Barat'),
(332, 32, 'Lampung Timur'),
(333, 32, 'Kabupaten Mesuji'),
(334, 32, 'Kabupaten Pesawaran'),
(335, 32, 'Kabupaten Pesisir Barat'),
(336, 32, 'Kabupaten Pringsewu'),
(337, 32, 'Kabupaten TulangBawang'),
(338, 32, 'Kabupaten Tulang Bawang Barat'),
(339, 32, 'Kabupaten Tanggamus'),
(340, 32, 'Kabupaten Way Kanan'),
(341, 32, 'Kota Bandar Lampung'),
(342, 32, 'Kota Metro'),
(343, 33, 'Kabupaten Bangka'),
(344, 33, 'Kabupaten Bangka Barat'),
(345, 33, 'Kabupaten Bangka Selatan'),
(346, 33, 'Kabupaten Bangka Tengah'),
(347, 33, 'Kabupaten Belitung'),
(348, 33, 'Kabupaten Belitung Timur'),
(349, 33, 'Kota Pangkal Pinang'),
(350, 34, 'Kabupaten Bengkulu Selatan'),
(351, 34, 'Kabupaten Bengkulu Tengah'),
(352, 34, 'Kabupaten Bengkulu Utara'),
(353, 34, 'Kabupaten Kaur'),
(354, 34, 'Kabupaten Kepahiang'),
(355, 34, 'Kabupaten Kepahiang'),
(356, 34, 'Kabupaten Mukomuko'),
(357, 34, 'Kabupaten Rejang Lebong'),
(358, 34, 'Kabupaten Seluma	'),
(359, 34, 'Kota Bengkulu'),
(360, 35, 'Kabupaten Batanghari'),
(361, 35, 'Kabupaten Bungo'),
(362, 35, 'Kabupaten Kerinci'),
(363, 35, 'Kabupaten Merangin'),
(364, 35, 'Kabupaten Muaro Jambi'),
(365, 35, 'Kabupaten Sarolangun'),
(366, 35, 'Kabupaten Tanjung Jabung Barat'),
(367, 35, 'Kabupaten Tanjung Jabung Timur'),
(368, 35, 'Kabupaten Tebo'),
(369, 35, 'Kota Jambi'),
(370, 35, 'Kota Sungaipenuh'),
(383, 38, 'Kabupaten Bintan'),
(384, 38, 'Kabupaten Karimun'),
(385, 38, 'Kabupaten Kepulauan Anambas'),
(386, 38, 'Kabupaten Lingga'),
(387, 38, 'Kabupaten Natuna'),
(388, 38, 'Kota Batam'),
(389, 38, 'Kota Tanjung Pinang'),
(390, 3, 'Kabupaten Balangan'),
(391, 3, 'Kabupaten Balangan'),
(392, 3, 'Kabupaten Banjar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_opd`
--

CREATE TABLE `tb_opd` (
  `id_opd` int(11) NOT NULL,
  `nama_opd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_opd`
--

INSERT INTO `tb_opd` (`id_opd`, `nama_opd`) VALUES
(1, 'Sekretaris Dewan Kota Singkawang'),
(2, 'Inspektur Daerah Kota Singkawang'),
(3, 'Dinas Pendidikan dan Kebudayaan Kota Singkawang'),
(4, 'Dinas Kesehatan dan Keluarga Berencana Kota Singkawang'),
(5, 'Dinas Pekerjaan Umum dan Penataan  Kota Singkawang'),
(6, 'Dinas Perumahan, Permukiman dan Pertanahan Kota Singkawang'),
(7, 'Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak Kota Singkawang'),
(8, 'Dinas Penanaman Modal dan Tenaga Kerja Kota Singkawang'),
(9, 'Dinas Pertanian, Ketahanan Pangan, dan Perikanan Kota Singkawang'),
(10, 'Dinas Lingkungan Hidup Kota Singkawang'),
(11, 'Dinas Kependudukan dan Pencatatan Sipil Kota Singkawang'),
(12, 'Dinas Perhubungan Kota Singkawang'),
(13, 'Dinas Komunikasi dan Informatika Kota Singkawang'),
(14, 'Dinas Perdagangan, Perindustrian, Koperasi dan Usaha Kecil Menengah Kota Singkawang'),
(15, 'Dinas Pariwisata, Pemuda dan Olahraga  Kota Singkawang'),
(16, 'Direktur Rumah Sakit Daerah dr. Abdul Aziz Kota Singkawang'),
(17, 'Dinas Perpustakaan dan Kearsipan Kota Singkawang'),
(18, 'Kepala Satuan Polisi Pamong Praja Kota Singkawang'),
(19, 'Kepala Badan Perencanaan Pembangunan Daerah Kota Singkawang'),
(20, 'Badan Keuangan Daerah  (BKD) Kota Singkawang'),
(21, 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia  (BKPSDM) Kota Singkawang'),
(22, 'Badan Penanggulangan Bencana Daerah  Kota Singkawang'),
(23, 'Bagian Pemerintahan'),
(24, 'Bagian Hukum'),
(25, 'Bagian Kesejahteraan Rakyat'),
(26, 'Bagian Humas dan Protokol'),
(27, 'Badan Pusat Statistik Kota Singkawang'),
(28, 'BNN Kota Singkawang'),
(29, 'Asisten Pemerintahan dan Kesra Kota Singkawang'),
(30, 'Kecamatan Singkawang Tengah'),
(31, 'Kecamatan Singkawang Barat '),
(32, 'Kecamatan Singkawang Selatan '),
(33, 'Kecamatan Singkawang Utara '),
(34, 'Kecamatan Singkawang Timur  ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pip`
--

CREATE TABLE `tb_pip` (
  `id_pip` int(11) NOT NULL,
  `id_opd` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `scan_ktp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `informasi_diminta` text NOT NULL,
  `alasan` text NOT NULL,
  `tindak_lanjut` varchar(50) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pip`
--

INSERT INTO `tb_pip` (`id_pip`, `id_opd`, `nik`, `status`, `nama_pemohon`, `jenis_kelamin`, `usia`, `scan_ktp`, `alamat`, `telepon`, `fax`, `email`, `informasi_diminta`, `alasan`, `tindak_lanjut`, `tanggal_post`) VALUES
(1, 1, '6172012611970001', 'ditolak', 'Andi Rommy', 'Laki-laki', 21, 'img0032.jpg', '<p>Jl.Rawasari&nbsp;</p>\r\n', '085652211163', '', 'rommyrisyandi@yahoo.co.id', '<p>asdsd</p>\r\n', '<p>asdasdasd</p>\r\n', 'Email', '2019-06-24 02:23:40'),
(2, 1, '6172012611970001', 'diterima', 'Andi Rommy', 'Laki-laki', 21, 'img0033.jpg', '<p>Jl.Rawasari No.41 Singkawang Tengah</p>\r\n', '2147483647', '0', 'risyandirommy@gmail.com', '<p>Renja 2018</p>\r\n', '<p>Uji Coba</p>\r\n', 'Telepon', '2019-06-24 03:08:25'),
(3, 13, '6172012611970001', 'belum diproses', 'Andi Rommy', 'Laki-laki', 21, 'img0033.jpg', '<p>jl.rawasari</p>\r\n', '085652211163', '', 'risyandirommy@gmail.com', '<p>LHKPN diskominfo</p>\r\n', '<p>jkjghjkfjfhgfhtrtrh</p>\r\n', 'Email', '2019-06-24 03:02:13'),
(4, 20, '6172012611970001', 'belum diproses', 'Andi Rommy Rizky Risyandi', 'Laki-laki', 21, 'img0036.jpg', '<p>Jl.Rawasari No.41 Singkawang Tengah</p>\r\n', '083149106849', '', 'andirommy5@gmail.com', '<p>Laporan Keuangan BKD Kota Singkawang 2018</p>\r\n', '<p>Untuk Mengecek Hasil Laporan Keuangan di BKD Kota Singkawang&nbsp;</p>\r\n', 'Email', '2019-06-24 03:02:14'),
(5, 13, '6172012611970001', 'diterima', 'Andi Rommy Rizky Risyandi', 'Laki-laki', 21, 'img0037.jpg', '<p>Jl.Rawasari No.41 Singkawang Tengah</p>\r\n', '083149106849', '', 'andirommy5@gmail.com', '<p>Laporan Kinerja Dinas Komunikasi dan Informatika Kota Singkawang</p>\r\n', '<p>Untuk melihat Hasil Laporan Kinerja Tahun 2018 Diskominfo Kota Singkawang</p>\r\n', 'Email', '2019-06-26 02:54:33'),
(6, 13, '6172012611970001', 'diterima', 'Andi Rommy Rizky Risyandi', 'Laki-laki', 21, 'img0038.jpg', '<p>Jl.Rawasari</p>\r\n', '085652211163', '', 'andirommy5@gmail.com', '<p>sadjasdasdasd</p>\r\n', '<p>ajshdkasjdhkajsdhaksjdh</p>\r\n', 'Email', '2019-06-24 02:25:03'),
(7, 13, '6172012611970001', 'belum diproses', 'Andi Rommy Rizky Risyandi', 'Laki-laki', 21, 'img0039.jpg', '<p>Jl.Rawasari No.41 Singkawang Tengah</p>\r\n', '083149106849', '', 'andirommy5@gmail.com', '<p>Buku Profil DISKOMINFO Singkawang</p>\r\n', '<p>Uji Coba Saja</p>\r\n', 'Email', '2019-06-24 03:02:14'),
(9, 13, '6172012611970001', 'belum diproses', 'Andi Rommy Rizky Risyandi', 'Laki-laki', 21, 'img00311.jpg', '<p>Jl.Rawasari No.41 Singkawang Tengah</p>\r\n', '083149106849', '', 'andirommy5@gmail.com', '<p>Visi dan Misi Kota Singkawang 2018</p>\r\n', '<p>Uji Coba Saja</p>\r\n', 'Email', '2019-06-24 03:17:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Kalimantan Barat'),
(2, 'Kalimantan Timur'),
(3, 'Kalimantan Selatan'),
(4, 'Kalimantan Utara'),
(5, 'Sumatra Barat'),
(6, 'Sumatra Utara'),
(7, 'Sumatra Selatan'),
(8, 'Sumatra Timur'),
(9, 'Aceh'),
(10, 'Nusa tenggara Barat'),
(11, 'Nusa tenggara Timur'),
(13, 'Sulawesi Utara'),
(14, 'Sulawesi Barat'),
(15, 'Sulawesi Tengah'),
(16, 'Sulawesi Selatan'),
(17, 'Sulawesi Tenggara'),
(18, 'Maluku Utara'),
(19, 'Maluku'),
(20, 'PapuaBarat'),
(21, 'Papua'),
(22, 'Bali'),
(24, 'DI Yogyakarta'),
(25, 'Jawa Timur'),
(26, 'Jawa Tengah'),
(27, 'DKI Jakarta'),
(30, 'Jawa Barat'),
(32, 'Lampung'),
(33, 'Kepulauan Bangka Belitung'),
(34, 'Bengkulu'),
(35, 'Jambi'),
(36, 'Riau'),
(38, 'Kepulauan Riau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_kontak` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`nama`, `nik`, `alamat`, `provinsi`, `kota`, `no_kontak`, `email`, `password`, `level`) VALUES
('Hery zajuli', '2147483647', 'jl.sedau pasar', '1', '7', '089656211416', 'zajulihery@gmail.com', 'ea13b6f9893e14f98df82cb48e7664e3d8a0d95d', 'user'),
('Admin', '2220', 'Jl.Rawasari', '1', '7', '085652211163', 'risyandirommy@gmail.com', 'fff07fb189958ded368224a9890ffb7a8686bd87', 'admin'),
('Andi Rommy Rizky Risyandi', '6172012611970001', 'Jl.Rawasari No. 41 Singkawang Tengah', '1', '7', '083149106849', 'andirommy5@gmail.com', '32f965dfb6fb1165fa28f5c9a182c9bbae45cb7f', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_download`
--
ALTER TABLE `tb_download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `tb_ip`
--
ALTER TABLE `tb_ip`
  ADD PRIMARY KEY (`id_ip`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_keberatan`
--
ALTER TABLE `tb_keberatan`
  ADD PRIMARY KEY (`id_keberatan`);

--
-- Indexes for table `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `tb_opd`
--
ALTER TABLE `tb_opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indexes for table `tb_pip`
--
ALTER TABLE `tb_pip`
  ADD PRIMARY KEY (`id_pip`),
  ADD KEY `opd_tujuan` (`id_opd`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_download`
--
ALTER TABLE `tb_download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_ip`
--
ALTER TABLE `tb_ip`
  MODIFY `id_ip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_keberatan`
--
ALTER TABLE `tb_keberatan`
  MODIFY `id_keberatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=393;

--
-- AUTO_INCREMENT for table `tb_opd`
--
ALTER TABLE `tb_opd`
  MODIFY `id_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_pip`
--
ALTER TABLE `tb_pip`
  MODIFY `id_pip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD CONSTRAINT `tb_kota_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
