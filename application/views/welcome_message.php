<?php 
$this->load->view('include/header'); 
?>
<style>
.slider-bg-1 {background: url(<?php echo base_url()?>uploads/<?= $slidegambarutama1->nama_berkas ?>);}
.slider-bg-2 {background: url(<?php echo base_url()?>uploads/<?= $slidegambarutama2->nama_berkas ?>);}
.slider-bg-3 {background: url(<?php echo base_url()?>uploads/<?= $slidegambarutama3->nama_berkas ?>);}

.icon-box-img-1 {background-image: url(<?php echo base_url()?>uploads/<?= $bangunanbakeuda1->nama_berkas ?>);}
.icon-box-img-2 {background-image: url(<?php echo base_url()?>uploads/<?= $bangunanbakeuda2->nama_berkas ?>);}
.icon-box-img-3 {background-image: url(<?php echo base_url()?>uploads/<?= $bangunanbakeuda3->nama_berkas ?>);}
</style>
    <br>
    <!-- Start Slider Area -->
    <div class="slider-area ">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="slider-carousel owl-carousel">
                        <div class="single-slider slider-bg-1 text-center">
                            <div class="slider-inner">
                                 </div>
                        </div>
                        <div class="single-slider slider-bg-2 text-center">
                            <div class="slider-inner">
                                 </div>
                        </div>
                        <div class="single-slider slider-bg-3 text-center">
                            <div class="slider-inner">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->
    
    <!-- Start Icon Box Area -->
    <div class="icon-box-area pt-70 pb-70" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-1">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading"><i class="far fa-chart-bar"></i> <?= $bangunanbakeuda1->judul ?></h6>
                            <div class="iconbox-content-body">
                                <p><?= $bangunanbakeuda1->keterangan ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-2">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading"><i class="fas fa-cogs"></i><?= $bangunanbakeuda2->judul ?></h6>
                            <div class="iconbox-content-body">
                                <p><?= $bangunanbakeuda2->keterangan ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-3">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading"><i class="fas fa-chart-line"></i><?= $bangunanbakeuda3->judul ?></h6>
                            <div class="iconbox-content-body">
                                <p><?= $bangunanbakeuda3->keterangan ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Icon Box Area -->
    <!-- Start Latest Project Area -->
    <div class="latest-project-area black-bg pt-70 pb-70" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Galeri Kegiatan Bakeuda</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-carousel owl-carousel text-center">
                        <div class="single-project project-bg-1">
                            <div class="project-inner">
                                <h5><a href="#">Business Growth Solutions</a></h5>
                                <p><a href="#">Finance</a>,<a href="#"> Marketing</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-2">
                            <div class="project-inner">
                                <h5><a href="#">Business Growth Solutions</a></h5>
                                <p><a href="#">Finance</a>,<a href="#"> Marketing</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-3">
                            <div class="project-inner">
                                <h5><a href="#">Business Growth Solutions</a></h5>
                                <p><a href="#">Finance</a>,<a href="#"> Marketing</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-4">
                            <div class="project-inner">
                                <h5><a href="#">Business Growth Solutions</a></h5>
                                <p><a href="#">Finance</a>,<a href="#"> Marketing</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-5">
                            <div class="project-inner">
                                <h5><a href="#">Business Growth Solutions</a></h5>
                                <p><a href="#">Finance</a>,<a href="#"> Marketing</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-6">
                            <div class="project-inner">
                                <h5><a href="#">Business Growth Solutions</a></h5>
                                <p><a href="#">Finance</a>,<a href="#"> Marketing</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-7">
                            <div class="project-inner">
                                <h5><a href="#">Business Growth Solutions</a></h5>
                                <p><a href="#">Finance</a>,<a href="#"> Marketing</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Project Area -->
    <!-- Start Why Choose Us Area -->
    <div class="choose-us-area pt-70 pb-70" id="page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Video</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $videoutama->link ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-choose-item">
                        <h6><a class="video-play" href="https://www.youtube.com/watch?v=<?= $videoutama->link?>"><i class="fas fa-gem"></i><?= $videoutama->judul ?></a></h6>
                        <p><?= $videoutama->keterangan ?></p>
                    </div>
                    <div class="single-choose-item">
                        <h6><a class="video-play" href="https://www.youtube.com/watch?v=<?= $videopendukung1->link?>"><i class="fas fa-gem"></i> <?= $videopendukung1->judul ?> </a></h6>
                        <p><?= $videopendukung1->keterangan ?></p>
                    </div>
                    <div class="single-choose-item">
                        <h6><a class="video-play" href="https://www.youtube.com/watch?v=<?= $videopendukung2->link?>"><i class="fas fa-gem"></i> <?= $videopendukung2->judul ?></a></h6>
                        <p><?= $videopendukung2->keterangan ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->
    <!-- Start Working With Us Area -->
    <div class="working-with-us-area gray-bg">
        <div class="container"> 
            <div class="row">
                <div class="col-md-6 col-12 text-center d-flex align-items-center">
                    <div class="hire-us-content">
                        <div class="section-title">
                            <h4>SULAIMAN LUBIS, S.E</h4>
                        </div>
                        <p>We’ve completed more than <span>100+</span>project for our am azing clients, If you interested?</p>
                        <a href="<?php echo base_url()?>welcome/tentangbakeuda" class="btn hire-us-btn">Struktur Organisasi</a>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="hire-us-img">
                        <img src="<?php echo base_url()?>assets/img/hire_us.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Working With Us Area -->
    <!-- Start Carousel Area -->
    <div class="carousel-area pt-80 pb-80" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4>Berita Terbaru</h4>
                    </div>
                    <div class="blog-carousel owl-carousel">
                        <div class="single-blog-item">
                            <div class="single-blog-img">
                                <img src="<?php echo base_url()?>administrator/berita" alt="">
                                <span>October 25, 2017</span>
                            </div>
                            <div class="blog-content">
                                <h5 class="post-heading"><a href="#">10 Tips for a Business Strong Start</a> </h5>
                                <p class="post-content-text">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.</p>
                                <div class="blog-btn">
                                    <div class="blog-tags">
                                        <i class="fas fa-tags"></i>
                                        <a href="#">Development</a>,
                                        <a href="#">Maketing</a>
                                    </div>
                                    <a href="#" class="btn btn-inline read-more-btn"><i class="fas fa-plus-square"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-item">
                            <div class="single-blog-img">
                                <img src="<?php echo base_url()?>uploads/03940cb9e46f5e4d8d5fa3c9f3ba56fc.jpg" alt="">
                                <span>October 25, 2017</span>
                            </div>
                            <div class="blog-content">
                                <h5 class="post-heading"><a href="#">10 Tips for a Business Strong Start</a> </h5>
                                <p class="post-content-text">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.</p>
                                <div class="blog-btn">
                                    <div class="blog-tags">
                                        <i class="fas fa-tags"></i>
                                        <a href="#">Development</a>,
                                        <a href="#">Maketing</a>
                                    </div>
                                    <a href="#" class="btn btn-inline read-more-btn"><i class="fas fa-plus-square"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-item">
                            <div class="single-blog-img">
                                <img src="<?php echo base_url()?>assets/img/blog_03.jpg" alt="">
                                <span>October 25, 2017</span>
                            </div>
                            <div class="blog-content">
                                <h5 class="post-heading"><a href="#">10 Tips for a Business Strong Start</a> </h5>
                                <p class="post-content-text">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.</p>
                                <div class="blog-btn">
                                    <div class="blog-tags">
                                        <i class="fas fa-tags"></i>
                                        <a href="#">Development</a>,
                                        <a href="#">Maketing</a>
                                    </div>
                                    <a href="#" class="btn btn-inline read-more-btn"><i class="fas fa-plus-square"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-item">
                            <div class="single-blog-img">
                                <img src="<?php echo base_url()?>assets/img/blog_04.jpg" alt="">
                                <span>October 25, 2017</span>
                            </div>
                            <div class="blog-content">
                                <h5 class="post-heading"><a href="#">10 Tips for a Business Strong Start</a> </h5>
                                <p class="post-content-text">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.</p>
                                <div class="blog-btn">
                                    <div class="blog-tags">
                                        <i class="fas fa-tags"></i>
                                        <a href="#">Development</a>,
                                        <a href="#">Maketing</a>
                                    </div>
                                    <a href="#" class="btn btn-inline read-more-btn"><i class="fas fa-plus-square"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                   
                    <div class="testimonial-carousel owl-carousel">
                        <div class="single-testimonial-item ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31909.841988448872!2d99.28980946540834!3d1.3381343375379622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d7dbf26999499f2!2sBadan%20Keuangan%20Daerah%20Kota%20Padangsidimpuan!5e0!3m2!1sid!2sid!4v1622555207371!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Carousel Area -->
    <!-- Start Brands Area -->
    <div class="brand-area gray-bg pt-70 pb-70">
        <div class="container">
            <div class="brand-carousel owl-carousel">
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="<?php echo base_url()?>assets/img/brands/1.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="<?php echo base_url()?>assets/img/brands/2.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="<?php echo base_url()?>assets/img/brands/3.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="<?php echo base_url()?>assets/img/brands/4.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="<?php echo base_url()?>assets/img/brands/5.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="<?php echo base_url()?>assets/img/brands/6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brands Area -->
    <!-- Start Footer Area -->
    <footer class="footer-area pt-60 pb-60 black-bg" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">BAKEUDA </a>
                        </div>
                        <div class="footer-dec">
                            <p>Situs Resmi Badan Keuangan Daerah </BR>Kota Padangsidimpuan</p>
                        </div>
                        <ul class="social-links">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h6>Menu</h6>
                        </div>
                        <ul class="footer-menu">
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Tentang Bakeuda </a></li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Situs Terkait</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h6>Kontak Kami</h6>
                        </div>
                        <div class="address-line">
                            <p>Alamat: Jln. Jen. Dr. Abd.Haris Nasution Pal - IV Pijorkoling</p>
                            <p>Telepon: (0634)27075</a></p>
                            <p>Fax: (0634) 27075</p>
                            <p>Email: <a href="mailto:contact@be-one.com">bakeudasidimpuan@gmail.com</a></p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->
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
