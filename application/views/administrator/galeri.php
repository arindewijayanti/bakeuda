<?php 
$this->load->view('administrator/header'); 
?>
<BR>
    
    <section id_galeri="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/home')?>">Beranda</a>
        </li>

        <li class="breadcrumb-item active">Daftar Galeri</li>
      </ol>

      <div class="container">
      <a href="<?php echo base_url('administrator/galeriadd')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
  
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Daftar Galeri Utama</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Judul</th>   
                  <th>Foto</th>  
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($contentutama->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td align="center"><?= $data->judul ?></td>
                  <td align="center"><img width="300" src="<?php echo base_url(); ?>uploads/<?php echo $data->nama_berkas; ?>"/></td>
                  <td> 
                  <a href="<?php echo base_url()?>administrator/galeriedit/<?php echo $data->id_galeri; ?>" class="btn btn-danger">Edit<i class="fa fa-edit"></i></a>
      
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

  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Daftar Galeri Tambahan</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Judul</th>   
                  <th>Foto</th>  
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($contenttambahan->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td align="center"><?= $data->judul ?></td>
                  <td align="center"><img width="300" src="<?php echo base_url(); ?>uploads/<?php echo $data->nama_berkas; ?>"/></td>
                  <td> 
                  <a href="<?php echo base_url()?>administrator/galeriedit/<?php echo $data->id_galeri; ?>" class="btn btn-danger">Edit<i class="fa fa-edit"></i></a>
                  <a href="<?php echo base_url()?>administrator/action_deletegaleri/<?php echo $data->id_galeri; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-trash">Hapus<i class="fa fa-edit"></i></a>
      
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