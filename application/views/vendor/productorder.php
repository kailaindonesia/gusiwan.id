 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Order</h4>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID Order
                        </th>
                        <th>
                          Nama Pelanggan
                        </th>
                        <th>
                          Produk Dibeli
                        </th>
                        <th>
                          Jumlah
                        </th>
                        <th>
                         Total Tagihan
                        </th>
                        
                    
                         <th>
                         Bill
                        </th> 
                         <th>
                        Aksi
                      </th>
                      </thead>
                      <tbody>
                       <?php foreach($order as $product) : ?>
                        <tr>
                          <td>
                           <?=$product->id?>
                          </td>
                          <td>
                            <?=$product->user?>
                          </td>
                          <td>
                            <?=$product->name?>
                          </td>
                          <td>
                            <?=$product->qty?>
                          </td>
                          <td>
                            <?=$product->price?>
                          </td>
                         
                         
                          <td>
                           Klik Disini
                          </td> <td>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ubah Status Order</button>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                 
                    </table>
                  </div>
                </div>
              </div>
            </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Status Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ubah Status  <select class="form-control">
          <option value="0">Belum Dikirim</option>
          <option value="1">Sedang Diproses Oleh Pengirim</option>
          <option value="2">Sudah Dikirim</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>