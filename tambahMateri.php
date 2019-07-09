<?php 
session_start();

    // cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:login.php");
}
if($_SESSION['level']!=("admin" OR "guru")) {
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
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="css/summernote/summernote.css">
    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="css/themesaller-forms.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/color-picker/farbtastic.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/chosen/chosen.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notification/notification.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
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
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php
    if ($_SESSION['level']=="admin")
    {
        include("headerAdmin.php");
    }
    elseif ($_SESSION['level']=="guru")
    {
        include("headerGuru.php");
    }
    ?>
    <!-- Main Menu area End-->
    <!-- Start Status area -->

    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
   
    <!-- End Sale Statistic area-->
    <!-- Start Email Statistic area-->
    
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
    
    <!-- Breadcomb area End-->
    <!-- Normal Table area Start-->
    <div class="form-element-area">
        <form action="prosesTambahMateri.php" method="POST" enctype="multipart/form-data">                     
            <div class="row">
                <div class="summernote-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="summernote-wrap mg-t-30">
                                    <div class="cmp-tb-hd bcs-hd">
                                        <h2>Tambah Data Materi</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-form"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama materi">
                                        </div>
                                    </div>
                                    <div class="cmp-tb-hd bsc-smp-sm">
                                        <label>Isi materi</label>
                                    </div>
                                    <div>
                                        <textarea name="isi" class="html-editor"></textarea>
                                    </div>
                                        <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-credit-card"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="youtube" placeholder="Link youtube">
                                        </div>
                                    </div>
                                    <div>
                                    <button class="btn btn-success notika-btn-success" type="submit" title="simpan">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
    <script src="js/owl.carousel.min.js"></script>
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
    <!-- flot JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!-- Input Mask JS
        ============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
        ============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
        ============================================ -->
    <script src="js/color-picker/farbtastic.min.js"></script>
    <script src="js/color-picker/color-picker.js"></script>
    <!--  notification JS
        ============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  chosen JS
        ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="js/tawk-chat.js"></script>
    <script src="js/summernote/summernote-updated.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
   

</body>

</html>