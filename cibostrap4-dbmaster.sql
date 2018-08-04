-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Jul 2018 pada 09.13
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cibostrap4-dbmaster`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_agama`
--

CREATE TABLE IF NOT EXISTS `table_agama` (
`agama_id` int(11) NOT NULL,
  `agama` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_agama`
--

INSERT INTO `table_agama` (`agama_id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Budha'),
(4, 'Hindu'),
(5, 'Konguchu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_barang`
--

CREATE TABLE IF NOT EXISTS `table_barang` (
`barang_id` int(11) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `merk` varchar(30) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_barang`
--

INSERT INTO `table_barang` (`barang_id`, `nama_barang`, `merk`, `stok`) VALUES
(1, 'Aqua 1', 'Aqua', 20),
(2, 'Aqua 2', 'Aqua', 10),
(3, 'Aqua 3', 'Aqua', 30),
(4, 'Aqua 4', 'Aqua', 40),
(5, 'Aqua 5', 'Aqua', 5),
(6, 'Wardah 1', 'Wardah', 10),
(7, 'Wardah 2', 'Wardah', 20),
(8, 'Wardah 3', 'Wardah', 10),
(9, 'Wardah 4', 'Wardah', 50),
(10, 'Inez 1', 'Inez', 10),
(11, 'Inez 2', 'Inez', 30),
(12, 'VIva 1', 'Viva', 30),
(13, 'Coca-Cola 1', 'Coca-cola', 10),
(14, 'Coca-Cola 2', 'Coca-cola', 10),
(15, 'Coca-Cola 3', 'Coca-cola', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
`user_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `agama_id` int(1) NOT NULL,
  `no_telephone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`user_id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama_id`, `no_telephone`, `email`, `alamat`) VALUES
(1, 'RIZAKI', 'Bogor', '1995-04-08', 'Laki-laki', 1, '086691173252', 'admin@admin.com', 'Cipayung Muara'),
(2, 'FAHRIZAL', 'Bogor', '1995-04-08', 'Laki-laki', 1, '086691173252', 'rizki@admin.com', 'Cipayung Muara Kab.Bogor'),
(3, 'NIA', 'Bogor', '2010-04-08', 'Perempuan', 1, '086691173323', 'nia@admin.com', 'Cipayung Muara Kab.Bogor'),
(4, 'HASAN', 'Bogor', '1995-06-08', 'Laki-laki', 1, '08762222992', 'hasan@admin.com', 'Citeko Kab Bogor'),
(5, 'AHMAD', 'Bogor', '1995-01-08', 'Laki-laki', 1, '08762222992', 'ahmad@admin.com', 'Ciletuh'),
(6, 'SELAMAT', 'Bogor', '1995-03-01', 'Laki-laki', 1, '08762444992', 'selamat@admin.com', 'Ciawi Kab. Bogor'),
(7, 'RICKO', 'Jakarta', '1995-03-01', 'Laki-laki', 1, '08762444992', 'ricko@admin.com', 'Cibedug Kab. Bogor'),
(8, 'SITI', 'Bogor', '1995-03-01', 'Perempuan', 1, '08762444992', 'siti@admin.com', 'Cipayung Kab. Bogor'),
(9, 'WEN PANG', 'Xuangzi', '1995-03-01', 'Laki-laki', 2, '08762444992', 'wei@admin.com', 'China'),
(10, 'YOSHINO', 'Japan', '1995-05-01', 'Perempuan', 2, '08762444992', 'yoshino@admin.com', 'Tokyo Japan'),
(11, 'Ryan', 'Bogor', '2002-07-30', 'Laki-laki', 1, '911', 'ryan@admin.com', 'Bogor'),
(12, 'KIRANIA', 'Bogor', '2015-05-19', 'Perempuan', 1, '0867822229   ', 'kirania@mail.com                                  ', 'Bogor'),
(13, 'Minami', 'Tokyo', '2018-07-30', 'Perempuan', 1, '089777', 'minami@mail.com', 'Tokyo Japan'),
(14, 'Little Tyni', 'Jakarta', '2018-07-26', 'Laki-laki', 1, '089777', 'tiny@admin.com', 'Bogor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_agama`
--
ALTER TABLE `table_agama`
 ADD PRIMARY KEY (`agama_id`);

--
-- Indexes for table `table_barang`
--
ALTER TABLE `table_barang`
 ADD PRIMARY KEY (`barang_id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_agama`
--
ALTER TABLE `table_agama`
MODIFY `agama_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `table_barang`
--
ALTER TABLE `table_barang`
MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
