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
                        <h4>Informasi</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Project Area -->
    <BR>
    
    <section id_informasi="services" class="services">

      <div class="container">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Daftar File Informasi</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Nama File</th>    
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td align="left"><?= $data->keterangan_berkas ?></td>
                  <td> 
                    <a href="<?php echo base_url()?>welcome/action_informasi/<?php echo $data->id_informasi; ?>" class="btn btn-danger">Download</i></a>
                  </td> 
                </tr>
                    <?php
                      $i++;
                    endforeach;
                  ?>
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