 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Validasi Penggalang Dana</h4>
                 

                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID
                        </th>
                           <th>  
                          Kategori
                        </th> 
                        <th>
                          Penggalang Dana
                        </th>
                       
                        <th>  
                          Jenis Usaha
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
                        <?=$program->name?>
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
           <a class="btn btn-primary" href="<?php echo site_url('vendor/accGalang/'.$program->id) ?>">Ulas Penggalang</a>
                          </td>
                         
                          <?php endforeach; ?>
                        </tr>
                      </tbody>
                 
                    </table>
                  </div>
                </div>
              </div>
            </div>

           