 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Product<a class="btn btn-default" href="<?= site_url('vendor/addProduct'); ?>" style="float: right;
    display: block;" >+ ADD</a>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Product
                        </th>
                        <th>
                          Stok
                        </th>
                        <th>
                          Harga
                        </th>
                        <th>
                         Deskripsi
                        </th>
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($products as $product) : ?>
                        <tr>
                          <td>
                           <?=$product->id?>
                          </td>
                          <td>
                            <?=$product->name?>
                          </td>
                          <td>
                            <?=$product->stock?>
                          </td>
                          <td>
                            <?=$product->price?>
                          </td>
                           <td>
                            <?=$product->informasi?>
                          </td>
                          <td>
                            <a href="<?php echo site_url('vendor/edit/'.$product->id) ?>">Edit</a>
                            <a href="<?php echo site_url('vendor/delete/'.$product->id) ?>">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>