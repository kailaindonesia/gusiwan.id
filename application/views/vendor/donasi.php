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
                            Pengembangan Melon Di Nambo
                          </td>
                          <td>
                            <?=$product->email?>
                          </td>
                          <td>
                            Rp. 3,500,000
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>