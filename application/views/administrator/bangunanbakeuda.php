<?php 
$this->load->view('administrator/header'); 
?>
<BR>
    
    <section id_bangunanbakeuda="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/home')?>">Beranda</a>
        </li>

        <li class="breadcrumb-item active">Daftar Gambar Bangunan Bakeuda</li>
      </ol>

      <div class="container">
      
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Daftar Gambar Bangunan Bakeuda</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Judul</th>   
                  <th>Keterangan</th>  
                  <th>Nama Berkas</th>  
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td align="center"><?= $data->judul ?></td>
                  <td align="center"><?= $data->keterangan ?></td>
                  <td align="center"><?= $data->nama_berkas ?></td>
                  <td> 
                  <a href="<?php echo base_url()?>administrator/bangunanbakeudaedit/<?php echo $data->id_bangunanbakeuda; ?>" class="btn btn-danger">Edit<i class="fa fa-edit"></i></a>
      
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