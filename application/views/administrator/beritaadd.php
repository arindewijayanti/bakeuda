<?php 
$this->load->view('administrator/header'); 
?>
<style>
textarea {
    width: 800px;
    height: 500px;
}
.judul {
    width: 800px;
}
</style>
<BR>
    
    
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/berita')?>">Daftar File Berita</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah Daftar File Berita</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Daftar File Berita</div>
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
     <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>administrator/action_beritaadd">
            <div>Berkas : </div>
        	<div><input type="file" name="berkas"></div>
          <div>Judul</div>
        	<div><input class="judul" type="text" name="judul"></div>
            <div>Keterangan : </div>
            <div><textarea name="isi" ></textarea></div>
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