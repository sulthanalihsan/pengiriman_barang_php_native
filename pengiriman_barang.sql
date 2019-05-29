-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Jan 2019 pada 10.00
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengiriman_barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_adm`, `nama_adm`, `username`, `password`) VALUES
(1, 'Eka Anggraini', 'Eka001', '349ec193cad423cd32746fb3e2e4ed21'),
(2, 'Muhammad Halik', 'Halik002', 'a37881a46f76b7ae9328a810ee63aa7d'),
(3, 'Muhammad Iqbal', 'Iqbal003', 'df2629fe01a4cc6fdaa5eda55bc03c9d'),
(4, 'Muhammad Rifani', 'Rifani004', '5e95be8e4744cba0960fb1aa97c46298'),
(5, 'Muhammad Sulthan Al Ihsan', 'Sulthan005', '9748aa0985d8d16d8a17b9a31697793d'),
(6, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_adm` int(11) DEFAULT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_berita` text COLLATE latin1_general_ci,
  `gambar` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_adm`, `id_kategori`, `judul`, `isi_berita`, `gambar`, `tanggal`) VALUES
(1, 1, 4, 'Prancis akan menghadapi Kroasia di final Piala Dunia 2018', 'Pertandingan ini digelar di Luzhniki Stadium, Moskow pada Minggu (14/07) malam WIB. Prancis memasuki partai final jelas dengan status favorit. Sebab, selain punya banyak pemain bertalenta, mereka sudah punya pengalaman bermain di final. Bagi Prancis, ini adalah ketiga kalinya mereka tampil di final Piala Dunia. Mereka sebelumnya lolos ke partai puncak turnamen empat tahunan itu pada 1998 dan 2006. Bahkan mereka menjadi juara pada 1998. Meski kekuatan Kroasia tidak pantas untuk dipandang sebelah mata namun kubu Prancis dipercaya bisa lebih unggul. Berikut ini tiga alasan Prancis bisa mengalahkan Kroasia di final Piala Dunia 2018 seperti dilansir Sportskeeda. Meski Prancis punya penyerang yang luar biasa, pertahanan mereka juga menjadi faktor kunci dalam mencapai final Piala Dunia 2018. Solidnya pertahanan mereka merupakan kejutan di Piala Dunia dengan Samual Umtiti dan Raphael Varane berada dalam performa terbaik mereka. Saking solidnya lini pertahanan Prancis, hanya Argentina yang mampu mencetak gol melawan mereka dari open play. Sisanya harus bergantung pada adu penalti dan tendangan sudut untuk menembus pertahanan Prancis. Meski Prancis hanya mampu meraih kemenangan tipis, pertahanan mereka terlihat meyakinkan dan mampu mengatasi tekanan. Setelah penampilan luar biasa di babak grup, Kroasia diharapkan bisa melewati tantangan dari Denmark dan Rusia dengan mudah. Tapi mereka dipaksa untuk bekerja keras dan bahkan sampai adu penalti. Meski tidak sampai adu penalti melawan Inggris, Kroasia masih harus bermain di extra time selama 30 menit untuk memenangkan pertandingan. Secara keseluruhan, Kroasia sudah memainkan 90 menit lebih banyak daripada Prancis selama fase knock-out di Piala Dunia, yang tidak termasuk penalti. Selain itu, Kroasia memainkan pertandingan semifinal melawan Inggris sehari setelah Perancis berhadapan dengan Belgia. Jadi, Kroasia punya waktu yang lebih sedikit untuk beristirahat sebelum pertandingan besar melawan Prancis. Di sisi lain, Perancis adalah tim yang lebih muda dan lebih energik dibandingkan dengan Kroasia. Mereka punya satu hari lebih untuk beristirahat dibandingkan dengan Kroasia, dan mereka akan lebih segar saat memasuki final Piala Dunia. Dan inilah, mungkin, yang paling menonjol mengapa Prancis akan mengalahkan Kroasia untuk memenangkan Piala Dunia.', 'foto111.jpg', '2018-07-15 16:19:31'),
(2, 3, 4, 'Final', 'Luka Modric termasuk calon peraih Bola Emas (Golden Ball) Piala Dunia 2018. Namun Modric lebih memilih fokus membantu Kroasia menang atas Prancis di Final Piala Dunia 2018, Minggu (15/7/2/2018).\r\n\"Menyenangkan bisa membaca soal Bola Emas. Tetapi saya fokus ke sukses tim,\" ujar Modric seperti dilansir situs resmi FIFA.\r\n\"Sukses individu bukan prioritas saya,\" kata Modric menambahkan.\r\n\r\nLaga Prancis Vs Kroasia akan menutup Piala Dunia 2018 di Stadion Luzhniki, Moskow. Boleh dibilang, ini adalah final yang berada di luar ekspektasi publik.\r\n\r\nKroasia yang berstatus kuda hitam justru mampu melenggang ke final. Padahal, jalan yang mereka lalui cukup terjal.\r\nModric dan kawan-kawan tergabung bersama Argentina di fase grup. Lolos sebagai juara, Kroasia harus menghadapi Denmark dan menang adu penalti.\r\nKroasia kembali harus melakoni adu penalti untuk menang atas Rusia di perempat final. Bertemu Inggris di semifinal, Kroasia menang 2-1 di masa perpanjangan waktu.\r\n\r\nKeberhasilan ini berdampak kepada karier Modric. Maklum, dia lah kapten sekaligus jenderal lini tengah Kroasia.\r\n\r\nBanyak yang menganggap, Modric berhasil menjawab keraguan yang dialamatkan kepada dirinya. Saat masih anak-anak, Modric diragukan sukses karena pendek dan terlalu lemah.\r\n\r\nNamun hal itu ternyata melecut Modric. \"Saya tak pernah meragukan diri saya. Saya selalu tahu, saya bisa sampai ke sini dan mencapai level yang sekarang. Saya tahu, Anda tak harus tinggi untuk bisa bermain bola,\" kata Modric mengakhiri.\r\n', 'foto222.jpg', '2018-07-15 16:26:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fotoberanda`
--

CREATE TABLE `fotoberanda` (
  `id_fotoberanda` int(11) NOT NULL,
  `fotonya` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fotoberanda`
--

INSERT INTO `fotoberanda` (`id_fotoberanda`, `fotonya`) VALUES
(15, 'beranda4.jpg'),
(16, 'beranda1.jpg'),
(17, 'beranda3.jpg'),
(18, 'beranda2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
(1, 'Politik', 'Berita-berita Mengenai Politik'),
(2, 'Ekonomi', 'Berita-berita Mengenai Ekonomi'),
(3, 'Teknologi', 'Berita-berita Mengenai Teknologi'),
(4, 'Olahraga', 'Berita-berita Mengenai Olahraga'),
(5, 'Kriminal', 'Berita-berita Mengenai Kriminal'),
(6, 'Kesehatan', 'Berita-berita Mengenai Kesehatan'),
(7, 'Hiburan', 'Berita-berita Mengenai Hiburan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_pengiriman`
--

CREATE TABLE `log_pengiriman` (
  `log_id` int(11) NOT NULL,
  `no_resi` varchar(50) NOT NULL,
  `id_status_lama` int(11) DEFAULT NULL,
  `id_status_baru` int(11) NOT NULL,
  `waktu_perubahan` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_pengiriman`
--

INSERT INTO `log_pengiriman` (`log_id`, `no_resi`, `id_status_lama`, `id_status_baru`, `waktu_perubahan`) VALUES
(1, '180708-100019-85', 0, 1, '2018-07-08 10:00:19'),
(2, '180708-100019-85', 1, 2, '2018-07-08 10:00:57'),
(3, '180708-100019-85', 2, 3, '2018-07-08 10:01:12'),
(4, '180708-100019-85', 3, 4, '2018-07-08 10:01:22'),
(5, '180708-100019-85', 4, 5, '2018-07-08 10:01:36'),
(6, '180711-155536-64', 0, 1, '2018-07-11 15:55:36'),
(7, '180711-155735-87', 0, 1, '2018-07-11 15:57:35'),
(8, '180711-155855-45', 0, 1, '2018-07-11 15:58:55'),
(9, '180711-155855-45', 1, 1, '2018-07-11 08:00:53'),
(10, '180711-160231-5', 0, 1, '2018-07-11 16:02:31'),
(11, '180711-155855-45', 1, 2, '2018-07-11 16:32:52'),
(12, '180715-154926-3', 0, 1, '2018-07-15 15:49:26'),
(13, '180715-154926-3', 1, 2, '2018-07-15 15:54:43'),
(14, '180715-154926-3', 2, 3, '2018-07-15 15:55:08'),
(15, '180715-154926-3', 3, 4, '2018-07-15 15:55:20'),
(16, '180715-154926-3', 4, 5, '2018-07-15 15:55:31'),
(17, '180715-155800-54', 0, 1, '2018-07-15 15:58:00'),
(18, '180715-160319-76', 0, 1, '2018-07-15 16:03:19'),
(19, '180715-160319-76', 1, 3, '2018-07-15 16:07:09'),
(20, '180715-160319-76', 3, 2, '2018-07-15 16:07:29'),
(21, '180715-160916-33', 0, 1, '2018-07-15 16:09:16'),
(22, '180715-160916-33', 1, 2, '2018-07-15 16:09:55'),
(23, '180715-160916-33', 2, 3, '2018-07-15 16:10:29'),
(24, '180715-160916-33', 3, 4, '2018-07-15 16:10:45'),
(25, '180715-160916-33', 4, 5, '2018-07-15 16:10:59'),
(26, '180715-160319-76', 2, 5, '2018-07-15 16:37:50'),
(27, '180715-160319-76', 5, 4, '2018-07-15 16:38:48'),
(28, '180715-165040-72', 0, 1, '2018-07-15 16:50:40'),
(29, '180715-165040-72', 1, 2, '2018-07-15 16:53:43'),
(30, '180715-165040-72', 2, 3, '2018-07-15 16:54:02'),
(31, '180715-165040-72', 3, 4, '2018-07-15 16:54:15'),
(32, '180715-165040-72', 4, 5, '2018-07-15 16:54:31'),
(33, '180716-110304-60', 0, 1, '2018-07-16 11:03:04'),
(34, '180716-110304-60', 1, 2, '2018-07-16 11:08:39'),
(35, '180716-110304-60', 2, 3, '2018-07-16 11:10:00'),
(36, '180716-110304-60', 3, 4, '2018-07-16 11:10:34'),
(37, '180716-110304-60', 4, 5, '2018-07-16 11:10:45'),
(38, '180817-214550-96', 0, 1, '2018-08-17 21:45:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL,
  `static_conyent` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `publish` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` enum('user','admin') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `urutan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `link`, `static_conyent`, `gambar`, `publish`, `status`, `aktif`, `urutan`) VALUES
(1, 'Pelanggan', '?page=pelanggan', 'gdsgsdgsd', 'sdgsdg', 'Y', 'admin', 'Y', 2),
(2, 'Pengiriman', '?page=pengiriman', 'egwegeg', 'egwegw', 'Y', 'admin', 'Y', 3),
(3, 'Pengaduan', '?page=pengaduan', 'dsgvdvsdvs', 'egtjij', 'Y', 'admin', 'Y', 4),
(4, 'Kota', '?page=list_kota', 'dsgvdvsdvs', 'tht', 'Y', 'admin', 'Y', 5),
(5, 'Laporan', '?page=laporan', 'dsgvdvsdvs', 'fwefgwe', 'Y', 'admin', 'Y', 6),
(6, 'Logout', '?page=logout', 'dsgvdvsdvs', 'svc', 'Y', 'admin', 'Y', 9),
(7, 'Berita', '?page=berita', 'dsgvdvsdvs', 'asdas', 'Y', 'admin', 'Y', 1),
(8, 'Akun', '?page=akun', 'dsgvdvsdvs', 'asds', 'Y', 'admin', 'Y', 8),
(9, 'Foto Beranda', '?page=fotoberanda', 'adasd', 'asdasd', 'Y', 'user', 'Y', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `nm_modul` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `publish` enum('Y','N') NOT NULL,
  `status` enum('user','admin') NOT NULL,
  `urutan` int(5) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id_modul`, `nm_modul`, `link`, `publish`, `status`, `urutan`, `aktif`) VALUES
(1, 'BERANDA', '?page=beranda', 'Y', 'user', 1, 'Y'),
(2, 'BERITA', '?page=berita', 'Y', 'user', 2, 'Y'),
(3, 'CEK NO RESI', '?page=ceknoresi', 'Y', 'user', 3, 'Y'),
(4, 'CEK ONGKOS KIRIM', '?page=cekongkoskirim', 'Y', 'user', 4, 'Y'),
(5, 'HUBUNGI CS', '?page=hubungics', 'N', 'user', 5, 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `kota_tujuan` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `kota_tujuan`, `tarif`, `Status`) VALUES
(1, 'Palangkaraya', 100000, 'reguler'),
(2, 'Pontianak', 200000, 'yes'),
(3, 'Kapuas', 100000, ''),
(4, 'Balikpapan', 100000, ''),
(5, 'Gambut', 30000, ''),
(6, 'Barabai', 50000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_plg` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `alamat_lengkap` varchar(200) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_plg`, `nama_lengkap`, `jenis_kelamin`, `ttl`, `nohp`, `email`, `password`, `alamat_lengkap`, `pekerjaan`) VALUES
(1, 'Muhammad Sulthan Al Ihsan', 'laki-laki', '1998-03-13', '08971418545', 'sulthanalihsan5@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Jalan Pekapuran Raya Gang Ahmad Jamiri 2 Kel. Pekapuran Raya Kec. Banjarmasin Timur', NULL),
(2, 'kidjay', 'laki-laki', '0000-00-00', '082255448380', 'ksantuari@gmail.com', 'ac43724f16e9241d990427ab7c8f4228', 'jl.s.parman', NULL),
(3, 'Halik', 'laki-laki', '2018-06-30', '098766564', 'muhammadhalik1110@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Banjarmasin', NULL),
(4, 'sultan', 'laki-laki', '2017-11-07', '086455768775', 'sultan@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 'Banjarbaru', 'Designer'),
(5, '', '', '0000-00-00', '', 'sulthanalihsan5@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pgdn` int(11) NOT NULL,
  `id_plg` int(11) DEFAULT NULL,
  `tgl_pgdn` date DEFAULT NULL,
  `isi_pgdn` varchar(1000) DEFAULT NULL,
  `jawaban_pgdn` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pgdn`, `id_plg`, `tgl_pgdn`, `isi_pgdn`, `jawaban_pgdn`) VALUES
(7, 2, '2018-07-15', 'hay sayang', 'balasi'),
(9, 2, '2018-07-15', 'hiiiiyauya', 'oke'),
(11, 1, '2018-07-16', 'tes', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `no_resi` varchar(50) NOT NULL,
  `tgl_pengiriman` datetime DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `kota_tujuan` varchar(50) DEFAULT NULL,
  `nama_pengirim` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `nama_penerima` varchar(25) DEFAULT NULL,
  `nohp_penerima` varchar(15) DEFAULT NULL,
  `alamat_pengiriman` varchar(200) DEFAULT NULL,
  `kodepos` varchar(5) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`no_resi`, `tgl_pengiriman`, `id_status`, `kota_tujuan`, `nama_pengirim`, `nama_barang`, `nama_penerima`, `nohp_penerima`, `alamat_pengiriman`, `kodepos`, `kecamatan`) VALUES
('180715-160319-76', '2018-07-15 16:03:19', 4, 'Pontianak', 'Muhammad Sulthan Al Ihsan', 'HP Xiomi Redmi Note 4', 'Zulkifli', '084354354654', 'Jalan A.Yani Km 10 Komplek Dwi Darma 2', '77343', 'Dwi Darma 2'),
('180715-160916-33', '2018-07-15 16:09:16', 5, 'Gambut', 'Muhammad Sulthan Al Ihsan', 'HP Xiomi Redmi 5a grey', 'Ronggo', '085654654564', 'Jalan A.Yani KM 12 Komplek pandawa no 05', '77545', 'Gambut'),
('180715-165040-72', '2018-07-15 16:50:40', 5, 'Barabai', 'kidjay', 'Baras 2 kg', 'Galuh', '083642452424', 'jalan 1', '57665', 'Barabai'),
('180716-110304-60', '2018-07-16 11:03:04', 5, 'Balikpapan', 'Muhammad Sulthan Al Ihsan', 'Sepatu', 'Jafar', '098091823', 'Jalan Pekapuran Raya', '78912', 'Balikpapan Tengah'),
('180817-214550-96', '2018-08-17 21:45:50', 1, 'Palangkaraya', 'Muhammad Sulthan Al Ihsan', 'anu', 'anu', '234', 'anu', '234', 'as');

--
-- Trigger `pengiriman`
--
DELIMITER $$
CREATE TRIGGER `before_pengiriman_insert` BEFORE INSERT ON `pengiriman` FOR EACH ROW BEGIN
  insert into log_pengiriman
set 
no_resi = new.no_resi,
id_status_lama = 0,
id_status_baru = new.id_status,
waktu_perubahan = now();
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `log_pengiriman` BEFORE UPDATE ON `pengiriman` FOR EACH ROW begin
insert into log_pengiriman
set 
no_resi = old.no_resi,
id_status_lama = old.id_status,
id_status_baru = new.id_status,
waktu_perubahan = now();
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'Packaging Barang'),
(2, 'Barang Dalam Pengiriman'),
(3, 'Sampai Digudang (kota tujuan)'),
(4, 'Barang Diterima Kurir'),
(5, 'Delivery Order Berhasil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `fotoberanda`
--
ALTER TABLE `fotoberanda`
  ADD PRIMARY KEY (`id_fotoberanda`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `log_pengiriman`
--
ALTER TABLE `log_pengiriman`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_plg`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pgdn`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`no_resi`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fotoberanda`
--
ALTER TABLE `fotoberanda`
  MODIFY `id_fotoberanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `log_pengiriman`
--
ALTER TABLE `log_pengiriman`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_plg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pgdn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
