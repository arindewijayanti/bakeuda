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
          <a href="<?php echo base_url('administrator/video')?>">Daftar Video</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah Daftar Video</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Daftar Video</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>administrator/action_videoadd">
        <input type="hidden" name="id_video"  value="<?= $data->id_video?>" />
        <div class="form-group">
              <div class="form-row">
                  
                           
                  <div class="col-md-6">
                    <label for="judul">Judul</label>
                    <input value="<?= $data->judul?>" class="form-control" id="judul" type="text" aria-describedby="nameHelp" name="judul" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="link">Link</label>
                    <input value="<?= $data->link?>" class="form-control" id="link" type="text" aria-describedby="nameHelp" name="link" required/>
                  </div>
                  
                </div>
              </div>

            <div class="form-group">
              <div class="form-row">
                  
                  <div class="col-md-6">
                    <label for="keterangan">Keterangan</label>
                    <input value="<?= $data->keterangan?>" class="form-control" id="keterangan" type="text" aria-describedby="nameHelp" name="keterangan" required/>
                  </div>

                  <div class="col-md-6">
                    <label for="status">Status</label>
                    <input readonly value="<?= $data->status?>" class="form-control" id="status" type="text" aria-describedby="nameHelp" name="status" required/>
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