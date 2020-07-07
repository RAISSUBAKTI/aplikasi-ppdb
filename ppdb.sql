-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jul 2018 pada 00.33
-- Versi Server: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_daftar`
--

CREATE TABLE `tpdb_daftar` (
  `id` int(13) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `sekolah` varchar(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `orang_tua` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `no_tlp` char(12) NOT NULL,
  `status_siswa` enum('Belum diverifikasi','Diterima','Ditolak') NOT NULL,
  `foto` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpdb_daftar`
--

INSERT INTO `tpdb_daftar` (`id`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `sekolah`, `nisn`, `orang_tua`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kota`, `provinsi`, `no_tlp`, `status_siswa`, `foto`) VALUES
(1, 'Rais', 'Bandung', '1996-06-02', 'Laki - laki', 'SDN 1 Liomadur', '092256858', 'Dedih', 'Liomadur', '04', '17', 'Merkarlaksana', 'Ciparay', 'Bandung', 'Jawa Barat', '085864881997', 'Diterima', '917106.jpg'),
(2, 'Bakti', 'Bandung', '1995-07-02', 'Laki - laki', 'SDN 1 Liomadur', '099898889', 'Ede', 'Liomadur', '03', '17', 'Merkarlaksana', 'Ciparay', 'Bandung', 'Jawa Barat', '085864881989', 'Diterima', '882656.jpg'),
(3, 'Subakti', 'Bandung', '1996-06-02', 'Laki - laki', 'SDN 1 Liomadur', '099898889', 'Steve', 'Liomadur', '02', '17', 'Merkarlaksana', 'Ciparay', 'Bandung', 'Jawa Barat', '085864881986', 'Diterima', '180721.jpg'),
(4, 'Ahmad', 'Bandung', '1993-07-30', 'Laki - laki', 'SDN 1 Liomadur', '012345768', 'Dandi Edaward', 'Liomadur', '01', '04', 'Merkarlaksana', 'Ciparay', 'Bandung', 'Jawa Barat', '082127878593', 'Diterima', '122856.jpg'),
(5, 'Sandi', 'Bandung', '2017-10-23', 'Laki - laki', 'SDN 1 Liomadur', '325686868', 'Daniel', 'Jalan Raya Liomadur', '01', '04', 'Merkarlaksana', 'Ciparay', 'Bandung', 'Jawa Barat', '082127787593', 'Diterima', '846102.jpg'),
(6, 'Raja', 'Bandung', '2007-06-20', 'Laki - laki', 'SDN 1 Liomadur', '3206568', 'Andi', 'Liomadur', '01', '04', 'Merkarlaksana', 'Ciparay', 'Bandung', 'Jawa Barat', '082127787593', 'Diterima', '520103.jpg'),
(7, 'Anjar', 'Bandung', '2017-11-24', 'Laki - laki', 'SDN 1 Liomadur', '322032687', 'Andi Rukandi', 'Liomadur', '01', '04', 'Merkarlaksana', 'Ciparay', 'Bandung','Jawa Barat', '082127787593', 'Diterima', '904027.jpg'),
(8, 'Doni', 'Bandung', '2017-12-20', 'Laki - laki', 'SSDN 1 Liomadur', '320005688', 'Andi Rukandi', 'Liomadur', '01', '04', 'Merkarlaksana', 'Ciparay', 'Bandung', 'Jawa Barat', '087787593', 'Belum diverifikasi', '912442.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_depan`
--

CREATE TABLE `tpdb_depan` (
  `id` int(13) NOT NULL,
  `home` text NOT NULL,
  `profile` text NOT NULL,
  `visi_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpdb_depan`
--

INSERT INTO `tpdb_depan` (`id`, `home`, `profile`, `visi_misi`) VALUES
(1, 'Aplikasi','Penerimaan Siswa Baru',' MTs. Ulul Albab <br/>\r\n<center>"rais_subakti@yahoo.com"....</center>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_kunci`
--

CREATE TABLE `tpdb_kunci` (
  `id` int(11) NOT NULL,
  `level` int(32) NOT NULL,
  `number_key` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpdb_kunci`
--

INSERT INTO `tpdb_kunci` (`id`, `level`, `number_key`) VALUES
(18, 2, 'X1hghgf'),
(19, 2, 'blues');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_kunci_set`
--

CREATE TABLE `tpdb_kunci_set` (
  `id` int(5) NOT NULL,
  `setkunci` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpdb_kunci_set`
--

INSERT INTO `tpdb_kunci_set` (`id`, `setkunci`) VALUES
(1, 'yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_tamu`
--

CREATE TABLE `tpdb_tamu` (
  `id` int(13) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` varchar(18) NOT NULL,
  `ip` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpdb_tamu`
--

INSERT INTO `tpdb_tamu` (`id`, `nama`, `email`, `judul`, `pesan`, `tanggal`, `ip`) VALUES
(2, 'Rais', 'rais_subakti@yahoo.com', 'tak ada judul', 'cek web mts ulul albab', '26-07-18 10:40:14', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_tamu_set`
--

CREATE TABLE `tpdb_tamu_set` (
  `id` int(5) NOT NULL,
  `formaktif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpdb_tamu_set`
--

INSERT INTO `tpdb_tamu_set` (`id`, `formaktif`) VALUES
(1, 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_user`
--

CREATE TABLE `tpdb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL,
  `foto` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tpdb_user`
--

INSERT INTO `tpdb_user` (`id`, `username`, `password`, `nama`, `email`, `level`, `foto`) VALUES
(1, 'blues', '3a61b71b271203a633e10c5b3fa9f258', 'Rais Subakti ', 'rais_subakti@yahoo.com', 1, '100326.jpg');

-- foto user folder root/images
-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_web_fasilitas`
--

CREATE TABLE `tpdb_web_fasilitas` (
  `id` int(10) NOT NULL,
  `nama_fasilitas` varchar(20) NOT NULL,
  `deskripsi_fasilitas` text NOT NULL,
  `gambar` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpdb_web_fasilitas`
--

INSERT INTO `tpdb_web_fasilitas` (`id`, `nama_fasilitas`, `deskripsi_fasilitas`, `gambar`) VALUES
(2, 'Paskibra', 'Ekstrakulikuler Paskibra adalah kegiatan ekstakulikuler rutin yang di lakukan oleh setiap siswa Madrasah Tsanawiyah Ulul Albab.', '884668.jpg'),
(3, 'Marawis', 'Ekstrakulikuler Marawis dan Marching band merupakan salah satu kegiatan eskul yang ada di Madrasah Tsanawiyah Ulul Albab.', '946862.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_web_head`
--

CREATE TABLE `tpdb_web_head` (
  `id` int(2) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpdb_web_head`
--

INSERT INTO `tpdb_web_head` (`id`, `deskripsi`, `foto`) VALUES
(1, 'Madrasah Tsanawiyah Ulul Albab didirikan pada tahun 2012, merupakan lembaga pendidikan yang setingkat dengan Sekolah Menengah Pertama dan berada dalam naungan Yayasan Al - Hidayah', '242366.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_web_tentang`
--

CREATE TABLE `tpdb_web_tentang` (
  `id` int(2) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpdb_web_tentang`
--

INSERT INTO `tpdb_web_tentang` (`id`, `judul`, `tentang`) VALUES
(1, 'MTs. Ulul Albab', 'Madrasah Tsanawiyah Ulul Albab didirikan pada tahun 2012, merupakan lembaga pendidikan yang setingkat dengan Sekolah Menengah Pertama dan berada dalam naungan Yayasan Al - Hidayah. MTs. Ulul Albab beralamat di Kampung Legokkaso Rt.03 Rw.03 Desa Cinanggela Kecamatan Pacet Kabupaten Bandung.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpdb_web_visimisi`
--

CREATE TABLE `tpdb_web_visimisi` (
  `id` int(15) NOT NULL,
  `visi_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpdb_web_visimisi`
--

INSERT INTO `tpdb_web_visimisi` (`id`, `visi_misi`) VALUES
(1, 'Terwujudnya Generasi Muda yang Beriman, Berilmu, Beramal dan Berakhlakul Karimah'),
(2, 'Displin dalam kerja, Mewujudkan manajemen Kekeluargaan, Kerjasama, Pelayanan Prima dengan Meningkatkan Silaturahmi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tpdb_daftar`
--
ALTER TABLE `tpdb_daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpdb_kunci`
--
ALTER TABLE `tpdb_kunci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpdb_kunci_set`
--
ALTER TABLE `tpdb_kunci_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpdb_tamu`
--
ALTER TABLE `tpdb_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpdb_tamu_set`
--
ALTER TABLE `tpdb_tamu_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpdb_user`
--
ALTER TABLE `tpdb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpdb_web_fasilitas`
--
ALTER TABLE `tpdb_web_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpdb_web_visimisi`
--
ALTER TABLE `tpdb_web_visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tpdb_daftar`
--
ALTER TABLE `tpdb_daftar`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tpdb_kunci`
--
ALTER TABLE `tpdb_kunci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tpdb_kunci_set`
--
ALTER TABLE `tpdb_kunci_set`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tpdb_tamu`
--
ALTER TABLE `tpdb_tamu`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tpdb_tamu_set`
--
ALTER TABLE `tpdb_tamu_set`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tpdb_web_fasilitas`
--
ALTER TABLE `tpdb_web_fasilitas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tpdb_web_visimisi`
--
ALTER TABLE `tpdb_web_visimisi`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
