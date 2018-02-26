-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 08:44 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectlabti`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'sandy', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name_food` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `range_h` varchar(25) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `bahan` varchar(500) NOT NULL,
  `c_buat` varchar(500) NOT NULL,
  `pic_food` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name_food`, `detail`, `range_h`, `rating`, `bahan`, `c_buat`, `pic_food`) VALUES
(23, 'Dawet Ireng', 'Dawet Ireng adalah es cendol yang berasal dari daerah Butuh, Purworejo, Jawa Tengah. Kata ireng dari bahasa Jawa berarti hitam.', '7k - 15k', '8/10', 'Bahan Kuah:  •	200 ml santan cair instan  •	es serut secukupnya  Bahan Dawet:  •	75 gr tepung beras  •	50 gr tepung sagu  •	600 ml air  •	1/2 sdt garam  •	2 sdm abu merang  •	1 sdm air kapur sirih  •	secukupnya air es untuk merendam  Bahan Sirup Gula:  •	250 gr gula merah  •	250 ml air  •	2 lembar daun pandan  •	1/2 sdt garam  •	100 gr nangka, iris tipis ', '1.	Dawet: Larutkan tepung beras, tepung sagu, air, garam dan abu merang. Aduk rata. Masak sambil diaduk sampai adonan meletup-letup dan kental. 2.	Taruh cetakan dawet di atas baskom berisi air es. Tuang adonan ke dalam cetakan dawet. Tekan tutupnya hingga adonan keluar dan terendam air es. Lakukan hingga adonan habis. 3.	Sirup: Didihkan gula merah, air, daun pandan dan garam hingga kental. Tambahkan irisan nangka. Aduk rata, dinginkan. 4.	Tata dalam gelas/mangkok saji dawet, santan, sirup dan es', '1515903564279.jpg'),
(24, 'Lumpia Semarang', 'Lumpia semarang (atau loenpia semarang) adalah makanan semacam rollade yang berisi rebung, telur, dan daging ayam atau udang. Cita rasa lumpia semarang adalah perpaduan rasa antara Tionghoa dan Indonesia.', '5k - 20k', '9/10', '•	100 g tepung terigu  •	50 g tepung beras  •	1 butir telur  •	secukupnya Air  •	secukupnya Garam  •	Kocokan kuning telur  •	Bahan isi :  •	150 g udang kupas  •	150 g rebung (aku ganti bengkuang) diparut  •	100 g kol, diiris  •	secukupnya Daun bawang  •	3 siung bawang putih, dihaluskan  •	secukupnya Garam, gula, penyedap ', '1.	Untuk kulit : Campur semua bahan kulit, aduk rata, lalu buat dadar di teflon hingga adonan habis 2.	Untuk isi : Rebus terlebih dahulu udang, hingga matang (berwarna orange kemerahan) setelah itu dicincang halus 3.	Tumis bawang putih yg dihaluskan, masukkan udang cincang, kubis, rebung/bengkuang,daun bawang, masak hingga sayuran layu. Koreksi rasa 4.	Masukkan isian ke dalam kulit, dilipat. diberi kuning telur kocok utk menempel ujung lipatan lumpia. 5.	Goreng lumpia hingga kecokelatan 6.	Sajik', '1515906382698.jpg'),
(25, 'Tahu Petis', 'Tahu petis adalah jajanan khas kota Semarang berupa tahu goreng yang dimakan dengan petis (saus berwarna hitam kental yang biasanya terbuat dari udang) yang dioleskan/disisipkan di tengah-tengah tahu.', '5k - 15k', '7.5/10', '•	2 sdm petis udang  •	3-4 siung bawang putih  •	sesuai selera cabai  •	1 sdt tepung maizena  •	150 ml air  •	20 gr gula merah yg sdh diiris tipis  •	serai dan daun jeruk  •	garam  •	(kaldu bubuk jika perlu) ', '1.	Larutkan tepung maizena kedalam air. Aduk rata 2.	Haluskan bawang putih dan cabai. Tumis lalu masukkan serai dan daun jeruk sampai harum dan matang. 3.	Masukkan petis udang adukrata, lalu gula merah masuk aduk sampai tercampur rata. Tuang cairan maizena sambil di aduk cepat sampai tercampur rata. Masukkan garam. Tes rasa. 4.	Jika sudah pas, aduk trs sampai petis meletup letup dan kental. 5.	Petis siap dinikmati. ', '1515906604319.jpg'),
(26, 'Tempe Mendoan', 'Tempe Mendoan adalah sejenis masakan tempe yang terbuat dari tempe yang tipis, dan digoreng dengan tepung sehingga rasanya gurih dan renyah. ', '2k - 5k', '8.5/10', '•	1 tempe  •	1/4 terigu  •	2 bawang putih  •	Garam  •	Lada  •	Daun bawang  •	Minyak goreng ', '1.	Iris tempe tipis tipis, kalau saya bisa sampe 12 bagian hehe 2.	Haluskan bawang putih,lada secukupnya (bisa pake lada bubuk) garam 3.	Siapkan terigu kasih air secukupnya, masukan bumbu yg sudah di haluskan 4.	Iris daun bawang setipis mungkin masukan ke terigu yg sudah di kasih bumbu, aduk rata 5.	Terakhir panaskan minyak goreng tempenya yg sudah di kasih tepubg, masak angkat jika sudah kelihatan matang.. 6.	Siap sajikan', '1515906772411.jpg'),
(27, 'Nasi Gandul', 'Nasi gandul atau Sego Gandul adalah masakan khas yang berasal dari daerah Pati, Jawa Tengah, Indonesia yang sepintas mirip dengan Semur Daging dan Gulai.', '15k - 20k', '8/10', '•	Daging sapi + jeroan (di marinasi dgn nanas parut sekitar 45mnt)  •	Bumbu halus:  •	Bawang merah  •	Bawang putih  •	Pala  •	Merica (saya pake merica bubuk)  •	Cabe merah  •	Ketumbar (saya pake yg bubuk)  •	Jahe  •	Kencur  •	Terasi  •	Gula jawa  •	Kemiri  •	Jinten  •	Santan  •	Laos ', '1.	Setelah daging di marinasi cuci bersih 2.	Tumis bumbu halus smpe harum, masukan daging aduk sampai tercampur semua 3.	Masukan Laos geprek+santan 4.	Aduk² sampai rata jangan sampai pecah santannya 5.	Klo mau daging lebih empuk bisa di masukan sendok makan 6.	Tunggu sampai matang, tes rasa bisa di berikan penyedap rasa 7.	Kalo sudah enak siap di sajikan', '1515906964749.jpg'),
(28, 'Rondo Royal', 'Rondha Royal atau Monyos adalah salah satu makanan ringan traditional khas Jepara yang terbuat dari tepung beras yang di isi dengan tape dan di goreng. ', '5k - 15k', '7.5/10', '•	200 gr tape singkong, haluskan  •	Adonan basah:  •	10 sdm munjung terigu  •	1 sdm gula pasir (sesuai selera)  •	1 sdt ragi instan  •	10 sdm air hangat  •	1/2 sdt garam  •	Pelapis kering:  •	3 sdm terigu  •	Sejumput vanili bubuk ', '1.	Campur terigu, gula, ragi aduk rata. Tambahkan air hangat aduk hingga kental sekali, lalu diamkan sekitar 10 menit. 2.	Masukan tape halus dan garam aduk rata. Bentuk bulat2 tape/sesuai selera, gulingkan di pelapis kering. 3.	Lalu goreng hingga kecoklatan.  4.	Sajikan..', '1515907217198.jpg'),
(29, 'Soto Kudus', 'Soto Kudus adalah salah satu soto paling terkenal di Kudus, Jawa Tengah. Soto ini mirip dengan soto ayam biasa, tetapi rasanya lebih gurih dan enak. Soto Kudus ini mempanyai 2 macam soto, yaitu soto ayam dan soto kerbau.', '15k - 25k', '8/10', '•	1 ekor ayam kampung bagi 4  •	250 gram tauge,bersihkan  •	3 lembar daun salam  •	4 cm lengkuas,memarkan  •	4 cm jahe,memarkan  •	2 batang serai,memarkan  •	1,5 liter air  •	secukupnya Garam dan gula  •	bila suka Penyedap rasa  •	Haluskan :  •	8 butir bawang merah  •	6 siung bawang putih  •	6 butir kemiri  •	1 sdm ketumbar  •	1 sdt lada putih  •	1/2 sdt jinten  •	Pelengkap :  •	4 butir telur rebus,belah dua  •	2 batang daun seledri,iris halus  •	2 buah jeruk nipis belah 4  •	Bawang merah dan pu', '1.	Rebus ayam kampung dengan air bersama daun salam dan lengkuas.beri garam dan gula secukupnya lalu masak sampai keluar kaldu dan ayamnya harum dan matang.angkat.suwir-suwir dagingnya sisihkan. 2.	Panaskan minyak tumis bumbu halus,serai,jahe sampai harum dan matang,dan benar benar harum karena akan mempengarusi rasanya.angkat. 3.	Masukkan kedalam kaldu,masak kaldu dengan api kecil hingga mendidih,aduk dan tes rasanya tambahkan garam bila perlu dan penyedap rasa. 4.	Isi mangkuk dengan tauge,dagi', '1515907429718.jpg'),
(30, 'Getuk', 'Getuk (bahasa Jawa: gethuk) adalah makanan ringan yang terbuat dengan bahan utama ketela pohon atau singkong. Getuk merupakan makanan yang mudah ditemukan di Jawa Tengah dan Jawa Timur.', '5k - 10k', '8.5/10', '•	½ kg Singkong, kemudian anda kupas dan potong-potong •	½ buah Kelapa, kemudian anda parut dan kukus •	150 gram Gula Pasir/Gula Jawa (sesuaikan kebutuhan) •	½ sendok teh Garam •	Air untuk mengukus •	Pewarna', '1.	Pertama anda kupas kulit singkongnya, kemudian anda cuci bersih dan anda potong-potong dengan ukuran sekitar 5 cm. 2.	Kemudian anda rebus singkongnya hingga matang, lalu anda angin-anginkan sampai uapnya menghilang. 3.	Selanjutnya anda campurkan singkongnya dengan garam dan gula, kemudian anda hancurkan sampai lumat. 4.	Tambahkan sedikit pewarna (bila suka & sesuaikan kebutuhan). 5.	Sajikan hangat dengan taburan parutan kelapa.', '1515907612747.jpg'),
(31, 'Wajik', 'salah satu ragam kekayaan kuliner di Indonesia. Kue wajik memiliki beberapa sebutan yang berbeda-beda di setiap tempat. Nama wajik sendiri lebih terkenal di daerah Jawa Tengah.', '5k - 10k', '7.5/10', '•	½ kg beras ketan putih. pilih yang super(bagus). •	350 gr gula merah (pilih gula merah yang enak (gula aren)) •	50 gr gula pasir •	1½ gelas Santan (bisa di ambil dari 1 - 2 butir kelapa) •	1/4 sdt garam •	2 atau 3 lembar daun pandan •	3 lembar daun jeruk purut. •	200 ml air', '1.	Mula mula cuci bersih beras ketan, rendam beras sampai terendam selama 2-3 jam. tiriskan. 2.	Panaskan kukusan/ dandang dan kukus beras ketan selama 40 menit hingga 3/4 matang. 3.	Ambil panci tersendiri masak air200 ml hingga mendidih. 4.	Kemudian masukkan beras ketan yang sudah 3/4 matang ke dalam 200 ml air mendidih. aduk rata hingga air tereserap dan meresap ke beras ketan. diamkan dulu... 5.	Di sela sela waktu silakan masak santan, gula merah, gula pasir, garam, daun pandan dan daun jeruk ', '1515907760755.jpg'),
(32, 'Nasi Liwet Solo', 'Nasi liwet adalah makanan khas kota Solo dan merupakan kuliner asli daerah Baki, Kabupaten Sukoharjo. Nasi liwet adalah nasi gurih (dimasak dengan kelapa) mirip nasi uduk, yang disajikan dengan sayur labu siam, suwiran ayam (daging ayam dipotong kecil-kec', '7k - 15k', '8/10', 'Nasi  •	4 cup beras (@160gr)  •	200 ml santan sedang  •	850 ml aer  •	2 sdt garam  •	2 lembar salam  •	1 lembar daun pandan  Ayam Suwir •	³\\? kg paha ayam/dada (blh bagian lainnya)  •	300 ml santan/aer  •	1 ruas lengkuas  •	3 lembar salam  •	Secukup nya gula garam  •	bumbu halus*  •	5 bh bawang merah  •	4 bh bawang putih  •	2 ruas kunir  Areh Putih (Optional)  •	1 bh putih telor  •	1/4 sdt garam  •	100 ml santan kental  Areh Kuning (Optional)  •	1 buah kuning telor  •	1/4 sdt garam  •	100 ml san', '1.	Membuat nasi liwet: cuci bersih beras, masukkan semua bahan dan masak dg magic com smpe matang (blh pke dandang, caranya sprti masak nasi biasa) 2.	Membuat ayam suwir: tumis bumbu halus, masukkan salam dan lengkuas, masukkan aer/santan beri gula haram secukup nya.. Ungkep hingga bnr2 meresap 3.	Areh putih n kuning: campur masing2 bumbu areh dan masak masing2 areh dg api kecil sedang hingga mngental, done (untuk yg warna kuning blh dtambah bubuk kunyit) 4.	Sayur labu siam tumis bumbu halis hng', '1515908053454.jpg'),
(33, 'Gudeg', 'Gudeg (ejaan : gudheg) adalah makanan khas Yogyakarta dan Jawa Tengah yang terbuat dari nangka muda yang dimasak dengan santan.', '10k - 15k', '7.5/10', '•	1 kg nangka muda, sdh diiris2  Bumbu halus :  •	10 bawang merah  •	4 bawang putih  •	8 kemiri  •	1 sdm ketumbar  Bumbu cemplung :  •	6 daun salam  •	3 cm lengkuas geprek  •	2 serai, geprek  •	3 daun jeruk  •	150 gr Gula merah  •	2 bgkus kecil Santan kelapa kara  •	Sesuai selera gula garam penyedap  •	Bisa ditambah telur rebus ', '1.	Masukkan dalam panci, bumbu cemplung, atasx dksih bumbu halus, atasx lagi dksih nangka, siram air santan, mask dg api kecil, trup rapat sperti diungkep kurleb 4-5 jam 2.	Kalo stgah santan uda brkurang, dtambahin telur rebus, lnjut ungkep lagi, kasi bumbu perasa ssuai selera, Gula merah bs dtambah, 3.	Terus diungkep sampai mngering, sesuai selera 4.	Sajikan', '1515911746832.jpg'),
(34, 'Soerabi Solo', 'Srabi Solo atau Serabi Solo adalah sebuah makanan ringan ala Solo, Jawa Tengah. Makanan ini terbuat dari tepung beras yang dicampur dengan santan dan digoreng di atas arang mirip pannekoek atau pannenkoek.', '15k - 20k', '8.5/10', '•	100 gram tepung beras  •	300 gram terigu  •	1 sacet susu bubuk  •	2 telor  •	1 sdt ragi  •	200 mili uht  •	500 mili santan kental  •	2 sdm gula pasir  •	secukupnya Air  •	Toping :  •	Nangka iris tipis  •	Seres ', '1.	Ayak terigu tepung beras susu bubuk ragi dan vanily...masukan gula aduk rata masukan telor aduk kembali (me mixer) tuangkan susu samtan da nair aduk lagi sampai tidak ada adonan yg bergrindil (lembut) jika kurang encer tambahkan air 2.	Panas kan teflon beri margarin oles tuang 1 sendok sayur adonan serabi goreng sampai muncul gelembung tutup wajan...lakukan sampai habis jika sudah sisihkan 3.	Beri toping nangka atau seres atau keju gulung dengan kertas nasi dan bungkus dengan plastik', '1515912532480.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
