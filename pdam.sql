CREATE TABLE `bagian` (
  `no_bagian` int(11) NOT NULL,
  `Ket_bagian` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`no_bagian`, `Ket_bagian`) VALUES
(1, 'Pelanggan'),
(2, 'Teknis'),
(3, 'Keuangan\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `No_Sambungan` varchar(50) COLLATE utf8_bin NOT NULL,
  `Nama` varchar(50) COLLATE utf8_bin NOT NULL,
  `Alamat` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`No_Sambungan`, `Nama`, `Alamat`) VALUES
('1001000010', 'Adi Suseno', 'L.ARAFURU I IA 10'),
('1001000030', 'Sri Mulyani', 'L.ARAFURU I IA 11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `respon`
--

CREATE TABLE `respon` (
  `no` int(11) NOT NULL,
  `keluhan` int(11) NOT NULL,
  `Balasan` varchar(1000) COLLATE utf8_bin NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `respon`
--

INSERT INTO `respon` (`no`, `keluhan`, `Balasan`, `tanggal`) VALUES
(7, 10, 'iya\r\n', '2019-12-10'),
(8, 11, 'akan segera diperbaiki', '2019-12-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_keluhan`
--

CREATE TABLE `riwayat_keluhan` (
  `No_R` int(11) NOT NULL,
  `Pelanggan` varchar(50) COLLATE utf8_bin NOT NULL,
  `Keluhan` varchar(200) COLLATE utf8_bin NOT NULL,
  `Waktu` date NOT NULL,
  `Bagian_Pengaduan` int(11) NOT NULL,
  `NO_HP` varchar(13) COLLATE utf8_bin NOT NULL,
  `status` varchar(1) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `riwayat_keluhan`
--

INSERT INTO `riwayat_keluhan` (`No_R`, `Pelanggan`, `Keluhan`, `Waktu`, `Bagian_Pengaduan`, `NO_HP`, `status`) VALUES
(10, '1001000010', 'aku kamu', '2019-12-10', 1, '12', '0'),
(11, '1001000030', 'Air sering mati', '2019-12-12', 2, '082132109223', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `NO` int(11) NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `password` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`NO`, `username`, `password`) VALUES
(2, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`no_bagian`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`No_Sambungan`);

--
-- Indexes for table `respon`
--
ALTER TABLE `respon`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `riwayat_keluhan`
--
ALTER TABLE `riwayat_keluhan`
  ADD PRIMARY KEY (`No_R`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `no_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `respon`
--
ALTER TABLE `respon`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `riwayat_keluhan`
--
ALTER TABLE `riwayat_keluhan`
  MODIFY `No_R` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
