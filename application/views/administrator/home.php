<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="Be-one is a clean HTML5/CSS3 template suitable for Business, Corporate, Taxes, Broker, Ad...">
   <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Title -->
<title>Website Resmi Badan Keuangan Daerah Kota Padangsidimpuan</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/img/favicon.ico">


<!-- CSS Here -->
   <!-- MagnificPopup.css -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
   <!-- SlickNav.css -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slicknav.min.css">
   <!-- Owl.carousel.css -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel-2.3.4.min.css">
   <!-- Fontawesome.css -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome-free-5.12.0.min.css">
   <!-- Bootstrap.css -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-4.3.1.min.css">
   <!-- Default.css -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/default.css">
   <!-- Style.css -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
   <!-- Responsive.css -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">

   <!-- ColorNip.css -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/colornip.min.css">
   <link id="theme" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-colors/theme-default.css">


   <!-- Jquery -->
   <script src="<?php echo base_url()?>assets/js/jquery-3.4.1.min.js"></script>

</head>
<body>  
    <!-- Start Header Area -->
    <div>
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-lg-14 col-14">
                            <br>
                            <table>
                            <tr>
                            <td><img src="<?php echo base_url('assets/')?>logo.jpg" alt="" width="100"></td>
                            <td>
                            <h4>&nbsp HALAMAN ADMINISTRATOR</h4>
                            <h4>&nbsp WEBSITE BADAN KEUANGAN DAERAH</h4>
                            </td>
                            <td>
                            <nav class="menu-wrapper">
                            <ul class="main-menu">
                                <b><li class="active"><a href="#">Beranda</a></li></b>
                                <b><li><a href="#feature">Tentang Kami</a></li></b>
                                <b><li><a href="#blog">Download</a></li></b>
                                <b><li><a href="#contact-us">Situs Terkait</a></li></b>
                                <b><li><a href="<?php echo base_url('administrator/logout'); ?>">Logout</a></li></b>
                            </ul>
                            </nav>
                            </td>
                            <tr>
                            </table>
                    </div>
                    <div class="col-6 d-lg-none static text-right">
                        <div class="show-mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Area -->
    <br>
    
    <!-- Start We are Bemax Area -->
    <div class="bemax-area gray-bg pt-65 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Selamat Datang, <?= $this->session->userdata('nama');?>!</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                           <a href="#"> <i class="fas fa-desktop"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Responsive Design</a></h6>
                            <p>Vestibulum non diam quis nisl dignissim posuere a vulputate urna nunc velit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="far fa-gem"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Very Easy Customize</a></h6>
                            <p>Vestibulum non diam quis nisl dignissim posuere a vulputate urna nunc velit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-bullhorn"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Free Font Icons</a></h6>
                            <p>Vestibulum non diam quis nisl dignissim posuere a vulputate urna nunc velit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-tablet-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Mobile Ready</a></h6>
                            <p>Vestibulum non diam quis nisl dignissim posuere a vulputate urna nunc velit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Modern Style</a></h6>
                            <p>Vestibulum non diam quis nisl dignissim posuere a vulputate urna nunc velit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-comments"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Awesome Support</a></h6>
                            <p>Vestibulum non diam quis nisl dignissim posuere a vulputate urna nunc velit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End We are Bemax Area -->
    
    <!-- End Copyright Area -->
    <div class="copyright-area black-bg">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="copyright-area ">
                        <p>Copyright © 2021 Badan Keuangan Daerah Kota Padangsidimpuan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
<!-- JS -->
   <!-- Popper.js -->
   <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
   <!-- Bootstrap.js -->
   <script src="<?php echo base_url()?>assets/js/bootstrap-4.3.1.min.js"></script>
   <!-- Modernizr.js -->
   <script src="<?php echo base_url()?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
   <!-- Owl.Carousel.js -->
   <script src="<?php echo base_url()?>assets/js/vendor/owl.carousel-2.3.4.min.js"></script>
   <script src="<?php echo base_url()?>assets/js/vendor/owl.carousel2.thumbs.min.js"></script>
   <!-- Waypoints.js -->
   <script src="<?php echo base_url()?>assets/js/vendor/waypoints-4.0.1.min.js"></script>
   <!-- ColorNip.js -->
   <script src="<?php echo base_url()?>assets/js/vendor/colornip.min.js"></script>
   <!-- SlickNav.js -->
   <script src="<?php echo base_url()?>assets/js/vendor/slicknav.min.js"></script>
   <!-- ScrollUp.js -->
   <script src="<?php echo base_url()?>assets/js/vendor/jquery.scrollUp.min.js"></script>
   <!-- MagnificPopup.js -->
   <script src="<?php echo base_url()?>assets/js/vendor/magnific-popup.min.js"></script>

   <!-- Main.js -->
   <script src="<?php echo base_url()?>assets/js/main.js"></script>
</body>
</html>

