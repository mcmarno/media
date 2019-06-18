<?php 
session_start();

    // cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:login.php");
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Media pembelajaran online komputer dan jaringan dasar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.theme.default.min.css">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/a.png" alt="" /></a>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <?php
    if ($_SESSION['level']=="admin")
    {
        include("headerAdmin.php");
    }
    elseif ($_SESSION['level']=="guru")
    {
        include("headerGuru.php");
    }
    elseif ($_SESSION['level']=="siswa")
    {
        include("headerSiswa.php");
    }
    ?>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
   
    <div class="notika-status-area">
        <div class="container" >
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="owl-carousel owl-theme">
                    <img class="owl-lazy" data-src="img/home1.jpg" alt="">
                    <img class="owl-lazy" data-src="img/home3.jpg" alt="">
                    <img class="owl-lazy" data-src="img/home4.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    <div class="container">
        <b><center>VISI SMK "Antartika" 1 SIDOARJO</center></b></p>
    Terwujudnya peserta didik SMK Antartika 1 Sidoarjo yang memiliki budi pekerti luhur, wawasan Imtaq dan Iptek, ketrampilan, jiwa berwirausaha dan mampu bersaing di Era Global.</p>
    <b><center>MISI SMK "Antartika" 1 SIDOARJO</center></b></p>
1. Menyiapkan tenaga tingkat menengah yang produktif, adaptif, kreatif serta memiliki jiwa wirausaha sehingga dapat menciptakan lapangan kerja.</p>
2. Menyiapkan siswa memasuki lapangan kerja, memilih karir, mampu berkompetensi serta mengembangkan jiwa profesional.</p>
3. Melaksanakan pendidikan dan pelatihan kejuruan yang adaptif, fleksibel, dan berwawasan global.</p>
4. Mengembangkan potensi sekolah yang bernuansa industri dan mampu bersaing di tingkat Nasional dan Internasional.</p>
<b><center>TUJUAN SMK "Antartika" 1 SIDOARJO</center></b></p>
1. Memberikan pembekalan peserta didik keimanan yang kuat serta cinta tanah air guna menghadapi pesaing dari bangsa lain.</p>
2. Mempersiapkan peserta didik menjadi manusia produktif, mampu bekerja mandiri, dan dapat diserap DU/DI sebagai tenaga kerja tingkat menengah sesuai dengan kompetensi keahlian yang dimilikinya.</p>
3. Memberikan pembekalan peserta didik agar mampu berkarir, ulet dan giat dalam berkompetisi, mampu beradaptasi di lingkungan kerja dan dapat mengembangkan sikap profesional sesuai kompetensi keahlian yang dimilikinya.</p>
4. Membekali peserta didik dalam ilmu pengetahuan,teknologi, seni dan wawasan entreuprener agar mampu mengembangkan diri dikemudian hari baik secara mandiri maupun melanjutkan pada jenjang penidikan lebih tinggi.
    </div>
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>P.TI UMSIDA 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
   
    <!-- End Sale Statistic area-->
     <!-- Main Menu area End-->
    <!-- Start Status area -->
   <!-- Start Email Statistic area-->
    
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
           
        
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
   
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="js/chat/moment.min.js"></script>
    <script src="js/chat/jquery.chat.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    
    <script src="js/owl.carousel.min.js"></script>
    <script src="owl/dist/owl.carousel.js"></script>
    <script src="owl/dist/owl.carousel.min.js"></script>
    <script type="text/javascript">

     $('.owl-carousel').owlCarousel({
        items:1,
        lazyLoad:true,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
    });
</script>
   
</body>

</html>