 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Penggalang Dana</h4>
                 

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
                        
                             <a class="btn btn-primary" href="<?= site_url('vendor/detailpenggalang/').$program->id;?>">Detail Penggalang</a>
                         
                          </td>
                          <?php endforeach; ?>
                        </tr>
                      </tbody>
                 
                    </table>
                  </div>
                </div>
              </div>
            </div>

           