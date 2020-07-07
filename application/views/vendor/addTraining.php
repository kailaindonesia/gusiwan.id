  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Tambah Training</h4>
              
                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                   <form action="<?php echo site_url().'/vendor/addTrain'?>" method="post" enctype="multipart/form-data">
                    <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Judul Training <small>cth : "Sesi 1 - Pengenalan Hidroponik"</small></label>
                          <input type="text" name="judul" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">URL Youtube</label>
                          <input type="text" name="link" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">URL Online Test</label>
                          <input type="text" name="linktes" class="form-control">
                        </div>
                      </div>

<div class="col-md-3">
                         <label class="bmd-label-floating">Jenis Usaha</label>
                        <div class="form-group">
                         
                          <select name="jenis" class="form-control">
                            <option disabled="" selected="">-- SILAHKAN PILIH --</option>
                            <option value="1">Pertanian</option>
                            <option value="2">Peternakan</option>
                            <option value="3">Perikanan</option>
                            <option value="4">Perdagangan</option>
                          </select>
                        </div>

                      </div>
                      
 
                      
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Thumbnail Program</label>
                          <input type="file" name="images" >
                        
                      </div>

                  

                    
                    </div>

<br>

                    <div class="row">


                    


<input type="hidden" name="vendor_id" value="<?php echo $this->session->userdata('nama'); ?>">

                    </div>

 <div class="row">

  <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi Program</label>
                          <div class="form-group">
                            
                            <textarea name="desc" class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
 </div>


      
                   
                     <label class="bmd-label-floating"> Dengan menambahkan training anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Kirim</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>