<?php 
$this->load->view('administrator/header'); 
?>
<BR>
    
    
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/strukturorganisasi')?>">Daftar File Struktur Organisasi</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah Daftar File Struktur Organisasi</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Daftar File Struktur Organisasi</div>
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
     <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>administrator/action_strukturorganisasiadd">
            <div>Berkas Struktur Organisasi : </div>
        	<div><input type="file" name="berkas"></div>
         <br>
            <div><input type="submit" value="Simpan"/></div>
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