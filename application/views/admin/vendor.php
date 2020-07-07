 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Vendor<a class="btn btn-default" href="<?= site_url('admin/addVendor'); ?>" style="float: right;
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
                          Nama Vendor
                        </th>
                        <th>
                          Admin Vendor
                        </th>
                        <th>
                          Alamat
                        </th>
                        <th>
                          Nomor Telepon
                        </th>
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                          <?php foreach ($data->result() as $program) :?>
                        <tr>
                          <td>
                            <?=$program->id?>
                          </td>
                          <td>
                            <?=$program->company?>
                          </td>
                          <td>
                            <?=$program->admin?>
                          </td>
                          <td>
                            <?=$program->alamat?>
                          </td>
                          <td>
                            <?=$program->no_telp?>
                          </td>
                          <td>
                          <a href="<?php echo site_url('admin/editVendor/'.$program->id) ?>">Edit</a>
                          <a href="<?php echo site_url('admin/deleteVendor/'.$program->id) ?>">Hapus</a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>

                    </table>
<div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
      
                     
                  </div>
                </div>
              </div>
            </div>
