<?php 
$this->load->view('administrator/header'); 
?>
<BR>
<?php foreach ($content->result() as $data) {
          # code...
        } ?>
    
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/profil')?>">Daftar Profil</a>
        </li>
  
        <li class="breadcrumb-item active">Edit Daftar Profil</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Edit Daftar Profil</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>administrator/action_profilupdate">
        <input type="hidden" name="id_profil"  value="<?= $data->id_profil?>" />
        <div class="form-group">
              <div class="form-row">
                  
                           
                  <div class="col-md-6">
                    <label for="nama">Nama</label>
                    <input value="<?= $data->nama?>" class="form-control" id="nama" type="text" aria-describedby="nameHelp" name="nama" required/>
                  </div>

                  <div class="col-md-6">
                    <label for="jabatan">Jabatan</label>
                    <input value="<?= $data->jabatan?>" class="form-control" id="jabatan" type="text" aria-describedby="nameHelp" name="jabatan" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">

                  <div class="col-md-6">
                    <label for="berkas">Pilih Berkas</label><br>
                    <input type="file" name="berkas" required>
                  </div>
                  
                </div>
              </div>

           


              <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <input class="form-control btn btn-primary" type="submit" value="Simpan" name="btnSimpan" >
              </div>
            </div>
          </div>
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