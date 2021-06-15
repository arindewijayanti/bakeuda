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

.project-bg-1 {background-image: url(<?php echo base_url()?>uploads/<?= $galeri1->nama_berkas ?>);}
.project-bg-2 {background-image: url(<?php echo base_url()?>uploads/<?= $galeri2->nama_berkas ?>);}
.project-bg-3 {background-image: url(<?php echo base_url()?>uploads/<?= $galeri3->nama_berkas ?>);}
.project-bg-4 {background-image: url(<?php echo base_url()?>uploads/<?= $galeri4->nama_berkas ?>);}
.project-bg-5 {background-image: url(<?php echo base_url()?>uploads/<?= $galeri5->nama_berkas ?>);}
.project-bg-6 {background-image: url(<?php echo base_url()?>uploads/<?= $galeri6->nama_berkas ?>);}
.project-bg-7 {background-image: url(<?php echo base_url()?>uploads/<?= $galeri7->nama_berkas ?>);}

.img-gallery {
     width: 510px;
     height: 310px;
     border: 4px #575D63;
     padding: 5px;
     margin: 20px;
     align: center;
   }
</style>
    <br>
    
    
    <!-- Start Latest Project Area -->
    <div class="latest-project-area black-bg pt-70 pb-70" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4><a href="<?php echo base_url('galeri')?>">Galeri Kegiatan Bakeuda</a></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-carousel owl-carousel text-center">
                        <div class="single-project project-bg-1">
                            <div class="project-inner">
                                <h5><?= $galeri1->judul?></h5>
                            </div>
                        </div>
                        <div class="single-project project-bg-2">
                            <div class="project-inner">
                                <h5><?= $galeri2->judul?></h5>
                            </div>
                        </div>
                        <div class="single-project project-bg-3">
                            <div class="project-inner">
                                <h5><?= $galeri3->judul?></h5>
                            </div>
                        </div>
                        <div class="single-project project-bg-4">
                            <div class="project-inner">
                                <h5><?= $galeri4->judul?></h5>
                            </div>
                        </div>
                        <div class="single-project project-bg-5">
                            <div class="project-inner">
                                <h5><?= $galeri5->judul?></h5>
                            </div>
                        </div>
                        <div class="single-project project-bg-6">
                            <div class="project-inner">
                                <h5><?= $galeri6->judul?></h5>
                            </div>
                        </div>
                        <div class="single-project project-bg-7">
                            <div class="project-inner">
                                <h5><?= $galeri7->judul?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Project Area -->

                

    <!-- Start Icon Box Area -->
    <div class="icon-box-area pt-70 pb-70" id="feature">
        <div class="container">
            <div class="row">
                

                    
            </div>
    <!-- End Icon Box Area -->
    
                <?php 
                  foreach ($galeritambahan as $data) : ?>
                  <img class="img-gallery" src="<?php echo base_url('uploads/'.$data->nama_berkas)?>" alt="asda">
             <?php
                    endforeach;
                ?>
                
        </div>
    </div>
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
