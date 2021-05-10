-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 11:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beraniberencana_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bb_admin`
--

CREATE TABLE `bb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(2) NOT NULL,
  `is_online` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb_admin`
--

INSERT INTO `bb_admin` (`id`, `username`, `password`, `full_name`, `phone_number`, `email`, `registered_date`, `is_active`, `is_online`) VALUES
(1, 'admin@asperio.id', '81dc9bdb52d04dc20036dbd8313ed055', 'Asperio Admin', '0812949202', '', '2021-05-10 07:56:41', 1, 0),
(2, 'ary', '81dc9bdb52d04dc20036dbd8313ed055', 'Ary Windu', '1234', '1234@gmail.com', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bb_article`
--

CREATE TABLE `bb_article` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `author` int(100) NOT NULL,
  `lead_article` varchar(250) NOT NULL,
  `article` text NOT NULL,
  `keywords` text NOT NULL,
  `category` int(4) NOT NULL,
  `img` varchar(100) NOT NULL,
  `is_published` int(2) NOT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb_article`
--

INSERT INTO `bb_article` (`id`, `title`, `slug`, `author`, `lead_article`, `article`, `keywords`, `category`, `img`, `is_published`, `created_date`) VALUES
(53, 'Istilah “Robot” dan sejarahnya', 'istilah-robot-dan-sejarahnya', 1, 'Apa kira-kira reaksi pertama kalian saat kalian mengetahui bahwa konsep robotika sudah ada dari zaman Yunani? Betul, robotika merupakan konsep kuno yang sudah ada dari beberapa abad yang lalu. Cerita legenda kuno Yunani menyebutkan bahwa Cadmus, pene', '<p class=\"mt-4\" xss=removed>Apa kira-kira reaksi pertama kalian saat kalian mengetahui bahwa konsep robotika sudah ada dari zaman Yunani? Betul, robotika merupakan konsep kuno yang sudah ada dari beberapa abad yang lalu. Cerita legenda kuno Yunani menyebutkan bahwa Cadmus, penemu dan raja pertama negeri Thebes, membangun artificial intelligence pertama dari gigi naga yang ia kalahkan dan menjadikannya pasukan kota Thebes. Cerita lain menyebutkan bahwa Pygmalion, figur yang ditemukan pada mitos budaya Yunani, memiliki patung bernama Galatea. Patung tersebut dibuat menggunakan bahan dari gading gajah. Suatu ketika, Pygmalion menemukan bahwa patung Galatea miliknya dapat bergerak. Cerita terakhir dari mitos Yunani yang mendeskrispikan sebuah robot menceritakan bahwa Hephaestus memiliki sekumpulan tenaga pembantu yang merupakan automata terbuat dari emas.</p>\r\n<p xss=removed>Walaupun demikian, cerita dan legenda seputar robotika tidak terwujudkan hingga era industri, dimana pengenalan elemen listrik dan alat elektronik seperti komputer kepada pabrik manufaktur menyebabkan munculnya ide untuk mengimplementasikan otomasi yang dapat membantu suatu tim produksi mencapai efisiensi yang tidak bisa dicapai sebelumnya. Istilah “robot” pun juga tidak ada pada zaman kuno Yunani. Istilah robot pertama kali digunakan pada suatu drama yang menceritakan manusia setengah mesin yang bekerja pada lantai pabrik dan pada akhirnya memberontak. Drama ini ditulis oleh dramawan asal republik ceko, Karl Capek, pada tahun 1921 yang berjudul R.U.R (Rossum’s Universal Robots). Pada drama ini, manusia setengah mesin ini diberikan nama robot karena kata robot diserap dari bahasa ceko yang berarti budak.</p>\r\n<p xss=removed>Istilah “robotics” tidak ditemukan oleh Karl Capek. “Robotics” diusung oleh penulis sains-fiksi asal Russia, Isaac Asimov. Istilah tersebut pertama kali digunakan dalam cerpen yang ia tulis pada tahun 1942 berjudul “Runabout”. Berbeda dengan Capek, Isaac Asimov memiliki pandangan lebih positif mengenai robotika. Menurut beliau, robotika memiliki peran dalam masyarakat sebagai pemberi bantuan manusia dalam melakukan aktivitas yang sulit dilakukan oleh manusia.</p>\r\n<p xss=removed>Di era modern ini, menjawab pertanyaan “apakah itu robot?” bukan merupakan hal yang mudah. Beberapa definisi yang dapat dianut: • “Manipulator yang dapat diprorgram ulang dan memiliki kemampuan untuk menggerakan material, bagian, alat, atau benda special menggunakan gerakan yang sudah terprogram untuk melakukan bermaca hal” -Robot Institute of America, 1979 • Sebuat alat otomasi yang dapat melakukan aktivitas yang umumnya merupakan aktivitas manusia atau mesin dalam bentuk yang menyerupai manusia” -Kamus Webster •“Bidang yang mempelajari mengenai koneksi antara kecerdasan dan gerakan” -Mike Brady, Professor di MIT</p>\r\n<p xss=removed>Robot modern paling pertama dikembangkan oleh George Devol pada sekitar tahun 1950-a. Sebuah penemu dari Louisville, Kentucky, beliau menemukan dan mematenkan sebuah manipulator yang dapat deprogram yang ia namakan “Unimate”. Pada tahun 1960-an, seorang entrepreneur dan insinyur, Joseph Engleberger, mengakuisisi paten miliki Devol dan membuat robot industri yang dipasarkan oleh perusahaannya, Unimation. Oleh karena itu, Engleberger dikenal sebagai “Bapak Robotika”</p>\r\n<p class=\"mt-4\"><img class=\"mt-3 mb-3\" xss=removed src=\"../../../asperio/src/artikel.jpg\" width=\"70%\"></p>\r\n<p xss=removed>Membaca cerita mengenai asal-muasal istilah robotika memberikan saya pandangan yang baru, bahwa diawal abad kehidupan manusia sudah memiliki hasrat untuk mengotomasi banyak aktivitas di sekeliling lingkungannya, seperti Hephaestus dan pembantu automatanya. Implikasi moral mengenai apakah penggunaan robot untuk masyarakat umum merupakan hal yang baik atau tidak merupakan berdebatan yang sudah muncul sejak dahulu kala. Di zaman sekarang, robot dilihat dari dua lensa yang berbeda. Di satu sisi, robot dapat membantu produksi dan efisiensi suatu pabrik manufaktur. Di sisi lain, robotika memiliki implikasi yang sangat menyeramkan bagi masa depan lapangan kerja. Uniknya, Isaac Asimov memprediksi bahwa di era yang akan datang robotika akan memiliki kesadaran sendiri, sehingga ia menulis 3 hukum alam robotika:</p>\r\n<p class=\"font-weight-bold\" xss=removed>Law One: A robot may not injure a human being or, through inaction, allow a human being to come to harm. Law Two: A robot must obey the orders given it by human beings except where such orders would conflict with the First Law. Law Three: A robot must protect its own existence as long as such protection does not conflict with the First or Second Law.</p>', '                                                                Robot, Evolution, Asperio, Infinity                                                        ', 1, '025f2ca879c1a7c695cfabd2fc81a7e2.jpg', 1, '2021-05-10 15:15:16'),
(54, 'Program vokasi dan misi memajukan teknologi Indonesia', 'program-vokasi-dan-misi-memajukan-teknologi-indonesia', 1, 'Pendidikan vokasi, menurut UUPT No.12 tahun 2012 penjelasan pasal 16 ayat 1, adalah pendidikan yang menyiapkan Mahasiswa menjadi profesional dengan keterampilan kerja tinggi. Kurikulum pendidikan vokasi disiapkan bersama dengan Masyarakat profesi dan', '<p class=\"mt-4\" xss=removed>Pendidikan vokasi, menurut UUPT No.12 tahun 2012 penjelasan pasal 16 ayat 1, adalah pendidikan yang menyiapkan Mahasiswa menjadi profesional dengan keterampilan kerja tinggi. Kurikulum pendidikan vokasi disiapkan bersama dengan Masyarakat profesi dan organisasi profesi yang bertanggung jawab atas mutu layanan profesinya agar memenuhi syarat kompetensi profesinya. Pendidikan vokasi sampai saat ini masih dipandang sebelah mata oleh mayoritas masyarakat di Indonesia. Tidak jarang kita mendengar cibiran mengenai SMK, contohnya adalah seperti paham dimana mereka yang merupakan murid SMK adalah murid ‘buangan’ yang tidak diterima di SMA. Stereotip yang sama juga dapat ditemukan pada mereka yang masuk dan menekuni program D-1 hingga D-3. Mereka juga mendapatkan perlakuan dan cibiran yang sama sebagaiaman yang dirasakan oleh anak SMK. Stereotip tersebut memang mengakar kuat di masyarakat, dan kita juga tidak bisa menyalahkan sepenuhnya stereotip yang dibangun oleh populasi umum. Para peserta program didikan vokasi sering kali menjadi kaum yang termarjinalisasi. Dengan kebijakan belajar yang kadang tidak jelas, kurikulum yang tertinggal dari program sarjana, infrastruktur pendidikan yang kalah canggih, membuat para lulusan bingung dalam menentukan arah kontribusi kedepannya. Padahal, program vokasi dibangun dengan menyematkan semangat membangun masyarakat yang siap kerja dan siap diserap kedalam lapangan kerja. Kenyataannya adalah kebalikannya.</p>\r\n<p xss=removed>Badan Pusat Statistik (BPS) menyatakan, lulusan Sekolah Menengah Kejuruan (SMK) mendominasi jumlah pengangguran di Indonesia yang mencapai 6,88 juta orang pada Februari 2020 lalu1. Angka ini cukup mencengangkan, walaupun ada kemungkinan bahwa jumlah pengangguran yang dicatat oleh BPS juga termasuk sejumlah siswa SMK yang telah lulus dan sedang dalam tahp mencari pekerjaan. Hal tersebut tetapi tidak mengdiskon fakta bahwa jumlah pengangguran yang merupakan lulusan SMK lebih banyak daripada jumlah pengangguran yang lulus dari tingkat SD, SMP, dan Kuliah. Indonesia memiliki kelebihan diantara negara­negara anggota G-20 yaitu Bonus Demografi yang dialami pada tahun 2020- 2030. Saat ini Indonesia memiliki 68,6% atau sekitar 181,3 juta orang berada pada usia produktif. Sumber daya manusia melimpah dapat diandal oleh Indonesia sebagai modal untuk bersaing dengan negara adi daya dan negara maju. Apalagi, jika Indonesia dapat memperbaiki sistem pendidikan vokasi sehingga dapat mempersiapkan tenaga kerja yang siap bekerja dan memiliki kemampuan yang di atas tenaga kerja negara lain. Akan tetapi, kenyataannya adalah kita masih jauh dari tenaga kerja yang mahir dalam teknologi terkini seperti mesin otomasi dan IT yang sekarang menjadi pendorong ekonomi dan transformasi lapangan kerja.</p>\r\n<p xss=removed>Lestari Moerdijat, pimpinan dari Media Group, menjelaskan permasalahan yang dihadapi oleh Pendidikan vokasi di Indonesia secara baik pada blog yang ia miliki</p>\r\n<p xss=removed>“Permasalahan lain Penyelenggaraan Pendidikan Vokasi adalah (1) Masih lemahnya komitmen bersama (unsur Tetrahelix) untuk berperan serta secara aktif dalam mendukung pelaksanaan dan penguatan pendidikan vokasi; (2) Kurikulum pendidikan vokasi belum mampu beradaptasi dengan kebutuhan DUDI; (3) Pendidikan Vokasi belum menjadi pilihan utama bagi calon mahasiswa dan masyarakat secara umum; (4) Alokasi anggaran untuk penyelenggaraan pendidikan vokasi masih belum mencukupi, sementara pendidikan vokasi membutuhkan sarana prasarana yang memadai sesuai dengan perkembangan DUDI; (5) SDM tenaga pendidik politeknik umumnya berlatar belakang pendidikan akademis; (6) Minat masyarakat secara umum masih fokus terhadap pendidikan jangka pendek (LPK/Kursus), dan kurang mempertimbangkan jenjang karir di masa depan; (7) Kurangnya dukungan dari pemerintah daerah dalam hal alokasi dana Beasiswa untuk calon mahasiswa kurang mampu namun ingin kuliah di perguruan tinggi vokasi; (8) Terbatasnya dosen vokasi yang memiliki gelar S2, seperti Koki (Chef) yang juga berpendidikan S2 itu sangat susah.”</p>\r\n<p xss=removed>Menteri pendidikan dan kebudayaan Indonesia, Nadiem Anwar Makarim, pernah menyampaikan dalam webinar bincang inspiratif Mendikbud dengan Dirjen Vokasi pada Lokakarya Kepala SMK bahwa ia setuju mengenai analogi “pernikahan” antara dunia industri dan dunia Pendidikan. Menurut nadiem, analogi tersebut menunjukkan komitmen antara vokasi dan industri bersama bersinergi dalam membangun sumber daya manusia Indonesia yang siap kerja. Sistem yang sudah dijalankan sekarang oleh program vokasi memerlukan perubahan yang sangat besar. Perubahan tersebut dimulai dari dikonkretkannya Link and Match antara dunia industri dan dunia edukasi. Sekolah dan kampus vokasi tidak hanya fokus ke penciptaan lulusan yang memiliki ijazah, tetapi menciptakan tenaga kerja yang memiliki standar keterampilan sesuai dengan lapangan kerja yang dituju dengan eksposur kepada industri atau lapangan kerja yang akan dihadapi.<img class=\"mt-3 mb-3\" xss=removed src=\"../../../asperio/src/artikel2.jpg\" width=\"70%\"></p>\r\n<p xss=removed>Membaca cerita mengenai asal-muasal istilah robotika memberikan saya pandangan yang baru, bahwa diawal abad kehidupan manusia sudah memiliki hasrat untuk mengotomasi banyak aktivitas di sekeliling lingkungannya, seperti Hephaestus dan pembantu automatanya. Implikasi moral mengenai apakah penggunaan robot untuk masyarakat umum merupakan hal yang baik atau tidak merupakan berdebatan yang sudah muncul sejak dahulu kala. Di zaman sekarang, robot dilihat dari dua lensa yang berbeda. Di satu sisi, robot dapat membantu produksi dan efisiensi suatu pabrik manufaktur. Di sisi lain, robotika memiliki implikasi yang sangat menyeramkan bagi masa depan lapangan kerja. Uniknya, Isaac Asimov memprediksi bahwa di era yang akan datang robotika akan memiliki kesadaran sendiri, sehingga ia menulis 3 hukum alam robotika:</p>\r\n<p xss=removed>Budy Sugandi menulis pada artikelnya yang berjudul Arah Pendidikan Vokasi Indonesia3:</p>\r\n<p xss=removed>“Pilihan Mendikbud Nadiem dengan menambah direktorat baru di lingkungan Kemendikbud, yaitu Direktorat Jenderal Pendidikan Vokasi perlu diapresiasi. Ditjen ini menggawangi empat direktorat, yaitu Direktorat SMK, Pendidikan Tinggi Vokasi dan Profesi, Kursus dan Pelatihan, serta Kemitraan dan Penyelarasan Dunia Usaha dan Dunia In- dustri. Pasalnya, tantangan dan kebutuhan SDM di dunia industri semakin meningkat. Termasuk untuk memberesi pekerjaan rumah mindset negatif masyarakat terhadap pendidikan vokasi.”</p>\r\n<p xss=removed>Akankah analogi ini terealisasi dengan baik sehingga dapat membangun masa depan Indonesia dimana para lulusan SMK dan program vokasi dapat bersaing dengan pendidikan sarjana dan memberikan kesempatan untuk lulusan SMK mendapatkan porsi lapangan kerja yang lebih luas?</p>\r\n<p xss=removed>Sepertinya terlalu dini untuk kita nilai. Tetapi, apapun analogi yang disampaikan oleh pemerintahan pusat, para pelaku usaha dan industri harus memiliki inisiatif untuk bekerjasama dengan pelaku program vokasi agar membentuk tenaga kerja masa depan yang lebih mampu menghadapi tantangan zaman. Dengan membangun Center of Excellence, Rumah Vokasi, Balai Latihan, yang memiliki kurikulum sesuai dengan kebutuhan lapangan, serta kesadaran bahwa dunia selalu berkembang dan teknologi akan selalu mempengaruhi cara kita bekerja, Indonesia bisa saja menyadari mimipi ini 10 tahun lagi.</p>', '                                Asperio, infinity, sekolah vokasi, teknologi indonesia                            ', 1, '73863df06c3f7f142e1be0dc41ac23f9.jpg', 1, '2021-05-10 15:23:07'),
(55, 'Menjadi Robotics Engineer', 'menjadi-robotics-engineer', 1, 'Beberapa tahun lalu mungkin Robotics Engineer merupakan pekerjaan yang masih sangat jarang terdengar. Namun saat ini karena sedang gencar-gencarnya dengan industri 4.0, robotik menjadi satu tema yang sering diperbincangkan. Tapi, apa sih itu Robotics', '<p class=\"mt-4\" xss=removed>Beberapa tahun lalu mungkin Robotics Engineer merupakan pekerjaan yang masih sangat jarang terdengar. Namun saat ini karena sedang gencar-gencarnya dengan industri 4.0, robotik menjadi satu tema yang sering diperbincangkan. Tapi, apa sih itu Robotics Engineer? Pada artikel ini kita akan sedikit membahas tentang pekerjaan yang berhubungan dengan robot.</p>\r\n<p class=\"font-weight-bold\" xss=removed>Apa yang dilakukan seorang Robotics Engineer?</p>\r\n<p xss=removed>‘Robotics Engineer akan merancang, membuat, memprogram, memelihara, dan memiliki pengetahauan keahlian untuk robot perakitan, kualitas, dan otomasi. Anda akan bekerja dengan engineer, pemeliharaan, dan produksi pada proyek untuk meningkatkan efisiensi dan meningkatkan keselamatan. Anda harus memiliki pengetahuan tentang sistem kontrol alat berat dan solusi otomatisasi pabrik \'.</p>\r\n<p><img class=\"mt-3 mb-3\" xss=removed src=\"../../asperio/src/artikel3.jpg\" width=\"70%\"></p>\r\n<p xss=removed>Untuk merancang, sistem robot memerlukan software untuk membuat gambar dan simulasi unit robotik elektro-mekanis. Seringkali desain tersebut digunakan dalam proses fabrikasi untuk memproduksi unit dan atau sel kerja. Setelah unit-unit itu dibuat mereka umumnya hanya unit mekanik mati, sampai seorang programmer robotik memasukkan program ke unit untuk melakukan langkah urutan otomatis.</p>\r\n<p xss=removed>Robotics Engineer biasanya akan terlibat dalam pembuatan unit robot dalam setiap aspek. Mereka akan bekerja bersama tim. Pekerjaan ini biasanya juga diharuskan untuk memelihara sistem robot untuk proses produksi yang dapat mencakup puluhan unit di seluruh jalur produksi atau fasilitas manufaktur.</p>\r\n<p class=\"font-weight-bold\" xss=removed>Berapa Tahun yang Dibutuhkan untuk Menjadi Robotics Engineer?</p>\r\n<p xss=removed>Setelah tau ngapain sebenarnya seorang Robotics Engineer, sekarang mungkin teman-teman masih bingung \"Berapa lama ya saya bisa siap jadi Robotics Engineer?\"</p>\r\n<p xss=removed>Saya mengerti, robotika memang terdengar seperti karier yang menyenangkan bagi yang tertarik dengan teknologi. Dan Anda mungkin ingin memulai secepat mungkin. Nah, dengan keterampilan yang tepat, Anda dapat dengan mudah menemukan peluang kerja yang akan membuat Anda bisa berkeliling dunia, dan bekerja pada project yang bernilai jutaan dolar. Jadi, jawaban singkatnya di bawah ini;</p>\r\n<p xss=removed>Banyak yang memulai dengan mengambil gelar sarjana 4-5 tahun; teknik listrik, mekanik atau industri / manufaktur. Namun banyak juga bekerja di industri tanpa gelar dan bekerja full-time. Sekarang juga ada beberapa perguruan tinggi dan universitas yang menawarkan gelar teknik robotika/mekantronika. Selain itu jam terbang tinggi juga sangat diperlukan bagi seorang Robotics Engineer. Banyak pelatihan Robotik yang bisa teman-teman ikuti.</p>\r\n<p xss=removed>Saat ini juga sudah banyak robot yang memang dikhususkan untuk Edukasi sehingga sangat membantu orang yang yang ingin belajar robot bahkan bisa digunakan untuk para Engineer yang ingin mengexplore robot lebih jauh. Dobot merupakan salah satu robot yang digunakan untuk mempelajari Robotika. Mulai dari belajar logika berpikir sampai belajar pemrograman yang sulit. Dengan adanya miniatur robot Industri anda juga lebih mudah memahami bagaimana robot pada industri bekerja. Kami ASPERIO merupakan satu-satunya distributor resmi Dobot di Indonesia, sehingga untuk kebutuhan pelatihan atau kebutuhan pengadaan yang memerlukan Dobot kami bisa bantu dengan full support</p>\r\n<p xss=removed>Jadi, udah taukan apa itu Robotics Engineer.. Bagaimana tertarikkan ? Untuk mengetahui serba-serbi tentang pekerjaan di dunia Robotik, tunggu di artikel selanjutnya yaaa…</p>', 'Robotics, engineer, asperio, infinity', 1, 'fbbbe9e9c5fda104a67689f69179f0f7.jpg', 1, '2021-05-10 15:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `bb_article_category`
--

CREATE TABLE `bb_article_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb_article_category`
--

INSERT INTO `bb_article_category` (`id`, `category_name`, `is_active`) VALUES
(1, 'Artikel', 1),
(2, 'Biomedical', 1),
(3, 'Uncategorized', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bb_vw_article`
-- (See below for the actual view)
--
CREATE TABLE `bb_vw_article` (
`id` int(11)
,`title` varchar(100)
,`slug` varchar(128)
,`lead_article` varchar(250)
,`keywords` text
,`author` varchar(20)
,`article` text
,`category` varchar(50)
,`category_id` int(11)
,`img` varchar(100)
,`is_published` int(2)
,`created_date` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `bb_webinar`
--

CREATE TABLE `bb_webinar` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `author` int(100) NOT NULL,
  `lead_webinar` varchar(250) NOT NULL,
  `webinar` text NOT NULL,
  `keywords` text NOT NULL,
  `category` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `is_published` int(2) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bb_webinar_category`
--

CREATE TABLE `bb_webinar_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bb_webinar_category`
--

INSERT INTO `bb_webinar_category` (`id`, `category_name`, `is_active`) VALUES
(1, 'kategori_1', 1),
(2, 'kategori_2', 1),
(3, 'kategori_3', 1);

-- --------------------------------------------------------

--
-- Structure for view `bb_vw_article`
--
DROP TABLE IF EXISTS `bb_vw_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bb_vw_article`  AS  select `ar`.`id` AS `id`,`ar`.`title` AS `title`,`ar`.`slug` AS `slug`,`ar`.`lead_article` AS `lead_article`,`ar`.`keywords` AS `keywords`,`ad`.`username` AS `author`,`ar`.`article` AS `article`,`ac`.`category_name` AS `category`,`ac`.`id` AS `category_id`,`ar`.`img` AS `img`,`ar`.`is_published` AS `is_published`,`ar`.`created_date` AS `created_date` from ((`bb_article` `ar` join `bb_admin` `ad` on(`ar`.`author` = `ad`.`id`)) left join `bb_article_category` `ac` on(`ar`.`category` = `ac`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bb_admin`
--
ALTER TABLE `bb_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bb_article`
--
ALTER TABLE `bb_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bb_article_category`
--
ALTER TABLE `bb_article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bb_webinar`
--
ALTER TABLE `bb_webinar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bb_admin`
--
ALTER TABLE `bb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bb_article`
--
ALTER TABLE `bb_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `bb_article_category`
--
ALTER TABLE `bb_article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bb_webinar`
--
ALTER TABLE `bb_webinar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
