/*
SQLyog Enterprise - MySQL GUI v8.1 
MySQL - 5.6.21 : Database - mp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`mp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mp`;

/*Table structure for table `tb_hasil` */

DROP TABLE IF EXISTS `tb_hasil`;

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hasil` varchar(100) DEFAULT NULL,
  `no_induk` varchar(5) DEFAULT NULL,
  `file_hasil` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_hasil`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_hasil` */

/*Table structure for table `tb_kamus` */

DROP TABLE IF EXISTS `tb_kamus`;

CREATE TABLE `tb_kamus` (
  `id_kamus` int(11) NOT NULL AUTO_INCREMENT,
  `kata` varchar(100) DEFAULT NULL,
  `deskrip` text,
  PRIMARY KEY (`id_kamus`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kamus` */

insert  into `tb_kamus`(id_kamus,kata,deskrip) values (3,'Alternate Key','candidate key yang tidak dipakai sebagai primary key atau Candidate key yang tidak dipilih sebagai primary key. Attribute'),(4,'Attribute','Kolom pada pada sebuah relasi. Setiap entitas pasti memiliki aribut yang mendeskripsikan karakter dari entitas tersebut. Penentuan atau pemilihan atribut-atribut yang relevan bagi sebuah entitas merupakan hal penting dalam pembentukan model data.'),(5,'Atribut Key','Satu atau gabungan dari beberapa atribut yang dapat membedakan semua baris data ( Row/Record ) dalam tabel secara unik. Dikatakan unik jika pada atribut yang dijadikan key tidak boleh ada baris data dengan nilai yang sama   Contoh : Nomor pokok mahasiswa (NPM), NIM dan nomor pokok lainnya.'),(6,'Atribut simple','Atribut yang bernilai atomic, tidak dapat dipecah/ dipilah lagi   Contoh : Alamat, penerbit, tahun terbit, judul buku.'),(7,'Atribut Multivalue','nilai dari suatu attribute yang mempunyai lebih dari satu (multivalue) nilai dari atrribute yang bersangkutan   Contoh : dari sebuah buku, yaitu terdapat beberapa pengarang.'),(8,'Atribut Composite','Suatu atribut yang terdiri dari beberapa atribut yang lebih kecil yang mempunyai arti tertentu yang masih bisah dipecah lagi atau mempunyai sub attribute. Contoh : dari entitas nama yaitu nama depan, nama tengah, dan nama belakang.'),(9,'Atribut Derivatif','Atribut yang tidak harus disimpan dalam database Ex. Total. atau atribut yang dihasilkan dari atribut lain atau dari suatu relationship. Atribut ini dilambangkan dengan bentuk oval yang bergaris putus-putus.'),(10,'Authentication','Authentication adalah suatu proses untuk melakukan validasi terhadap user credentials, yang ditujukan untuk menentukan apakah seorang user diperkenankan untuk mengakses jaringan atau computing resources. Bentuk authentication yang paling sering dihadapi adalah saat  diharuskan untuk memasukkan user name dan password.'),(11,'Backing Up (Back Up)','Proses penyalinan isi server (hard-disk), baik berupa data, operating system, aplikasi, dsb. ke media penyimpanan lain dengan tujuan sebagai cadangan apabila isi server (hard-disk) tersebut rusak. Bacuk up dilakukan secara berkala sesuai kebutuhan.'),(12,'Binary','Melibatkan dua entitas'),(13,'Cardinality','Jumlah Tuple dalam sebuah relasi.'),(14,'Concurrency','Pemakai database umumnya lebih dari satu (banyak) atau biasa disebut multiuser, dan mereka sering mengakses sebuah database (melalui DBMS) dalam waktu yang bersamaan. Concurrency adalah banyaknya transaksi yang dijalankan secara bersamaan dalam satu waktu.'),(15,'Commit','Proses perubahan (updating) dari record di sebuah database. Pada konteks dari sebuah transaksi di database,  commit mengacu pada penyimpanan data secara permanen setelah dilakukan perubahan. '),(16,'Candidate key','Suatu atribut atau satu set minimal atribut yang mengidentifikasikan secara unik suatu kejadian spesifik dari entitas. Atribut di dalam relasi yang biasanya mempunyai nilai unik. Satu set minimal dari atribut menyatakan secara tak langsung dimana kita tidak dapat membuang beberapa atribut dalam set tanpa merusak kepemilikan yang unik.'),(17,'Database management system (DBMS)','DBMS merupakan suatu sistem software yang memungkinkan seorang user dapat mendefinisikan, membuat, dan memelihara serta menyediakan akses terkontrol terhadap data, nah ini penting, kalau tidak mengetahui DBMS, gimana anda dapat membuat dan mengakses basis data.'),(18,'Data Value','Data aktual atau infomasi yang disimpan ditiap data elemen. Isi atribut disebut nilai data. Contohnya adalah atribut Nama Mahasiswa, dan data valuenya adalah Budi, Andi, Dodi.'),(19,'Degree','Jumlah Atribut dalam sebuah relasi'),(20,'Data Mining','Data mining adalah suatu proses menemukan hubungan yang berarti, pola, dan kecenderungan dengan memeriksa dalam sekumpulan besar data yang tersimpan dalam penyimpanan dengan menggunakan teknik pengenalan pola seperti teknik statisik dan matematika. Data mining diterapkan antara lain pada: clustering, classification, association rule mining, neural network, genetic algorithm dan lain-lain. Yang membedakan persepsi terhadap data mining adalah perkembangan teknik-teknik data mining untuk aplikasi pada database skala besar.'),(21,'Data Warehouse','Data warehouse adalah suatu sistem komputer untuk mengarsipkan dan menganalisis data historis suatu organisasi seperti data penjualan, gaji, dan informasi lain dari operasi harian. Pada umumnya suatu organisasi menyalin informasi dari sistem operasionalnya (seperti penjualan dan SDM) ke gudang data menurut jadwal teratur, misalnya setiap malam atau setiap akhir minggu. Setelah itu, manajemen dapat melakukan kueri kompleks dan analisis terhadap informasi tersebut tanpa membebani sistem yang sedang beroperasi.'),(22,'Deadlock','Kondisi di mana proses terhenti (tidak dapat dilanjutkan), atau umum dikatakan â€œhangâ€. Ilustrasi sederhana adalah ketika di persimpangan jalan, tidak ada kendaraan yang dapat berjalan (buntu/ stag) karena semula semua kendaraan berebut menggunakan jalan duluan.'),(23,'Data Updating','perubahan terhadap data harus dilakukan berulang kali mengingat data yang sama terdapat di berbagai tempat penyimpanan.'),(24,'Entitas','Entititas adalah orang, tempat, kejadian atau konsep yang informasinya direkam. Pada bidang kesehatan Entity adalah Pasien, Dokter, Kamar.'),(25,'Enterprise','suatu bentuk organisasi data yang disimpan dalam basis data merupakan data operasional dari suatu Enterprise.'),(26,'File','kumpulan record-record sejenis yang mempunyai panjang elemen yang sama, atribute yang sama, namun berbeda-beda data valuenya. Foreign Key'),(27,'Foreign Key','Foreign Key adalah kolom yang diambil dari primary key entitas lain yang menunjukkan hubungan antar dua table tersebut'),(28,'Field','Field merupakan kolom dari sebuah table. Field memiliki ukuran type data tertentu yang menentukan bagaimana data nantinya tersimpan.'),(29,'Index','Field lain yang digunakan untuk mengurutkan Record pada DataBase (dapat Primary atau Secondary Index)'),(30,'Insert','Insert berarti menyisipkan. Pada database, Insert merupakan salah satu perintah dalam SQL yang termasuk ke dalam DML (Data Manipulation Language) untuk menambahkan atau menyisipkan data kedalam suatu Table. Bentuk umum dari perintah Insert adalah sebagai berikut : INSERT INTO namatabel (column1,column2,column3,â€¦) VALUES (value1,value2,value3,â€¦);'),(31,'Isolation','Setiap transaksi jangan terganggu dengan transaksi lain. Contoh jika â€œAâ€ sedang mentransfer dana ke â€œBâ€, dan ada â€œCâ€ yang juga ingin mentranser dananya ke â€œAâ€ atau â€œBâ€, maka prosesnya diselesaikan dulu masing-masing (tunggu giliran per proses selesai dulu).'),(32,'Kardinalitas','jumlah tuple yang terdapat pada sebuah relasi. Pada gambar 2 relasi nilai mata kuliah, kardinalitasnya adalah 3.'),(33,'Kunci Kandidat','Kunci kandidat adalah sebuah atribut atau gabungan beberapa atribut yang digunakan untuk membedakan antara satu tuple dengan tuple lainnya. Dengan kata lain kunci tersebut dapat bertindak sebagai identitas yang unik bagi baris-baris dalam suatu relasi. 3.8. '),(34,'Kunci Primer Utama','Kunci primer atau kunci utama adalah kunci kandidat yang dipilih sebagai identitas untuk membedakan satu tuple dengan tuple lain dalam suatu relasi. Perlu diketahui dalam basis data relasional, sebuah relasi harus memiliki satu kunci primer saja.'),(35,'Kunci Asing/Tamu','Kunci asing atau kunci tamu adalah sebuah atribut atau gabungan dari beberapa atribut dalam suatu relasi yang merujuk (merefrensi) ke kunci primer relasi lain. Kunci asing dalam suatu relasi yang mengacu pada kunci primer milik relasi lain merupakan perwujudan untuk membentuk hubungan antar relasi.'),(36,'Kunci Elemen Data ( Key Data Element )','Tanda pengenal yang secara unik mengidentifikasikan entitas dari suatu kumpulan entitas. Contoh Entitas Mahasiswa yang mempunyai atribut-atribut npm, nama, alamat, tanggal lahir menggunakan Kunci Elemen Data npm.'),(37,'Key','Key merupakan suatu field yang dapat dijadikan kunci dalam operasi tabel. Dalam konsep database, key memiliki banyak jenis diantaranya Primary Key, Foreign Key, Composite Key, dll.'),(38,'Mysql','Sebuah RBDMS yang berbasiskan database server'),(39,'Many-to-Many','Sebuah entitas pada A berhubungan dengan paling banyak satu entitas pada B. sebuah entitas pada B Dapat dihubungkan dengan nol atau lebih entitas pada A.'),(40,'Normalisasi','Normalisasi  merupakan suatu pendekatan sistematis untuk meminimalkan redundansi data pada suatu database agar database tersebut dapat bekerja dengan optimal.'),(41,'Null','nilai dari suatu attribute yang mempunyai lebih dari satu (multivalue) nilai dari atrribute yang bersangkutan   Contoh : dari sebuah buku, yaitu terdapat beberapa pengarang.'),(42,'One-to-One','sebuah entitas pada A berhubungan dengan paling banyak satu entitas pada B dan sebuah entitas pada B berhubungan dengan paling banyak pada A.'),(43,'One To Many','Hubungan satu kebanyak antara dua field Contoh : seorang mahasiswa dapat mengambil lebih dari satu mata kuliah yang di inginkan'),(44,'Many-to-Many','adalah hubungan banyak ke banyak antara dua field Contoh : seorang dosen dapat mengajar banyak mahasiswa, dan sebaliknya seorang mahasiswa juga dapat diajar oleh lebih dari satu dosen'),(45,'Record / Tuple','Kumpulan elemen atau kategori yang saling berkaitan dan menginformasikan tentang suatu entity secara lengkap. Contohnya NIM, Nama Mahasiswa, Alamat Mahasiswa, Tempat / Tanggal Lahir Mahasiswa. Replikasi'),(46,'Replikasi','Replikasi database adalah Seperangkat teknologi yang digunakan untuk menyalin dan mendistribusikan data dari satu database ke database yang lain.'),(47,'Recovery','Recovery adalah Proses untuk mengupdate isi server (hard-disk), baik berupa data, operating system, aplikasi, dsb. dengan back up file yang terakhir kalinya dilakukan. Recovery ini dilakukan bila terjadi kerusakan seluruh atau sebagian isi server.'),(48,'Redundansi','Redundansi data adalah Duplikasi data dalam beberapa file data sehingga data yang sama di simpan di dalam lebih dari 1 lokasi.'),(49,'Referential integrity constraint','Pernyataan yang membatasi nilai-nilai foreign key ke nilai-nilai yang sudah ada sebagai primary key pada relasi yang berhubungan.'),(50,'Select','Dalam SQL, istilah Select digunakan sebagai perintah untuk menampilkan data table dari database, baik seluruh data ataupun hanya data yang kita butuhkan untuk ditampilkan.'),(51,'Super key','Satu atribut / kumpulan atribut yang secara unik mengidentifikasi sebuah tuple di dalam relasi.'),(52,'SQL','SQL atau Structured Query Language merupakan suatu bahasa (language) yang digunakan untuk mengakses database. SQL sering disebut juga sebagai query.'),(53,'Tupel','Tuple merupakan baris pada sebuah relasi atau kumpulan elemen-elemen yang saling berkaitan menginformasikan tentang suatu entitas secara lengkap. Satu record mewakili satu data atau informasi tentang seseorang, misalnya : NPM, nama mahasiswa, alamat, kota, dll.'),(54,'Ternary','Melibatkan dua entitas.'),(55,'Unary','Cuma ada satu entitas.'),(56,'Query','Seperti sebuah Table, tapi menggunkan perintah SQL (string statements) untuk membaca dan menulis pada basisdata.');

/*Table structure for table `tb_materi` */

DROP TABLE IF EXISTS `tb_materi`;

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `isi` longtext,
  `youtube` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

/*Data for the table `tb_materi` */

/*Table structure for table `tb_siswa` */

DROP TABLE IF EXISTS `tb_siswa`;

CREATE TABLE `tb_siswa` (
  `id_siswa` int(16) NOT NULL,
  `no_induk` varchar(3) DEFAULT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` text,
  `tanggal_lahir` date DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_siswa` */

insert  into `tb_siswa`(id_siswa,no_induk,nama,alamat,tanggal_lahir) values (1,'001','siswa1','desa pojok kecamatan porong kabupaten sidoarjo','2019-07-22'),(2,'002','siswa2','Desa Lajuk Rt.05 Rw.02 Kecamatan Porong Kabupaten Sidoarjo','2019-07-02'),(3,'003','siswa3','desa pandoka porong sidoarjo','2019-07-03'),(4,'004','siswa4','desa kedung solo porong sidoarjo','2019-07-25'),(5,'005','siswa5','desa pojok kecamatan porong kabupaten sidoarjo','2019-07-15'),(6,'006','siswa6','desa pandoka porong sidoarjo','2019-07-19'),(7,'007','siswa7','desa jabon','2019-07-01');

/*Table structure for table `tb_tugas` */

DROP TABLE IF EXISTS `tb_tugas`;

CREATE TABLE `tb_tugas` (
  `id_tugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `tugas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tugas`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_tugas` */

insert  into `tb_tugas`(id_tugas,nama,tugas) values (6,'Tugas Evaluasi Pertemuan ke3','Tugas Evaluasi Pertemuan ke3_Basis Data.pdf');

/*Table structure for table `tb_users` */

DROP TABLE IF EXISTS `tb_users`;

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tb_users` */

insert  into `tb_users`(id_user,username,password,level) values (1,'admin','8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918','admin'),(10,'guruku','cedab21709b18f5ae37ceab1459959a680a7a7d90a1987c15aeb2e34e705d30a','guru'),(13,'001','a102282b5ba22d361d85d002db1bb5f2435d098ba2eff3888cbb2737ee4da1b5','siswa'),(14,'002','152468b70af86c106c94e5c10c810b4f39295162fe3242cfd1c34778d428228c','siswa'),(15,'003','80ee1e26aad271db79fb26301ab4e34428aafb0bdc7fe0c9527bb71e63316d66','siswa'),(16,'004','4d88fcd871f5ada356be72392b0c3e30dfe5f6dd8b59448d8fe0c9db840bd6da','siswa'),(17,'005','3ff98210774cfef5513371d5eeb67f0783be38cd21bbb54d1d26e9dfb62635ec','siswa'),(18,'006','55e7f34750bbb87c4ac014c62b820dde2b8161aa29922fa39b7494d5d41351ca','siswa'),(19,'007','4634e2211cf593f1b66376f959a2ded98019e383056e26829c5d4aa9f6cb93ab','siswa');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
