 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Donatur </h4>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Donatur
                        </th>
                        <th>
                          Program
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                         Nomor Telepon
                        </th>
                        <th>
                          Jumlah Donasi
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($donasi as $product) : ?>
                        <tr>
                          <td>
                            <?=$product->id?>
                          </td>
                          <td>
                            <?=$product->donatur?>
                          </td>
                          <td>
                            <?= $product->name?>
                          </td>
                          <td>
                            <?=$product->email?>
                          </td>
                          <td>
                            <?=$product->id?>
                          </td>
                          <td>
                            <?=$product->donasi?>
                          </td>
                          <td>
                                                     <?php 
switch ($product->status) {
   case 0:
         echo "Belum Dibayar";
         break;
   case 1:
         echo "Sudah Dikonfirmasi";
         break;
}
?>
                          </td>
                          <td>
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ubah Status Donasi</button>                          </td>
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
        <h5 class="modal-title" id="exampleModalLabel">Status Donasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="" method="post">
      <div class="modal-body">
        Ubah Status  <select class="form-control" name="status">
          <option value="0">Belum Dikonfirmasi</option>
          <option value="1">Sedang Diproses</option>
          <option value="2">Sudah Dikonfirmasi</option>
        </select>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
      </div>
    </div>
  </div>
</div>