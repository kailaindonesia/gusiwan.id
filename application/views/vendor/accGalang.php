 <div class="content">
        <div class="container-fluid">

          <div class="row">
            
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Form Approval Penggalang Dana</h4>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">

                    ID : <?= $program->id?><br> 
                    Nama Penggalang : <?= $program->name?><br>  
                    Email : <?= $program->email?><br> 
                    Nomor Telepon : <?= $program->no_telp?><br> 
                     Status :  <?php 
                switch ($program->status) {
                  case 0:
                        echo '<button class="btn btn-sm btn-warning" disabled="">Belum Dikonfirmasi</button>';
                      break;
                  
                  case 1:
                        echo '<button class="btn btn-sm btn-success" disabled="">Aktif</button>';
                      break;

                  case 2:
                    echo '<button class="btn btn-sm btn-danger" disabled="">Non-Aktif</button>';
                    break;

                }
             ?>



                   </div>
                   <br>
                   <br>
                   <form action="<?= site_url('vendor/app');?>" method="post">
                    <input type="hidden" name="id" value="<?= $program->id?>">
                    <input type="hidden" name="id_vendor" value="<?= $this->session->userdata('nama');?>">
                    <input type="hidden" name="status" value="1">
                      <button class="btn btn-success" type="submit">Terima penggalang</button>
                    </form>

                  </div>
                </div>


              </div>
              
            </div>

