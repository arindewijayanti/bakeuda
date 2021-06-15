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
                        <h4><?= $content->judul ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Project Area -->
    <BR>
    
    <section id_download="services" class="services">

      <div class="container">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <center><img src="<?php echo base_url('uploads/')?><?= $content->nama_berkas ?>" width="500px" alt=""></center>
              <br>
                <?= $content->isi ?>
                </tr>
                   
              </tbody>
            </table>
          
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
$this->load->view('include/footer'); 
?>