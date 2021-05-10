-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 01:56 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb_admin`
--

INSERT INTO `bb_admin` (`id`, `username`, `password`, `full_name`, `phone_number`, `email`, `registered_date`, `is_active`) VALUES
(1, 'yahya', '81dc9bdb52d04dc20036dbd8313ed055', 'Yahya Maulana', '0812949202', 'yahya@gmail.com', '2019-03-15 17:00:00', 1),
(2, 'ary', '81dc9bdb52d04dc20036dbd8313ed055', 'Ary Windu', '1234', '1234@gmail.com', '0000-00-00 00:00:00', 1),
(3, 'admin', '123', '', '', '', '2019-04-11 10:20:18', 0);

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
  `category` int(4) NOT NULL,
  `img` varchar(100) NOT NULL,
  `is_published` int(2) NOT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb_article`
--

INSERT INTO `bb_article` (`id`, `title`, `slug`, `author`, `lead_article`, `article`, `category`, `img`, `is_published`, `created_date`) VALUES
(2, 'Kunyit Asam dan Menstruasi, Apa Hubungannya?', 'kunyit-asam-dan-menstruasi-apa-hubungannya', 2, 'Kunyit Buat Apa ?', '<p xss=removed>Salah satu bumbu dapur berwarna kekuningan, memiliki aroma dan rasa yang khas adalah kunyit. Bumbu satu ini selalu kamu nikmati di kala hari ulang tahun, di mana kamu memakan nasi kuning dan warna itu dihasilkan dari kunyit. Selain untuk masakan, kunyit juga digunakan untuk pengobatan herbal, masalah menstruasi salah satunya.</p>\r\n<p xss=removed>Jadi, ekstrak kunyit itu sendiri punya efek antioksidan, menstimulasi aliran empedu, anti radang serta antimikroba. Selain itu, kunyit juga disebut-sebut sebagai superfood, karena bisa mengurangi maag, nyeri perut, mual, muntah dan kembung.</p>\r\n<p xss=removed>Lalu, kalau manfaatnya buat menstruasi apa saja sih?</p>\r\n<p xss=removed><strong xss=removed>Mengatasi kram perut</strong></p>\r\n<p xss=removed>Beberapa wanita mengalami kram perut saat menstruasi dan cukup menyakitkan, bahkan ada beberapa yang sampai sulit beraktivitas. Nah, kunyit ini mengandung kurkumin yang berfungsi sebagai agen anti peradangan yang mampu menenangkan kontraksi pada otot rahim dan usus.</p>\r\n<p xss=removed><strong xss=removed>Mengatasi kembung selama haid</strong></p>\r\n<p xss=removed>Kurkumin pada kunyit juga bermanfaat untuk meringankan kembung yang dialami oleh beberapa cewek saat sedang menstruasi. Oleh sebab manfaat ini juga, kunyit baik untuk kamu yang memiliki masalah dengan maag.</p>\r\n<p xss=removed><strong xss=removed>Terhindar dari infeksi</strong></p>\r\n<p xss=removed>Agen antimikroba yang terkandung dalam kunyit sangat bermanfaat saat kamu sedang menstruasi. Kenapa? Karena saat menstruasi, tubuh cewek cenderung lebih rentan terinfeksi. Dan kalau kamu konsumsi secara teratur kunyit baik untuk menjaga keseimbangan staminamu, baik menjelang haid atau tidak.</p>\r\n<p xss=removed><strong xss=removed>Mengurangi mood swing</strong></p>\r\n<p xss=removed>Kamu mengalami perubahan mood saat menstruasi atau menjelang menstruasi? Kamu jadi gampang marah, nangis atau baper sama keadaan sekitar gitu. Kunyit memiliki antidepresan alami yang bisa membantumu mengatasi mood swing saat menstruasi.</p>\r\n<p xss=removed>So, buat kamu yang mengalami kram perut atau mood swing menjelang dan selama menstruasi, nggak ada salahnya buat mencoba konsumsi kunyit lho!</p>\r\n<p xss=removed>Kalau kurang menyukai rasa dari kunyit, saat ini sudah cukup banyak yang menjual kunyit asem dalam kemasan dengan rasa menyegarkan dan manfaat yang sama. Yang penting, jangan lupa untuk tetap berolahraga selama menstruasi ya dan makan makanan yang bergizi.</p>', 1, 'd919274caeb5caaaaad2206d8117087a.jpg', 1, '2019-04-13 12:56:32'),
(3, 'Vagina Berbau Tak Sedap, Apa Penyebabnya?', 'vagina-berbau-tak-sedap-apa-penyebabnya', 2, 'Vagina Berbau Tak Sedap, Apa Penyebabnya?', '<p xss=removed>Setiap cewek pada umumnya memiliki aroma vagina yang berbeda-beda, ini merupakan satu hal yang normal dan tidak perlu diperdebatkan. Tapi, kamu perlu lebih meperhatikannya kalau aroma vagina berubah ke arah yang lebih menyengat dan menusuk hidung. Bisa jadi ini tanda ada masalah di vaginamu.</p>\r\n<p xss=removed><strong xss=removed>Lalu apa sebab aroma vagina nggak sedap?</strong></p>\r\n<p xss=removed><strong xss=removed>Keringat</strong></p>\r\n<p xss=removed>Kalau yang satu ini mungkin kamu habis beraktivitas fisik kayak olahraga  atau celana yang kamu pakai terlalu ketat. Untuk itu ada baiknya mengubah kebiasaan memakai celana terlalu ketat dan ganti celana dengan bahan yang menyerap keringat serta baiknya segera ganti pakaian setelah berolahraga</p>\r\n<p xss=removed><strong xss=removed>Hormone</strong></p>\r\n<p xss=removed>Vagina yang berbau tidak sedap juga bisa disebabkan oleh perubahan hormone lho! Menurunnya kadar <a xss=removed href=\"https://beraniberencana.com/kesehatan-seksual/hormon-testosteron-itu-apa-sih-kenalan-yuk/\">estrogen</a>  juga bisa menyebabkan peningkatan bakteri yang menimbulkan bau nggak sedap</p>\r\n<p xss=removed><strong xss=removed>Makanan</strong></p>\r\n<p xss=removed>Nggak cuma memengaruhi aroma tubuh, makanan yang kamu konsumsi juga berpengaruh pada aroma vagina. Beberapa bahan makanan kayak bawang-bawangan, asparagus dan makanan berbumbu kari bisa memicu aroma nggak sedap pada vagina, untuk mengatasinya kurangi konsumsi makanan tersebut.</p>\r\n<p xss=removed><strong xss=removed>Habis menstruasi</strong></p>\r\n<p xss=removed>Seiring dengan siklus ini nggak menutup kemungkinan vagina juga berbau nggak sedap. Pada kebanyakan kasus, hal ini disebebkan karena adanya perubahan hormone atau sisa-sisa lapisan dinding rahim yang luruh.</p>\r\n<p xss=removed>Sebenarnya kamu nggak perlu khawatir berlebih dengan aroma vagina selama tidak ada gejala lain kayak gatal, keputihan berlebih atau iritasi. Yang paling penting, jagalah kesehatan dan kebersihannya ya serta perlu diingat vagina memiliki kemampuan untuk membersihkan dirinya sendiri lho!</p>', 1, '24a7b5e7acda898d14bfe087a83b742f.jpg', 1, '2019-04-13 15:14:31'),
(4, 'Cuti Saat Haid? Ini Syarat-syaratnya!', 'cuti-saat-haid-ini-syarat-syaratnya', 2, 'Cuti Saat Haid? Ini Syarat-syaratnya!', '<p xss=removed>Menstruasi, atau yang sering juga dikenal sebagai haid atau datang bulan, adalah siklus normal yang dialami perempuan setiap bulannya. Tidak sedikit yang mengalami <em xss=removed>pre-menstrual syndrome </em><em xss=removed>(<a xss=removed href=\"https://beraniberencana.com/kesehatan-seksual/pms-mitos-dan-faktanya-2/\">PMS</a>)</em> ketika menstruasi. Pada saat mengalami PMS, bukan hanya perubahan emosi atau <em xss=removed>mood swing </em>saja yang dihadapi. Perempuan seringkali juga merasakan berbagai rasa tidak nyaman pada tubuhnya, mulai dari nyeri pada bagian perut bawah, payudara yang membengkak, nyeri pada otot dan sendi, bahkan hingga mual, nyeri, ataupun konstipasi.</p>\r\n<p xss=removed>Memang tidak semua perempuan mengalami kejadian di atas setiap bulan. Kondisi setiap perempuan memang unik sehingga gejala yang muncul pun bisa berbeda, tapi bagi banyak perempuan kondisi yang dialami saat PMS sangat tidak nyaman sampai sulit beraktivitas, bahkan juga sulit bangun dari tempat tidur karena nyeri haid yang dialami begitu hebatnya.</p>\r\n<p xss=removed>Kalau sampai begini tentunya sangat mengganggu produktivitas apabila tetap harus dipaksa bekerja. Maka dari itu, beberapa negara membuat aturan cuti haid, termasuk juga di Indonesia.</p>\r\n<p xss=removed><strong xss=removed>Peraturan cuti haid di Indonesia</strong></p>\r\n<p xss=removed>Di Indonesia sendiri ada yang mengatur mengenai aturan cuti haid ini. Pada pasal 81 ayat (1) Undang-Undang No. 13 Tahun 2003 tentang Ketenagakerjaan yang menyebutkan bahwa pekerja/buruh perempuan yang dalam masa haid merasakan sakit dan memberitahukan kepada pengusaha, tidak wajib bekerja pada hari pertama dan kedua pada waktu haid.</p>\r\n<p xss=removed>Selanjutnya dijelaskan pula pada pasal 81 ayat (2) Undang-Undang Ketenakagerjaan (UKK) bahwa mengatur bahwa pelaksanaan ketentuan sebagaimana dimaksud dalam Pasal 81 ayat (1) diatur dalam perjanjian kerja, peraturan perusahaan, atau perjanjian kerja bersama. Pengusaha juga wajib membayar upah apabila pekerja/buruh perempuan yang sakit pada hari pertama dan kedua masa haidnya sehingga tidak dapat melakukan pekerjaan.</p>\r\n<p xss=removed>Jadi, sesuai peraturan yang berlaku berdasarkan Undang-Undang Ketenagakerjaan, apabila kamu mengalami nyeri pada hari pertama atau kedua menstruasi hingga mengganggu konsentrasi kerja, kamu berhak mengambil cuti haid tanpa upah dipotong.</p>\r\n<p xss=removed>Sayangnya, masih ada perusahaan yang belum mengimplementasikan peraturan ini ke dalam peraturan perusahaan, atau sudah ada tapi belum disosialisasikan kepada karyawannya. Buat kamu yang sudah mulai bekerja, ga ada salahnya untuk menanyakan kebijakan cuti haid di perusahaanmu supaya kamu lebih paham hak-hak kamu sebagai karyawan.</p>\r\n<p xss=removed>Nah, untuk bisa mengurangi rasa tidak nyaman selama PMS atau saat menstruasi sedang terjadi, jangan lupa untuk selalu mengonsumsi makanan yang kaya zat besi, minum air putih yang cukup, dan juga jangan lupa untuk olah raga teratur ya.</p>', 1, '2dfa1f7955af6f86b2b41fc2ab507407.jpg', 1, '2019-04-13 15:16:17'),
(5, 'VCT dan HIV/AIDS, Yakin Kamu Nggak Tau?', 'vct-dan-hivaids-yakin-kamu-nggak-tau', 2, 'VCT dan HIV/AIDS, Yakin Kamu Nggak Tau?', '<p xss=removed>Mungkin belum banyak yang tau soal VCT, padahal tes ini penting dan sangat berguna loh. Apakah itu?</p>\r\n<p xss=removed><strong xss=removed>Apa itu VCT?</strong></p>\r\n<p xss=removed>VCT adalah kepanjangan dari <em xss=removed>voluntary counselling and testing</em>, atau bisa diartikan sebagai konseling dan tes sukarela (KTS). VCT sendiri memiliki tujuan yaitu untuk membantu pencegahan, perawatan dan pengobatan bagi penderita HIV/AIDS. Nggak cuma di rumah sakit atau klinik, pelayanan ini juga bisa didapatkan di puskesmas yang menyediakan layanan tersebut.</p>\r\n<p xss=removed>Karena sifatnya yang sukarela dan rahasia, berarti keputusan untuk mengikutinya atau tidak ada di tanganmu.</p>\r\n<p xss=removed><strong xss=removed>Siapa sih yang harus melakukan tes ini?</strong></p>\r\n<p xss=removed>Semua orang perlu melakukan tes ini. Walaupun belum pernah melakukan hubungan seksual, bukan berarti kamu sepenuhnya aman dari HIV juga loh karena HIV bisa saja didapatkan melalui transfusi darah atau jarum yang tidak steril. Bagi yang sudah pernah melakukan hubungan seksual, diwajibkan untuk melakukan VCT atau tes HIV secara rutin.</p>\r\n<p xss=removed><strong xss=removed>Ribet ga sih?</strong></p>\r\n<p xss=removed>Sama sekali nggak. Tes VCT untuk mendeteksi HIV ini gampang banget dilakukan.</p>\r\n<p xss=removed>Selama mengikuti tes ini, kamu akan melewati tiga langkah mudah:</p>\r\n<p xss=removed>Tahap Pra-Konseling: Sebelum tes, konseling dilakukan untuk memberi info lengkap tentang HIV/AIDS, plus minus VCT, menggali faktor-faktor resiko dan cara menguranginya sehingga mereka yang akan menjalani tes lebih siap. Konselor juga bisa membantu mempersiapkan mental supaya tidak takut atau khawatir dengan hasilnya nanti.</p>\r\n<p xss=removed>Tahap Rapid Test: Cek darah untuk mendeteksi apakah terdapat infeksi <a xss=removed href=\"https://beraniberencana.com/kesehatan-seksual/hiv-aids-bukan-akhir-dunia/\">HIV</a> di dalam tubuh.</p>\r\n<p xss=removed>Tahap Hasil dan Konseling: Kalau hasil tes sudah di tangan, konselor akan membantu menjelaskan hasil tesnya dan membantu kamu menentukan langkah selanjutnya. Kalau hasilnya negatif, konselor bisa menjelaskan bagaimana kamu bisa menjaga diri tetap aman dari HIV. Kalau hasilnya positif, tidak perlu panik karena konselor bisa memberikan informasi pengobatan yang tepat untuk menjaga kesehatanmu.</p>\r\n<p xss=removed><strong xss=removed>Kapan VCT sebaiknya dilakukan</strong></p>\r\n<p xss=removed>VCT atau tes HIV bisa dilakukan kapan saja! Walaupun begitu, disarankan untuk melakukan pemeriksaan secara rutin setiap 3 bulan sekali.</p>\r\n<p xss=removed>Mengapa waktunya begitu? Karena masa inkubasi HIV umumnya 3 minggu hingga 2 bulan. Biasanya konselor akan menganjurkan melakukan tes ulang 6 bulan berikutnya untuk hasil yang lebih akurat.</p>\r\n<p xss=removed>Kamu yang ingin melakukan tes ini, nggak perlu malu atau takut karena justru dengan begini pengetahuanmu bertambah, tau pencegahan dan penanganan HIV/AIDS serta mengurangi stigma negative mengenai mereka yang hidup dengan HIV/AID (ODHA).</p>', 1, 'b89941953ca0d318167a078699746711.jpg', 1, '2019-04-13 15:17:16'),
(6, 'Apa Maksud dari Pap Smear Sih?', 'apa-maksud-dari-pap-smear-sih', 2, 'Apa Maksud dari Pap Smear Sih?', '<p xss=removed>Banyak mungkin dari kamu yang saat ini sudah makin peduli dengan kesehatan diri sendiri dan kesehatan orang-orang di sekitarmu. Ada berbagai cara yang dilakukan untuk menjaga kesehatan, kayak misalnya olahraga, pola makan yang baik dan pemeriksaan rutin ke rumah sakit. Salah satu jenis pemeriksaan yang banyak dibicarakan adalah pap smear.</p>\r\n<p xss=removed><strong xss=removed>Lalu, apa sih pap smear?</strong></p>\r\n<p xss=removed>Pap smear adalah tes yang dilakukan untuk mendeteksi ada atau tidaknya sel kanker di leher rahim (serviks). Pap smear berguna untuk mencegah perkembangan kanker serviks, karena semakin cepat terdeteksi maka semakin baik juga pengobatannya.</p>\r\n<p xss=removed>Pap smear dilakukan dengan mengambil sedikit sampel sel dari leher rahim, sampel inilah yang nantinya akan diperiksa lebih lanjut untuk melihat apakah ada sel kanker atau tidak.</p>\r\n<p xss=removed><strong xss=removed>Siapa yang perlu melakukannya?</strong></p>\r\n<p xss=removed>Semua perempuan perlu melakukannya secara rutin, dengan itu kita ikut melindungi kesehatan reproduksi kita dari kanker serviks.</p>\r\n<p xss=removed>Buat anak muda, disarankan mulai melakukan pap smear sejak usia 21 tahun atau kalau sudah pernah berhubungan seksual. Pap smear sebaiknya dilakukan secara rutin setiap 3 tahun sekali.</p>\r\n<p xss=removed>Walaupun belum pernah melakukan hubungan seksual, tetap disarankan untuk melakukan pap smear secara rutin sejak usia 21 tahun. Ini karena walaupun kanker serviks umumnya muncul karena virus HPV dari infeksi karena hubungan seksual yang tidak aman, ada faktor resiko lain yang menyebabkan kanker serviks seperti faktor genetik.</p>\r\n<p xss=removed><strong xss=removed>Perlu persiapan nggak sih?</strong></p>\r\n<p xss=removed>Jawabannya tentu perlu dong. Biar nyaman dan lancar waktu melakukan pap smear, simak beberapa bocoran di bawah ini yuk!</p>\r\n<ul xss=removed>\r\n<li xss=removed>Tidak sedang menstruasi, kenapa? Karena darah bisa memengaruhi keakuratan hasil tes</li>\r\n<li xss=removed>Tidak membersihkan vagina dengan douche (menggunakan pembersih khusus campuran berbagai bahan kimia, atau menggunakan campuran air, baking soda, cuka, pewangi dan antiseptic). Cukup dengan air bersih atau air hangat</li>\r\n<li xss=removed>Tidak melakukan hubungan seksual selama 24 jam sebelum tes</li>\r\n<li xss=removed>Buang air kecil untuk mengosongkan kandung kemih sebelum pap smear</li>\r\n</ul>\r\n<p xss=removed>Kamu perlu memberitahu dokter sebelum pap smear, kalau:</p>\r\n<ul xss=removed>\r\n<li xss=removed>Pertama kali melakukan pap smear</li>\r\n<li xss=removed>Sedang mengonsumsi obat-obatan atau kontrasepsi, misalnya pil KB. Hormon yang terkandung di dalamnya dapat memengaruhi hasil tes</li>\r\n<li xss=removed>Sedang hamil atau mungkin saja hamil</li>\r\n<li xss=removed>Hasil pap smear sebelumnya yang menunjukan hasil abnormal</li>\r\n</ul>\r\n<p xss=removed><strong xss=removed>Lalu apa yang terjadi selama pap smear?</strong></p>\r\n<p xss=removed>Kamu akan diminta untuk melepas baju yang menempel di tubuh pada bagian pinggang ke bawah, lalu diminta untuk berbaring di meja khusus dengan lutut ditekuk. Lalu sebuah alat dimasukan ke dalam vagina yang disebut <em xss=removed>speculum</em>, alat ini berfungsi untuk melebarkan vagina supaya dokter bisa melihat leher rahim dan mengambil sampel sel-sel serviks dengan spatula.</p>\r\n<p xss=removed><strong xss=removed>Penting!</strong></p>\r\n<p xss=removed>Rileks! Buat dirimu senyaman mungkin dengan mengatur nafas, bernafas senormal mungkin sehingga otot-ototmu tidak kaku dan mengurangi rasa kurang nyaman. Lalu, setelah proses ini selesai, kemungkinan vagina mengalami pendarahan, ini normal ya dan tidak beresiko.</p>\r\n<p xss=removed>Jadi, buat kamu yang sudah berusia 21 tahun, ada baiknya melakukan pemeriksaan pap smear, karena mencegah lebih baik daripada mengobati bukan? Selain itu, sudah banyak juga rumah sakit yang melayani pemeriksaan satu ini kok.</p>', 1, 'b77d6a14a5dda8a15d273c6e954b386a.jpg', 1, '2019-04-13 15:18:10'),
(7, ' HIV/AIDS Bukan Akhir Dunia', 'hivaids-bukan-akhir-dunia', 2, 'HIV/AIDS Bukan Akhir Dunia', '<p xss=removed>Berkat kemajuan teknologi saat ini, walaupun terkena HIV seseorang masih bisa tetap produktif dan menjalani hidup yang normal. Dengan melakukan pengobatan yang tepat dan teratur, infeksi bisa dijaga agar tidak mengganggu kegiatan sehari-hari. Yuk cari tahu gimana caranya tetap sehat dengan HIV.</p>\r\n<p xss=removed><strong xss=removed>HIV dan Pengobatannya</strong></p>\r\n<p xss=removed>HIV menurunkan imunitas dengan menyerang sel CD4 dalam darah. CD4 adalah salah satu jenis sel darah putih yang berfungsi melindungi tubuh dari penyakit. Semakin tinggi CD4 count atau kadar CD4 dalam darah, semakin kuat pula sistem imun tubuh.</p>\r\n<p xss=removed>Pengobatan untuk infeksi HIV dikenal sebagai obat <em xss=removed>antiretroviral </em>(ARV). Pengobatan ARV bekerja dengan menghilangkan unsur yang dibutuhkan HIV untuk berkembang dan menggandakan diri. Dengan begitu ARV akan menghambat pertumbuhan HIV, serta mencegah virus HIV menghancurkan sel CD4. Studi menunjukkan bahwa ODHA yang melakukan pengobatan secara teratur memiliki angka harapan hidup yang sama tingginya dengan orang tanpa HIV dan mengurangi risiko penyebaran HIV ke orang lain.</p>\r\n<p xss=removed><strong xss=removed>Lalu, bagaimana menjaga </strong><strong xss=removed>kesehatan bagi ODHA</strong><strong xss=removed>?</strong></p>\r\n<p xss=removed>Bagi mereka yang sudah terinfeksi dengan HIV memang harus sangat waspada dalam menjaga kesehatan supaya tetap kuat dan sistem kekebalan tubuh tetap terjaga. Berikut gaya hidup yang sebaiknya diterapkan bagi ODHA</p>\r\n<p xss=removed>– Makan sehat dan diet seimbang</p>\r\n<p xss=removed>Dengan begini, ODHA bisa membantu tubuhnya untuk menjaga sistem kekebalan tubuhnya, melindungi diri dari penyakit dan dapat mencegah HIV berkembang. Hindari makanan yang terlalu banyak diolah.</p>\r\n<p xss=removed>– Say NO to alcohol dan narkoba</p>\r\n<p xss=removed>Kenapa? Karena keduanya bisa melemahkan sistem kekebalan tubuh seseorang yang memiliki HIV. Selain itu, keduanya bisa mengganggu cara bekerja obat yang sedang dikonsumsi.</p>\r\n<p xss=removed>– Perhatikan kesehatan</p>\r\n<p xss=removed>Ada baiknya ODHA lebih rutin untuk mengunjungi dokter, untuk mencegah dan mendeteksi dini penyakit lainnya yang mungkin saja bisa menyerang. Untuk para cewek dengan HIV disarankan melakukan pap smear setidaknya dua kali dalam setahun.</p>\r\n<p xss=removed>– Kurangi stress</p>\r\n<p xss=removed>Ada beberapa cara untuk mengurangi stress dengan baik, seperti konseling dengan konselor atau melakukan beberapa kegiatan olahraga, yoga atau meditasi.</p>\r\n<p xss=removed>– Minum obat tepat waktu</p>\r\n<p xss=removed>Penting sekali untuk selalu mengonsumsi obat dengan teratur sesuai dengan dosis yang sudah dianjurkan dokter. Pengobatan yang teratur akan mencegah HIV berkembang menjadi AIDS dan menjaga sistem kekebalan tubuh agar tetap kuat.</p>', 1, 'cfd68891d191767c7d6d6c3cb038bda8.jpg', 1, '2019-04-13 15:18:58'),
(8, 'TEst Artikel malm ini', 'test-artikel-malm-ini', 2, 'es', '<p>ddd</p>', 1, 'c44e69e5d581123920955b573a49fc88.jpg', 1, '2019-06-11 11:57:41'),
(9, 'apa itu kontrasepsi ?', 'apa-itu-kontrasepsi', 2, 'lkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '<p>lkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</p>', 1, 'edf2738a5c43d557674a1355082dd45c.jpg', 1, '2019-06-11 11:58:23'),
(10, 'jalan jalan sore', 'jalan-jalan-sore', 2, 'lkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjlkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjlkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '<p>lkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjlkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjlkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjlkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</p>', 1, 'b19fc875f046b2875348c3272671ee82.png', 1, '2019-06-11 11:58:44');

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
(1, 'Kesehatan', 1),
(2, 'Kontrasepsi', 1),
(3, 'Lifestyle', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bb_klinik`
--

CREATE TABLE `bb_klinik` (
  `id` int(200) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `link` varchar(400) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb_klinik`
--

INSERT INTO `bb_klinik` (`id`, `nama`, `alamat`, `link`, `no_telp`) VALUES
(1, 'Klinik Ibu Anak', 'Komp. Puri Sebelah Blok C12 no 14', 'https://www.google.com/maps/dir/-6.4420812,106.814646/the+white+wall/@-6.3892484,106.7467894,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e69efd33abb247f:0x3228a20044244384!2m2!1d106.7712948!2d-6.3351953', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `bb_visitor`
--

CREATE TABLE `bb_visitor` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb_visitor`
--

INSERT INTO `bb_visitor` (`id`, `full_name`, `username`, `password`, `email`, `phone_number`, `registered_date`) VALUES
(1, 'epa', 'epa', '81dc9bdb52d04dc20036dbd8313ed055', 'epa@gmail.com', '69696969', '2019-03-30 08:46:47'),
(2, 'ary', 'ary', '202cb962ac59075b964b07152d234b70', 'ary@n.com', '908239', '2019-04-08 15:05:55'),
(3, '123', '123', '202cb962ac59075b964b07152d234b70', '1232@RE.COM', '123', '2019-05-27 17:09:49');

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
-- Structure for view `bb_vw_article`
--
DROP TABLE IF EXISTS `bb_vw_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bb_vw_article`  AS  select `ar`.`id` AS `id`,`ar`.`title` AS `title`,`ar`.`slug` AS `slug`,`ar`.`lead_article` AS `lead_article`,`ad`.`username` AS `author`,`ar`.`article` AS `article`,`ac`.`category_name` AS `category`,`ac`.`id` AS `category_id`,`ar`.`img` AS `img`,`ar`.`is_published` AS `is_published`,`ar`.`created_date` AS `created_date` from ((`bb_article` `ar` join `bb_admin` `ad` on((`ar`.`author` = `ad`.`id`))) left join `bb_article_category` `ac` on((`ar`.`category` = `ac`.`id`))) ;

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `bb_article_category`
--
ALTER TABLE `bb_article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bb_klinik`
--
ALTER TABLE `bb_klinik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bb_visitor`
--
ALTER TABLE `bb_visitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bb_admin`
--
ALTER TABLE `bb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bb_article`
--
ALTER TABLE `bb_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bb_article_category`
--
ALTER TABLE `bb_article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bb_klinik`
--
ALTER TABLE `bb_klinik`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bb_visitor`
--
ALTER TABLE `bb_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
