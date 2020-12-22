-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Nov 2020 pada 09.30
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `timestamp` varchar(120) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1hquonrmgm1a0856ib0pan7l9t12631f', '::1', '1591052838', '__ci_last_regenerate|i:1591052542;id_user|s:10:"1600018181";username|s:10:"1600018181";nama|s:16:"M. Arif Rahmawan";level|s:1:"3";'),
('1irv2sn829ban4qvvtp7nga5cnbuofcl', '::1', '1591412703', '__ci_last_regenerate|i:1591412689;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('20f9t4r6890qjdc51qj8i0q81asrsskd', '::1', '1591059220', '__ci_last_regenerate|i:1591059199;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('2ivsojhtdpl38ubrq6gjr1m6ud70dtdf', '::1', '1590998116', '__ci_last_regenerate|i:1590998104;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('2ogte1i0ngc19ofknk6l75nnum36ibh4', '::1', '1590947798', '__ci_last_regenerate|i:1590947607;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('2v0lrc4rduc8c1vc9rj5cj584gvb1b27', '::1', '1558536060', '__ci_last_regenerate|i:1558535908;id_user|s:10:"1600018181";username|s:10:"1600018181";nama|s:16:"M. Arif Rahmawan";level|s:1:"3";'),
('3vfrlgiq8pbkdu6mmoc59iha0q8a7utd', '::1', '1563237582', '__ci_last_regenerate|i:1563237582;'),
('439cmg7mpooan0vld3mmk81sv4nmekco', '::1', '1561473812', '__ci_last_regenerate|i:1561473574;id_user|s:10:"1500018215";username|s:10:"1500018215";nama|s:11:"Mega Antika";level|s:1:"3";'),
('626fnauhn4v21v0f3otforp74lesums3', '::1', '1591074615', '__ci_last_regenerate|i:1591074604;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('648lrdbe57gnl8o19koqf3ttbkvu2umd', '::1', '1563189407', '__ci_last_regenerate|i:1563189237;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('64bb0i7f304rhstuk9sb0cb3kr7gvjet', '::1', '1558534070', '__ci_last_regenerate|i:1558533787;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('6mktkq4u9i2grkitld9h5u9d143o6tav', '::1', '1558532980', '__ci_last_regenerate|i:1558532717;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('6oiro6tovivjuc4mhljq7uibpd95b25e', '::1', '1561475287', '__ci_last_regenerate|i:1561475048;'),
('6v99pri6k9r2u0m971nojs4mjhqscofk', '::1', '1591001843', '__ci_last_regenerate|i:1591001843;'),
('786m8rs2jo79ftmelf3m2l9e41q6jd0q', '::1', '1558531715', '__ci_last_regenerate|i:1558531465;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('7oar4t8vnako2ni5edmfl1mig9jr4ao1', '::1', '1562213657', '__ci_last_regenerate|i:1562213583;'),
('7qupo75reltjivt9r1t5209qsttn05eo', '::1', '1591513183', '__ci_last_regenerate|i:1591513169;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('81t771o6kjs8k5efubu15us25rj46k5v', '::1', '1561474630', '__ci_last_regenerate|i:1561474330;id_user|s:10:"1600018112";username|s:10:"1600018112";nama|s:11:"Kurnia Mega";level|s:1:"3";'),
('8bp3a846iulbfncqm882mfffome66et0', '::1', '1590952411', '__ci_last_regenerate|i:1590952405;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('8hsi00d2o069ques36vbe72g4d2tagpb', '::1', '1558538398', '__ci_last_regenerate|i:1558538367;id_user|s:10:"1500018215";username|s:10:"1500018215";nama|s:11:"Mega Antika";level|s:1:"3";'),
('8o6cj57cevkkgpvdqiih30edghlrl2lb', '::1', '1558531425', '__ci_last_regenerate|i:1558531157;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('9p4kqusbbpauovjtqtn54968ek15lth0', '::1', '1558531890', '__ci_last_regenerate|i:1558531815;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('anhu0fjslo3f96jl1n03ejs276fbqf1i', '::1', '1561472765', '__ci_last_regenerate|i:1561472754;id_user|s:10:"1600018181";username|s:10:"1600018181";nama|s:16:"M. Arif Rahmawan";level|s:1:"3";'),
('ank86cvviub4s6sit8vrcfevdfim4n43', '::1', '1561370308', '__ci_last_regenerate|i:1561370308;'),
('aqk8s33tqh1s7rrk53c6qf7e143tsqd6', '::1', '1561474314', '__ci_last_regenerate|i:1561474025;id_user|s:10:"1500018215";username|s:10:"1500018215";nama|s:11:"Mega Antika";level|s:1:"3";'),
('av7j7e27a042ot7ln78qous4ovbu75mb', '::1', '1558570919', '__ci_last_regenerate|i:1558570629;'),
('cfbp38ns0iigodah048gkhc21u4j1gu5', '::1', '1563186189', '__ci_last_regenerate|i:1563186179;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('djg7bunrsdn117tekssdsnavb7t5rnjv', '::1', '1590989566', '__ci_last_regenerate|i:1590989542;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('e081hrfnjfasmsbt5g8raoo6vsh79jr9', '::1', '1591415592', '__ci_last_regenerate|i:1591415589;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('ekie655g3imkn8pohh3tass9igq4efgu', '::1', '1591529122', '__ci_last_regenerate|i:1591529068;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('f69kp9rdlrep4n03n1l4a42drph5r2it', '::1', '1591052984', '__ci_last_regenerate|i:1591052844;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('f9pd24mkjsf8c4pt2518nv0jjgplvf6t', '::1', '1591414974', '__ci_last_regenerate|i:1591414974;'),
('fr86sfvsdklu4o46sd49b7n7s7h6csc7', '::1', '1590950541', '__ci_last_regenerate|i:1590950313;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('gnevf23bb51cs3r62fvug0vjubklddm6', '::1', '1563236737', '__ci_last_regenerate|i:1563236730;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('h4kocrfknge3mkacmhn5rg48ommvqnvv', '::1', '1591168748', '__ci_last_regenerate|i:1591168701;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('h7kdbatn3b5lmhse54aqvu6mg4rq3ssj', '::1', '1590949889', '__ci_last_regenerate|i:1590949675;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('i9iipapcqec1qev3ps9i08k77d075oec', '::1', '1590960403', '__ci_last_regenerate|i:1590960399;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('ievus7klhqrsb6qjojdm1hqcqkselabd', '::1', '1590948932', '__ci_last_regenerate|i:1590948898;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";success|s:21:"Data Berhasil Dihapus";__ci_vars|a:1:{s:7:"success";s:3:"old";}'),
('iiq9dpsf28v0kqfrukqunldapsrmnheo', '::1', '1590948143', '__ci_last_regenerate|i:1590947968;id_user|s:10:"1600018181";username|s:10:"1600018181";nama|s:16:"M. Arif Rahmawan";level|s:1:"3";'),
('jjvmb18sj3b4fndq0s7456hn5js1h8k9', '::1', '1563177035', '__ci_last_regenerate|i:1563177035;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('l3reiqkm0k7ssedqvi2q3879meceqdj4', '::1', '1561474952', '__ci_last_regenerate|i:1561474664;id_user|s:10:"1600018112";username|s:10:"1600018112";nama|s:11:"Kurnia Mega";level|s:1:"3";'),
('l5bpbkfun4v8saemaie7s1jog2e6vftl', '::1', '1591000904', '__ci_last_regenerate|i:1591000894;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('mgvi6pjvh0ul172hrbr5moidoftfoo9g', '::1', '1563176981', '__ci_last_regenerate|i:1563176728;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('n5e4ip28u36pcgtvic9cnheporqipkh8', '::1', '1558533596', '__ci_last_regenerate|i:1558533423;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('n7mq5dsco7m7u8cr2cl1glj79515qf2g', '::1', '1558532436', '__ci_last_regenerate|i:1558532363;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('nktjupl5gfm2lm0ckos8vvp8c36ms2k8', '::1', '1558534421', '__ci_last_regenerate|i:1558534175;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('o6llbl3uq8llqmtqvbuk6koekjft3vhc', '::1', '1558533321', '__ci_last_regenerate|i:1558533045;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('o74ta4d6f76p79ohejrqqjlau8t9lsbc', '::1', '1590948456', '__ci_last_regenerate|i:1590948424;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('p00ujiui2g6pmth3ldlclndb60a3lhhh', '::1', '1591531976', '__ci_last_regenerate|i:1591531976;'),
('peelmk87vck6r271o36hs0of2jvgss4k', '::1', '1558536260', '__ci_last_regenerate|i:1558536214;'),
('qgkb4kaa2kpmnsp840dubtjjccfs9tu4', '::1', '1558535198', '__ci_last_regenerate|i:1558534936;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('qt265behm55hjv3v3nhgvlhe0redtus7', '::1', '1591417884', '__ci_last_regenerate|i:1591417868;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('rmhuka5b5lmul09145gl907ttpekqq8r', '::1', '1563186528', '__ci_last_regenerate|i:1563186528;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('s3rf57ihhd0rtncelnq33u4l1dq810pd', '::1', '1591000228', '__ci_last_regenerate|i:1591000217;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('s7regjqnsk0tcpkms2vi2uo1vm6f8snm', '::1', '1558535848', '__ci_last_regenerate|i:1558535588;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";success|s:17:"Berhasil disimpan";__ci_vars|a:1:{s:7:"success";s:3:"old";}'),
('sq1q9o33oaakhptegg08ibo8ogn0u1h4', '::1', '1590991302', '__ci_last_regenerate|i:1590991295;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('t4g6e99ak4jmdp9ssaq24q2gai187mbi', '::1', '1558535529', '__ci_last_regenerate|i:1558535240;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('tqt90s39bjsv45ccsvopb0oup7kcdm6u', '::1', '1558534903', '__ci_last_regenerate|i:1558534619;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('u0pvk9fkrbbch9m2tfa0c8ve206kktfn', '::1', '1563235820', '__ci_last_regenerate|i:1563235618;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";'),
('v7dkqnd7dmcgqvk1ombvlrr3ujs57bct', '::1', '1563177735', '__ci_last_regenerate|i:1563177723;id_user|s:5:"admin";username|s:5:"admin";nama|s:13:"Administrator";level|s:1:"1";success|s:21:"Data Berhasil Dihapus";__ci_vars|a:1:{s:7:"success";s:3:"old";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `niy` varchar(15) NOT NULL,
  `id_user` varchar(12) NOT NULL,
  `nidn` varchar(15) NOT NULL,
  `nama_dsn` varchar(100) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `jbtn_fungsional` varchar(20) NOT NULL,
  `bidang_ahli` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`niy`, `id_user`, `nidn`, `nama_dsn`, `gender`, `jbtn_fungsional`, `bidang_ahli`, `email`, `website`, `alamat`) VALUES
('060150841', '060150841', '0524118801', 'Adhi Prahara, S.Si., M.Cs.', 'Laki - Laki', 'Asisten Ahli / III.A', 'Softcomputing and Multimedia', 'adhi.prahara@tif.uad.ac.id', '', ''),
('60160863', '60160863', '0505118901', 'Ahmad Azhari, S.Kom., M.Eng.', 'Laki - Laki', 'Asisten Ahli', 'Sistem Cerdas', 'ahmad.azhari@tif.uad.ac.id', '-', '-'),
('60160952', '60160952', '0523068801', 'Supriyanto, S.T., M.T.', 'Laki - Laki', 'Asisten Ahli', 'Media Digital dan Game', 'supriyanto@tif.uad.ac.id', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `id_user` varchar(12) NOT NULL,
  `nama_mhs` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `prodi` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `id_user`, `nama_mhs`, `gender`, `prodi`, `email`, `alamat`) VALUES
('1600018181', '1600018181', 'M. Arif Rahmawan', 'Laki - Laki', 'Teknik Informatika', 'marifrahmawan@gmail.com', 'Jln. Kesejahteraan No. 44 Kel. Lewirato Kec. Mpunda Kota Bima 84115');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar`
--

CREATE TABLE `seminar` (
  `id` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama_mhs` varchar(55) NOT NULL,
  `judul_skripsi` varchar(400) NOT NULL,
  `docseminar` varchar(255) NOT NULL,
  `pembimbing` varchar(15) DEFAULT NULL,
  `penguji_1` varchar(15) DEFAULT NULL,
  `penguji_2` varchar(15) DEFAULT NULL,
  `tgl_seminar` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seminar`
--

INSERT INTO `seminar` (`id`, `nim`, `nama_mhs`, `judul_skripsi`, `docseminar`, `pembimbing`, `penguji_1`, `penguji_2`, `tgl_seminar`, `status`) VALUES
(1, '1600018181', 'M. Arif Rahmawan', 'AAQQQSASAS asasdasdasd', '1600018181.pdf', '060150841', '060150841', NULL, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `id_user` varchar(12) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text,
  `level` int(10) NOT NULL COMMENT '1=Admin, 2=Dosen, 3=Mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_user`, `username`, `password`, `nama`, `alamat`, `level`) VALUES
(5, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'Jln. Glagahsari UH 4 572 Warungboto, Umbulharjo, D.I. Yogyakarta', 1),
(8, '1600018181', '1600018181', 'decaed8980d352f9d2c3a29c349b8d60a9dbd1bb', 'M. Arif Rahmawan', 'Jln. Kesejahteraan No. 44 Kel. Lewirato Kec. Mpunda Kota Bima 84115', 3),
(9, '060150841', '060150841', 'b7ac9ef3953292bb18490a0684ba6224a1863c1b', 'Adhi Prahara, S.Si., M.Cs.', 'Jogjakarta', 2),
(10, '60160952', '60160952', 'a11c1daa05479d5a0db9263f945a6510bd366ec4', 'Supriyanto, S.T., M.T.', 'Jogjakarta', 2),
(11, '1600018112', '1600018112', '10a108164096f8c4eeb33477761ae3bff4680bf0', 'Kurnia Mega', 'Jalan Raya Pajajaran No. 219, Bantarjati, Bogor Utara, Kota Bogor, Jawa Barat 16153', 3),
(12, '1500018215', '1500018215', '3c2eaad53511b97bf32268e9798e0cfbe2b4aecf', 'Mega Antika', 'Jln. Wijaya Kusuma Blok B6 No.18, Pamoyanan, Bogor Sel., Kota Bogor, Jawa Barat 16136', 3),
(13, '60160863', '60160863', '2d61a8a5aadd1886b733e6fa97e3c6d9a40f17f0', 'Ahmad Azhari, S.Kom., M.Eng.', '-', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`niy`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
