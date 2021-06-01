<?php 
$this->load->view('include/header'); 
?>
<BR>
    
    <section id_download="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/home')?>">Beranda</a>
        </li>

        <li class="breadcrumb-item active">Daftar File Download</li>
      </ol>

      <div class="container">
      <a href="<?php echo base_url('administrator/downloadadd')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
  
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Daftar File Download</div>
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
                  <td><?= $data->nama_file ?></td>
                  <td> 
                    <a href="<?php echo base_url()?>download/updatedatadownload/<?php echo $data->id_download; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Edit<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>download/action_deletedatadownload/<?php echo $data->id_download; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
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