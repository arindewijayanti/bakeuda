<?php 
$this->load->view('include/header'); 
?>
<BR>
    
    
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/download')?>">File Download</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah File Download</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah File Download</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('administrator/action_menambahfiledownload')?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <div class="form-row">
              
                           
                  
                  <div class="col-md-6">
                    <label for="nama_file">Nama File</label>
                    <input class="form-control" id="nama_file" type="text" aria-describedby="nameHelp" name="nama_file" required/>
                  </div>

                  <div class="col-md-6">
                    <label for="upload_file">Upload File</label>
                    <input class="form-control" id="upload_file" type="text" aria-describedby="nameHelp" name="upload_file" required/>
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
<?php
$this->load->view('include/footer'); 
?>