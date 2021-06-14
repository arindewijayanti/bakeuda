<?php 
$this->load->view('include/header'); 
?>
<BR>
<!-- Start Latest Project Area -->
<div class="latest-project-area black-bg pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h4>TENTANG KAMI</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Project Area -->
     <!-- Start Working With Us Area -->
     <div class="working-with-us-area gray-bg">
        <div class="container"> 
            <div class="row">
                <div class="col-md-6 col-12 text-center d-flex align-items-center">
                    <div class="hire-us-content">
                        <div class="section-title">
                            <h4><?= $profil->nama ?></h4>
                        </div>
                        <p><?= $profil->jabatan ?></p>
              
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="hire-us-img">
                        <img src="<?php echo base_url('uploads/')?><?= $profil->nama_berkas ?>" width="500px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Working With Us Area -->

    <!-- Start Struktur Organisasi Area -->
<div class="choose-us-area pt-70 pb-70" id="page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Struktur Organisasi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-6" >
                    <div class="single-choose-item">
                        <img src="<?php echo base_url('uploads/'.$struktur->keterangan)?>" width="1080px" alt="">
            
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!-- End Struktur Organisasi Area -->
    
<!-- Start VISI MISI Area -->
<div class="choose-us-area pt-70 pb-70" id="page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Visi dan Misi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-choose-item">
                        <h6><a href="#"><i class="fas fa-cogs"></i> Visi </a></h6>
                        <p><?= $visi->keterangan ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-choose-item">
                        <h6><a href="#"><i class="fas fa-cogs"></i> Misi </a></h6>
                        <p><?= $misi->keterangan ?></p> </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- End VISI MISI Area -->
    

<?php
$this->load->view('include/footer'); 
?>