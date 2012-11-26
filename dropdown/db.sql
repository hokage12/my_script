CREATE TABLE IF NOT EXISTS `tbl_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X.1'),
(2, 'X.2'),
(3, 'XI.1 IPS'),
(4, 'X1.2 IPS'),
(5, 'X1.1 IPA');


CREATE TABLE IF NOT EXISTS `tbl_siswa_kelas` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `tbl_siswa_kelas`
--

INSERT INTO `tbl_siswa_kelas` (`id_siswa`, `id_kelas`, `nama_siswa`) VALUES
(1, 1, 'Gede Lumbung'),
(2, 1, 'Made Saklar'),
(3, 1, 'Made Ceblok'),
(4, 1, 'Ketut Ulung'),
(5, 1, 'Nyoman Cenik'),
(6, 1, 'Made Ola Ole'),
(7, 1, 'Wayan Suja'),
(8, 1, 'Kadek Sri Niti'),
(9, 1, 'Nengah Yudi'),
(10, 1, 'Komang Balik'),
(11, 2, 'Ketut Suka'),
(12, 2, 'Iluh Sari'),
(13, 2, 'Iluh Koncreng'),
(14, 2, 'Putu Sri'),
(15, 2, 'Wayan Kodir'),
(16, 3, 'Luh Cablek'),
(17, 3, 'Ketut Lalu'),
(18, 3, 'Komang Sari'),
(19, 4, 'Kadek Suratmaja'),
(20, 4, 'Ketut Suteja'),
(21, 4, 'Nyoman Gelibug'),
(22, 4, 'Kadek Mongkek'),
(23, 5, 'Wayan Gogon'),
(24, 5, 'Kadek Adi'),
(25, 5, 'Ketut Sutarma');
