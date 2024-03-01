-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2023 pada 14.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `judul`, `foto`) VALUES
(24, 'Proklamasi Kemerdekaan', '20231201031705.png'),
(25, 'Unreal Engine', '20231201071641.png'),
(26, 'Unity: Game Engine', '20231202080425.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(16, 'Bahasa Jawa'),
(23, 'Sejarah Indonesia'),
(24, 'Software');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_web` varchar(150) NOT NULL,
  `profil_web` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_wa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_web`, `profil_web`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'CMS CI3', 'Project yang saya buat menggunakan Codeigniter 3', 'https://www.instagram.com/iqbal_._iqbal/?igshid=MmVlMjlkMTBhMg%3D%3D', '-', 'iqbal.sp1406@gmail.com', 'Titang,Tegalgede', '085713841508');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(250) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(45, 'Sekaten', '<p>Sekaten merupakan acara tahunan yang digelar di Kota Solo sejak abad ke-15. Acara ini merupakan tradisi yang dilakukan untuk memperingati Maulid Nabi Muhammad SAW. Acara sekaten berkaitan erat dengan sejarah penyebaran agama Islam yang ada di Pulau Jawa. Wali Sanga adalah tokoh utama dibalik lahirnya tradisi sekaten. Sekaten digunakan oleh Wali Sanga untuk menyebarkan agama islam di Pulau Jawa.&nbsp;</p>\r\n<p>Pada awalnya sekaten merupakan kelanjutan upacara tradisional yang dilaksanakan oleh raja-raja Jawa sejak zaman Majapahit, sebagai bentuk upacara selamatan untuk menjaga keselamatan kerajaan. Namun lambat laun tradisi sekaten telah berubah, dan digunakan sebagai sarana untuk penyebaran agama Islam khususnya di Jawa Tengah. Penyebaran agama islam yang ada di Jawa Tengah ini melalui media kesenian gamelan.&nbsp;</p>\r\n<p>Gamelan dijadikan sebagai media penyebaran agama Islam, dikarenakan pada waktu itu masyarakat Jawa menggemari kesenian Jawa yaitu gamelan. Hingga pada akhirnya peringatan Maulid Nabi Muhammad pada acara sekaten tidak lagi menggunakan rebana, melainkan menggunakan gamelan sebagai pengiring untuk melantunkan shalawat.&nbsp;</p>\r\n<p>Di Solo sendiri biasanya pagelaran sekaten akan diikuti dengan kegiatan pasar malam selama sebulan penuh. Tanda bahwa pagelaran Sekaten dimulai yaitu dengan membunyikan gamelan yang akan diarak ke masjid. Acara ini akan berlangsung pada tanggal 5 hingga 12 Rabiul Awal, yang mana pada tanggal ini gamelan akan ditabuh atau dibunyikan secara terus menerus. Setelah itu acara akan dilanjutkan dengan Tumplak Wajik dan Grebeg Maulud.&nbsp;</p>\r\n<p>Tumplak Wajik akan dilaksanakan selama dua hari sebelum Grebeg Maulud diadakan. Upacara Tumplak Wajik ini berupa kotekan atau permainan lagu dengan kentongan. Hal ini dilakukan dan dijadikan sebagai tanda bahwa pembuatan gunungan telah dimulai. Lagu-lagu yang dimainkan dalam Tumplak Wajik adalah Lompong Keli, Owal Awil, Tudhung Setan dan lain sebagainya.&nbsp;</p>\r\n<p>Rangkaian acara selanjutnya yaitu ada Grebeg Maulud. Acara ini diselenggarakan pada tanggal 12 Rabiul Awal. Grebeg Maulud adalah puncak acara dalam tradisi sekaten. Di dalam Grebeg Maulud terdapat gunungan yang terbuat dari beras ketan, buah-buahan, makanan, dan sayur sayuran. Gunungan ini ditujukan sebagai wujud doa dan selamatan yang melambangkan kesejahteraan kerajaan. Setelah didoakan, gunungan ini akan dibagikan ke masyarakat.&nbsp;</p>\r\n<p>Sekaten masih dijaga dan dilaksanakan hingga sekarang. Walaupun acara sekaten sempat vakum selama dua tahun akibat dari pandemi Covid-19, kini acara sekaten sudah mulai dibuka kembali. Hal ini dilakukan karena Pandemi sudah cukup longgar. Sehingga memungkinkan sekaten untuk diadakan kembali. Untuk kamu yang ingin mengunjungi sekaten bisa langsung datang ke Kota Surakarta untuk menikmati meriahnya pagelaran acara yang berlangsung.</p>', '20231201030326.png', 'Sekaten', '16', '2023-12-01', 'username3'),
(46, 'Sejarah Kemerdekaan Indonesia', '<p style=\"text-align: justify;\"><strong><span style=\"font-size: 14pt;\">Sejarah Proklamasi Kemerdekaan</span></strong><br>Sejarah proklamasi kemerdekaan Indonesia dimulai pada tanggal 17 Agustus 1945, ketika bangsa Indonesia secara resmi menyatakan kemerdekaannya. Meskipun kekalahan Jepang dalam Perang Dunia II menjadi salah satu latar belakang penting yang mempercepat proses tersebut, kemerdekaan Indonesia bukanlah sebuah hadiah yang diberikan langsung oleh Jepang.</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 14pt;\"><strong>Peranan Kekalahan Jepang dalam Perang Dunia II</strong></span><br>Pada tanggal 6 Agustus 1945, sebuah bom atom dijatuhkan di atas kota Hiroshima, Jepang oleh Amerika Serikat, yang menurunkan moral dan semangat tentara Jepang di seluruh dunia. Tiga hari kemudian, pada tanggal 9 Agustus 1945, bom atom kedua dijatuhkan di atas Nagasaki, memaksa Jepang untuk menyerah kepada Amerika Serikat dan sekutunya. Momen ini dimanfaatkan oleh Indonesia untuk memproklamasikan kemerdekaannya.</p>\r\n<p style=\"text-align: justify;\"><strong><span style=\"font-size: 18pt;\">Serangkaian Peristiwa Menuju Proklamasi</span></strong><br><strong><span style=\"font-size: 14pt;\">Pertemuan dengan Marsekal Terauchi</span></strong><br>Pada tanggal 10 Agustus 1945, Soekarno, Hatta, dan Radjiman Wedyodiningrat diterbangkan ke Dalat, Vietnam, untuk bertemu dengan Marsekal Terauchi. Mereka diberitahu bahwa pasukan Jepang berada di ambang kekalahan dan akan memberikan kemerdekaan kepada Indonesia. Pada tanggal 12 Agustus 1945, Marsekal Terauchi mengumumkan kepada Soekarno, Hatta, dan Radjiman bahwa pemerintah Jepang akan segera memberikan kemerdekaan kepada Indonesia dan proklamasi kemerdekaan dapat dilaksanakan dalam beberapa hari.</p>\r\n<p><span style=\"font-size: 14pt;\"><strong>Desakan dan Peristiwa Rengasdengklok</strong></span><br>Dua hari setelah pertemuan di Dalat, saat Soekarno, Hatta, dan Radjiman kembali ke tanah air dari Dalat, Sutan Syahrir mendesak Soekarno untuk segera memproklamasikan kemerdekaan. Namun, Soekarno belum yakin bahwa Jepang benar-benar telah menyerah dan proklamasi kemerdekaan pada saat itu dapat menimbulkan konflik yang besar. Pada tanggal 14 Agustus 1945, Jepang menyerah kepada Sekutu, namun masih memegang kekuasaan di Indonesia.</p>\r\n<p>Pada tanggal 16 Agustus 1945, peristiwa Rengasdengklok terjadi. Para pemuda pejuang, termasuk Chaerul Saleh, Sukarni, Wikana, Shodanco Singgih, dan lainnya membawa Soekarno, Fatmawati, dan Guntur (anak mereka yang baru berusia 9 bulan) ke Rengasdengklok. Tujuannya adalah agar Soekarno dan Hatta tidak terpengaruh oleh Jepang. Di sana, mereka meyakinkan Soekarno bahwa Jepang telah menyerah dan para pejuang Indonesia siap untuk melawan Jepang.</p>\r\n<p><span style=\"font-size: 18pt;\"><strong>Pelaksanaan Proklamasi Kemerdekaan</strong></span><br><span style=\"font-size: 14pt;\"><strong>Penyusunan Teks Proklamasi</strong></span><br>Setelah peristiwa Rengasdengklok, Soekarno dan Hatta kembali ke Jakarta. Mereka bertemu dengan Mayor Jenderal Oosugi Nishimura, Kepala Departemen Urusan Umum pemerintahan militer Jepang. Nishimura mengemukakan bahwa Jepang harus menjaga status quo dan tidak dapat memberi izin untuk mempersiapkan proklamasi kemerdekaan Indonesia seperti yang dijanjikan oleh Marsekal Terauchi di Dalat. Soekarno dan Hatta menyesali keputusan tersebut dan menuju ke rumah Laksamana Maeda untuk melakukan rapat guna menyiapkan teks Proklamasi.</p>\r\n<p>Penyusunan teks Proklamasi dilakukan oleh Soekarno, M. Hatta, Achmad Soebardjo, dan disaksikan oleh Soekardi, B.M. Diah, Sudiro, dan Sayuti Melik. Teks Proklamasi ditulis oleh Ir. Soekarno sendiri. Setelah selesai disepakati, Sayuti Melik menyalin dan mengetik teks tersebut menggunakan mesin tik milik Mayor Dr. Hermanto Kusumobroto (dari kantor perwakilan Angkatan Laut Jerman).</p>\r\n<p style=\"text-align: justify;\"><strong><span style=\"font-size: 14pt;\">Proklamasi Kemerdekaan Indonesia</span></strong><br>Pada pagi hari tanggal 17 Agustus 1945, di kediaman Soekarno di Jalan Pegangsaan Timur 56 (sekarang Jl. Proklamasi No.1), acara Proklamasi dimulai. Pukul 10 pagi, Soekarno membacakan teks Proklamasi dan pidato singkat setelahnya. Kemudian, bendera Merah Putih, yang dijahit oleh Ibu Fatmawati, dikibarkan oleh seorang prajurit PETA bernama Latief Hendraningrat yang dibantu oleh Soepardjo dan seorang pemudi yang membawa nampan berisi bendera Merah Putih. Setelah bendera berkibar, lagu Indonesia Raya dinyanyikan oleh semua hadirin. Bendera pusaka tersebut masih disimpan di Museum Tugu Proklamasi Nasional hingga saat ini.</p>', '20231201031647.png', 'Sejarah-Kemerdekaan-Indonesia', '23', '2023-12-01', 'username1'),
(47, 'Pasca Proklamasi', '<p><strong><span style=\"font-size: 18pt;\">Pasca Proklamasi</span></strong><br><strong><span style=\"font-size: 14pt;\">Pembentukan Undang-Undang Dasar (UUD)</span></strong><br>Pada tanggal 18 Agustus 1945, Panitia Persiapan Kemerdekaan Indonesia (PPKI) mengadakan rapat dan mengesahkan Undang-Undang Dasar sebagai dasar negara Republik Indonesia, yang kemudian dikenal sebagai UUD 45. Dengan demikian, terbentuklah Pemerintahan Negara Kesatuan Indonesia yang berbentuk Republik (NKRI) dengan kedaulatan di tangan rakyat yang dilakukan secara sukarela oleh Majelis Permusyawaratan Rakyat (MPR) yang akan dibentuk kemudian.</p>\r\n<p><span style=\"font-size: 14pt;\"><strong>Pemilihan Presiden dan Wakil Presiden</strong></span><br>Setelah usulan dari Mohammad Hatta dan persetujuan dari PPKI, Soekarno dan Mohammad Hatta terpilih sebagai Presiden dan Wakil Presiden Republik Indonesia yang pertama. Presiden dan Wakil Presiden akan diambil sumpahnya oleh sebuah Komite Nasional.</p>\r\n<p>Dengan demikian, proklamasi kemerdekaan Indonesia pada tanggal 17 Agustus 1945 menjadi tonggak bersejarah dalam perjalanan bangsa Indonesia menuju kemerdekaan. Teks Proklamasi yang disusun dengan cermat dan kesungguhan para pemimpin pada saat itu menjadi landasan dasar pembentukan negara Republik Indonesia. Proklamasi kemerdekaan merupakan momen penting yang harus dihargai dan diingat oleh setiap generasi Indonesia sebagai simbol perjuangan dan semangat kebangsaan.</p>', '20231201031932.png', 'Pasca-Proklamasi', '23', '2023-12-01', 'username1'),
(49, 'Unreal Engine', '<p>Unreal Engine adalah sebuah mesin permainan (game engine) yang dikembangkan oleh Epic Games. Mesin ini dirancang untuk memungkinkan pembuat permainan, pengembang perangkat lunak, atau studio pengembangan permainan untuk membuat permainan video tiga dimensi (3D) yang berkualitas tinggi. Unreal Engine pertama kali diperkenalkan pada tahun 1998 dengan perilisan permainan tembak-menembak first-person \"Unreal,\" dan sejak itu terus berkembang dan menjadi salah satu mesin permainan yang paling populer di industri permainan.</p>\r\n<p>Beberapa fitur utama Unreal Engine meliputi:</p>\r\n<p>Grafis Berkualitas Tinggi: Unreal Engine dikenal dengan kemampuannya menghasilkan grafis berkualitas tinggi dan realistis. Ini mencakup pencahayaan canggih, efek visual, dan dukungan untuk teknologi rendering terkini.<br>Pengembangan Silang Platform: Unreal Engine mendukung pengembangan permainan untuk berbagai platform, termasuk PC, konsol game, ponsel, dan VR (realitas virtual).<br>Blueprints Visual Scripting: Unreal Engine menyediakan alat pemrograman visual bernama Blueprints, yang memungkinkan pengembang membuat logika permainan tanpa menulis kode secara langsung.<br>Komunitas dan Sumber Daya: Unreal Engine memiliki komunitas yang besar dan berbagai sumber daya pembelajaran seperti dokumentasi resmi, tutorial, dan forum diskusi yang mendukung pengembang dalam memahami dan mengoptimalkan penggunaan mesin.<br>Permainan Terkenal: Sejumlah besar permainan terkenal dan sukses dibangun dengan menggunakan Unreal Engine, seperti Fortnite, Gears of War, dan PUBG (PlayerUnknown\'s Battlegrounds).</p>\r\n<p>Unreal Engine digunakan tidak hanya untuk pengembangan permainan, tetapi juga untuk proyek-proyek seperti simulasi, film, visualisasi arsitektur, dan banyak lagi. Mesin ini terus diperbarui secara berkala dengan peningkatan fitur dan penyesuaian untuk memenuhi kebutuhan industri yang terus berkembang.</p>', '20231201072026.png', 'Unreal-Engine', '24', '2023-12-01', 'username3'),
(50, 'Unity', '<p>Software Unity adalah sebuah mesin permainan lintas platform yang dikembangkan oleh Unity Technologies. Unity pertama kali diumumkan dan diluncurkan pada bulan Juni 2005 di Apple Inc. Apple Worldwide Developers Conference sebagai mesin permainan eksklusif Mac OS X. Pada tahun 2018, mesin telah diperpanjang untuk mendukung lebih dari 25 platform, termasuk PC, konsol game, perangkat seluler, dan perangkat virtual reality.</p>\r\n<p>Unity digunakan untuk mengembangkan berbagai jenis game, mulai dari game 3D yang kompleks hingga game 2D yang sederhana. Unity juga dapat digunakan untuk mengembangkan aplikasi non-game, seperti aplikasi simulasi, aplikasi pendidikan, dan aplikasi realitas tertambah.</p>\r\n<p>Fitur-fitur utama Unity meliputi:</p>\r\n<p>Dukungan lintas platform: Unity dapat digunakan untuk mengembangkan game untuk berbagai platform, termasuk PC, konsol game, perangkat seluler, dan perangkat virtual reality.<br>Alat pengembangan yang mudah digunakan: Unity menyediakan berbagai alat pengembangan yang mudah digunakan, sehingga memudahkan pengembang untuk membuat game dengan cepat dan efisien.<br>Komunitas pengembang yang besar: Unity memiliki komunitas pengembang yang besar yang menyediakan berbagai sumber daya, seperti tutorial, forum, dan asset.<br>Unity adalah salah satu mesin permainan yang paling populer di dunia. Unity digunakan oleh pengembang game profesional dan amatir di seluruh dunia.</p>', '20231201150820.png', 'Unity', '24', '2023-12-01', 'username3'),
(51, 'Unreal Engine Game', '<p>nreal Engine telah digunakan untuk mengembangkan banyak permainan populer dan sukses di berbagai platform. Berikut beberapa contoh permainan yang dibuat dengan Unreal Engine:</p>\r\n<p>1. Fortnite: Salah satu permainan battle royale yang sangat populer, dikembangkan dan diterbitkan oleh Epic Games.</p>\r\n<p>2. Gears of War Series: Serangkaian permainan tembak-menembak orang ketiga yang sukses, dikembangkan oleh Epic Games.</p>\r\n<p>3. PUBG (PlayerUnknown\'s Battlegrounds): Permainan battle royale lainnya yang populer, yang menginspirasi genre tersebut, dikembangkan oleh PUBG Corporation.</p>\r\n<p>4. Street Fighter V: Game pertarungan terkenal yang menggunakan Unreal Engine, dikembangkan oleh Capcom.</p>\r\n<p>5. Tekken 7: Seri permainan pertarungan Tekken terbaru, dikembangkan oleh Bandai Namco Entertainment.</p>\r\n<p>6. Kingdom Hearts III: Permainan peran aksi yang dikembangkan oleh Square Enix, bagian dari seri Kingdom Hearts yang terkenal.</p>\r\n<p>7. BioShock Infinite: Permainan tembak-menembak first-person yang penuh narasi, dikembangkan oleh Irrational Games.</p>\r\n<p>8. Hellblade: Senua\'s Sacrifice: Permainan petualangan psikologis yang dikembangkan oleh Ninja Theory.</p>\r\n<p>9. Sea of Thieves: Permainan petualangan multiplayer dalam dunia terbuka yang dikembangkan oleh Rare dan diterbitkan oleh Microsoft Studios.</p>\r\n<p>10. Rocket League: Permainan olahraga yang unik yang menggabungkan sepak bola dengan kendaraan, dikembangkan oleh Psyonix.</p>\r\n<p>Unreal Engine terus digunakan oleh banyak pengembang permainan karena kemampuannya yang kuat dalam menghasilkan grafis berkualitas tinggi dan dukungan untuk berbagai platform. Selain itu, mesin ini juga populer di industri lain seperti film, simulasi, dan visualisasi arsitektur.</p>', '20231201163234.png', 'Unreal-Engine-Game', '24', '2023-12-01', 'username1'),
(53, 'Unity Games', '<p>Unity adalah mesin permainan (game engine) yang populer dan telah digunakan untuk mengembangkan banyak permainan yang beragam. Berikut ini beberapa contoh permainan yang dibuat dengan Unity:</p>\r\n<p>1. Monument Valley: Permainan teka-teki visual yang menarik perhatian dengan desain level yang unik, dikembangkan oleh ustwo games.</p>\r\n<p>2. rossy Road: Permainan lintas jalan sederhana yang menantang, dikembangkan oleh Hipster Whale.</p>\r\n<p>3. Hollow Knight: Game aksi-petualangan dengan elemen metroidvania yang dikembangkan oleh Team Cherry.</p>\r\n<p>4. uper Mario Run: Permainan lari otomatis dengan karakter ikonik Mario dari Nintendo.</p>\r\n<p>5. Oxenfree: Game petualangan interaktif yang menekankan pada narasi, dikembangkan oleh Night School Studio.</p>\r\n<p>6. Pokemon Go: Permainan realitas terbuka berbasis lokasi yang melibatkan penangkapan Pokemon, dikembangkan oleh Niantic.</p>\r\n<p>7. Cuphead: Game platformer yang menampilkan seni visual ala kartun klasik, dikembangkan oleh Studio MDHR.</p>\r\n<p>8. Monet Rush: Permainan endless runner yang dikembangkan oleh Ketchapp.</p>\r\n<p>9. Angry Birds 2: Sekuel dari permainan puzzle populer Angry Birds, dikembangkan oleh Rovio Entertainment.</p>\r\n<p>10. Alto\'s Adventure: Permainan snowboarding yang indah dengan grafis minimalis, dikembangkan oleh Snowman.</p>\r\n<p>11. scape Plan: Permainan teka-teki bergaya film noir, dikembangkan oleh Fun Bits Interactive.</p>\r\n<p>12. Firewatch: Game petualangan naratif yang menekankan pada hubungan antar karakter, dikembangkan oleh Campo Santo.</p>\r\n<p>13. The Room Series: Serangkaian permainan teka-teki yang menarik, dikembangkan oleh Fireproof Games.</p>\r\n<p>14. Shadowrun Returns: Permainan berbasis giliran dengan tema cyberpunk dan fantasi, dikembangkan oleh Harebrained Schemes.</p>\r\n<p>15. Rust: Game survival multiplayer yang menantang, dikembangkan oleh Facepunch Studios.</p>\r\n<p>Unity digunakan oleh banyak pengembang game indie dan studio besar karena fleksibilitasnya, kemampuan lintas platform, dan dukungan komunitas yang besar. Mesin ini tidak hanya digunakan untuk pengembangan permainan, tetapi juga untuk proyek-proyek dalam industri simulasi, realitas virtual, dan augmented reality.</p>', '20231201163654.png', 'Unity-Games', '24', '2023-12-01', 'username2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(18, 'username1', 'Xiao', '7c6a180b36896a0a8c02787eeafb0e4c', 'Kontributor'),
(21, 'username2', 'Ganyu', '6cb75f652a9b52798eb6cf2201057c73', 'Admin'),
(22, 'username3', 'Hu Tao', '819b0643d6b89dc9b579fdfc9094f28e', 'Kontributor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
