-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2023 pada 02.35
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` int(11) NOT NULL,
  `nama_guru` char(50) NOT NULL,
  `wali_kelas` enum('1','2','3','4','5','6') NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `wali_kelas`, `jenis_kelamin`) VALUES
(1111, 'Muhtarom', '3', 'Laki-Laki'),
(2222, 'Winarti', '3', 'Perempuan'),
(3333, 'Novemy', '3', 'Perempuan'),
(4444, 'Intan', '3', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` varchar(11) NOT NULL,
  `nama_mapel` enum('Pendidikan Agama','Bahasa Indonesia','Bahasa Inggris','IPA','IPS','Matematika','PKN','Seni Budaya','Penjasorkes') NOT NULL,
  `nip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `nama_mapel`, `nip`) VALUES
('M10X3', 'Pendidikan Agama', 1111),
('M20X3', 'Bahasa Inggris', 2222),
('M30X3', 'Seni Budaya', 3333),
('M40X3', 'Bahasa Indonesia', 4444);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` int(11) DEFAULT NULL,
  `kd_mapel` varchar(11) DEFAULT NULL,
  `nilai_p` int(3) NOT NULL,
  `nilai_k` int(3) NOT NULL,
  `uts` int(3) NOT NULL,
  `uas` int(3) NOT NULL,
  `semester` enum('Ganjil','Genap') NOT NULL,
  `tapel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `kd_mapel`, `nilai_p`, `nilai_k`, `uts`, `uas`, `semester`, `tapel`) VALUES
(6, 1001, 'M10X3', 85, 90, 85, 85, 'Ganjil', '2022'),
(11, 1001, 'M30X3', 85, 90, 85, 85, 'Ganjil', '2022'),
(15, 1001, 'M20X3', 85, 90, 85, 85, 'Ganjil', '2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama_siswa` char(50) NOT NULL,
  `kelas` enum('1','2','3','4','5','6') NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` char(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `kelas`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`) VALUES
(1001, 'Stefanus Chandra', '3', 'Laki-Laki', 'Sukoharjo', '2003-02-15', 'Pabelan, Kartasura'),
(1002, 'Ray Valentino', '2', 'Laki-Laki', 'Sukoharjo', '2003-02-13', 'Kartasura, Pabelan'),
(1003, 'Abdullah Aji', '3', 'Laki-Laki', 'Sukoharjo', '2002-01-03', 'Begajah, Sukoharjo'),
(1004, 'Tarriq Abbil', '3', 'Laki-Laki', 'Sragen', '2003-05-05', 'Colomadu, Karanganyar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `kd_mapel` (`kd_mapel`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `mapel` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kd_mapel`) REFERENCES `mapel` (`kd_mapel`),
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
