<?php 
$this->load->view('administrator/header'); 
?>
<BR>
    
    <section id_berita="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/home')?>">Beranda</a>
        </li>

        <li class="breadcrumb-item active">Daftar File Berita</li>

      </ol>

      <div class="container">
      <a href="<?php echo base_url('administrator/beritaadd')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
  
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Daftar File Berita</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal</th>    
                  <th>Judul</th>    
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
                  <td align="left"><?= $data->tanggal ?></td>
                  <td align="left"><?= $data->judul ?></td>
                  <td align="center"><img width="300" height="180" src="<?php echo base_url(); ?>uploads/<?php echo $data->nama_berkas; ?>"/></td>
                  <td> 
                    <a href="<?php echo base_url()?>administrator/action_beritaedit/<?php echo $data->id_berita; ?>" class="btn btn-danger">Edit<i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url()?>administrator/action_deleteberita/<?php echo $data->id_berita; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
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