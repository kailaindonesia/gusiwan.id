 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Validasi Penggalang Dana</h4>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID 
                        <th>
                          Nama Penggalang
                        </th>
                        <th>  
                          Kategori
                        </th>
                        <th>  
                          Jenis Usaha
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Telepon
                        </th>
                       
                        
                      <th>
                        Aksi
                      </th>
                      <th>
                        Status
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
                            <?php 
                switch ($program->category) {
                  case 1:
                        echo 'Individu';
                      break;
                  
                  case 2:
                        echo 'Lembaga/Kelompok/Koperasi';
                      break;

                }
             ?>
                          </td>
                          <td>
                              <?php 
                switch ($program->jenis_usaha) {
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
                            <?=$program->email?>
                          </td>
                          <td>
                            <?=$program->no_telp?>
                          </td>
                          <td>
            <a class="btn btn-default" href="<?php echo site_url('admin/cekdokumen/'.$program->id) ?>">Cek Kelengkapan Dokumen</a>
                          </td>
                          <td>
                            <?php 
                switch ($program->status) {
                  case 0:
                        echo 'Dokumen Kosong';
                      break;
                  
                  case 1:
                        echo 'Menunggu Validasi';
                      break;

                       case 2:
                        echo 'Dokumen Tervalidasi';
                      break;

                }
             ?>
                          </td>
                          <?php endforeach; ?>
                        </tr>
                      </tbody>
                 
                    </table>
                  </div>
                </div>
              </div>
            </div>

           