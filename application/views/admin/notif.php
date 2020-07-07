 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Notification<a class="btn btn-default" href="<?= site_url('admin/addNotif'); ?>" style="float: right;
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
                          Judul Notifikasi
                        </th>
                        <th>
                          Isi
                        </th>
                       
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($notif as $program) : ?>
                        <tr>
                          <td>
                           <?=$program->id?>
                          </td>
                          <td>
                            <?=$program->judul?>
                          </td>
                          <td>
                            <?=$program->notif?>
                          </td>
                         
                          <td>
                            <a href="<?php echo site_url('admin/editNotif/'.$program->id) ?>">Edit</a>
                            <a href="<?php echo site_url('admin/deleteNotif/'.$program->id) ?>">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>