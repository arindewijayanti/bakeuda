<?php 
$this->load->view('administrator/header'); 
?>
    <br>
    
    <!-- Start We are Bemax Area -->
    <div class="bemax-area gray-bg pt-65 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Selamat Datang, ADMIN <?= $this->session->userdata('nama');?>!</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                           <a href="#"> <i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="<?php echo base_url('administrator/slidegambarutama')?>">Slide Gambar Utama</a></h6>
                            <p>Pengaturan 3 Slide Gambar Utama</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="<?php echo base_url('administrator/bangunanbakeuda')?>">Gambar Bangunan Bakeuda</a></h6>
                            <p>Pengaturan 3 Gambar Bangunan Bakeuda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Slide Galeri</a></h6>
                            <p>Pengaturan Slide Galeri</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="<?php echo base_url('administrator/video')?>">Video</a></h6>
                            <p>Pengaturan Video</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="<?php echo base_url('administrator/profil')?>">Profil Kepala Dinas</a></h6>
                            <p>Pengaturan Profil Kepala Dinas</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="<?php echo base_url('administrator/tentangbakeuda')?>">Visi Misi</a></h6>
                            <p>Pengaturan Tentang Bakeuda, Visi Misi dan lain lain</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Situs Terkait</a></h6>
                            <p>Pengaturan Situs Terkait</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="<?php echo base_url('administrator/download')?>">File Download</a></h6>
                            <p>Pengaturan File Download</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="<?php echo base_url('administrator/strukturorganisasi')?>">Struktur Organisasi</a></h6>
                            <p>Pengaturan Struktur Organisasi</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="<?php echo base_url('administrator/berita')?>">Berita</a></h6>
                            <p>Pengaturan Berita</p>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>
    <!-- End We are Bemax Area -->
    
<?php 
$this->load->view('administrator/footer'); 
?>