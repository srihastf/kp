-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 14.49
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
  `acckakptf` date DEFAULT NULL,
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

INSERT INTO `makalah` (`nomormakalah`, `kodesnt`, `kodekti`, `subidnkelompok`, `judulmakalah`, `tujuan`, `penulis`, `pemeriksa1`, `pemeriksa2`, `tgldaftarawal`, `acckakptf`, `accpsubidkapok`, `accpkabid`, `tglterimap1`, `tglterimap2`, `tglaccp1`, `tglaccp2`, `statusp1`, `statusp2`, `ttdkakptf`, `tglselesai`, `arsip`) VALUES
('012017', 'SNT.2', 'KTI-3', '-', 'SYNTHESIS AND CHARACTERIZATION OF MOLYBDENUM PHTALOCYANINE AS TARGET MATERIAL FOR HIGH SPECIFIC ACTIVITY MOLYBDENUM-99 PRODUCTION', 'Indonesian Journal of Chemistry', 'Muhamad Basit Febrian, Duyeh Setiawan, Hilda Hidayati', '19750822 199403 2 001', '19560705 198211 2 001', '2017-01-04', '2017-01-17', NULL, NULL, '2017-01-18', '2017-01-18', '2017-09-20', '2017-01-25', 'ACC', 'ACC', '2017-02-09', '2017-02-10', 'TERSEDIA'),
('082017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('092017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('102017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('112017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('122017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('132017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('142017', ' Indo', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('152017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('162017', '5 pad', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('172017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('182017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('192017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('202017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('212017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('222017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('232017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('242017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('252017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('262017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('272017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('292017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('302017', 'bandu', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('332017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('342017', ' 12-D', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('372017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('382017', '', '', '', '', '', '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
('19531120 198109 1 001', 'SNT.3', '', 'Ir. R.Henky Poedjo Rahardjo, M.Sc.', 'IV/d', 'S2', 'S2 Teknik Mesin', 'Peneliti Ahli Utama', 'PNS'),
('19540311 198503 1 002', 'SNT.3', '', 'Drs. Ketut Kamajaya, MT.', 'IV/b', 'S2', 'S2 Rekayasa Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19550221 197703 1 001', 'SNT.2', '', 'Drs. Duyeh Setiawan, MT.', 'IV/d', 'S2', 'S2 Rekayasa Nuklir', 'Peneliti Ahli Utama', 'PNS'),
('19560705 198211 2 001', 'SNT.3', '', 'Ir. Sudjatmi Kustituantini Soedjadi, MT.', 'IV/c', 'S2', 'S2 Rekayasa Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19581010 198701 1 001', 'SNT.3', '', 'Ir. Hasan, MT.', 'IV/a', 'S2', 'S2 Rekayasa Nuklir', 'Analis penelitian dan Pengembangan', 'PNS'),
('19590901 198203 1 004', 'SNT.4', 'OP', 'Agus Sunarya, ST.', 'IV/a', 'S1', 'Teknik Industri', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19591014 198812 1 001', 'SNT.3', '', 'Dr. Ir. Djoko Hadi Prajitno, M. Sc.', 'IV/b', 'S3', 'S3 Rekayasa Pertambangan', 'Peneliti Ahli Madya', 'PNS'),
('19600511 198502 1 001', '', '', 'Dr.Jupiter Sitorus Pane. M.Sc. ', 'IV/c', 'S3', 'lmu Pengelolaan SDA&Lingkungan', 'Kepala PSTNT', 'PNS'),
('19600729 198302 1 001', 'SNT.1', 'PKDI', 'Permana Dewa', 'III/c', 'SMA', 'SMA IPS', 'Pengadministrasi Kepegawaian', 'PNS'),
('19600806 198502 2 001', 'SNT.1', 'PKDI', 'Jani Fidihaningsih, SAP', 'III/d', 'S1', 'S1 Administrasi Publik', 'Analis Manajemen Kepegawaian', 'PNS'),
('19600907 198012 1 001', 'SNT.4', 'OP', 'Agus Iwan', 'III/b', 'SMA', 'STM Elektro', 'Operator Peralatan', 'PNS'),
('19601024 198303 2 001', 'SNT.5', 'KKPR', 'Dra. Rini Heroe Oetami, MT.', 'IV/b', 'S2', 'S2 Rekayasa Nuklir', 'Pengawas Radiasi Ahli Madya', 'PNS'),
('19610125 198302 2 001', 'SNT.1', 'PKDI', 'Rina Yuliyani', 'III/c', 'D2', 'D2 PATN', 'Pranata Humas Mahir', 'PNS'),
('19610212 198103 1 003', 'SNT.3', '', 'Tata Kusmayadi', 'III/b', 'SMA', 'STM Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19610221 198203 1 005', 'SNT.4', 'OP', 'Koswara, S.Kom.', 'IV/a', 'S1', 'S1 Komputer', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19610224 198203 1 003', 'SNT.5', 'KETEKNIKAN', 'M. Hadni', 'III/b', 'SMA', 'STM Listrik', 'Pranata Nuklir Mahir', 'PNS'),
('19610305 198303 1 006', 'SNT.1', 'PKDI', 'Dandung Nurhono, S.Sos', 'IV/b', 'S1', 'S1 Humas 196005111985021000', 'Arsiparis Ahli Madya', 'PNS'),
('19610522 198403 1 002', 'SNT.3', '', 'Dr. Dani Gustaman Syarif, M.Eng.', 'IV/e', 'S3', 'S3 Nuklir Engineering', 'Peneliti Ahli Utama', 'PNS'),
('19610626 198302 1 002', 'SNT.1', 'PERLENGKAPAN', 'Yuniardi, A.Md.', 'III/c', 'D3', 'D3 PATN', 'Kepala Subbagian Perlengkapan', 'PNS'),
('19611007 198201 1 002', 'SNT.2', '', 'Ahmad Sidik', 'II/a', 'SD', 'SD', 'Teknisi Laboratorium', 'PNS'),
('19611008 198203 2 003', 'SNT.5', 'KETEKNIKAN', 'Foni Latifa', 'III/b', 'SMA', 'STM Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19611021 198103 1 001', 'SNT.1', 'PERLENGKAPAN', 'Edy Priatna', 'III/b', 'SMA', 'SMA IPS', 'Pengemudi', 'PNS'),
('19611022 198203 1 002', 'SNT.7', '', 'Suharyono', 'III/b', 'SMA', 'SMA IPS', 'Pranata Nuklir Mahir', 'PNS'),
('19611023 198803 1 002', 'SNT.2', '', 'Drs. Putu Sukmabuana, M.Eng.', 'IV/b', 'S2', 'S2 Teknik Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19611030 198603 2 002', 'SNT.1', 'PKDI', 'Sri Karyani', 'III/b', 'SMA', 'SMA IPS', 'Sekretaris Pimpinan', 'PNS'),
('19611121 199101 2 001', 'SNT.3', '', 'Dra. Veronica Indriati Sri Wardhani, MT.', 'IV/a', 'S2', 'Rekayasa Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19620212 198503 1 008', 'SNT.7', '', 'Wahyu Irianto', 'III/d', 'SMA', 'STM Mesin', 'Pranata Nuklir Penyelia', 'PNS'),
('19620213 198302 1 001', 'SNT.5', 'KKPR', 'Eko Rustiadi', 'III/b', 'SMA', 'SMA IPA', 'Teknisi Peralatan', 'PNS'),
('19620306 198201 1 001', 'SNT.7', '', 'Usman', 'III/b', 'SMA', 'SMA IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19620314 198903 1 003', 'SNT.5', 'KKPR', 'Drs. Suhulman', 'III/d', 'S1', 'S1 Kimia', 'Pengendali Dampak Lingkungan Muda', 'PNS'),
('19620429 198303 1 003', 'SNT.1', 'PERLENGKAPAN', 'Dadang Fachrudin', 'III/b', 'SMA', 'SMA IPS', 'Teknisi peralatan dan Instalasi', 'PNS'),
('19620514 198302 1 001', 'SNT.1', 'PKDI', 'Raharja, SE.', 'III/d', 'S1', 'S1 Ekonomi', 'Analis Manajemen Kepegawaian', 'PNS'),
('19620701 199003 1 006', 'SNT.3', '', 'Drs. Reinaldy Nazar, MT.', 'IV/a', 'S2', 'S2 Rekayasa Nuklir', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19620817 198101 1 001', 'SNT.1', 'PERLENGKAPAN', 'Agus Gunawan', 'II/a', 'SD', 'SD', 'Pramu Taman', 'PNS'),
('19620817 198302 1 001', 'SNT.4', '', 'Agus Rakhim, ST.', 'III/d', 'S1', 'S1 Teknik Informatika', 'Kepala Bidang Reaktor', 'PNS'),
('19621010 198403 1 022', 'SNT.5', 'KETEKNIKAN', 'Sugito', 'III/d', 'SMA', 'STM Elektro', 'Pranata Nuklir Penyelia', 'PNS'),
('19630409 198503 1 001', 'SNT.1', 'PKDI', 'Khasairin, S.Sos.', 'III/d', 'S1', 'S1 Adm. Negara', 'Analis Manajemen Kepegawaian', 'PNS'),
('19630429 198302 2 001', 'SNT.1', 'PKDI', 'Heni', 'III/b', 'SMA', 'SMEA Tata Usaha', 'Pengadministrasi Kepegawaian', 'PNS'),
('19630511 199203 1 005', 'SNT.1', 'KEUANGAN', 'Didin Samsudin', 'III/b', 'SMA', 'SMA IPS', 'Pengelola  Adminstrasi Belanja Pegawai ', 'PNS'),
('19630804 199203 1 002', 'SNT.5', '', 'Drs. Dadang Supriatna, MT', 'IV/b', 'S2', 'S2 Lingkungan', 'Kepala Bidang K3', 'PNS'),
('19630810 198603 2 001', 'SNT.1', 'PKDI', 'Dra. Arie Widowati, MT.', 'IV/a', 'S2', 'S2 Rekayasa Nuklir', 'Kepala Subbagian PKDI', 'PNS'),
('19630918 198301 1 001', 'SNT.3', '', 'Wawan Handiaga', 'III/d', 'SMA', 'STM El. Industri', 'Pranata Nuklir Penyelia', 'PNS'),
('19631213 198403 2 006', 'SNT.2', '', 'Natalia Adventini', 'III/d', 'SMA', 'SLA Analis', 'Pranata Nuklir Penyelia', 'PNS'),
('19640314 199203 1 004', 'SNT.3', '', 'Dr. Epung Saepul Bahrum', 'IV/a', 'S3', 'Fisika', 'Peneliti Ahli Muda', 'PNS'),
('19640323 198403 1 002', 'SNT.2', '', 'Iswahyudi', 'III/b', 'SMA', 'Snakma Peternakan', 'Pranata Nuklir Mahir', 'PNS'),
('19640610 198601 1 002', 'SNT.3', '', 'Yudi Setiadi', 'III/b', 'SMA', 'SMA IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19640614 199103 2 002', 'SNT.5', 'KKPR', 'Dra. Juni Chussetijowati', 'IV/a', 'S1', 'S1 Matematika', 'Pengawas Radiasi Ahli Madya', 'PNS'),
('19640702 198302 2 001', 'SNT.1', 'KEUANGAN', 'Supartini Parmis, SAB', 'III/d', 'S1', 'SAB', 'Kepala Subbagian Keuangan', 'PNS'),
('19640716 199303 1 002', 'SNT.3', '', 'Dr. Alan Maulana, MT.', 'IV/b', 'S3', 'Fisika', 'Kepala Bagian Teknofisika', 'PNS'),
('19640718 198803 2 001', 'SNT.2', '', 'Prof. Dr. Muhayatun, MT.', 'IV/e', 'S3', 'S3 Matematika dan IPA (Kimia)', 'Peneliti Ahli Utama', 'PNS'),
('19640910 198410 1 001', 'SNT.5', 'KKPR', 'Dadang Basarah, S.Si.', 'III/d', 'S1', 'S1 Kimia', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19641115 199803 1 002', 'SNT.4', 'ABNPD', 'Anton Mediawan, ST', 'III/d', 'S1', 'S1 Teknik Industri', 'Pranata Nuklir Muda', 'PNS'),
('19650113 198603 1 004', 'SNT.3', '', 'Muhamad Yamin', 'III/d', 'SMA', 'SMA Analis', 'Pranata Nuklir Penyelia', 'PNS'),
('19650504 199010 1 001', 'SNT.7', '', 'Dian Siswa, SAP', 'III/c', 'S1', 'Administrasi Publik', 'Kepala Unit Pengamanan Nuklir', 'PNS'),
('19650505 198602 2 001', 'SNT.1', 'PKDI', 'Onih Setiati', 'III/d', 'SMA', 'SMA IPS', 'Pustakawan Penyelia', 'PNS'),
('19650921 198910 2 001', 'SNT.3', '', 'Dr. Enung Nurlia, MT.', 'IV/b', 'S3', 'S3 Rekayasa Pertambangan', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19651228 199803 2 003', 'SNT.1', 'KEUANGAN', 'Komarasari', 'III/b', 'SMA', 'SMEA Tata Buku', 'Bendahara ', 'PNS'),
('19660323 199203 2 002', 'SNT.2', '', 'Titin Sri Mulyati', 'III/b', 'SMA', 'SMA IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19660421 198603 1 004', 'SNT.1', 'PERLENGKAPAN', 'Abdul Patah', 'III/b', 'D2', 'D2 PATN', 'Pranata Nuklir Mahir', 'PNS'),
('19670518 199201 2 001', 'SNT.2', '', 'Dra. Azmairit Azis', 'IV/a', 'S1', 'S1 Kimia', 'Peneliti Ahli Madya', 'PNS'),
('19671014 198902 2 001', 'SNT.1', 'PERLENGKAPAN', 'Ratnasih', 'III/b', 'SMA', 'SMA IPS', 'Pengelola Kendaraan', 'PNS'),
('19680131 198803 1 002', 'SNT.3', '', 'Budy Darmono', 'III/c', 'SMA', 'STM Mesin', 'Teknisi Litkayasa Penyelia', 'PNS'),
('19680505 198803 1 002', 'SNT.2', '', 'Ade Suherman', 'III/b', 'SMA', 'SMK Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19680829 198803 1 001', 'SNT.1', 'PERLENGKAPAN', 'Bahtiar Imanudin, S.ST.', 'III/d', 'D4', 'D IV-Elektromekanik', 'Pengelola Pengadaan Barang/Jasa Ahli Per', 'PNS'),
('19701209 199010 1 001', 'SNT.7', '', 'Rudi Fitriadi Sutardi, S.ST.', 'III/c', 'D4', 'D IV', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19710301 199203 1 000', 'SNT.5', 'KKPR', 'Muhamad Yuyus', 'III/b', 'SMA', 'STM Teknik Pengerjaan Logam', 'Teknisi Peralatan', 'PNS'),
('19710428 199901 1 001', 'SNT.1', '', 'Asep Yana Mulyana, SH.', 'III/d', 'S1', 'S1 Hukum', 'Kepala Bagian Tata Usaha', 'PNS'),
('19721003 199203 1 003', 'SNT.7', '', 'Muhamad Anwar', 'III/b', 'SMA', 'STM Otomotif', 'Komandan Regu Pengamanan Instalasi Nukli', 'PNS'),
('19740408 200112 1 001', 'SNT.5', 'KKPR', 'Tri Cahyo Laksono, S.ST', 'III/c', 'D4', 'DIV', 'Pengawas Radiasi Ahli Muda', 'PNS'),
('19740601 199403 1 002', 'SNT.7', '', 'Arief Faat', 'III/b', 'SMA', 'STM Listrik', 'Pranata Pasukan Pengamanan Dalam', 'PNS'),
('19750822 199403 2 001', 'SNT.2', '', 'Diah Dwiana Lestiani, M.Eng.', 'IV/a', 'S2', 'S2 Fisika Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19760806 200112 1 001', 'SNT.4', 'OP', 'Teguh Subekti, S.ST.', 'III/b', 'D4', 'Teknofisika Nuklir', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19761012 200212 2 002', 'SNT.4', 'OP', 'Neni Ratnawati, A.Md.', 'III/c', 'D3', 'D3 Teknik Mesin', 'Pranata Nuklir Penyelia', 'PNS'),
('19770220 200212 2 001', 'SNT.4', 'OP', 'Nia Ratnaningsih, A.Md.', 'III/b', 'D3', 'D3 Teknik Mesin', 'Pranata Nuklir Penyelia', 'PNS'),
('19771203 200112 1 003', 'SNT.4', 'OP', 'Abdul Rohim Iso Suwarso, S.ST', 'III/c', 'D4', 'Teknofisika Nuklir', 'Kepala Subbidang OP ', 'PNS'),
('19780627 200501 2 008', 'SNT.2', '', 'Eva Maria Widyasari, M.Si', 'III/c', 'S2', 'S2 Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19781030 200501 1 006', 'SNT.5', 'KKPR', 'dr. Rudi Gunawan', 'IV/a', 'S1', 'S1 Dokter', 'Dokter Ahli Muda', 'PNS'),
('19790220 200312 2 001', 'SNT.2', '', 'Isti Daruwati, M.Si., Apt.', 'III/d', 'S2', 'S2 Farmasi', 'Kepala Bidang SBR ', 'PNS'),
('19791214 200501 1 010', 'SNT.2', '', 'Rasito, S.Si.', 'III/c', 'S1', 'S1 Fisika', 'Peneliti Ahli Muda', 'PNS'),
('19800111 200312 2 007', 'SNT.2', '', 'Rizky Juwita Sugiharti, M.Pharm', 'III/d', 'S2', 'S2 Farmasi', 'Peneliti Ahli Muda', 'PNS'),
('19800222 200604 2 003', 'SNT.2', '', 'Iim Halimah, M.Si.', 'III/b', 'S2', '', 'Peneliti Ahli Muda', 'PNS'),
('19801115 200501 2 010', 'SNT.1', 'PERLENGKAPAN', 'Ertis Lita Elianie, A.Md.', 'III/b', 'D3', 'D3 Manajemen Informatika', 'Pengadministrasi BMN', 'PNS'),
('19810326 200801 2 012', 'SNT.2', '', 'Syukria Kurniawati, M.Sc', 'III/c', 'S2', 'S2 Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19810714 200312 1 005', 'SNT.5', 'KETEKNIKAN', 'Setyo Purnomo, S.ST', 'III/c', 'D4', 'D4 Teknofisika Nuklir', 'Kepala Subbidang Keteknikan', 'PNS'),
('19810825 200501 2 009', 'SNT.2', '', 'Endah Damastuti, M.Si.', 'III/c', 'S2', 'S1 Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19820315 200801 2 028', 'SNT.6', '', 'Yustika Kurniati, MT.', 'III/c', 'S2', 'S2 Teknik Elektro', 'Kepala Unit Jaminan Mutu', 'PNS'),
('19821219 200801 2 018', 'SNT.2', '', 'Woro Yatu Niken Syahfitri, S.Si.', 'III/a', 'S1', 'S1 Kimia', 'Peneliti Ahli Pertama', 'PNS'),
('19830103 200501 2 009', 'SNT.2', '', 'Maula Eka Sriyani, M.Si.', 'III/c', 'S2', 'S2 Farmasi', 'Peneliti Ahli Muda', 'PNS'),
('19830505 200604 1 004', 'SNT.3', '', 'Nanda Nagara, ST.', 'III/c', 'S1', 'S1 Elektro', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19831016 200801 2 013', 'SNT.1', 'KEUANGAN', 'Neneng Nur Aisyah, A.Md.', 'III/a', 'D3', 'D3 Analis Kimia', 'Verikator Keuangan', 'PNS'),
('19831119 200801 1 007', 'SNT.4', 'OP', 'Asep Wahyu Shopiyudin, ST.', 'III/a', 'S1', 'Teknik Elektro', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19840318 200312 1 004', 'SNT.7', '', 'Asmunip Prayogo', 'II/d', 'SMA', 'SMK Otomotif', 'Pranata Pasukan Pengamanan Dalam', 'PNS'),
('19840423 200312 1 007', 'SNT.7', '', 'Rustamaji', 'II/d', 'SMA', 'SMK Mesin', 'Pranata Pasukan Pengamanan Dalam', 'PNS'),
('19840511 200912 1 003', 'SNT.4', 'OP', 'Rian Fitriana, S.ST.', 'III/b', 'D4', 'Teknik Nuklir', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19840606 200801 1 008', 'SNT.4', 'ABNPD', 'Prasetyo Basuki, M.Si', 'III/c', 'S2', 'Fisika', 'Kepala Subbidang ABNPD', 'PNS'),
('19840718 200604 2 002', 'SNT.1', 'PKDI', 'Mega Ardhya Garini, S.AP', 'III/b', 'S1', 'S1 Administrasi Publik', 'Analis Manajemen Kepegawaian', 'PNS'),
('19850117 200912 1 004', 'SNT.2', '', 'Eko Susanto, ST.', 'III/a', 'S1', 'Teknik Lingkungan', 'Peneliti Ahli Pertama', 'PNS'),
('19850118 200901 1 001', 'SNT.5', 'KKPR', 'Rezky Anggakusuma, S.Si', 'III/a', 'S1', 'Kimia', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19850120 200912 2 003', 'SNT.2', '', 'Indah Kusmartini, S.Si', 'III/a', 'S1', 'Kimia', 'Peneliti Ahli Pertama', 'PNS'),
('19850720 200801 1 008', 'SNT.5', 'KKPR', 'Haryo Seno, MSi.', 'III/c', 'S2', '', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19850814 200801 2 004', 'SNT.5', 'KKPR', 'Afida Ikawati, MT', 'III/c', 'S2', 'S1 Teknik Lingkungan', 'Kepala Subbidang KKPR', 'PNS'),
('19851110 200912 1 001', 'SNT.5', 'KETEKNIKAN', 'Hengki Wibowo, A.Md.', 'III/a', 'D3', 'Teknik Mesin', 'Pranata Nuklir Mahir', 'PNS'),
('19851120 200901 1 003', 'SNT.3', '', 'Veri Trisnawan, A.Md.', 'III/a', 'D3', 'D3 Elektronika dan Instrumentasi', 'Teknisi Laboratorium', 'PNS'),
('19860224 200901 1 001', 'SNT.2', '', 'Muhamad Basit Febrian , M.Si.', 'III/b', 'S2', 'S1 Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19860303 200901 1 002', 'SNT.5', 'KETEKNIKAN', 'Sigit Nugroho Pamungkas, S.ST.', 'III/c', 'D4', 'D IV Elektromekanik', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19860331 200801 1 006', 'SNT.2', '', 'Teguh Hafiz Ambar Wibawa, S.Si.', 'III/a', 'S1', 'S1', 'Peneliti Ahli Pertama', 'PNS'),
('19860603 201012 1 002', 'SNT.4', 'OP', 'Yayat Supriyatna, A.Md.', 'III/a', 'D3', 'Teknik Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19860622 200912 1 002', 'SNT.5', 'KKPR', 'Dikdik Sidik Purnama, S.Si', 'III/a', 'S1', 'Kimia', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19860825 200901 1 001', 'SNT.2', '', 'Djoko Prakoso Dwi Atmodjo, A.Md.', 'II/d', 'D3', 'D3 Elektronika Instrumentasi', 'Teknisi Laboratorium', 'PNS'),
('19861006 200604 1 004', 'SNT.5', 'KETEKNIKAN', 'Dwi Handoko, S.ST', 'III/a', 'D4', 'Elektronika Instrumentasi ', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19861031 200501 1 003', 'SNT.5', 'KETEKNIKAN', 'Haryatna', 'II/d', 'SMA', 'SMK Elektro', 'Pranata Nuklir Terampil', 'PNS'),
('19861124 200901 1 002', 'SNT.3', '', 'Santiko Tri Sulaksono, M.Si.', 'III/b', 'S1', 'S1 Fisika', 'Peneliti Ahli  Pertama', 'PNS'),
('19861210 201012 2 001', 'SNT.4', 'ABNPD', 'Nailatussaadah, M.Si', 'III/c', 'S2', 'S2 Teknik Fisika', 'Pranata Nuklir Muda', 'PNS'),
('19870127 201403 1 004', 'SNT.2', '', 'Yanuar Setiadi, S.Si.', 'III/a', 'S1', 'Kimia', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19870318 200912 2 002', 'SNT.2', '', 'Witri Nuraeni, A.Md.', 'III/a', 'D3', 'Analis Kimia', 'Teknisi Laboratorium', 'PNS'),
('19880316 201012 1 002', 'SNT.2', '', 'Hendris Wongso, S.Si.', 'III/b', 'S1', 'Biologi', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19880707 201503 2 004', 'SNT.5', 'KKPR', 'dr. Prabandhini Wardhani', 'III/b', 'S1', 'Dokter', 'Dokter Ahli Pertama', 'PNS'),
('19881219 200912 2 002', 'SNT.1', 'KEUANGAN', 'Dessy Irmayanti Syukur, A.Md', 'III/a', 'D3', 'D3 Akuntansi', 'Bendahara ', 'PNS'),
('19890717 201012 2 001', 'SNT.5', 'KETEKNIKAN', 'Dwi Yuliansari Nurazizah, A.Md', 'III/a', 'D3', 'Teknik Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19891009 201801 2 000', 'SNT.5', 'KKPR', 'drg. Rizky Friskylia', 'III/b', 'S2', 'Dokter Gigi', 'Calon Dokter Gigi Ahli Pertama', 'PNS'),
('19891229 201503 1 006', 'SNT.2', '', 'drh. Isa Mahendra', 'III/b', 'S1', 'Dokter Hewan', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19900509 201503 2 007', 'SNT.3', '', 'Yofi Ike Pratiwi, A.Md', 'II/c', 'D3', 'Analis Kimia', 'Teknisi Laboratorium', 'PNS'),
('19911022 201503 2 006', 'SNT.4', 'OP', 'Fuji Octa Indah Suciati, A.Md.', 'II/c', 'D3', 'Analis Kimia', 'Pranata Nuklir Terampil', 'PNS'),
('19911029 201503 1 004', 'SNT.7', '', 'Danang Supriyanto, A.Md.', 'II/c', 'D3', 'Elekronika dan Instrumentasi', 'Pranata Pasukan Pengamanan Dalam', 'PNS'),
('19920408 201503 1 003', 'SNT.7', '', 'Aidil Fitri Ubaydillah, A.Md.', 'II/c', 'D3', 'Elektronika', 'Pranata Pasukan Pengamanan Dalam', 'PNS'),
('19920426 201801 1 000', 'SNT.4', 'ABNPD', 'Irsyad, S.ST', 'III/a', '', 'Elektromekanik', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19921221 201801 1 000', 'SNT.2', '', 'Ahmad Kurniawan, S.KH.', 'III/b', 'S1', 'Dokter Hewan', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19921221 201801 1 002', 'SNT.2', NULL, 'Ahmad Kurniawan, S.KH.', 'III/b', 'S1', 'Dokter Hewan', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19930321 201503 1 002', 'SNT.5', 'KKPR', 'Harry Mukhrivan, A.Md.Kep', 'II/c', 'D3', 'Keperawatan', 'Teknisi Laboratorium', 'PNS'),
('19930622 201801 1 000', 'SNT.3', '', 'Jakaria Usman, S.Si', 'III/a', 'S1', 'S1 Fisika', 'Calon Peneliti Ahli  Pertama', 'CPNS'),
('19930622 201801 1 002', 'SNT.3', NULL, 'Jakaria Usman, S.Si', 'III/a', 'S1', 'Fisika', 'Calon Peneliti Ahli  Pertama', 'CPNS'),
('19930628 201801 1 000', 'SNT.2', '', 'Badra Sanditya Rattyananda, S.T', 'III/a', 'S1', 'S1 Kimia', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19930628 201801 1 002', 'SNT.2', NULL, 'Badra Sanditya Rattyananda, S.T', 'III/a', 'S1', 'Kimia', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19930711 201503 2 002', 'SNT.1', 'PKDI', 'Avi Pradana Yulianti, A.Md', 'II/c', 'D3', 'Teknik Perencanaan Wilayah dan Kota', 'Analis Kepegawaian Terampil', 'PNS'),
('19940331 201801 1 000', 'SNT.4', 'OP', 'Sabilul Falah, S.ST', 'III/a', '', 'Elektromekanik', 'Pranata Nuklir Ahli Pertama', 'CPNS'),
('19950118 201801 2 000', 'SNT.2', '', 'Endah Rosyidiah, S.Farm.', 'III/a', 'S1', 'Farmasi', 'Calon Pranata Nuklir Pertama', 'CPNS'),
('19950227 201802 1 000', 'SNT.2', '', 'I Gede Pranawiditia, S.T', 'III/a', 'S1', 'Kimia', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19950227 201802 1 001', 'SNT.2', NULL, 'I Gede Pranawiditia, S.T', 'III/a', 'S1', 'Kimia', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19950422 201801 1 000', 'SNT.4', 'OP', 'Hisyam Zulkarnain, S.ST', 'III/a', 'D4', 'Elektronika Instrumentasi', 'Pranata Nuklir Ahli Pertama', 'CPNS'),
('PK0001', '', '', 'Yusup Saepulloh', '', 'SMA', 'SMA IPS', 'Pengemudi', 'PEGAWAI KONTRAK'),
('PK0002', '', '', 'Beben Ganjar Rahman, SE', '', 'S1', 'Ekonomi', 'Pengemudi', 'PEGAWAI KONTRAK'),
('PK0003', '', '', 'Ridwan Efendi', '', 'SMP', '', 'Pramu Saji', 'PEGAWAI KONTRAK'),
('PK0004', '', '', 'Hanifah Rustiana', '', 'SMK', 'Komputer Jaringan', 'Operator Telepon', 'PEGAWAI KONTRAK'),
('PK0005', '', '', 'Nurtrianto Kurniawan', '', 'S1', 'Ekonomi', 'Pengemudi', 'PEGAWAI KONTRAK'),
('PK0006', '', '', 'Regi Widiawan', '', 'SMK', 'Komputer Jaringan', 'Pemroses Penatausahaan Barang Milik Nega', 'PEGAWAI KONTRAK'),
('PK0007', '', '', 'Dede Daryana', '', 'SMA', 'SMA IPS', 'Pramu Saji', 'PEGAWAI KONTRAK'),
('PK0008', '', '', 'Dyah Kumalasari, S.ST', '', '', 'Elektrokimia Nuklir', 'Pembantu Peneliti', 'PEGAWAI KONTRAK'),
('PK0009', '', '', 'Fery', '', '', '', '', 'PEGAWAI KONTRAK'),
('PK0010', '', '', 'Zakaria Kuswara', '', 'SMK', 'Elektro', 'Pengadministrasi Keuangan', 'PEGAWAI KONTRAK'),
('PK0011', '', '', 'Asep Mulyana', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0012', '', '', 'Asep Supriatna', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0013', '', '', 'Budi Agung', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0014', '', '', 'Hendi', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0015', '', '', 'Hilmi Hibatulloh', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0016', '', '', 'Kakan', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0017', '', '', 'Muhmmad Nur Firdaus', '', 'SMA', 'IPA', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0018', '', '', 'Saprudin', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0019', '', '', 'Tantan Rustandi', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0020', '', '', 'Ujang Juandi', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0021', '', '', 'Vermont Dipano Pasaribu', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0022', '', '', 'Wila Ratnawati', '', 'SMA', 'IPS', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0023', '', '', 'Angki Anjar Surya Pratama', '', 'SMK', 'Elektro', 'Petugas Pengamanan', 'PEGAWAI KONTRAK'),
('PK0024', '', '', 'Indra Bayu Permadi', '', 'SMA', 'IPA', 'Petugas Pengamanan', 'PEGAWAI KONTRAK');

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
(1, '042017', '2017-04-03', '2017-04-05', '2018-04-05', '2018-04-06', 'ACC', 'ACC');

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
(1, 'admin', 'admin', 'admin@gmail.com', 'Admin', '$2y$10$GlKjnMpcSAIyyVzYT6CDGuqgWotWr7KXrtcOYt1.qvNUIHcp7pQs6', 'DIckxBMTsZEm1Wu1eWP8s9E3r8axk1e5Nj4s8VNnTshdLronih4KgYuy6JJr', '2018-08-19 02:42:21', '2018-08-19 02:42:21'),
(2, '19600511 198502 1 001', 'Dr.Jupiter Sitorus Pane. M.Sc.', 'jp@gmail.com', 'Kepala PSTNT', '$2y$10$YsBo3fbn4QqewhCJFjw85.Qq4jJpq1JGGbrbhaZedQDWEL6vqisGu', 'wKKZW0RvTNSvwIPuJS9rMdPbRSCom6h9ME5CvwvfNBEoYkKcXbz8ipl8HI8m', '2018-08-19 03:42:21', '2018-08-19 03:42:21'),
(3, '19610125 198302 2 001', 'Rina Yuliyani', 'rina6183@gmail.com', 'Sekertaris KPTF/KPTP', '$2y$10$cyd.PRQ0xuPxPtRJS8JgM.u.Z.oUraZDapVkmENxwFdMP.4HAA/nG', 'uwvbe8AFL4IHbtUOXWX5GdPH4PqJHiaip3ScYPsNnXaxCtNHy9wYulQRDMki', '2018-08-20 18:41:19', '2018-08-20 20:39:46'),
(4, '19650505 198602 2 001', 'Onih Setiati', 'onih@gmail.com', 'Sekertaris KPTF/KPTP', '$2y$10$aWqj3VlpkohoMnDtxX4jZe.XtPMI5m2G0vw2bEVnx0lYz9qfggQWq', 'tjRT0rCbQame5kmYpTghxWQq2rpPRv415MQFKnraUnG1a4mLLs5mM0QUx2NQ', '2018-08-20 18:41:20', '2018-08-20 18:41:20'),
(5, '19550221 197703 1 001', 'Drs. Duyeh Setiawan, MT.', 'dy@gmail.com', 'Pegawai', '$2y$10$iSF7NxFOKNFgyGnrEwU1m.JULKF.MaJj5lmybwENeIlcgt0pgQ8GK', 'oXnWZwkg3mKmPp9a7io0pRzhZgvV7m0pEWbaPl48sxkQCr2siB8lCDbNC3CV', '2018-08-20 18:41:22', '2018-08-20 18:41:22');

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
  MODIFY `idpinjam` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
