<?php 
$this->load->view('administrator/header'); 
?>
<BR>
    
    
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/slidegambarutama')?>">Daftar Slide Gambar Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Mengubah Daftar Slide Gambar Utama</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Mengubah Daftar Slide Gambar Utama (1366x600px)</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

             <?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
        <?php foreach ($content->result() as $data) {
          # code...
        } ?>
     <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>administrator/action_slidegambarutamaupdate">
        <input type="hidden" name="id_slidegambarutama"  value="<?= $data->id_slidegambarutama?>" />
        <input type="hidden" name="nama_berkas"  value="<?= $data->nama_berkas?>" />

          Slide <?= $data->id_slidegambarutama?>
          <div>Berkas : <input type="file" name="berkas"></div>
            <br>
            <div><input type="submit" value="Update"/></div>
        </form>
    
        </div>
</div>
</div>
</div>
</div>



</div>
    </section>
<br><Br><Br><Br>
<?php 
$this->load->view('administrator/footer'); 
?>