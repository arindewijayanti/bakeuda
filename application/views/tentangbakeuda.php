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
                        <h4>TENTANG BAKEUDA</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Project Area -->
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
                        <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar malesuada. Suspendisse eu rhoncus ligula.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-choose-item">
                        <h6><a href="#"><i class="fas fa-cogs"></i> Misi </a></h6>
                        <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar malesuada. Suspendisse eu rhoncus ligula.</p>
                    </div>
                </div>
                <div  class="col-lg-6" >
                    <div class="single-choose-item">
                        <h6><i class="fas fa-cogs"></i> Struktur Organisasi </a></h6>
                        <a href="<?php echo base_url('welcome/download')?>">File Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End VISI MISI Area -->
    <!-- Start Working With Us Area -->
    <div class="working-with-us-area gray-bg">
        <div class="container"> 
            <div class="row">
                <div class="col-md-6 col-12 text-center d-flex align-items-center">
                   
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
    

<?php
$this->load->view('include/footer'); 
?>