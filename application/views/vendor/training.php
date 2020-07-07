 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Training Penggalang<a class="btn btn-default" href="<?= site_url('vendor/addTraining'); ?>" style="float: right;
    display: block;" >+ Tambah</a></h4>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID
                        </th>
                        <th>
                          Judul Training
                        </th>
                        <th>
                          Jenis Usaha
                        </th>
                        <th>
                          
                        </th>
                       
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($training as $program) : ?>
                        <tr>
                          <td>
                           <?=$program->id_train?>
                          </td>
                          <td>
                            <?=$program->judul?>
                          </td>
                          <td>
                             <?php 
                switch ($program->jenis) {
                  case 1:
                        echo 'Pertanian';
                      break;
                  
                  case 2:
                        echo 'Peternakan';
                      break;

                      case 3:
                        echo 'Perikanan';
                      break;

                      case 4:
                        echo 'Perdagangan';
                      break;

                }
             ?>
                          </td>
                         
                          <td>
                             
                          </td>
                          <td>
                            <a href="<?php echo site_url('vendor/editTraining/'.$program->id_train) ?>">Edit</a>
                            <a href="<?php echo site_url('vendor/deleteTraining/'.$program->id_train) ?>">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>