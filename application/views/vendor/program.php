 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Program<a class="btn btn-default" href="<?= site_url('vendor/addProgram'); ?>" style="float: right;
    display: block;" >+ ADD</a></h4>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Program
                        </th>
                        <th>
                          Penyelenggara
                        </th>
                        <th>
                          Lokasi
                        </th>
                        <th>
                         Jenis Usaha
                        </th>
                        <th>
                        Target Donasi
                      </th>
                      <th>
                        Periode
                      </th>
                      <th>
                        Status
                      </th>
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($program as $program) : ?>
                        <tr>
                          <td>
                           <?=$program->id?>
                          </td>
                          <td>
                            <?=$program->name?>
                          </td>
                          <td>
                            <?=$program->vendor?>
                          </td>
                          <td>
                            <?=$program->lokasi?>
                          </td>
                           <td>
                            <?=$program->jenis_usaha?>
                          </td>
                          <td>
                            <?=$program->target_donasi?>
                          </td>
                          <td>
                            <?=$program->periode?>
                          </td>
                          <td>
                              <?php 
                switch ($program->status) {
                  case 0:
                        echo 'Menunggu Konfirmasi dari Admin';
                      break;
                  
                  case 1:
                        echo 'Sudah Live!';
                      break;

                }
             ?>
                          </td>
                          <td>
                            <a href="<?php echo site_url('vendor/editProgram/'.$program->id) ?>">Edit</a>
                            <a href="<?php echo site_url('vendor/deleteProgram/'.$program->id) ?>">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>