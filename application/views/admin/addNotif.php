  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">+ Tambah Notifikasi</h4>
                  <p class="card-category">Masukan Isi Notifikasi</p>
                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                   <form action="<?php echo site_url().'/admin/tambahnotif'?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                    
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Judul Notifikasi</label>
                          <input type="text" name="judul" class="form-control">
                        </div>
                      </div>
                     
                    
                  </div>

                  
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Isi Notifikasi</label>
                          <div class="form-group">
                           
                            <textarea class="form-control" name="notif" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                     <label class="bmd-label-floating"> Dengan menambahkan notifikasi anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>