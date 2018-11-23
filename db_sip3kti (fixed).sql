-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2018 pada 10.18
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
-- Database: `db_sip3kti`
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
('SNT.3', ' Teknofisika'),
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
('KTI-3', 'Makalah Ilmiah'),
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
  `tujuan` varchar(68) NOT NULL,
  `penulis` text NOT NULL,
  `tgldaftarawal` date NOT NULL,
  `accpsubidkapok` date DEFAULT NULL,
  `accpkabid` date DEFAULT NULL,
  `tglkesekertaris` date DEFAULT NULL,
  `tglkekakptf` date DEFAULT NULL,
  `pemeriksa1` char(21) DEFAULT NULL,
  `pemeriksa2` char(21) DEFAULT NULL,
  `acckakptf` date DEFAULT NULL,
  `tglterimap1` date DEFAULT NULL,
  `cttp1` varchar(100) DEFAULT NULL,
  `tglaccp1` date DEFAULT NULL,
  `statusp1` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `tgltrmsekertarisp1` date DEFAULT NULL,
  `tglterimap2` date DEFAULT NULL,
  `cttp2` varchar(100) DEFAULT NULL,
  `tglaccp2` date DEFAULT NULL,
  `statusp2` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `tgltrmsekertarisp2` date DEFAULT NULL,
  `ttdkakptf` date DEFAULT NULL,
  `tglselesai` date DEFAULT NULL,
  `arsip` enum('TERSEDIA','TIDAK TERSEDIA') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makalah`
--

INSERT INTO `makalah` (`nomormakalah`, `kodesnt`, `kodekti`, `subidnkelompok`, `judulmakalah`, `tujuan`, `penulis`, `tgldaftarawal`, `accpsubidkapok`, `accpkabid`, `tglkesekertaris`, `tglkekakptf`, `pemeriksa1`, `pemeriksa2`, `acckakptf`, `tglterimap1`, `cttp1`, `tglaccp1`, `statusp1`, `tgltrmsekertarisp1`, `tglterimap2`, `cttp2`, `tglaccp2`, `statusp2`, `tgltrmsekertarisp2`, `ttdkakptf`, `tglselesai`, `arsip`) VALUES
('012017', 'SNT.2', 'KTI-3', 'Teknologi Proses Radioisotop', 'SYNTHESIS AND CHARACTERIZATION OF MOLYBDENUM PHTALOCYANINE AS TARGET MATERIAL FOR HIGH SPECIFIC ACTIVITY MOLYBDENUM-99 PRODUCTION', 'Indonesian Journal of Chemistry', 'Muhamad Basit Febrian, Duyeh Setiawan, Hilda Hidayati', '2017-01-04', '2017-01-17', '1998-01-17', '2017-01-04', '2017-01-17', '19750822 199403 2 001', '19560705 198211 2 001', '2017-01-17', '2017-01-18', NULL, '2017-09-20', 'ACC', '2017-09-25', '2017-01-18', 'Sedikit Perbaikan', '2017-01-25', 'ACC', '2017-09-27', '2017-09-29', '2017-10-02', 'TERSEDIA'),
('022017', 'SNT.3', 'KTI-1', '-', 'STUDI PERPINDAHAN KALOR KONVEKSI PAKSA NANOFLUIDA AIR-ZrO2 DALAM SUB-BULUH VERTIKAL SEGIEMPAT', 'JSTNI', 'Ketut Kamajaya, Efrizon Umar', '2017-01-20', '2017-01-20', '2017-01-20', NULL, NULL, '19640716 199303 1 002', '19560705 198211 2 001', '2017-01-20', '2017-01-20', NULL, '2017-02-13', 'PERBAIKAN', NULL, '2017-01-20', NULL, '2017-01-26', 'PERBAIKAN', NULL, '2017-02-22', '2017-02-23', 'TERSEDIA'),
('032017', 'SNT.3', 'KTI-4', '-', 'Characteristics of Nanofluids Made from Solgel Synthesized-Al2O3 Nanoparticles Using Citric Acid and PEG as Organic Agent and Bauxite as Raw Material', 'Seminar Nasional QIR 2017', 'Dani Gustaman Syarif, Djoko Hadi Prajitno, Efrizon Umar', '2017-03-02', NULL, NULL, '2017-03-02', '2017-03-02', '19640716 199303 1 002', '19540311 198503 1 002', '2017-03-02', '2017-03-02', NULL, '2017-04-13', 'ACC', NULL, '2017-03-02', NULL, '2017-04-17', 'ACC', NULL, '2017-05-25', '2017-05-25', 'TERSEDIA'),
('042017', 'SNT.2', 'KTI-1', '-', 'EVALUASI BIOLOGIS 99MTc-GLUKOSA-6-FOSFAT PADA TIKUS PUTIH (Rattus norvegicus) STOCK SPRAGUE DAWLEY', 'Jurnal Ganendra', 'Iim Halimah, Hendris Wongso, Isti Daruwati', '2017-03-15', NULL, NULL, NULL, '2017-03-16', '19750822 199403 2 001', '19560705 198211 2 001', '2017-03-16', '2017-03-16', NULL, '2017-03-27', 'PERBAIKAN', NULL, '2017-03-27', NULL, '2017-03-27', 'PERBAIKAN', NULL, '2017-08-28', '2017-08-28', 'TERSEDIA'),
('052017', 'SNT.3', 'KTI-2', '-', 'PERANCANGAN ROUTING PERPIPAAN SISTEM PENDINGIN PRIMER REAKTOR TRIGA 2000 BANDUNG KONVERSI', 'Jurnal/Seminar', 'Henky Poedjo Rahardjo, Veronica Indriati Sri Wardhani', '2017-04-12', NULL, NULL, NULL, '2017-04-12', '19640718 198803 2 001', '19540311 198503 1 002', '2017-04-12', '2017-04-13', 'Koreksi', '2017-04-17', 'ACC', NULL, '2017-04-13', 'Koreksi', NULL, 'ACC', NULL, '2017-04-25', '2017-04-25', 'TERSEDIA'),
('062017', 'SNT.3', 'KTI-2', '-', 'ANALISIS TERMOHIDROLIK TERAS REAKTOR TRIGA BANDUNG BERBAHAN BAKAR TIPE PELAT MENGGUNAKAN PROGRAM CFD', 'Seminar SENTEN 2017', 'Reinaldy Nazar, Sudjatmi KS', '2017-05-02', NULL, NULL, NULL, '2017-05-04', '19640716 199303 1 002', '19540311 198503 1 002', '2017-05-04', '2017-05-04', NULL, '2017-05-16', 'PERBAIKAN', NULL, '2017-05-04', NULL, '2017-05-22', 'PERBAIKAN', NULL, '2017-06-08', '2017-06-20', 'TERSEDIA'),
('072017', 'SNT.3', 'KTI-3', '-', 'Effect of Calcination Temperature During Synthesis of Al2O3 from Local Bauxite on Stability and CHF of Water-Al2O3 nanofluids', 'Jurnal Internasional ACSJ Springer', 'Dani Gustaman Syarif, Djoko Hadi Prajitno, Jupiter Sitorus Pane', '2017-06-07', NULL, NULL, NULL, '2017-06-08', '19560705 198211 2 001', '19640718 198803 2 001', '2017-06-08', '2017-06-09', NULL, '2017-06-16', 'ACC', NULL, '2017-06-09', NULL, '2017-06-14', 'ACC', NULL, '2017-07-11', '2017-07-11', 'TERSEDIA'),
('082017', 'SNT.2', 'KTI-1', '-', 'PENINGKATAN EFISIENSI PEMISAHAN RADIOISOTOP TERBIUM-161 BERBASIS KROMATOGRAFI KOLOM UNTUK APLIKASI TERAPI KANKER', 'JSTNI', 'Azmairit Aziz', '2017-06-08', NULL, NULL, NULL, '2017-06-09', '19790220 200312 2 001', '19591014 198812 1 001', '2017-06-09', '2017-06-09', NULL, '2017-07-10', 'ACC', NULL, '2017-06-09', NULL, '2017-06-16', 'ACC', NULL, '2017-07-11', '2017-07-12', 'TERSEDIA'),
('092017', 'SNT.3', 'KTI-3', '-', 'Neutron flux Distribution at Cip of Plate Type Fuel Element TRIGA 2000 Reactor', 'ICONSTA', 'Epung Saepul Bahrum, Prasetyo Basuki', '2017-06-08', NULL, NULL, NULL, '2017-06-09', '19640716 199303 1 002', '19560705 198211 2 001', '2017-06-09', '2017-06-09', NULL, '2017-07-20', 'ACC', NULL, '2017-06-12', NULL, '2017-07-13', 'ACC', NULL, '2017-07-31', '2017-08-03', 'TERSEDIA'),
('102017', 'SNT.2', 'KTI-4', '-', 'Radioisoiopes 113m ln Separation of Irradiated Sn(TIN) isoiopes Natural Target Based Silica Get column Chromato Sraphy', 'Jurnal/Seminar Internasional 2017', 'Duyeh Setiawan, M Basit Febrian, Yanuar Setiadi', '2017-06-19', NULL, NULL, NULL, '2017-06-19', '19640718 198803 2 001', '19610522 198403 1 002', '2017-06-19', '2017-06-20', NULL, NULL, NULL, NULL, '2017-06-20', NULL, NULL, NULL, NULL, NULL, NULL, 'TIDAK TERSEDIA'),
('112017', 'SNT.2', 'KTI-3', '-', 'Proparation of 99mTc-quercetin as Cancer Radiotracer', 'Seminar ICONSTA', 'Eva Maria Widyasari, Maria Yunita Anastasia Simarmata, Muharam Marzuki, Maula Eka Sriyani, Witri Nuraeni', '2017-06-21', NULL, NULL, NULL, '2017-06-21', '19750822 199403 2 001', '19640716 199303 1 002', '2017-06-21', '2017-06-21', NULL, '2017-07-31', 'ACC', NULL, '2017-06-21', NULL, '2017-07-26', 'ACC', NULL, '2017-07-31', '2017-08-03', 'TERSEDIA'),
('122017', 'SNT.3', 'KTI-2', '-', 'Analisis Distribusi Temperatur Kanal Terpanas Teras Reaktor TRIGA Bandung Berbahan Bakar Pelat dengan Program CFD', 'Seminar', 'Veronica Indriati Sri Wardhani, Henky P Rahardjo, Surip Widodo', '2017-06-10', NULL, NULL, NULL, '2017-07-10', '19540311 198503 1 002', '19591014 198812 1 001', '2017-07-10', '2017-07-13', NULL, '2017-07-24', 'PERBAIKAN', NULL, '2017-07-10', NULL, '2017-07-17', 'PERBAIKAN', NULL, '2017-08-03', '2017-08-03', 'TERSEDIA'),
('132017', 'SNT.2', 'KTI-3', '-', 'Separation of Radioisoiope Lodine -131 from Radiotellurium-131 Base on Dowex-1x8 use as column matrix', 'the 2th international Seminar on Chemistry (1sc)28-29 September 2017', 'Duyeh Setiawan, Iwan Hastiawan, April Aulia Nugraha', '2017-07-18', NULL, NULL, NULL, '2017-07-20', '19640718 198803 2 001', '19640716 199303 1 002', '2017-07-20', '2017-07-20', NULL, NULL, NULL, NULL, '2017-07-20', NULL, '2017-09-13', NULL, NULL, NULL, NULL, 'TIDAK TERSEDIA'),
('142017', 'SNT.2', 'KTI-3', '-', 'Characteristic of Trace Elements in Volcanic Ash of Kelud Eruption in East Java, Indonesia', 'Indonesian Journal of Chemistry', 'Diah Dwiana Lestiani, Revi Apryani, Linda Lestari, Muhayatun, Eko Prabowo, Syukria Kurniawati', '2017-07-28', NULL, NULL, NULL, '2017-07-31', '19670518 199201 2 001', '19560705 198211 2 001', '2017-07-31', '2018-08-03', NULL, '2017-08-15', 'PERBAIKAN', NULL, NULL, NULL, '2017-08-08', 'ACC', NULL, '2017-08-22', '2017-08-22', 'TERSEDIA'),
('152017', 'SNT.3', 'KTI-3', '-', 'Neutrons fluex distribution calculation at piercing beam plunt of plate type fuel element trisa 2000 reactor', 'ICONSTA', 'Epung Saepul B, Prasetyo Basuki, Alan Maulana', '2017-08-28', NULL, NULL, NULL, '2017-08-28', '19560705 198211 2 001', '19640718 198803 2 001', '2017-08-28', '2017-09-15', NULL, NULL, NULL, NULL, '2017-09-15', NULL, NULL, NULL, NULL, '2018-01-09', '2018-01-09', 'TERSEDIA'),
('162017', 'SNT.2', 'KTI-3', '-', 'Karakterisasi Unsur pm2,5 pada periode kebakaran hutan di Indonesia dengan teknik AAN', 'Jurnal Nasional Terakreditasi', 'Indah Kusmartini, Natalia Adventini, Dyah Kumala Sari, Syukria Kurniawati, Diah Dwiana Lestiani, Muhayatun Santoso', '2017-09-12', NULL, NULL, NULL, '2017-09-12', '19670518 199201 2 001', '19560705 198211 2 001', '2017-09-12', '2017-09-12', NULL, '2017-09-26', 'PERBAIKAN', NULL, '2017-09-12', NULL, '2017-09-15', 'ACC', NULL, '2017-11-07', '2018-01-21', 'TERSEDIA'),
('172017', 'SNT.2', 'KTI-3', '-', 'SYNTHESIS OF QUERCETIN LABELED 131I USING CHLORAMINE-T METHOD FOR DIAGNOSIS AND CANCER THERAPY', 'Atom Indonesia', 'Maula Eka Sriyani, Dian Ayu Utami, Mega Dwike Susilo, Eva Maria Widyasari, Muharram Marzuki, Rizky Juwita Sugiharti, Witri Nuraeni', '2017-09-20', NULL, NULL, NULL, '2017-09-20', '19750822 199403 2 001', '19610522 198403 1 002', '2017-09-20', '2017-09-25', NULL, '2017-09-27', 'PERBAIKAN', NULL, '2017-09-25', NULL, '2017-10-06', 'PERBAIKAN', NULL, NULL, '2017-10-30', 'TERSEDIA'),
('182017', 'SNT.2', 'KTI-3', '-', 'Pharmaiokinetics Interaction of Non-Steroid Anti Inflammatory Drugs to qqm Tc-MDP Radiopharma ceuti cals for Bone Imaging and its Biodistributions', 'Atom Indonesia', 'Isa Mahendra, Isti Daruwati, Iim Halimah, Septa R.Pajrin', '2017-11-01', NULL, NULL, NULL, '2017-11-03', '19750822 199403 2 001', '19640716 199303 1 002', '2017-11-03', '2017-11-03', NULL, '2018-04-04', 'PERBAIKAN', NULL, '2017-11-03', NULL, '2017-11-20', 'PERBAIKAN', NULL, '2018-05-24', '2018-06-04', 'TERSEDIA'),
('192017', 'SNT.2', 'KTI-3', '-', 'Heavy Metals Assessment of Street Vended Foods Consumed by Elementary School Children in Bandung City Indonesia', 'Jurnal Internasional/AIBPA', 'Syukria Kurniawati, Diah Dwiana Lestari, Endah Damastuti, Muhayatun Santoso, Rosalind Gibson', '2017-11-01', NULL, NULL, NULL, '2017-11-03', '19670518 199201 2 001', '19610522 198403 1 002', '2017-11-03', '2017-11-03', NULL, '2017-11-22', 'PERBAIKAN', NULL, '2017-11-03', NULL, '2017-11-13', 'PERBAIKAN', NULL, '2017-12-08', '2017-12-19', 'TERSEDIA'),
('202017', 'SNT.2', 'KTI-3', '-', 'Nutritional Assessment of Selenium in Indonesia Tempeh', 'Jurnal Internasional', 'Syukria Kurniawati, Diah Dwiana Lestari, Endah Damastuti, Muhayatun Santoso, Rosalind Gibson', '2017-11-01', NULL, NULL, NULL, '2017-11-03', '19790220 200312 2 001', '19591014 198812 1 001', '2017-11-03', '2017-11-03', NULL, '2017-11-22', NULL, NULL, '2017-11-03', NULL, NULL, NULL, NULL, '2017-12-18', '2017-12-19', 'TERSEDIA'),
('212017', 'SNT.2', 'KTI-2', '-', 'KARAKTERISTIK FISIKOKIMIA SENYAWA BERTANDA 99m Tc-KUERSETIN', 'Seminar Nasional Sains & Teknologi Nuklir 2017', 'Eva Maria Widyasari, Maula Eka Sriyani, Isti Daruwati, Iim Halimah, Witri Nuraeni', '2017-11-06', NULL, NULL, NULL, '2017-11-06', '19750822 199403 2 001', '19560705 198211 2 001', '2017-11-06', '2017-11-07', 'Sedikit Perbaikan', '2017-11-08', 'ACC', NULL, '2017-11-07', 'Sedikit Perbaikan', '2017-11-08', 'ACC', NULL, '2017-11-24', '2017-11-27', 'TERSEDIA'),
('222017', 'SNT.3', 'KTI-2', '-', 'RANCANGAN TANGKI TUNDA REAKTOR TRIGA PELAT BANDUNG', 'Seminar Nasional Sains & Teknologi Nuklir 2017', 'Reinaldi Nazar, Sudjatmi K A, K. Kamajaya, Rian Fitriana', '2017-11-06', NULL, NULL, NULL, '2017-11-06', '19640716 199303 1 002', '19790220 200312 2 001', '2017-11-06', '2017-11-07', NULL, '2017-11-15', 'PERBAIKAN', NULL, '2017-11-07', NULL, '2018-11-08', 'PERBAIKAN', NULL, '2018-01-09', '2018-01-09', 'TERSEDIA'),
('232017', 'SNT.3', 'KTI-2', '-', 'PREDIKSI PENGGUNAAN POMPA EXISTING UNTUK PENDINGIN PRIMER REAKTOR TRIGA PELAT', 'Seminar', 'V. Indriati Sri Wardhani, Henky P Rahardjo, K. Kamajaya, Sudjatmi, Reinaldy Nazar', '2017-11-06', NULL, NULL, NULL, '2017-11-06', '19640716 199303 1 002', '19670518 199201 2 001', '2017-11-06', '2017-11-07', 'dengan perbaikan', '2017-11-15', 'ACC', NULL, '2017-11-07', NULL, '2017-11-13', 'PERBAIKAN', NULL, '2018-02-21', '2018-02-27', 'TERSEDIA'),
('242017', 'SNT.3', 'KTI-2', '-', 'Analisis Tegangan Pipa Sistem Pendingin primer Reaktor Trisa Pelat Bandung', 'Seminar Nasional', 'Veronica Indriati Sri Wardhani', '2017-11-06', NULL, NULL, NULL, '2017-11-06', '19540311 198503 1 002', '19640718 198803 2 001', '2017-11-06', '2017-11-07', NULL, NULL, 'ACC', NULL, '2017-11-07', NULL, '2017-11-11', 'ACC', NULL, '2017-11-08', NULL, 'TIDAK TERSEDIA'),
('252017', 'SNT.2', 'KTI-2', '-', 'Pengembangan Metode Penentuan Pengotor Radiokimia dan Kimia menggunakan Radio-HPLC dalam Proses Pembuatan 99m Tc-DTPA-Ketokonazol', 'Seminar Nasional Sains dan Teknologi Nuklir 2017', 'Maula Eka Sriyani, Rizky Juwita Sugiharti, Eva Maria Widyasari', '2017-11-07', NULL, NULL, NULL, '2017-11-08', '19640718 198803 2 001', '19591014 198812 1 001', '2017-11-08', '2017-11-09', NULL, '2017-11-11', 'PERBAIKAN', NULL, '2017-11-09', NULL, '2017-12-18', 'PERBAIKAN', NULL, '2018-02-05', '2018-02-05', 'TERSEDIA'),
('262017', 'SNT.2', 'KTI-2', '-', 'PENENTUAN PARAMETER PEMISAHAN RADIOISOTOP I61Tb DARI MATRIKS Gd/Tb BERBASIS RESIN PENUKAR ION', 'seminar nasional sains & teknologi nuklir 2017', 'Azmairit Aziz, Ade Suherman', '2017-11-07', NULL, NULL, NULL, '2017-11-08', '19790220 200312 2 001', '19591014 198812 1 001', '2017-11-08', '2017-11-09', NULL, '2017-11-21', 'PERBAIKAN', NULL, '2017-11-09', 'Sedikit Perbaikan', '2017-11-23', 'ACC', NULL, '2017-12-04', '2017-12-08', 'TERSEDIA'),
('272017', 'SNT.3', 'KTI-2', '-', 'Perhitungan Tuas Neutron Pada Beamport Reaktor TRIGA 2000 Menggunakan Perangat Lunak MENPS', 'Seminar Sains dan Teknologi Nuklir 2017', 'Alan Maulana, Epung SB, Prasetyo', '2017-11-08', NULL, NULL, NULL, '2017-11-08', '19610522 198403 1 002', '19790220 200312 2 001', '2017-11-08', '2017-11-09', NULL, '2017-11-13', 'ACC', NULL, '2017-11-09', NULL, '2017-11-21', 'ACC', NULL, '2017-12-04', '2017-12-04', 'TERSEDIA'),
('292017', 'SNT.3', 'KTI-4', '-', 'Forced Convection Heat  Transfer Studies on Al2O3 -Water Nanofluids in a Vertical Hexagonal Sub-Channels', 'ICTST 2017 Bali', 'Ketut Kamajaya, Asiah Hasanah, Jupiter S. Pane', '2017-11-08', NULL, NULL, NULL, '2017-11-09', '19610522 198403 1 002', '19591014 198812 1 001', '2017-11-09', '2017-11-09', NULL, '2017-11-13', 'PERBAIKAN', NULL, '2017-11-09', NULL, '2017-11-17', 'ACC', NULL, '2017-11-22', '2017-11-23', 'TERSEDIA'),
('302017', 'SNT.2', 'KTI-2', '-', 'TRANSFER RADIOSTRONSIUM DARI TANAH KE TANAMAN BAYAM (Amaranthus sp)', 'seminar pstnt-batan,bandung 2017', 'Putu Sukmabuana, Neneng Nur Aisyah, Juni Chussetijowati, Widanda, Poppy Intan Tjahaja', '2017-11-08', NULL, NULL, NULL, '2017-11-09', '19790220 200312 2 001', '19591014 198812 1 001', '2017-11-09', '2017-11-09', NULL, '2017-11-13', 'PERBAIKAN', NULL, '2017-11-09', NULL, '2017-11-09', 'PERBAIKAN', NULL, NULL, '2018-02-27', 'TERSEDIA');

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
  `golongan` char(5) DEFAULT NULL,
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
('19550221 197703 1 001', 'SNT.2', NULL, 'Drs. Duyeh Setiawan, MT.', 'IV/e', 'S2', 'Rekayasa Nuklir', 'Peneliti Ahli Utama', 'PNS'),
('19560705 198211 2 001', 'SNT.3', NULL, 'Ir. Sudjatmi Kustituantini Soedjadi, MT.', 'IV/c', 'S2', 'Rekayasa Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19590901 198203 1 004', 'SNT.4', 'OP', 'Agus Sunarya, ST.', 'IV/a', 'S1', 'Teknik Industri', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19591014 198812 1 001', 'SNT.3', NULL, 'Dr. Ir. Djoko Hadi Prajitno, M. Sc.', 'IV/b', 'S3', 'Rekayasa Pertambangan', 'Peneliti Ahli Madya', 'PNS'),
('19600511 198502 1 001', NULL, NULL, 'Dr.Jupiter Sitorus Pane. M.Sc.', 'IV/c', 'S3', 'lmu Pengelolaan SDA&Lingkungan', 'Kepala PSTNT', 'PNS'),
('19601024 198303 2 001', 'SNT.5', 'KKPR', 'Dra. Rini Heroe Oetami, MT.', 'IV/b', 'S2', 'Rekayasa Nuklir', 'Pengawas Radiasi Ahli Madya', 'PNS'),
('19610125 198302 2 001', 'SNT.1', 'PKDI', 'Rina Yuliyani', 'III/c', 'D2', 'D2 PATN', 'Pranata Humas Mahir', 'PNS'),
('19610212 198103 1 003', 'SNT.3', NULL, 'Tata Kusmayadi', 'III/b', 'STM', 'Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19610221 198203 1 005', 'SNT.4', 'OP', 'Koswara, S.Kom.', 'IV/a', 'S1', 'Komputer', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19610224 198203 1 003', 'SNT.5', 'KETEKNIKAN', 'M. Hadni', 'III/b', 'SMA', 'STM Listrik', 'Pranata Nuklir Mahir', 'PNS'),
('19610305 198303 1 006', 'SNT.1', 'PKDI', 'Dandung Nurhono, S.Sos', 'IV/b', 'S1', 'Humas', 'Arsiparis Ahli Madya', 'PNS'),
('19610522 198403 1 002', 'SNT.3', NULL, 'Dr. Dani Gustaman Syarif, M.Eng.', 'IV/e', 'S3', 'Nuklir Engineering', 'Peneliti Ahli Utama, Kepala KPTF/KPTP', 'PNS'),
('19610626 198302 1 002', 'SNT.1', 'PERLENGKAPAN', 'Yuniardi, A.Md.', 'III.d', 'D3', 'PATN', 'Kepala Subbagian Perlengkapan', 'PNS'),
('19611007 198201 1 002', 'SNT.2', NULL, 'Ahmad Sidik', 'II/a', 'SD', 'SD', 'Teknisi Laboratorium', 'PNS'),
('19611008 198203 2 003', 'SNT.5', 'KETEKNIKAN', 'Foni Latifa', 'III/b', 'SMA', 'STM Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19611021 198103 1 001', 'SNT.1', 'PERLENGKAPAN', 'Edy Priatna', 'III/b', 'SMA', 'IPS', 'Pengemudi', 'PNS'),
('19611022 198203 1 002', 'SNT.7', NULL, 'Suharyono', 'III/b', 'SMA', 'IPS', 'Pranata Nuklir Mahir', 'PNS'),
('19611023 198803 1 002', 'SNT.2', NULL, 'Drs. Putu Sukmabuana, M.Eng.', 'IV/b', 'S2', 'Teknik Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19611030 198603 2 002', 'SNT.1', 'PKDI', 'Sri Karyani', 'III/b', 'SMA', 'IPS', 'Sekretaris Pimpinan', 'PNS'),
('19611121 199101 2 001', NULL, NULL, 'Dra. Veronica Indriati Sri Wardhani, MT.', 'IV/a', 'S2', 'Rekayasa Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19620212 198503 1 008', 'SNT.7', NULL, 'Wahyu Irianto', 'III/d', 'SMA', 'STM Mesin', 'Pranata Nuklir Penyelia', 'PNS'),
('19620213 198302 1 001', 'SNT.5', 'KKPR', 'Eko Rustiadi', 'III/b', 'SMA', 'IPA', 'Teknisi Peralatan', 'PNS'),
('19620306 198201 1 001', 'SNT.7', NULL, 'Usman', 'III/b', 'SMA', 'IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19620314 198903 1 003', 'SNT.5', 'KKPR', 'Drs. Suhulman', 'III/d', 'S1', 'Kimia', 'Pengendali Dampak Lingkungan Muda', 'PNS'),
('19620429 198303 1 003', 'SNT.1', 'PERLENGKAPAN', 'Dadang Fachrudin', 'III/b', 'SMA', 'IPS', 'Teknisi peralatan dan Instalasi', 'PNS'),
('19620514 198302 1 001', 'SNT.1', 'PKDI', 'Raharja, SE.', 'III/d', 'S1', 'Ekonomi', 'Analis Manajemen Kepegawaian', 'PNS'),
('19620701 199003 1 006', 'SNT.3', NULL, 'Drs. Reinaldy Nazar, MT.', 'IV/a', 'S2', 'Rekayasa Nuklir', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19620817 198101 1 001', 'SNT.1', 'PERLENGKAPAN', 'Agus Gunawan', 'II/a', 'SD', 'SD', 'Pramu Taman', 'PNS'),
('19620817 198302 1 001', 'SNT.4', NULL, 'Agus Rakhim, ST.', 'IV/a', 'S1', 'Teknik Informatika', 'Kepala Bidang Reaktor', 'PNS'),
('19621010 198403 1 022', 'SNT.5', 'KETEKNIKAN', 'Sugito', 'III/d', 'SMA', 'STM Elektro', 'Pranata Nuklir Penyelia', 'PNS'),
('19630409 198503 1 001', 'SNT.1', 'PKDI', 'Khasairin, S.Sos.', 'III/d', 'S1', 'Adm. Negara', 'Analis Manajemen Kepegawaian', 'PNS'),
('19630429 198302 2 001', 'SNT.1', 'PKDI', 'Heni', 'III/b', 'SMA', 'SMEA Tata Usaha', 'Pengadministrasi Kepegawaian', 'PNS'),
('19630511 199203 1 005', 'SNT.1', 'KEUANGAN', 'Didin Samsudin', 'III/b', 'SMA', 'IPS', 'Pengelola  Adminstrasi Belanja Pegawai', 'PNS'),
('19630804 199203 1 002', 'SNT.5', NULL, 'Drs. Dadang Supriatna, MT', 'IV/b', 'S2', 'Lingkungan', 'Kepala Bidang K3', 'PNS'),
('19630810 198603 2 001', 'SNT.1', 'PKDI', 'Dra. Arie Widowati, MT.', 'IV/a', 'S2', 'Rekayasa Nuklir', 'Kepala Subbagian PKDI', 'PNS'),
('19630918 198301 1 001', 'SNT.4', 'OP', 'Wawan Handiaga', 'III/d', 'SMA', 'STM El. Industri', 'Pranata Nuklir Penyelia', 'PNS'),
('19631213 198403 2 006', 'SNT.2', NULL, 'Natalia Adventini', 'III/d', 'SMA', 'Analis', 'Pranata Nuklir Penyelia', 'PNS'),
('19640314 199203 1 004', 'SNT.3', NULL, 'Dr. Epung Saepul Bahrum', 'IV/a', 'S3', 'Fisika', 'Peneliti Ahli Muda', 'PNS'),
('19640323 198403 1 002', 'SNT.2', NULL, 'Iswahyudi', 'III/b', 'SMA', 'Snakma Peternakan', 'Pranata Nuklir Mahir', 'PNS'),
('19640610 198601 1 002', 'SNT.3', NULL, 'Yudi Setiadi', 'III/b', 'SMA', 'IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19640614 199103 2 002', 'SNT.5', 'KKPR', 'Dra. Juni Chussetijowati', 'IV/a', 'S1', 'Matematika', 'Pengawas Radiasi Ahli Madya', 'PNS'),
('19640702 198302 2 001', 'SNT.1', 'KEUANGAN', 'Supartini Parmis, SAB', 'III/d', 'S1', 'SAB', 'Kepala Subbagian Keuangan', 'PNS'),
('19640716 199303 1 002', 'SNT.3', NULL, 'Dr. Alan Maulana, MT.', 'IV/b', 'S3', 'Fisika', 'Kepala Bagian Teknofisika', 'PNS'),
('19640718 198803 2 001', 'SNT.2', NULL, 'Prof. Dr. Muhayatun, MT.', 'IV/e', 'S3', 'Matematika dan IPA (Kimia)', 'Peneliti Ahli Utama', 'PNS'),
('19640910 198410 1 001', 'SNT.5', 'KKPR', 'Dadang Basarah, S.Si.', 'III/d', 'S1', 'Kimia', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19641115 199803 1 002', 'SNT.4', 'ABNPD', 'Anton Mediawan, ST', 'III/d', 'S1', 'Teknik Industri', 'Pranata Nuklir Muda', 'PNS'),
('19650113 198603 1 004', 'SNT.3', NULL, 'Muhamad Yamin', 'III/d', 'SMA', 'Analis', 'Pranata Nuklir Penyelia', 'PNS'),
('19650504 199010 1 001', 'SNT.7', NULL, 'Dian Siswa, SAP', 'III/c', 'S1', 'Administrasi Publik', 'Kepala Unit Pengamanan Nuklir', 'PNS'),
('19650505 198602 2 001', 'SNT.1', 'PKDI', 'Onih Setiani', 'III/d', 'SMA', 'IPS', 'Pustakawan Penyedia', 'PNS'),
('19650921 198910 2 001', 'SNT.3', NULL, 'Dr. Enung Nurlia, MT.', 'IV/b', 'S3', 'Rekayasa Pertambangan', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19651228 199803 2 003', 'SNT.1', 'KEUANGAN', 'Komarasari', 'III/b', 'SMA', 'SMEA Tata Buku', 'Bendahara', 'PNS'),
('19660323 199203 2 002', 'SNT.2', NULL, 'Titin Sri Mulyati', 'III/b', 'SMA', 'IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19660421 198603 1 004', 'SNT.3', NULL, 'Abdul Patah', 'III/b', 'D2', 'PATN', 'Pranata Nuklir Mahir', 'PNS'),
('19670518 199201 2 001', 'SNT.2', NULL, 'Dra. Azmairit Azis', 'IV/a', 'S1', 'Kimia', 'Peneliti Ahli Madya', 'PNS'),
('19671014 198902 2 001', 'SNT.1', 'PERLENGKAPAN', 'Ratnasih', 'III/b', 'SMA', 'IPS', 'Pengelola Kendaraan', 'PNS'),
('19680131 198803 1 002', 'SNT.3', NULL, 'Budy Darmono', 'III/c', 'SMA', 'Mesin', 'Teknisi Litkayasa Penyelia', 'PNS'),
('19680505 198803 1 002', 'SNT.2', NULL, 'Ade Suherman', 'III/b', 'SMK', 'Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19701209 199010 1 001', 'SNT.7', NULL, 'Rudi Fitriadi Sutardi, S.ST.', 'III/c', 'D4', 'D IV', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19710301 199203 1 001', 'SNT.5', 'KKPR', 'Muhamad Yuyus', 'III/b', 'SMA', 'STM Teknik Pengerjaan Logam', 'Teknisi Peralatan', 'PNS'),
('19710428 199901 1 001', 'SNT.1', NULL, 'Asep Yana Mulyana, SH.', 'III/d', 'S1', 'Hukum', 'Kepala Bagian Tata Usaha', 'PNS'),
('19740408 200112 1 001', 'SNT.5', 'KKPR', 'Tri Cahyo Laksono, S.ST', 'III/c', 'D4', 'DIV', 'Pengawas Radiasi Ahli Muda', 'PNS'),
('19740601 199403 1 002', 'SNT.7', NULL, 'Arief Faat', 'III/b', 'STM', 'STM Listrik', 'Pranata Pasukan Pengamanan Dalam', 'PNS'),
('19750822 199403 2 001', 'SNT.2', NULL, 'Diah Dwiana Lestiani, M.Eng.', 'IV/a', 'S2', 'Fisika Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19760806 200112 1 001', 'SNT.4', 'OP', 'Teguh Subekti, S.ST.', 'III/b', 'D4', 'Teknofisika Nuklir', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19761012 200212 2 002', 'SNT.4', 'OP', 'Neni Ratnawati, A.Md.', 'III/c', 'D3', 'Teknik Mesin', 'Pranata Nuklir Penyelia', 'PNS'),
('19770220 200212 2 001', 'SNT.4', 'OP', 'Nia Ratnaningsih, A.Md.', 'III/b', 'D3', 'Teknik Mesin', 'Pranata Nuklir Penyelia', 'PNS'),
('19771203 200112 1 003', 'SNT.4', 'OP', 'Abdul Rohim Iso Suwarso, S.ST', 'III/c', 'D4', 'Teknofisika Nuklir', 'Kepala Subbidang OP', 'PNS'),
('19780627 200501 2 008', 'SNT.2', NULL, 'Eva Maria Widyasari, M.Si', 'III/c', 'S2', 'Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19781030 200501 1 006', 'SNT.5', 'KKPR', 'dr. Rudi Gunawan', 'IV/a', 'S1', 'Dokter', 'Dokter Ahli Muda', 'PNS'),
('19790220 200312 2 001', 'SNT.2', NULL, 'Isti Daruwati, M.Si., Apt.', 'IV/a', 'S2', 'Farmasi', 'Kepala Bidang SBR', 'PNS'),
('19791214 200501 1 010', 'SNT.2', NULL, 'Rasito, S.Si.', 'III/c', 'S1', 'Fisika', 'Peneliti Ahli Muda', 'PNS'),
('19800111 200312 2 007', 'SNT.2', NULL, 'Rizky Juwita Sugiharti, M.Pharm', 'III/d', 'S2', 'Farmasi', 'Peneliti Ahli Muda', 'PNS'),
('19800222 200604 2 003', 'SNT.2', NULL, 'Iim Halimah, M.Si.', 'III/b', 'S2', 'Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19801115 200501 2 010', 'SNT.1', 'PERLENGKAPAN', 'Ertis Lita Elianie, A.Md.', 'III/b', 'D3', 'Manajemen Informatika', 'Pengadministrasi BMN', 'PNS'),
('19810326 200801 2 012', 'SNT.2', NULL, 'Syukria Kurniawati, M.Sc', 'III/d', 'S2', 'Kimia', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19810714 200312 1 005', 'SNT.5', 'KETEKNIKAN', 'Setyo Purnomo, S.ST', 'III/c', 'D4', 'Teknofisika Nuklir', 'Kepala Subbidang Keteknikan', 'PNS'),
('19810825 200501 2 009', 'SNT.2', NULL, 'Endah Damastuti, M.Si.', 'III/c', 'S2', 'Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19820315 200801 2 028', 'SNT.6', NULL, 'Yustika Kurniati, MT.', 'III/c', 'S2', 'S2 Teknik Elektro', 'Kepala Unit Jaminan Mutu', 'PNS'),
('19821219 200801 2 018', 'SNT.2', NULL, 'Woro Yatu Niken Syahfitri, S.Si.', 'III/b', 'S1', 'Kimia', 'Peneliti Ahli Pertama', 'PNS'),
('19830103 200501 2 009', 'SNT.2', NULL, 'Maula Eka Sriyani, M.Si.', 'III/d', 'S2', 'Farmasi', 'Peneliti Ahli Muda', 'PNS'),
('19830505 200604 1 004', 'SNT.3', NULL, 'Nanda Nagara, ST.', 'III/c', 'S1', 'Elektro', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19831016 200801 2 013', 'SNT.1', 'KEUANGAN', 'Neneng Nur Aisyah, A.Md.', 'III/a', 'D3', 'Analis Kimia', 'Verikator Keuangan', 'PNS'),
('19831119 200801 1 007', 'SNT.4', 'OP', 'Asep Wahyu Shopiyudin, ST.', 'III/a', 'S1', 'Teknik Elektro', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19840318 200312 1 004', 'SNT.7', NULL, 'Asmunip Prayogo', 'II/d', 'SMK', 'SMK Otomotif', 'Pranata Pasukan Pengamanan Dalam', 'PNS'),
('19840423 200312 1 007', 'SNT.7', NULL, 'Rustamaji', 'II/d', 'SMK', 'SMK Mesin', 'Pranata Pasukan Pengamanan Dalam', 'PNS'),
('19840511 200912 1 003', 'SNT.4', 'OP', 'Rian Fitriana, S.ST.', 'III/b', 'D4', 'Teknik Nuklir', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19840606 200801 1 008', 'SNT.4', 'ABNPD', 'Prasetyo Basuki, M.Si', 'III/c', 'S2', 'Fisika', 'Kepala Subbidang ABNPD', 'PNS'),
('19840718 200604 2 002', 'SNT.1', 'PKDI', 'Mega Ardhya Garini, S.AP', 'III/b', 'S1', 'Administrasi Publik', 'Analis Manajemen Kepegawaian', 'PNS'),
('19850117 200912 1 004', 'SNT.2', NULL, 'Eko Susanto, ST.', 'III/a', 'S1', 'Teknik Lingkungan', 'Peneliti Ahli Pertama', 'PNS'),
('19850118 200901 1 001', 'SNT.5', 'KKPR', 'Rezky Anggakusuma, S.Si', 'III/a', 'S1', 'Kimia', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19850120 200912 2 003', 'SNT.2', NULL, 'Indah Kusmartini, S.Si', 'III/b', 'S1', 'Kimia', 'Peneliti Ahli Pertama', 'PNS'),
('19850720 200801 1 008', 'SNT.5', 'KKPR', 'Haryo Seno, MSi.', 'III/c', 'S2', 'Kimia', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19850814 200801 2 004', 'SNT.5', 'KKPR', 'Afida Ikawati, MT', 'III/c', 'S2', 'Teknik Lingkungan', 'Kepala Subbidang KKPR', 'PNS'),
('19851110 200912 1 001', 'SNT.5', 'KETEKNIKAN', 'Hengki Wibowo, A.Md.', 'III/a', 'D3', 'Teknik Mesin', 'Pranata Nuklir Mahir', 'PNS'),
('19851120 200901 1 003', 'SNT.3', NULL, 'Veri Trisnawan, A.Md.', 'III/a', 'D3', 'Elektronika dan Instrumentasi', 'Teknisi Laboratorium', 'PNS'),
('19860224 200901 1 001', 'SNT.2', NULL, 'Muhamad Basit Febrian , M.Si.', 'III/b', 'S2', 'Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19860303 200901 1 002', 'SNT.5', 'KETEKNIKAN', 'Sigit Nugroho Pamungkas, S.ST.', 'III/c', 'D4', 'D IV Elektromekanik', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19860331 200801 1 006', 'SNT.2', NULL, 'Teguh Hafiz Ambar Wibawa, M.Si.', 'III/a', 'S2', 'Kimia', 'Peneliti Ahli Pertama', 'PNS'),
('19860603 201012 1 002', 'SNT.4', 'OP', 'Yayat Supriyatna, A.Md.', 'III/a', 'D3', 'Teknik Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19860622 200912 1 002', 'SNT.5', 'KKPR', 'Dikdik Sidik Purnama, S.Si', 'III/b', 'S1', 'Kimia', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19860825 200901 1 001', 'SNT.2', NULL, 'Djoko Prakoso Dwi Atmodjo, A.Md.', 'II/d', 'D3', 'elektronika Instrumentasi', 'Teknisi Laboratorium', 'PNS'),
('19861006 200604 1 004', 'SNT.5', 'KETEKNIKAN', 'Dwi Handoko, S.ST', 'III/a', 'D4', 'Elektronika Instrumentasi', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19861031 200501 1 003', 'SNT.5', 'KETEKNIKAN', 'Haryatna', 'III/a', 'SMK', 'SMK Elektro', 'Pranata Nuklir Terampil', 'PNS'),
('19861124 200901 1 002', 'SNT.3', NULL, 'Santiko Tri Sulaksono, M.Si.', 'III/b', 'S1', 'Fisika', 'Peneliti Ahli Pertama', 'PNS'),
('19861210 201012 2 001', 'SNT.4', 'ABNPD', 'Nailatussaadah, M.Si', 'III/c', 'S2', 'S2 Teknik Fisika', 'Pranata Nuklir Muda', 'PNS'),
('19870127 201403 1 004', 'SNT.2', NULL, 'Yanuar Setiadi, S.Si.', 'III/b', 'S1', 'Kimia', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19870318 200912 2 002', 'SNT.2', NULL, 'Witri Nuraeni, A.Md.', 'III/a', 'D3', 'Analis Kimia', 'Teknisi Laboratorium', 'PNS'),
('19880316 201012 1 002', 'SNT.2', NULL, 'Hendris Wongso, S.Si.', 'III/b', 'S1', 'Biologi', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19880707 201503 2 004', 'SNT.5', 'KKPR', 'dr. Prabandhini Wardhani', 'III/c', 'S1', 'Dokter', 'Dokter Ahli Pertama', 'PNS'),
('19881219 200912 2 002', 'SNT.1', 'KEUANGAN', 'Dessy Irmayanti Syukur, A.Md', 'III/a', 'D3', 'Akuntansi', 'Bendahara', 'PNS'),
('19890717 201012 2 001', 'SNT.5', 'KETEKNIKAN', 'Dwi Yuliansari Nurazizah, A.Md', 'III/a', 'D3', 'Teknik Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19891009 201801 2 001', 'SNT.5', 'KKPR', 'drg. Rizky Friskylia', 'III/b', 'S2', 'Dokter Gigi', 'Calon Dokter Gigi Ahli Pertama', 'PNS'),
('19891229 201503 1 006', 'SNT.2', NULL, 'drh. Isa Mahendra', 'III/b', 'S1', 'Dokter Hewan', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19900509 201503 2 007', 'SNT.3', NULL, 'Yofi Ike Pratiwi, A.Md', 'II/c', 'D3', 'Analis Kima', 'Teknisi Laboratorium', 'PNS'),
('19911022 201503 2 006', 'SNT.4', 'OP', 'Fuji Octa Indah Suciati, A.Md.', 'II/d', 'D3', 'Analis Kimia', 'Pranata Nuklir Terampil', 'PNS'),
('19911029 201503 1 004', 'SNT.7', NULL, 'Danang Supriyanto, A.Md.', 'II/c', 'D3', 'Elekronika dan Instrumentasi', 'Pranata Pasukan Pengamanan Dalam', 'PNS'),
('19920408 201503 1 003', 'SNT.7', NULL, 'Aidil Fitri Ubaydillah, A.Md.', 'II/c', 'D3', 'Elektronika', 'Pranata Pasukan Pengamanan Dalam', 'PNS'),
('19920426 201801 1 002', 'SNT.4', 'ABNPD', 'Irsyad, S.ST', 'III/a', 'D4', 'Elektromekanik', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('199212212018011002', 'SNT.2', NULL, 'Ahmad Kurniawan, S.KH.', 'III/b', 'S1', 'Dokter Hewan', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19930321 201503 1 002', 'SNT.5', 'KKPR', 'Harry Mukhrivan, A.Md.Kep', 'II/c', 'D3', 'Keperawatan', 'Teknisi Laboratorium', 'PNS'),
('199306222018011002', 'SNT.3', NULL, 'Jakaria Usman, S.Si', 'III/a', 'S1', 'Fisika', 'Calon Peneliti Ahli  Pertama', 'CPNS'),
('199306282018011002', 'SNT.2', NULL, 'Badra Sanditya Rattyananda, S.T', 'III/a', 'S1', 'Kimia', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19930711 201503 2 002', 'SNT.1', 'PKDI', 'Avi Pradana Yulianti, A.Md', 'II/c', 'D3', 'Teknik Perencanaan Wilayah dan Kota', 'Analis Kepegawaian Terampil', 'PNS'),
('19940331 201801 1 001', 'SNT.4', 'OP', 'Sabilul Falah, S.ST', 'III/a', 'D4', 'Elektromekanik', 'Pranata Nuklir Ahli Pertama', 'CPNS'),
('199501182018012000', 'SNT.2', NULL, 'Endah Rosyidiah, S.Farm.', 'III/a', 'S1', 'Farmasi', 'Calon Pranata Nuklir Pertama', 'CPNS'),
('199502272018021001', 'SNT.2', NULL, 'I Gede Pranawiditia, S.T', 'III/a', 'S1', 'Kimia', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19950422 201801 1 000', 'SNT.4', 'OP', 'Hisyam Zulkarnain, S.ST', 'III/a', 'D4', 'Elektronika Instrumentasi', 'Pranata Nuklir Ahli Pertama', 'CPNS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan`
--

CREATE TABLE `perbaikan` (
  `idperbaikan` int(11) NOT NULL,
  `nomormakalah` char(6) NOT NULL,
  `tglperiksap1` date DEFAULT NULL,
  `tglperiksap2` date DEFAULT NULL,
  `tglperiksakapstnt` date DEFAULT NULL,
  `tglselesaip1` date DEFAULT NULL,
  `tglselesaip2` date DEFAULT NULL,
  `tglselesaikapstnt` date DEFAULT NULL,
  `statusp1` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `statusp2` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `statuskapstnt` enum('ACC','PERBAIKAN') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perbaikan`
--

INSERT INTO `perbaikan` (`idperbaikan`, `nomormakalah`, `tglperiksap1`, `tglperiksap2`, `tglperiksakapstnt`, `tglselesaip1`, `tglselesaip2`, `tglselesaikapstnt`, `statusp1`, `statusp2`, `statuskapstnt`) VALUES
(1, '022017', '2017-02-20', '2017-01-27', NULL, '2017-02-20', '2017-01-27', NULL, 'ACC', 'ACC', NULL),
(2, '042017', '2017-06-09', '2017-04-05', NULL, '2017-06-09', '2017-04-05', NULL, 'ACC', 'ACC', NULL),
(3, '052017', '2017-04-19', '2017-04-20', NULL, '2017-04-19', '2017-04-20', NULL, 'ACC', 'ACC', NULL),
(4, '062017', '2017-06-07', '2017-06-07', '2017-06-20', '2017-06-07', '2017-06-07', '2017-06-20', 'ACC', 'ACC', 'ACC'),
(5, '122017', '2017-07-27', '2017-08-03', NULL, '2017-07-27', '2017-08-03', NULL, 'ACC', 'ACC', NULL),
(6, '142017', '2017-08-22', NULL, NULL, '2017-08-22', NULL, NULL, 'ACC', NULL, NULL),
(7, '152017', '2017-10-02', '2017-12-15', NULL, '2017-10-02', '2017-12-15', NULL, 'ACC', 'ACC', NULL),
(8, '162017', NULL, '2017-11-03', '2017-11-08', NULL, '2017-11-03', '2017-11-16', NULL, 'ACC', 'ACC'),
(9, '172017', '2017-10-11', '2017-10-25', NULL, '2017-10-11', '2017-10-25', NULL, 'ACC', 'ACC', NULL),
(10, '182017', '2018-05-18', '2018-04-04', NULL, '2017-05-18', '2018-04-04', NULL, 'ACC', 'ACC', NULL),
(11, '192017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '202017', '2017-11-28', '2017-06-04', '2017-12-19', '2017-11-28', '2017-06-04', '2018-02-02', 'ACC', 'ACC', 'ACC'),
(13, '222017', '2018-01-05', '2018-01-05', '2018-01-09', '2018-01-05', '2018-01-05', '2018-01-16', 'ACC', 'ACC', 'ACC'),
(14, '232017', NULL, '2018-02-21', NULL, NULL, '2018-02-21', NULL, NULL, 'ACC', NULL),
(15, '252017', '2017-11-11', '2018-02-02', NULL, '2017-11-11', '2018-02-02', NULL, 'ACC', 'ACC', NULL),
(16, '262017', '2017-11-30', NULL, NULL, '2017-11-30', NULL, NULL, 'ACC', NULL, NULL),
(17, '292017', '2017-11-20', '2017-11-17', NULL, '2017-11-20', '2017-11-17', NULL, 'ACC', 'ACC', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjamkti`
--

CREATE TABLE `pinjamkti` (
  `idpinjam` int(11) NOT NULL,
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
(1, '012017', '19790220 200312 2 001', '2018-10-29', 'ACC', '2018-10-29', '2018-10-29'),
(2, '022017', '19790220 200312 2 001', '2018-11-01', 'ACC', '2018-11-05', '2018-11-16');

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
  `id` int(10) UNSIGNED NOT NULL,
  `nip` char(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'admin', 'admin', 'admin@gmail.com', 'Admin', '$2y$10$GlKjnMpcSAIyyVzYT6CDGuqgWotWr7KXrtcOYt1.qvNUIHcp7pQs6', 'KFV4QHst4uAjamNfO1LeJxs8C5uOXkI3VxJU20csRTMThmvcluYCYjkEKTEf', '2018-08-19 02:42:21', '2018-08-19 02:42:21'),
(2, '19600511 198502 1 001', 'Dr.Jupiter Sitorus Pane. M.Sc.', 'jp@gmail.co.id', 'Kepala PSTNT', '$2y$10$H9SFrWhV3WFdhlOq/HrMjOBY0SON85jXNJDswh0kZkviUF5HiCM6a', 'enXCjvAuTsERpKHZh7TYwM50MifvuJmRbu8OoJz2Jm8GDVVVoFvrPfNPGcBj', '2018-10-28 08:26:42', '2018-10-28 08:26:42'),
(3, '19610125 198302 2 001', 'Rina Yuliyani', 'rina6183@gmail.com', 'Sekertaris KPTF/KPTP', '$2y$10$kxVhi2dvDrVVkFXaD5cGSeRF2M3ZlNQp5K6aFGcor1ivO6EZctINu', 'gu3zpiXLm8CDF90De8qh5cZP9gRa0tdkVdOR9EfT0XpDIqK1WVXpnsVn14Fi', '2018-10-28 08:29:07', '2018-10-28 08:29:07'),
(4, '19790220 200312 2 001', 'Isti Daruwati, M.Si., Apt.', 'isti@yahoo.com', 'Pegawai', '$2y$10$Nm9DhIn8Chpdlgdk7YMqP.dkSw4puBeRVi7ywZisxfJby4gGaJpN.', 'c8RSwZNY96WUQFB8BhXQBVpYtUDDgFwAGhwPBa7p6mBZsv73y5gccNA8wDhv', '2018-10-28 08:31:47', '2018-10-28 08:31:47');

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
  ADD KEY `makalah_ibfk_1` (`kodekti`),
  ADD KEY `makalah_ibfk_2` (`kodesnt`),
  ADD KEY `makalah_ibfk_3` (`pemeriksa1`),
  ADD KEY `makalah_ibfk_4` (`pemeriksa2`);

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
  ADD KEY `nomormakalah` (`nomormakalah`);

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
  MODIFY `idperbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pinjamkti`
--
ALTER TABLE `pinjamkti`
  MODIFY `idpinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `makalah`
--
ALTER TABLE `makalah`
  ADD CONSTRAINT `makalah_ibfk_1` FOREIGN KEY (`kodekti`) REFERENCES `kti` (`kodekti`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `makalah_ibfk_2` FOREIGN KEY (`kodesnt`) REFERENCES `bidangsnt` (`kodesnt`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `makalah_ibfk_3` FOREIGN KEY (`pemeriksa1`) REFERENCES `pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `makalah_ibfk_4` FOREIGN KEY (`pemeriksa2`) REFERENCES `pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`bidang`) REFERENCES `bidangsnt` (`kodesnt`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`subbid`) REFERENCES `subbidang` (`kodesubid`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD CONSTRAINT `perbaikan_ibfk_1` FOREIGN KEY (`nomormakalah`) REFERENCES `makalah` (`nomormakalah`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
  ADD CONSTRAINT `subbidang_ibfk_1` FOREIGN KEY (`kodesnt`) REFERENCES `bidangsnt` (`kodesnt`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
