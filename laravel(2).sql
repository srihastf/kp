-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2018 pada 06.09
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidangsnt`
--

CREATE TABLE `bidangsnt` (
  `kodesnt` char(5) NOT NULL,
  `namabidang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidangsnt`
--

INSERT INTO `bidangsnt` (`kodesnt`, `namabidang`) VALUES
('SNT.1', 'Tata Usaha'),
('SNT.2', 'Senyawa Bertanda dan Radiometri'),
('SNT.3', 'Teknofisika'),
('SNT.4', 'Reaktor'),
('SNT.5', 'Keselamatan Kerja dan Keteknikan'),
('SNT.6', 'Unit Jaminan Mutu'),
('SNT.7', 'Unit Pengamanan Nuklir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kti`
--

CREATE TABLE `kti` (
  `kodekti` char(5) NOT NULL,
  `jeniskti` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kti`
--

INSERT INTO `kti` (`kodekti`, `jeniskti`) VALUES
('KTI-1', 'Jurnal/Majalah/Prosiding Dalam Negeri'),
('KTI-2', 'Seminar Dalam Negeri'),
('KTI-3', 'Jurnal/Majalah/Prosiding Luar Negeri'),
('KTI-4', 'Seminar Luar Negeri'),
('KTI-5', 'Lain-lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makalah`
--

CREATE TABLE `makalah` (
  `nomormakalah` char(6) NOT NULL,
  `kodesnt` char(5) NOT NULL,
  `kodekti` char(5) NOT NULL,
  `subidnkelompok` varchar(40) NOT NULL,
  `judulmakalah` varchar(300) NOT NULL,
  `tujuan` varchar(40) NOT NULL,
  `penulis` text NOT NULL,
  `pemeriksa1` char(21) DEFAULT NULL,
  `pemeriksa2` char(21) DEFAULT NULL,
  `tgldaftarawal` date NOT NULL,
  `accpsubidkapok` date DEFAULT NULL,
  `accpkabid` date DEFAULT NULL,
  `tglterimap1` date DEFAULT NULL,
  `tglterimap2` date DEFAULT NULL,
  `tglaccp1` date DEFAULT NULL,
  `tglaccp2` date DEFAULT NULL,
  `statusp1` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `statusp2` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `ttdkakptf` date DEFAULT NULL,
  `tglselesai` date DEFAULT NULL,
  `arsip` enum('TERSEDIA','TIDAK TERSEDIA') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makalah`
--

INSERT INTO `makalah` (`nomormakalah`, `kodesnt`, `kodekti`, `subidnkelompok`, `judulmakalah`, `tujuan`, `penulis`, `pemeriksa1`, `pemeriksa2`, `tgldaftarawal`, `accpsubidkapok`, `accpkabid`, `tglterimap1`, `tglterimap2`, `tglaccp1`, `tglaccp2`, `statusp1`, `statusp2`, `ttdkakptf`, `tglselesai`, `arsip`) VALUES
('012018', 'SNT.2', 'KTI-1', 'sbr1', 'qwertyuiop', 'qwertuiop[', 'Drs. Duyeh Setiawan, MT.', '19611007 198201 1 002', '19611023 198803 1 002', '2018-10-01', '2018-10-01', '2018-10-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TIDAK TERSEDIA'),
('032017', 'SNT.3', 'KTI-4', '', 'Characteristics of Nanofluids Made from Solgel Synthesized-Al2O3 Nanoparticles Using Citric Acid and PEG as Organic Agent and Bauxite as Raw Material\r\n', 'Seminar Nasional QIR 2017', 'Dani Gustaman Syarif, \r\nDjoko Hadi Prajitno, \r\nEfrizon Umar\r\n', '19600511 198502 1 001', '19610125 198302 2 001', '2017-02-02', '2017-03-02', '2017-03-02', '2017-03-02', '2017-03-02', '2017-04-13', '2017-04-17', 'ACC', 'ACC', '2017-05-25', '2017-05-25', 'TIDAK TERSEDIA'),
('042017', 'SNT.2', 'KTI-1', '-', 'EVALUASI BIOLOGIS 99MTc-GLUKOSA-6-FOSFAT PADA TIKUS PUTIH (Rattus norvegicus) STOCK SPRAGUE DAWLEY', 'Jurnal Ganendra', 'Iim Halimah, Hendris Wongso, Isti Daruwati', '19750822 199403 2 001', '19560705 198211 2 001', '2017-03-15', '2017-03-16', '2017-03-16', '2017-03-16', '2017-03-27', '2017-03-27', '2017-03-27', 'PERBAIKAN', 'PERBAIKAN', '2017-08-28', '2017-08-28', 'TERSEDIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_08_01_043920_create_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` char(21) NOT NULL,
  `bidang` char(5) DEFAULT NULL,
  `subbid` char(15) DEFAULT NULL,
  `namapegawai` varchar(40) NOT NULL,
  `golongan` char(5) NOT NULL,
  `pendidikanakhir` enum('SD','SMP','SMA','SMK','STM','D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `status` enum('PNS','CPNS','PEGAWAI KONTRAK') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `bidang`, `subbid`, `namapegawai`, `golongan`, `pendidikanakhir`, `jurusan`, `jabatan`, `status`) VALUES
('19531120 198109 1 001', 'SNT.3', NULL, 'Ir. R.Henky Poedjo Rahardjo, M.Sc.', 'IV/d', 'S2', 'Teknik Mesin', 'Peneliti Ahli Utama', 'PNS'),
('19540311 198503 1 002', 'SNT.3', NULL, 'Drs. Ketut Kamajaya, MT.', 'IV/b', 'S2', 'Rekayasa Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19550221 197703 1 001', 'SNT.2', NULL, 'Drs. Duyeh Setiawan, MT.', 'IV/d', 'S2', 'Rekayasa Nuklir', 'Peneliti Ahli Utama', 'PNS'),
('19560705 198211 2 001', 'SNT.3', NULL, 'Ir. Sudjatmi Kustituantini Soedjadi, MT.', 'IV/c', 'S2', 'Rekayasa Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19591014 198812 1 001', 'SNT.3', NULL, 'Dr. Ir. Djoko Hadi Prajitno, M. Sc.', 'IV/b', 'S3', 'Rekayasa Pertambangan', 'Peneliti Ahli Madya', 'PNS'),
('19600511 198502 1 001', NULL, NULL, 'Dr.Jupiter Sitorus Pane. M.Sc.', 'IV/c', 'S3', 'lmu Pengelolaan SDA&Lingkungan', 'Kepala PSTNT', 'PNS'),
('19600806 198502 2 001', 'SNT.1', 'PKDI', 'Jani Fidihaningsih, SAP', 'III/d', 'S1', 'Administrasi Publik', 'Analis Manajemen Kepegawaian', 'PNS'),
('19610125 198302 2 001', 'SNT.1', 'PKDI', 'Rina Yuliyani', 'III/c', 'D2', 'PATN', 'Pranata Humas', 'PNS'),
('19610212 198103 1 003', 'SNT.3', NULL, 'Tata Kusmayadi', 'III/b', 'STM', 'Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19610305 198303 1 006', 'SNT.1', 'PKDI', 'Dandung Nurhono, S.Sos', 'IV/b', 'S1', 'Humas', 'Arsiparis Ahli Madya', 'PNS'),
('19610522 198403 1 002', 'SNT.3', NULL, 'Dr. Dani Gustaman Syarif, M.Eng.', 'IV/e', 'S3', 'Nuklir Engineering', 'Peneliti Ahli Utama', 'PNS'),
('19610626 198302 1 002', 'SNT.1', 'PERLENGKAPAN', 'Yuniardi, A.Md.', 'III/c', 'D3', 'PATN', 'Kepala Subbagian Perlengkapan', 'PNS'),
('19611007 198201 1 002', 'SNT.2', NULL, 'Ahmad Sidik', 'II/a', 'SD', '-', 'Teknisi Laboratorium', 'PNS'),
('19611021 198103 1 001', 'SNT.1', 'PERLENGKAPAN', 'Edy Priatna', 'III/b', 'SMA', 'IPS', 'Pengemudi', 'PNS'),
('19611023 198803 1 002', 'SNT.2', NULL, 'Drs. Putu Sukmabuana, M.Eng.', 'IV/b', 'S2', 'Teknik Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19611030 198603 2 002', 'SNT.1', 'PKDI', 'Sri Karyani', 'III/b', 'SMA', 'IPS', 'Sekretaris Pimpinan', 'PNS'),
('19611121 199101 2 001', 'SNT.3', NULL, 'Dra. Veronica Indriati Sri Wardhani, MT.', 'IV/a', 'S2', 'Rekayasa Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19620429 198303 1 003', 'SNT.1', 'PERLENGKAPAN', 'Dadang Fachrudin', 'III/b', 'SMA', 'IPS', 'Teknisi peralatan dan Instalasi', 'PNS'),
('19620514 198302 1 001', 'SNT.1', 'PKDI', 'Raharja, SE.', 'III/d', 'S1', 'Ekonomi', 'Analis Manajemen Kepegawaian', 'PNS'),
('19620701 199003 1 006', 'SNT.3', NULL, 'Drs. Reinaldy Nazar, MT.', 'IV/a', 'S2', 'Rekayasa Nuklir', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19620817 198101 1 001', 'SNT.1', 'PERLENGKAPAN', 'Agus Gunawan', 'II/a', 'SD', '-', 'Pramu Taman', 'PNS'),
('19630409 198503 1 001', 'SNT.1', 'PKDI', 'Khasairin, S.Sos.', 'III/d', 'S1', 'Adm. Negara', 'Analis Manajemen Kepegawaian', 'PNS'),
('19630429 198302 2 001', 'SNT.1', 'PKDI', 'Heni', 'III/b', 'SMA', 'SMEA Tata Usaha', 'Pengadministrasi Kepegawaian', 'PNS'),
('19630511 199203 1 005', 'SNT.1', 'KEUANGAN', 'Didin Samsudin', 'III/b', 'SMA', 'IPS', 'Pengelola  Adminstrasi Belanja Pegawai', 'PNS'),
('19630810 198603 2 001', 'SNT.1', 'PKDI', 'Dra. Arie Widowati, MT.', 'IV/a', 'S2', 'Rekayasa Nuklir', 'Kepala Subbagian PKDI', 'PNS'),
('19630918 198301 1 001', 'SNT.3', NULL, 'Wawan Handiaga', 'III/d', 'STM', 'STM El. Industri', 'Pranata Nuklir Penyelia', 'PNS'),
('19631213 198403 2 006', 'SNT.2', NULL, 'Natalia Adventini', 'III/d', 'SMA', 'SMA Analis', 'Pranata Nuklir Penyelia', 'PNS'),
('19640314 199203 1 004', 'SNT.3', NULL, 'Dr. Epung Saepul Bahrum', 'IV/a', 'S3', 'Fisika', 'Peneliti Ahli Muda', 'PNS'),
('19640323 198403 1 002', 'SNT.2', NULL, 'Iswahyudi', 'III/b', 'SMA', 'Snakma Peternakan', 'Pranata Nuklir Mahir', 'PNS'),
('19640610 198601 1 002', 'SNT.3', NULL, 'Yudi Setiadi', 'III/b', 'SMA', 'IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19640702 198302 2 001', 'SNT.1', 'KEUANGAN', 'Supartini Parmis, SAB', 'III/d', 'S1', 'SAB', 'Kepala Subbagian Keuangan', 'PNS'),
('19640716 199303 1 002', 'SNT.3', NULL, 'Dr. Alan Maulana, MT.', 'IV/b', 'S3', 'Fisika', 'Kepala Bagian Teknofisika', 'PNS'),
('19640718 198803 2 001', 'SNT.2', NULL, 'Prof. Dr. Muhayatun, MT.', 'IV/e', 'S3', 'Matematika dan IPA (Kimia)', 'Peneliti Ahli Utama', 'PNS'),
('19650113 198603 1 004', 'SNT.3', NULL, 'Muhamad Yamin', 'III/d', 'SMA', 'SMA Analis', 'Pranata Nuklir Penyelia', 'PNS'),
('19650505 198602 2 001', 'SNT.1', 'PKDI', 'Onih Setiati', 'III/d', 'SMA', 'IPS', 'Pustakawan Penyelia', 'PNS'),
('19650921 198910 2 001', 'SNT.3', NULL, 'Dr. Enung Nurlia, MT.', 'IV/b', 'S3', 'Rekayasa Pertambangan', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19651228 199803 2 003', 'SNT.1', 'KEUANGAN', 'Komarasari', 'III/b', 'SMA', 'SMEA Tata Buku', 'Bendahara', 'PNS'),
('19660323 199203 2 002', 'SNT.2', NULL, 'Titin Sri Mulyati', 'III/b', 'SMA', 'IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19660421 198603 1 004', 'SNT.1', 'PERLENGKAPAN', 'Abdul Patah', 'III/b', 'D2', 'PATN', 'Pranata Nuklir Mahir', 'PNS'),
('19670518 199201 2 001', 'SNT.2', NULL, 'Dra. Azmairit Azis', 'IV/a', 'S1', 'Kimia', 'Peneliti Ahli Madya', 'PNS'),
('19671014 198902 2 001', 'SNT.1', 'PERLENGKAPAN', 'Ratnasih', 'III/b', 'SMA', 'IPS', 'Pengelola Kendaraan', 'PNS'),
('19680131 198803 1 002', 'SNT.3', NULL, 'Budy Darmono', 'III/c', 'STM', 'Mesin', 'Teknisi Litkayasa Penyelia', 'PNS'),
('19680505 198803 1 002', 'SNT.2', NULL, 'Ade Suherman', 'III/b', 'SMK', 'Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19710428 199901 1 001', 'SNT.1', NULL, 'Asep Yana Mulyana, SH.', 'III/d', 'S1', 'Hukum', 'Kepala Bagian Tata Usaha', 'PNS'),
('19750822 199403 2 001', 'SNT.2', NULL, 'Diah Dwiana Lestiani, M.Eng.', 'IV/a', 'S2', 'Fisika Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19780627 200501 2 008', 'SNT.2', NULL, 'Eva Maria Widyasari, M.Si', 'III/c', 'S2', 'Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19790220 200312 2 001', 'SNT.2', NULL, 'Isti Daruwati, M.Si., Apt.', 'III/d', 'S2', 'Farmasi', 'Kepala Bidang SBR', 'PNS'),
('19791214 200501 1 010', 'SNT.2', NULL, 'Rasito, S.Si.', 'III/c', 'D4', 'Fisika', 'Peneliti Ahli Muda', 'PNS'),
('19800111 200312 2 007', 'SNT.2', NULL, 'Rizky Juwita Sugiharti, M.Pharm', 'III/d', 'S2', 'Farmasi', 'Peneliti Ahli Muda', 'PNS'),
('19800222 200604 2 003', 'SNT.2', NULL, 'Iim Halimah, M.Si.', 'III/b', 'S2', '-', 'Peneliti Ahli Muda', 'PNS'),
('19801115 200501 2 010', 'SNT.1', 'PERLENGKAPAN', 'Ertis Lita Elianie, A.Md.', 'III/b', 'D3', 'Manajemen Informatika', 'Pengadministrasi BMN', 'PNS'),
('19810326 200801 2 012', 'SNT.2', NULL, 'Syukria Kurniawati, M.Sc', 'III/c', 'S2', 'Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19810825 200501 2 009', 'SNT.2', NULL, 'Endah Damastuti, M.Si.', 'III/c', 'S2', 'Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19821219 200801 2 018', 'SNT.2', NULL, 'Woro Yatu Niken Syahfitri, S.Si.', 'III/a', 'S1', 'Kimia', 'Peneliti Ahli Pertama', 'PNS'),
('19830103 200501 2 009', 'SNT.2', NULL, 'Maula Eka Sriyani, M.Si.', 'III/c', 'S2', 'Farmasi', 'Peneliti Ahli Muda', 'PNS'),
('19830505 200604 1 004', 'SNT.3', NULL, 'Nanda Nagara, ST.', 'III/c', 'S1', 'Elektro', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19831016 200801 2 013', 'SNT.1', 'KEUANGAN', 'Neneng Nur Aisyah, A.Md.', 'III/a', 'D3', 'Analis Kimia', 'Verikator Keuangan', 'PNS'),
('19840718 200604 2 002', 'SNT.1', 'PKDI', 'Mega Ardhya Garini, S.AP', 'III/b', 'S1', 'Administrasi Publik', 'Analis Manajemen Kepegawaian', 'PNS'),
('19850117 200912 1 004', 'SNT.2', NULL, 'Eko Susanto, ST.', 'III/a', 'S1', 'Teknik Lingkungan', 'Peneliti Ahli Pertama', 'PNS'),
('19850120 200912 2 003', 'SNT.2', NULL, 'Indah Kusmartini, S.Si', 'III/a', 'S1', 'Kimia', 'Peneliti Ahli Pertama', 'PNS'),
('19851120 200901 1 003', 'SNT.3', NULL, 'Veri Trisnawan, A.Md.', 'III/a', 'D3', 'Elektronika dan Instrumentasi', 'Teknisi Laboratorium', 'PNS'),
('19860224 200901 1 001', 'SNT.2', NULL, 'Muhamad Basit Febrian , M.Si.', 'III/b', 'S2', 'Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19860331 200801 1 006', 'SNT.2', NULL, 'Teguh Hafiz Ambar Wibawa, S.Si.', 'III/a', 'S1', '-', 'Peneliti Ahli Pertama', 'PNS'),
('19860825 200901 1 001', 'SNT.2', NULL, 'Djoko Prakoso Dwi Atmodjo, A.Md.', 'II/a', 'D3', 'Elektronika Instrumentasi', 'Teknisi Laboratorium', 'PNS'),
('19861124 200901 1 002', 'SNT.3', NULL, 'Santiko Tri Sulaksono, M.Si.', 'III/b', 'S1', 'Fisika', 'Peneliti Ahli  Pertama', 'PNS'),
('19870127 201403 1 004', 'SNT.2', NULL, 'Yanuar Setiadi, S.Si.', 'III/a', 'S1', 'Kimia', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19870318 200912 2 002', 'SNT.2', NULL, 'Witri Nuraeni, A.Md.', 'III/a', 'D3', 'Analis Kimia', 'Teknisi Laboratorium', 'PNS'),
('19880316 201012 1 002', 'SNT.2', NULL, 'Hendris Wongso, S.Si.', 'III/b', 'S1', 'Biologi', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19881219 200912 2 002', 'SNT.1', 'KEUANGAN', 'Dessy Irmayanti Syukur, A.Md', 'III/a', 'D3', 'Akuntansi', 'Bendahara', 'PNS'),
('19891229 201503 1 006', 'SNT.2', NULL, 'Drh. Isa Mahendra', 'III/b', 'S1', 'Dokter Hewan', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19900509 201503 2 007', 'SNT.3', NULL, 'Yofi Ike Pratiwi, A.Md', 'II/c', 'D3', 'Analis Kimia', 'Teknisi Laboratorium', 'PNS'),
('19921221 201801 1 002', 'SNT.2', NULL, 'Ahmad Kurniawan, S.KH.', 'III/b', 'S1', 'Dokter Hewan', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19930622 201801 1 002', 'SNT.3', NULL, 'Jakaria Usman, S.Si', 'III/a', 'S1', 'Fisika', 'Calon Peneliti Ahli  Pertama', 'CPNS'),
('19930628 201801 1 002', 'SNT.2', NULL, 'Badra Sanditya Rattyananda, S.T', 'III/a', 'S1', 'Kimia', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19930711 201503 2 002', 'SNT.1', 'PKDI', 'Avi Pradana Yulianti, A.Md', 'II/c', 'D3', 'Teknik Perencanaan Wilayah dan Kota', 'Analis Kepegawaian Terampil', 'PNS'),
('19950118 201801 2 000', 'SNT.2', NULL, 'Endah Rosyidiah, S.Farm.', 'III/a', 'S1', 'Farmasi', 'Calon Pranata Nuklir Pertama', 'CPNS'),
('19950227 201802 1 001', 'SNT.2', NULL, 'I Gede Pranawiditia, S.T', 'III/a', 'S1', 'Kimia', 'Calon Peneliti Ahli Pertama', 'CPNS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan`
--

CREATE TABLE `perbaikan` (
  `idperbaikan` int(11) NOT NULL,
  `nomormakalah` char(6) NOT NULL,
  `tglperiksap1` date DEFAULT NULL,
  `tglperiksap2` date DEFAULT NULL,
  `tglselesaip1` date DEFAULT NULL,
  `tglselesaip2` date DEFAULT NULL,
  `statusp1` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `statusp2` enum('ACC','PERBAIKAN') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perbaikan`
--

INSERT INTO `perbaikan` (`idperbaikan`, `nomormakalah`, `tglperiksap1`, `tglperiksap2`, `tglselesaip1`, `tglselesaip2`, `statusp1`, `statusp2`) VALUES
(1, '042017', '2018-10-01', '2018-10-01', '2018-10-05', '2018-10-05', 'ACC', 'ACC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjamkti`
--

CREATE TABLE `pinjamkti` (
  `idpinjam` int(5) NOT NULL,
  `nomormakalah` char(6) NOT NULL,
  `nip` char(21) NOT NULL,
  `tglbooking` date NOT NULL,
  `status` enum('ACC','TOLAK') DEFAULT NULL,
  `tglpinjam` date DEFAULT NULL,
  `tglkembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjamkti`
--

INSERT INTO `pinjamkti` (`idpinjam`, `nomormakalah`, `nip`, `tglbooking`, `status`, `tglpinjam`, `tglkembali`) VALUES
(1, '032017', '19531120 198109 1 001', '2018-10-01', 'ACC', '2018-10-02', NULL);

--
-- Trigger `pinjamkti`
--
DELIMITER $$
CREATE TRIGGER `pinjam1` AFTER INSERT ON `pinjamkti` FOR EACH ROW BEGIN
	UPDATE makalah SET makalah.arsip="TIDAK TERSEDIA"
	WHERE makalah.nomormakalah=new.nomormakalah;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subbidang`
--

CREATE TABLE `subbidang` (
  `kodesubid` char(15) NOT NULL,
  `kodesnt` char(5) NOT NULL,
  `namasubid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subbidang`
--

INSERT INTO `subbidang` (`kodesubid`, `kodesnt`, `namasubid`) VALUES
('ABNPD', 'SNT.4', 'AKUNTANSI BAHAN NUKLIR DAN PERENCANAAN DEKOMISIONING'),
('KETEKNIKAN', 'SNT.5', 'KETEKNIKAN'),
('KEUANGAN', 'SNT.1', 'KEUANGAN'),
('KKPR', 'SNT.5', 'KESELAMATAN KERJA DAN PROTEKSI RADIASI'),
('OP', 'SNT.4', 'OPERASI DAN PERAWATAN'),
('PERLENGKAPAN', 'SNT.1', 'PERLENGKAPAN'),
('PKDI', 'SNT.1', 'PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nip` char(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nip`, `name`, `email`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'Admin', '$2y$10$GlKjnMpcSAIyyVzYT6CDGuqgWotWr7KXrtcOYt1.qvNUIHcp7pQs6', 'ycvYeWfWyStn6e8zxfSck4F1MXPqdNn4tJBupzRcpt7QKCnaCvZV8fEb7wuR', NULL, NULL),
(2, '19600511 198502 1 001', 'Dr.Jupiter Sitorus Pane. M.Sc.', 'jp@gmail.com', 'Kepala PSTNT', '$2y$10$YsBo3fbn4QqewhCJFjw85.Qq4jJpq1JGGbrbhaZedQDWEL6vqisGu', 'O6IKnlCesiWa8cRTmPGtun7rlMgarxPiUCYAMB0IJVquuuFPsT6xdNlh0mSm', '2018-08-19 03:42:21', '2018-08-19 03:42:21'),
(3, '19610125 198302 2 001', 'Rina Yuliyani', 'rina6183@gmail.com', 'Sekertaris KPTF/KPTP', '$2y$10$cyd.PRQ0xuPxPtRJS8JgM.u.Z.oUraZDapVkmENxwFdMP.4HAA/nG', 'JtuDbFabECh8wD1lBB3AumhE778KLviGmnBFnx1skWyQ68urmomR7uOfNUED', '2018-08-20 18:41:19', '2018-08-20 20:39:46'),
(4, '19650505 198602 2 001', 'Onih Setiati', 'onih@gmail.com', 'Sekertaris KPTF/KPTP', '$2y$10$aWqj3VlpkohoMnDtxX4jZe.XtPMI5m2G0vw2bEVnx0lYz9qfggQWq', 'tjRT0rCbQame5kmYpTghxWQq2rpPRv415MQFKnraUnG1a4mLLs5mM0QUx2NQ', NULL, NULL),
(5, '19550221 197703 1 001', 'Drs. Duyeh Setiawan, MT.', 'dy@gmail.com', 'Pegawai', '$2y$10$iSF7NxFOKNFgyGnrEwU1m.JULKF.MaJj5lmybwENeIlcgt0pgQ8GK', 'iUeNfxEsUhRvzYEyith0Z81UuBw4bDpJuGLGJMN1Wo90OCVG9kfyTTW9LPBC', NULL, NULL),
(6, '19610305 198303 1 006', 'Dandung Nurhono, S.Sos', 'd@gmail.com', 'Admin', '$2y$10$GlKjnMpcSAIyyVzYT6CDGuqgWotWr7KXrtcOYt1.qvNUIHcp7pQs6', 'ulhaS39JVJcIRh3jAtLRUTU5C0O3x5zN83jrwM3dY78qAqs8T8uxX2QCUni6', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidangsnt`
--
ALTER TABLE `bidangsnt`
  ADD PRIMARY KEY (`kodesnt`);

--
-- Indeks untuk tabel `kti`
--
ALTER TABLE `kti`
  ADD PRIMARY KEY (`kodekti`);

--
-- Indeks untuk tabel `makalah`
--
ALTER TABLE `makalah`
  ADD PRIMARY KEY (`nomormakalah`),
  ADD KEY `kodekti` (`kodekti`),
  ADD KEY `kodesnt` (`kodesnt`),
  ADD KEY `pemeriksa1` (`pemeriksa1`),
  ADD KEY `pemeriksa2` (`pemeriksa2`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `bidang` (`bidang`),
  ADD KEY `subbid` (`subbid`);

--
-- Indeks untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`idperbaikan`),
  ADD KEY `perbaikan_ibfk_1` (`nomormakalah`);

--
-- Indeks untuk tabel `pinjamkti`
--
ALTER TABLE `pinjamkti`
  ADD PRIMARY KEY (`idpinjam`),
  ADD KEY `nomormakalah` (`nomormakalah`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `subbidang`
--
ALTER TABLE `subbidang`
  ADD PRIMARY KEY (`kodesubid`),
  ADD KEY `kodesnt` (`kodesnt`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `idperbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pinjamkti`
--
ALTER TABLE `pinjamkti`
  MODIFY `idpinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `makalah`
--
ALTER TABLE `makalah`
  ADD CONSTRAINT `makalah_ibfk_1` FOREIGN KEY (`kodekti`) REFERENCES `kti` (`kodekti`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `makalah_ibfk_2` FOREIGN KEY (`kodesnt`) REFERENCES `bidangsnt` (`kodesnt`),
  ADD CONSTRAINT `makalah_ibfk_3` FOREIGN KEY (`pemeriksa1`) REFERENCES `pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `makalah_ibfk_4` FOREIGN KEY (`pemeriksa2`) REFERENCES `pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`bidang`) REFERENCES `bidangsnt` (`kodesnt`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`subbid`) REFERENCES `subbidang` (`kodesubid`);

--
-- Ketidakleluasaan untuk tabel `pinjamkti`
--
ALTER TABLE `pinjamkti`
  ADD CONSTRAINT `pinjamkti_ibfk_1` FOREIGN KEY (`nomormakalah`) REFERENCES `makalah` (`nomormakalah`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjamkti_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subbidang`
--
ALTER TABLE `subbidang`
  ADD CONSTRAINT `subbidang_ibfk_1` FOREIGN KEY (`kodesnt`) REFERENCES `bidangsnt` (`kodesnt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
