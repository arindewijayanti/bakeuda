<?php 
$this->load->view('administrator/header'); 
?>
<BR>
    
    <section id_slidegambarutama="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/home')?>">Beranda</a>
        </li>

        <li class="breadcrumb-item active">Daftar File Slide Gambar Utama</li>
      </ol>

      <div class="container">
     
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Daftar File Slide Gambar Utama (1366x600px)</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th> 
                  <th>Gambar</th>    
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td><img width="300" src="<?php echo base_url(); ?>assets/img/<?php echo $data->nama_berkas; ?>"/></td>
                        <td> 
                    <a href="<?php echo base_url()?>administrator/slidegambarutamaedit/<?php echo $data->id_slidegambarutama; ?>" class="btn btn-danger">Edit</i></a>
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
$this->load->view('administrator/footer'); 
?>