-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2018 pada 08.26
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
('SNT.7', 'Unit Pengamanan Mutu');

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
  `tujuan` varchar(68) NOT NULL,
  `penulis` text NOT NULL,
  `pemeriksa1` char(21) DEFAULT NULL,
  `pemeriksa2` char(21) DEFAULT NULL,
  `tgldaftarawal` date NOT NULL,
  `acckakptf` date DEFAULT NULL,
  `accpsubidkapok` date DEFAULT NULL,
  `accpkabid` date DEFAULT NULL,
  `tglterimap1` date NOT NULL,
  `tglterimap2` date DEFAULT NULL,
  `tglaccp1` date DEFAULT NULL,
  `tglaccp2` date DEFAULT NULL,
  `statusp1` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `statusp2` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `ttdkakptf` date DEFAULT NULL,
  `tglselesai` date DEFAULT NULL,
  `arsip` enum('TERSEDIA','TIDAK TERSEDIA') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `idperbaikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pinjamkti`
--
ALTER TABLE `pinjamkti`
  MODIFY `idpinjam` int(11) NOT NULL AUTO_INCREMENT;

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
