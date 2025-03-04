-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 11 Jun 2024 pada 16.42
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek01`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beranda`
--

CREATE TABLE `beranda` (
  `beranda_id` int(10) UNSIGNED NOT NULL,
  `namaketua` varchar(255) NOT NULL,
  `ketua` longtext NOT NULL,
  `ketua_image` varchar(200) NOT NULL,
  `namakepala` varchar(255) NOT NULL,
  `kepala` longtext NOT NULL,
  `kepala_image` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beranda`
--

INSERT INTO `beranda` (`beranda_id`, `namaketua`, `ketua`, `ketua_image`, `namakepala`, `kepala`, `kepala_image`, `created_at`, `updated_at`) VALUES
(7, 'Samuel Leonardo', 'Salam sejahtera untuk kita semua. Marilah kita panjatkan puji dan syukur ke hadirat Tuhan Yang Maha Esa atas segala rahmat dan karunia-Nya, sehingga website SD Swasta Filadelfia Tarutung, yang merupakan sarana informasi dan komunikasi komunitas sekolah ini, dapat hadir dan menyediakan berbagai informasi yang dibutuhkan dengan memanfaatkan teknologi informasi yang ada. Kami sepenuhnya menyadari bahwa untuk memajukan pendidikan di era teknologi yang berkembang pesat ini, dibutuhkan sarana dan prasarana yang kondusif, serta kebutuhan informasi bagi siswa, guru, orang tua, dan masyarakat. Oleh karena itu, kami berupaya seoptimal mungkin untuk mewujudkan hal tersebut. Kami berharap bahwa kehadiran website ini dapat memberikan manfaat dan membantu dalam menyediakan informasi yang terkait dengan pendidikan dan segala hal yang berkaitan dengan SD Swasta Filadelfia Tarutung. Kami juga sangat mengharapkan masukan dan dukungan dari berbagai pihak, terutama mahasiswa IT DEL yang bekerja sama dengan kami, agar kami dapat terus belajar dan memperbaharui diri. Sehingga tampilan, konten, dan kualitas website akan terus berkembang dan menjadi lebih baik. Terima kasih atas kerja sama yang telah terjalin. Mari kita bersama-sama maju dan mencapai SD Swasta Filadelfia yang lebih baik lagi.', '1717943183_WhatsApp Image 2024-06-06 at 10.12.48_8401f1d2.jpg', 'Riama Juliana Simanjutak S.Pd.', 'Salam sejahtera untuk  kita sekalian Puji dan syukur kita panjatkan kehadiran Tuhan Yang Maha Kuasa atas nikmat dan anugerah-Nya sehingga website SD Swasta Filadelfia Tarutung yang merupakan bagian sarana informasi dan komunikasi komunitas SD Swasta Filadelfia Tarutung ini tampil untuk menjawab setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan Pendidikan di era berkembangnya teknologi Informasi yang begitu pesat sangat diperlukan sarana dan prasarana yang kondusif, kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut dan semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat terutama informasi yang berhubungan dengan pendidikan dan informasi seputar SD Swasta Filadelfia Tarutung. Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada di lingkup pendidikan dan pemerhati pendidikan secara khusus bagi SD Swasta Filadelfia Tarutung. Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini terkhusus untuk Mahasiswa IT DEL yang bekerjasama dengan kami agar kami terus belajar dan mengupdate diri, sehingga tampilan, isi, mutu website akan terus berkembang dan lebih baik lagi nantinya. Terimakasih atas kerjasamanya, maju terus untuk mencapai SD Swasta Filadelfia yang lebih baik lagi. Salam sejahtera.', '1717943183_WhatsApp Image 2024-06-06 at 10.15.03_f3625db9.jpg', '2024-06-09 07:26:23', '2024-06-09 07:26:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(200) NOT NULL,
  `informasi_berita` longtext NOT NULL,
  `informasi_alumni` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`berita_id`, `image`, `informasi_berita`, `informasi_alumni`, `created_at`, `updated_at`) VALUES
(15, '1718111276.jpg', 'Pelaksanaan Ujian Akhir Semester 2', 'Pelaksanaan ujian semester genap pada tahun 2024 dijadwalkan berlangsung dari tanggal 7 hingga 13 Juni 2024. Ujian akan dilaksanakan di ruang kelas masing-masing, dan jadwal ujian akan diberitahukan oleh wali kelas kepada siswa dan orang tua melalui berbagai saluran komunikasi, seperti pengumuman di sekolah dan grup WhatsApp kelas. Ujian akan dilaksanakan di ruang kelas masing-masing, dengan pengawasan ketat untuk memastikan kejujuran dan integritas proses ujian. Setiap ruang kelas telah dipersiapkan sesuai dengan protokol ujian yang ditetapkan oleh sekolah, termasuk penempatan meja dan kursi yang diatur sedemikian rupa untuk mencegah kecurangan. Jadwal ujian akan diberitahukan oleh wali kelas kepada siswa dan orang tua siswa. Informasi mengenai jadwal ujian akan disampaikan melalui berbagai saluran komunikasi, seperti pengumuman di sekolah, grup WhatsApp kelas, dan surat edaran. Hal ini bertujuan untuk memastikan bahwa semua siswa mendapatkan informasi yang jelas dan tepat waktu mengenai mata pelajaran yang akan diuji setiap harinya. Pihak sekolah juga telah mengatur sesi bimbingan belajar tambahan bagi siswa yang membutuhkan, sebagai upaya untuk membantu mereka mempersiapkan diri dengan lebih baik. Guru-guru telah memberikan materi pembelajaran tambahan dan latihan soal untuk memperkuat pemahaman siswa terhadap materi yang telah dipelajari selama semester genap.', '2024-06-09 08:03:53', '2024-06-11 06:07:56'),
(20, '1718111572.jpg', 'Penerimaan Raport Semester 2', 'Pelaksanaan penerimaan rapor semester genap pada tahun 2024 akan dilaksanakan pada tanggal 22 Juni 2024. Sebelum acara penerimaan rapor dimulai, seluruh siswa dan siswi akan berbaris di lapangan untuk mengikuti kegiatan pembukaan. Kegiatan ini mencakup sambutan dari kepala sekolah, pemberian arahan mengenai proses penerimaan rapor, dan penyampaian informasi penting terkait evaluasi hasil belajar selama semester genap. Baris di lapangan juga berfungsi untuk memastikan keteraturan dan kesiapan siswa sebelum mereka menuju ke ruang penerimaan rapor masing-masing. Setelah kegiatan pembukaan di lapangan selesai, siswa akan diarahkan menuju ruangan yang telah ditentukan untuk menerima rapor bersama orang tua atau wali mereka. Di ruangan tersebut, wali kelas akan menyerahkan rapor dan memberikan penjelasan mendetail mengenai capaian akademik serta non-akademik siswa selama semester genap. Pada kesempatan ini, orang tua atau wali juga akan diberi saran dan rekomendasi mengenai langkah-langkah yang dapat diambil untuk mendukung perkembangan dan peningkatan prestasi anak di masa mendatang. Diskusi ini diharapkan dapat mempererat komunikasi antara sekolah dan orang tua dalam upaya mendukung kesuksesan belajar siswa.', '2024-06-11 06:12:52', '2024-06-11 06:12:52'),
(21, '1718111649.jpg', 'Pendaftaran Peserta Didik Baru 2024', 'Pendaftaran untuk penerimaan peserta didik baru tahun ajaran 2024/2025 akan dilaksanakan isi berita: Pendaftaran penerimaan peserta didik baru tahun 2024 di SD Swasta Filadelfia Tarutung akan berlangsung dari 2 April 2024 hingga 2 Juli 2024. Calon siswa akan mengikuti ujian saring masuk, yang jadwal dan rincian ujiannya akan diumumkan saat pendaftaran. Ujian saring masuk ini mencakup tes kemampuan dasar untuk anak-anak. Hasil ujian ini akan menentukan penerimaan calon siswa di SD Swasta Filadelfia. Bagi calon siswa yang lolos, tahap selanjutnya adalah daftar ulang untuk konfirmasi penerimaan. Orang tua perlu melengkapi dokumen administratif seperti akta kelahiran, kartu keluarga, dan rapor terakhir, serta membayar biaya pendaftaran. Sekolah juga akan mengadakan sesi orientasi untuk memperkenalkan lingkungan sekolah, kurikulum, dan peraturan kepada peserta didik baru dan orang tua mereka. SD Swasta Filadelfia berkomitmen memberikan pendidikan terbaik dengan dukungan tenaga pengajar profesional dan fasilitas memadai. Pendaftaran peserta didik baru ini diharapkan dapat berjalan lancar dan sukses, serta mampu memenuhi harapan orang tua yang menginginkan pendidikan berkualitas bagi anak-anak mereka. SD Swasta Filadelfia menyambut dengan tangan terbuka semua calon siswa yang ingin menjadi bagian dari keluarga besar sekolah ini, dan siap memberikan pengalaman belajar yang menyenangkan dan bermanfaat.', '2024-06-11 06:14:09', '2024-06-11 06:14:09'),
(22, '1718111877.jpeg', 'SD Filadelfia Taput Nilai Tertinggi Sekolah Penggerak', 'SD Filadelfia Taput Nilai Tertinggi Sekolah Penggerak shortcut: SD Swasta Filadelfia Tarutung menjadi sekolah penggerak isi berita:Informasi tersebut terungkap saat pagelaran seni budaya dan panen karya siswa yang digelar di kompleks Sekolah beralamat di Saitnihuta Tarutung, Senin (12/12/2022), dan informasi tersebut dibenarkan Kadis Pendidikan dan Kebudayaan Bontor Hutasoit seraya menyebut dari 17 sekolah yang masuk kategori sekolah penggerak Filadelfia nilainya tertinggi. \"Nilainya sempurna yakni 100 , bahkan dari 17 sekolah yang masuk sekolah penggerak Filadelfia tertinggi, kemungkinan juga di Indonesia tertinggi nilainya,\"katanya. Bontor menyebut ada nilai plus yang didapatkan sekolah penggerak salah satunya bantuan operasional kinerja serta pendampingan. \"Nilai 100 itu diberikan kepada Kepala Sekolah dan manfaatnya diterima sekolahnya,\"ungkapnya. Kabid PSP Dikbud Damos Siahaan mengatakan, pagelaran seni budaya bagian aksi nyata sekolah penggerak. \"Dinas Pendidikan bangga dan ucapkan terima kasih atas kegiatan ini. Dan juga Filadelfia mampu meraih prestasi sekolah penggerak nilai tertinggi,\"katanya. Damos berharap seluruh guru tidak bosan melaksanakan program sekolah penggerak. \"Mungkin banyak ditemui kendala, termasuk anggaran pentas seni tidak ada ditampung biayanya. Namun berkat dukungan orang tua dan lainnya bisa terlaksana,\"ucapnya. Kasek Riama Simanjuntak dalam kesempatan tersebut bersyukur pagelaran seni budaya dan panen karya pelajar bisa terlaksana.\"Ini berkat kebaikan Tuhan, dukungan orang tua serta Yayasan maupun komite,\"sebutnya. Riama mengatakan, nilai 100 diperoleh Filadelfia sebagai sekolah penggerak milik Ng Siu Lie . \"Almarhumah Ng Siu Lie semasa hidupnya berjuang keras meraih sekolahnya masuk sekolah penggerak. Beliau mengikuti apa yang dibutuhkan untuk meraih semua ini. Kegigihannya hingga hanya tidur tiga jam sehari demi kemajuan sekolah,\"ungkapnya. Dan, ketika dipercaya Kepala Sekolah pasca meninggalnya Kasek Ng Siu Lie, Riama mengaku sempat ragu apakah dirinya mampu bisa mengikuti jejak pendahulunya. \"Setengahnya saja Saya tidak bisa, namun, Saya percaya dukungan semua anak didik, orang tua, komite serta yayasan saya akan buat terbaik demi kemajuan Filadelfia,\"ujarnya', '2024-06-11 06:15:32', '2024-06-11 06:17:57'),
(24, '1718111930.jpg', 'Pelajar SD Swasta Filadelfia Tarutung Ikuti Lomba KSN IPA Tingkat Nasional', 'Pelajar SD Swasta Filadelfia Tarutung ikuti lomba KSN IPA tingkat nasional Isi berita: Pelajar Sekolah Dasar (SD) Swasta Filadelfia Tarutung Tapanuli Utara Reihan Ernest Sitohang mewakili Sumatera Utara lomba Kompetis Sains Nasional ) IPA tingkat nasional. Reihan yang duduk dikelas 6 tersebut akan bergabung dengan 4 pelajar SD lainnya untuk tanding tanggal 2 hingga 7 Nopember mendatang. Kepala Sekolah SDS Filadelfia Tarutung NG Siu Lie saat ditemui di komplek sekolah dijalan Godung Dame Saitnihuta membenarkan anak didiknya lolos tanding tingkat nasional. \" Anak didik kita Reihan tanggal 7 Oktober lalu diumumkan meraih salah satu predikat terbaik dan berhak mewakili Sumut di tingkat nasional KSN IPA,\" ujarnya, Kamis (22/10) 2020. Sebelum lolos tingkat bertanding ditingkat nasional, NG Siu Lie mengatakan Reihan sejak kelas 4 sudah dilatih untuk bertanding diperlombaan sains IPA. \" Sebelumnya Reihan bertanding dari tingkat Kecamatan, Kabupaten, Propinsi hingga nasional, sejak awal kita arahkan guru pembimbingnya Yohana Lumbantobing, Judika Lumbantobing dan Limjun Butar-Butar,\" tambahnya.NG Siu Lie mengatakan targetnya bukan hanya tingkat nasional namun anak didiknya harus bisa tembus skala internasional. \" Siswa kita sudah ketiga kali ini ikut bertanding kompetisi tingkat nasional, dan memamg pola didik bagi siswa senantiasa kita arahkan mengikuti metode pembelajaran di sekolah-sekolah yang sudah maju,\" pungkasnya. (Alfredo/Edo)', '2024-06-11 06:18:50', '2024-06-11 06:18:50'),
(25, '1718111974.jpg', 'Juara 1 Olimpiade Sains Nasional Tingkat Kabupaten', 'Pelajar SD Swasta Filadelfia Tarutung Memenangkan Lomba OSN IPA Tingkat Nasional Di Santa Maria Tarutung Pelajar Sekolah Dasar (SD) Swasta Filadelfia Tarutung Tapanuli Utara bernama Justin Chandra telah mengukir prestasi gemilang dengan menjadi perwakilan sekolah dalam perlombaan Olimpiade Sains Nasional (OSN) untuk tingkat Sekolah Dasar. OSN adalah ajang bergengsi yang diselenggarakan oleh pemerintah untuk mengukur kemampuan dan kecerdasan para siswa dalam bidang sains atau bidang IPA. Dalam kompetisi yang ketat ini, Justin Chandra menunjukkan kemampuan luar biasa dan pengetahuan mendalamnya di bidang sains. Dengan kerja keras dan bimbingan dari guru-guru serta dukungan penuh dari sekolah dan orang tua, Justin berhasil mengatasi berbagai tantangan dan soal-soal sulit yang diberikan dalam olimpiade tersebut. Keberhasilan Justin tidak hanya menjadi kebanggaan bagi dirinya sendiri, tetapi juga mengharumkan nama SD Swasta Filadelfia Tarutung. Dengan meraih juara 1 dalam olimpiade bidang sains, Justin membawa pulang piala yang membuktikan keunggulan sekolahnya dalam bidang pendidikan. Prestasi ini diharapkan dapat menjadi inspirasi bagi siswa-siswa lainnya untuk terus belajar dan berprestasi. Pihak sekolah menyatakan rasa syukur dan bangga atas pencapaian Justin. Mereka juga mengapresiasi semua pihak yang telah berkontribusi dalam mendukung dan mempersiapkan Justin, mulai dari guru-guru yang berdedikasi hingga orang tua yang selalu memberikan dukungan moral dan materi. Keberhasilan ini diharapkan dapat menjadi motivasi bagi sekolah untuk terus meningkatkan kualitas pendidikan dan melahirkan generasi penerus bangsa yang unggul di berbagai bidang. Tidak hanya meraih juara 1, Justin juga mendapatkan apresiasi dari berbagai kalangan, termasuk pemerintah daerah yang memberikan penghargaan khusus atas prestasi yang diraihnya. Prestasi ini juga menjadi momentum bagi SD Swasta Filadelfia Tarutung untuk terus berinovasi dalam metode pengajaran dan pembelajaran agar dapat menghasilkan lebih banyak siswa berprestasi di masa depan. Dengan semangat juang yang tinggi dan dukungan yang komprehensif dari berbagai pihak, SD Swasta Filadelfia Tarutung optimis bahwa prestasi serupa akan terus terulang dan bahkan meningkat di tahun-tahun mendatang. Keberhasilan ini membuktikan bahwa dengan tekad, kerja keras, dan kolaborasi yang baik, tidak ada yang tidak mungkin untuk dicapai.', '2024-06-11 06:19:34', '2024-06-11 06:19:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0e1bf422a78c3964f158117eba5fb29b', 'i:1;', 1718110619),
('0e1bf422a78c3964f158117eba5fb29b:timer', 'i:1718110619;', 1718110619),
('d2f6e6ee1ec1b544b04ba5adae4e2ac8', 'i:1;', 1717827027),
('d2f6e6ee1ec1b544b04ba5adae4e2ac8:timer', 'i:1717827027;', 1717827027),
('sdsfiladelfiatarutung@gmail.com|127.0.0.1', 'i:1;', 1717827027),
('sdsfiladelfiatarutung@gmail.com|127.0.0.1:timer', 'i:1717827027;', 1717827027);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataalumni`
--

CREATE TABLE `dataalumni` (
  `dataalumni_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dataalumni`
--

INSERT INTO `dataalumni` (`dataalumni_id`, `nama`, `tahun`, `created_at`, `updated_at`) VALUES
(3, 'Gracia Sinaga', '2015', NULL, NULL),
(4, 'Paolo Tobing', '2015', NULL, NULL),
(5, 'Yen Simanjuntak', '2015', NULL, NULL),
(6, 'Ester Napitupulu', '2015', NULL, NULL),
(7, 'Imel Simanjuntak', '2015', NULL, NULL),
(8, 'Abri Matondang', '2015', NULL, NULL),
(9, 'Joplin Hutabarat', '2015', NULL, NULL),
(10, 'Moses Panggabean', '2015', NULL, NULL),
(11, 'Emasya Simorangkir', '2016', NULL, NULL),
(12, 'Odelia Simanjuntak', '2016', NULL, NULL),
(13, 'Fiona Swandi', '2016', NULL, NULL),
(14, 'Zein Silalahi', '2016', NULL, NULL),
(15, 'Alfianti', '2016', NULL, NULL),
(16, 'Devi Pakpahan', '2016', NULL, NULL),
(17, 'Kayla Silitonga', '2016', NULL, NULL),
(18, 'Steven Salvador', '2016', NULL, NULL),
(19, 'Steven Simanungkalit', '2016', NULL, NULL),
(20, 'James Aritonang', '2016', NULL, NULL),
(21, 'Owen Hutabarat', '2016', NULL, NULL),
(22, 'Gilbert Siagian', '2016', NULL, NULL),
(23, 'Hugo Simanjuntak', '2016', NULL, NULL),
(24, 'Imanuel Sihombing', '2016', NULL, NULL),
(25, 'Yosephine Lumbangaol', '2016', NULL, NULL),
(26, 'Winda Hutapea', '2016', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasekolah`
--

CREATE TABLE `datasekolah` (
  `datasekolah_id` int(10) UNSIGNED NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datasekolah`
--

INSERT INTO `datasekolah` (`datasekolah_id`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(3, 'Terwujudnya Sekolah Yang Unggul Dalam Berprestasi Dilandasi Religius, Karakter, Kompetitif, dan Penguasaan IPTEK', 'Menciptakan suasana sekolah yang Religius\r\nMenciptakan lingkungan fisik sekolah yang bersih, aman, rapi dan nyaman\r\nMenciptakan pembelajaran yang kreatif, inovatif, menyenangkan dan berkualitas\r\nMenciptakan suasana lingkungan yang ceria dan kondusif\r\nMeningkatkan budaya membaca (Literasi) dan berhitung (Numerasi)\r\nPenyediaan Sarana & Prasarana dalam pembelajaran IPTEK\r\nMeningkatkan kualitas Pendidik & Tenaga Kependidikan Berkarakter serta dedikasi yang unggul\r\nMenerapkan Kurikulum yang Berkompetensi Dasar, Sesuai dengan Indikator Sehingga Hasil Belajar dapat Dicapai dengan Baik\r\nMengembangkan media pembelajaran IT (Informasi Teknologi)', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `fasilitas_id` int(10) UNSIGNED NOT NULL,
  `fasilitas_image` varchar(200) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`fasilitas_id`, `fasilitas_image`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(14, '1717942745_IMG20240221075739.jpg', 'Ruangan Kelas', 'Ruangan Kelas memiliki  infocus, papan tulis serta meja dan kursi sesuai dengan jumlah siswa jumlah ruangan kelas saat ini adalah 13.', NULL, NULL),
(15, '1717942795_IMG20240325085408 (1).jpg', 'Perpustakaan', 'Perpustakaan sekolah memilki banyak jenis buku  seperti dongeng, ensiklope- dia, novel, komik dan lain  lainnya.', NULL, NULL),
(16, '1717942832_2024-06-04 at 16.00.28_d4fb0647.jpg', 'Ruang Pimpinan', 'Ruang pimpinan sebagai  kantor atau ruangan  untuk kepala sekolah.', NULL, NULL),
(17, '1717942867_IMG20240404135337 (1).jpg', 'Laboratorium Komputer', 'Ruangan Laboratorium  komputer disesuaikan  dengan jumlah banyaknya siswa dan memudahkan  siswadalam pelajaran teknologi komputer.', NULL, NULL),
(18, '1717942903_IMG20240404135531 (1).jpg', 'Toilet', 'Jumlah toilet 8 dengan   perempuan 4 dan  untuk  pria 4.', NULL, NULL),
(19, '1717942935_IMG20240404135722 (1).jpg', 'Lapangan Sekolah', 'Lapangan menjadi tempat siswa melakukan upacara,  olahraga dan lain-lainya Lapanga luas yang dapat menampung seluruh siswa  SD Swasta Filadelfia.', NULL, NULL),
(20, '1717942966_2024-06-04 at 16.12.30_729eba58.jpg', 'Ruang Gudang', 'Ruang gudang menjadi tempat untuk menyimpan   barang-barang yang akan dipakai nantinya.', NULL, NULL),
(21, '1717942999_2024-06-04 at 16.15.59_0adc96af.jpg', 'Ruang Guru', 'Ruang guru menjadi ruangan untuk para guru dan para  pegawai staff  SD Swasta  Filadelfia.', NULL, NULL),
(22, '1717943031_2024-06-04 at 16.16.25_ab486223.jpg', 'Ruang Ibadah', 'Ruang ibadah tempat  siswa ataupun staff  untuk melakukan ibadah.', NULL, NULL),
(23, '1718092336_WhatsApp Image 2024-06-11 at 13.18.35_1d4e27b2.jpg', 'Ruang UKS', 'Fasilitas kesehatan yang disediakan oleh sekolah untuk memberikan pelayanan kesehatan dasar bagi siswa/i dan staff sekolah.', NULL, NULL),
(24, '1718092399_WhatsApp Image 2024-06-11 at 13.18.35_9493e697.jpg', 'WiFi', 'Pihak sekolah menyediakan WiFi sebagai sarana untuk mendukung kegiatan belajar mengajar dan operasional sekolah.', NULL, NULL),
(25, '1718094274_WhatsApp Image 2024-06-11 at 13.18.34_f4cdc1c5.jpg', 'Parkir', 'Area yang disediakan sekolah untuk memarkir kendaraan staff, pegawai dan tamu sekolah.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_29_071525_create_personal_access_tokens_table', 1),
(5, '2024_03_30_113126_add_column_username_to_users_table', 1),
(6, '2024_03_30_120343_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('EMY4qhEB2qXwlmd0uM5CJrvNdR9GmkYAV9pvhNp3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTA3d2hSeFlad1Q4cFY5bzBnYk1IY0t3ZGE3VFdLRlRGNkpXOVhPSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2RhdGFzZWtvbGFodXNlciI7fX0=', 1718113136),
('L64I4rc9EBnUj0RWSB3M39tRYYgkBvsXAXkaapoT', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNlFjOEtjQnJBbVZWenRMN2pONFJkVWZtN1N3cVlrSUNtZ2J6YnVXbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2Zhc2lsaXRhcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1718116759);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `path_image` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `path_image`, `created_at`, `updated_at`) VALUES
(1, 'Filadelfia', 'Filadelfia', 'sdswastafiladelfiatarutung@gmail.com', NULL, '$2y$10$8vNfRUMwFRB6CjTv1YO.Weez8n5zeFv8y8LPkX6BytR5sHkbjXlqa', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`beranda_id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `dataalumni`
--
ALTER TABLE `dataalumni`
  ADD PRIMARY KEY (`dataalumni_id`);

--
-- Indeks untuk tabel `datasekolah`
--
ALTER TABLE `datasekolah`
  ADD PRIMARY KEY (`datasekolah_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beranda`
--
ALTER TABLE `beranda`
  MODIFY `beranda_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `dataalumni`
--
ALTER TABLE `dataalumni`
  MODIFY `dataalumni_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `datasekolah`
--
ALTER TABLE `datasekolah`
  MODIFY `datasekolah_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `fasilitas_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
