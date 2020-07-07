 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List News & Tips<a class="btn btn-default" href="<?= site_url('admin/addNews'); ?>" style="float: right;
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
                          Judul Berita
                        </th>
                        <th>
                          Penerbit
                        </th>
                        <th>
                          Status
                        </th>
                        
                      
                       <th>
                         Terbitkan
                        </th>
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($news as $program) : ?>
                        <tr>
                          <td>
                           <?=$program->id?>
                          </td>
                          <td>
                            <?=$program->judul?>
                          </td>
                         
                          <td>
                            <?=$program->vendor?>
                          </td>
                          <td>
                            <?php 
switch ($program->status) {
   case 0:
         echo "Belum Terbit";
         break;
   case 1:
         echo "Live!";
         break;
}
?>
                          </td>
                           <td>
                            <a href="" class="btn btn-primary">Terbitkan</a>
                          </td>
                          
                          <td>
                            <a class="btn btn-default" href="<?php echo site_url('admin/editNews/'.$program->id) ?>">Edit</a>
                            <a class="btn btn-default" href="<?php echo site_url('admin/deleteNews/'.$program->id) ?>">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>