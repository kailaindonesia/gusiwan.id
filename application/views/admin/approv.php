 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Konfirmasi Program</h4>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID 
                        <th>
                          Nama Vendor
                        </th>
                        <th>
                          Program
                        </th>
                        <th>
                          Jenis Usaha
                        </th>
                        <th>
                         Lokasi
                        </th>
                        <th>
                        Target Donasi
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
                           <?=$program->lokasi?>
                          </td>
                          <td>
                           <?=$program->target_donasi?>
                          </td>
                          <td>
                           <form action="<?= site_url('admin/app');?>" method="post">
                            <input type="hidden" name="id" value="<?= $program->id?>">
                            <input type="hidden" name="status" value="1">
                             <button class="btn btn-primary" type="submit">Live Program!</button>
                           </form>
                          </td>
                          <?php endforeach; ?>
                        </tr>
                      </tbody>
                 
                    </table>
                  </div>
                </div>
              </div>
            </div>

        