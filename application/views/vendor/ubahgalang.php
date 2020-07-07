 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Konfirmasi Galang Dana</h4>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID 
                        <th>
                          Penggalang
                        </th>
                        <th>
                          Total Anggota
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          Target Dana
                        </th>
                       <th>
                         Status
                       </th>
                        
                      <th>
                        Foto Penggalang
                      </th>
                      </thead>
                      <tbody>
                       <?php foreach($program as $program) : ?>
                        <tr>
                          <td>
                           <?=$program->id?>
                          </td>
                          <td>
                            <?=$program->vendor?>
                          </td>
                          <td>
                            <?=$program->name?>
                          </td>
                          <td>
                            <?=$program->jenis_usaha?>
                          </td>
                          
                          <td>
                            Rp. <?php $angka = "$program->target_donasi";
 
echo number_format($angka);?>
                          </td>
                          <td>
                             <?php 
                switch ($program->status) {
                  case 0:
                        echo 'Belum Live';
                      break;
                  
                  case 1:
                        echo 'Sudah Live';
                      break;

                }
             ?>
                          </td>
                          <td>
                          
                             <button class="btn btn-primary" >Ulas Program</button>
                          
                          </td>

                      <?php endforeach; ?>
                        </tr>
                      </tbody>
                 
                    </table>
                  </div>
                </div>
              </div>
            </div>

                        