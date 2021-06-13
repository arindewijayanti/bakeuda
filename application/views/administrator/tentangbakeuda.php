<?php 
$this->load->view('administrator/header'); 
?>
<BR>
    
    <section id_tentangbakeuda="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('administrator/home')?>">Beranda</a>
        </li>

        <li class="breadcrumb-item active">Daftar Tentang Bakeuda</li>
      </ol>

      <div class="container">
      
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Daftar Tentang Bakeuda</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>Judul</th>   
                  <th>Keterangan</th>  
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                  <td align="center"><?= $data->judul ?></td>
                  <td align="left"><?= $data->keterangan ?></td>
                  <td> 
                  <a href="<?php echo base_url()?>administrator/action_edittentangbakeuda/<?php echo $data->id_tentangbakeuda; ?>" class="btn btn-danger">Edit<i class="fa fa-edit"></i></a>
      
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
      </div>
    </div>
  </div>

  

  

<?php 
$this->load->view('administrator/footer'); 
?>