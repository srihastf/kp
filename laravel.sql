-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Agu 2018 pada 03.33
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
('SNT.1', 'Bagian Tata Usaha'),
('SNT.2', 'Bagian Senyawa Bertanda dan Radiometri'),
('SNT.3', 'Bidang Teknofisika'),
('SNT.4', 'Bidang Reaktor'),
('SNT.5', 'Bidang Keselamatan Kerja dan Keteknikan'),
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
  `nomormakalah` int(11) NOT NULL,
  `kodesnt` char(5) NOT NULL,
  `kodekti` char(5) NOT NULL,
  `judulmakalah` varchar(300) NOT NULL,
  `penulis` text NOT NULL,
  `pemeriksa1` char(21) NOT NULL,
  `pemeriksa2` char(21) NOT NULL,
  `file` blob NOT NULL,
  `tgldaftarawal` date NOT NULL,
  `tglaccperiksa` date DEFAULT NULL,
  `tglterimap1` date DEFAULT NULL,
  `tglterimap2` date DEFAULT NULL,
  `tglaccp1` date DEFAULT NULL,
  `tglaccp2` date DEFAULT NULL,
  `statusp1` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `statusp2` enum('ACC','PERBAIKAN') DEFAULT NULL,
  `tglselesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `namapegawai` varchar(30) NOT NULL,
  `golongan` char(5) NOT NULL,
  `pendidikanakhir` enum('SD','SMP','SMA','SMK','STM','D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `status` enum('PNS','CPNS','PEGAWAI KONTRAK') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `namapegawai`, `golongan`, `pendidikanakhir`, `jurusan`, `jabatan`, `status`) VALUES
('19600511 198502 1 001', 'Dr.Jupiter Sitorus Pane. M.Sc.', 'IV/c', 'S3', 'lmu Pengelolaan SDA&Lingkungan', 'Kepala PSTNT', 'PNS'),
('19630810 198603 2 001', 'Dra. Arie Widowati, MT.', 'IV/a', 'S2', 'Rekayasa Nuklir', 'Kepala Subbagian PKDI', 'PNS'),
('19710428 199901 1 001', 'Asep Yana Mulyana, SH.', 'III/d', 'S1', 'Hukum', 'Kepala Bagian Tata Usaha', 'PNS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan`
--

CREATE TABLE `perbaikan` (
  `idperbaikan` int(11) NOT NULL,
  `nomormakalah` char(19) NOT NULL,
  `nopemeriksa` enum('1','2') NOT NULL,
  `pemeriksa` char(21) NOT NULL,
  `tglselesaiperiksa` date NOT NULL,
  `filerevisi` blob NOT NULL,
  `tglselesaiperbaikan` date NOT NULL,
  `fileperbaikan` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '19630810 198603 2 001', 'Dra. Arie Widowati, MT. 	', 'admin@gmail.com', 'Admin', '$2y$10$D/qgPICS05FjNK/6SDrOhOMFzuHpQXBAzU2HCvrVcbir0Few7xySW', 'oDW5ZIjPvc66ix8HBcsiMlRsapxXhSb8hofKp92WKsGCxd2gMF4C52P5HfyT', '2018-08-13 21:40:47', '2018-08-13 21:40:47'),
(2, '19600511 198502 1 001', 'Dr.Jupiter Sitorus Pane. M.Sc.', 'jp@gmail.com', 'Kepala PSTNT', '$2y$10$s4BvkG9QkkyfQs7Cnc/xXu5xHxzFpIM/M7dr4IJHrSRclAOLuvRwm', 'O6IKnlCesiWa8cRTmPGtun7rlMgarxPiUCYAMB0IJVquuuFPsT6xdNlh0mSm', '2018-08-19 03:42:21', '2018-08-19 03:42:21'),
(3, '19710428 199901 1 001', 'Asep Yana Mulyana, SH.', 'asepym@gmail.com', 'Pegawai', '$2y$10$W7aB/0ny7cr4zCcqglvhmePTuN4Gq59bkohoSR39NvgVaT9Uo23HO', 'ODmzS5vrnLogVwq20Kt6UjlxIk6M9MztR1Ye0DDQQI6QqCppRDPzZw6sTchp', '2018-08-20 18:14:18', '2018-08-20 18:14:18');

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
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`idperbaikan`),
  ADD KEY `pemeriksa` (`pemeriksa`);

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
-- AUTO_INCREMENT untuk tabel `makalah`
--
ALTER TABLE `makalah`
  MODIFY `nomormakalah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `idperbaikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `makalah`
--
ALTER TABLE `makalah`
  ADD CONSTRAINT `makalah_ibfk_1` FOREIGN KEY (`kodekti`) REFERENCES `kti` (`kodekti`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `makalah_ibfk_2` FOREIGN KEY (`kodesnt`) REFERENCES `bidangsnt` (`kodesnt`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `makalah_ibfk_3` FOREIGN KEY (`pemeriksa1`) REFERENCES `pegawai` (`nip`),
  ADD CONSTRAINT `makalah_ibfk_4` FOREIGN KEY (`pemeriksa2`) REFERENCES `pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD CONSTRAINT `perbaikan_ibfk_1` FOREIGN KEY (`pemeriksa`) REFERENCES `pegawai` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
