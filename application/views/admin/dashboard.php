
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">attach_money</i>
                  </div>
                  <p class="card-category">Donasi Terkumpul</p>
                  <h3 class="card-title">Rp. <?= $totalDonasi; ?>
                    
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                 <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Jumlah Program</p>
                  <h3 class="card-title"><?php echo $totalProgram; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Jumlah Donatur</p>
                  <h3 class="card-title"><?php echo $totalDonatur; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">perm_contact_calendar</i>
                  </div>
                  <p class="card-category">Jumlah Vendor</p>
                  <h3 class="card-title"><?= $totalVendor; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <canvas id="bar-chart"></canvas>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Report Donasi </h4>
                  <p class="card-category">
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
    <?php
    //Inisialisasi nilai variabel awal
    $tgl_donasi= "";
    $jumlah=null;
    foreach ($program as $item)
    {
        $jur=$item->tgl_donasi;
        $tgl_donasi .= "'$jur'". ", ";
        $jum=$item->donasi;
        $jumlah .= "$jum". ", ";
    }
    ?>
     
<script type="text/javascript">
 var ctx = document.getElementById('bar-chart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $tgl_donasi; ?>],
            datasets: [{
                label:'Donatur',
             
                
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

</script>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <canvas id="bar-chart2"></canvas>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Report Penjualan</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>


<script type="text/javascript">
 var ctx = document.getElementById('bar-chart2').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: [<?php echo $tgl_donasi; ?>],
            datasets: [{
                label:'Donatur',
             
                
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

</script>





            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <canvas id="bar-chart3"></canvas>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Report Investasi</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">



            <script type="text/javascript">
 var ctx = document.getElementById('bar-chart3').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $tgl_donasi; ?>],
            datasets: [{
                label:'Donatur',
             
                
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

</script>
           
               
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Status Vendor</h4>
                  <p class="card-category">Vendor Baru Pada Bulan Ini</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Nama Company</th>
                      <th>Admin Vendor</th>
                      <th>Nomor Telepon</th>
                    </thead>
                    <tbody>
                      <?php foreach ($vendorBaru as $vendor) :?>
                      <tr>
                        <td><?= $vendor->id?></td>
                        <td><?=$vendor->company?></td>
                        <td><?=$vendor->admin?></td>
                        <td><?=$vendor->no_telp?></td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>