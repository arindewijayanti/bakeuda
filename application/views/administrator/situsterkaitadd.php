<?php 
$this->load->view('administrator/header'); 
?>
<BR>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/situsterkait')?>">Daftar Situs Terkait</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah Daftar Situs Terkait</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Edit Daftar Situs Terkait</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>administrator/action_situsterkaitadd">
       
              <div class="form-group">
              <div class="form-row">

              <div class="col-md-6">
                    <label for="link_situs">Link Situs</label>
                    <input class="form-control" id="link_situs" type="text" aria-describedby="nameHelp" name="link_situs" required/>
                  </div>

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