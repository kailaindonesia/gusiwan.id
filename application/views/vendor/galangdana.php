 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Program Penggalang Dana</h4>
                 

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
                        <th>
                          Penggalang
                        </th>
                        <th>
                          Nama Program
                        </th>
                        <th>
                          Jenis Usaha
                        </th>
                        <th>
                          Target Dana
                        </th>
                        <th>Dana Terkumpul</th>
                        
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
<td> Rp. <?php $angka = "$program->donasikumpul";
 
echo number_format($angka);?></td>
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
                          
                             <a class="btn btn-primary" href="<?= site_url('vendor/detailprogramgalang/').$program->id;?>">Ulas Program</a>
                          
                          </td>

                      <?php endforeach; ?>
                        </tr>
                      </tbody>
                 
                    </table>
                  </div>
                </div>
              </div>
            </div>

                        