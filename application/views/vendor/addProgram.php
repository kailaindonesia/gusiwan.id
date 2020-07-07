  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">+ Tambah Program</h4>
                  <p class="card-category">Masukan Seluruh Kriteria Program</p>
                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                   <form action="<?php echo site_url().'/vendor/addProg'?>" method="post" enctype="multipart/form-data">
                    <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Program</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Lokasi</label>
                          <input type="text" name="lokasi" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Vendor Penyelenggara</label>
                          <select name="vendor" class="form-control">

        <?php                                
        foreach ($dd_bidang as $row) {  
      echo "<option value='".$row->company."'selected>".$row->company."</option>";
      }
      echo"
    </select>"
    ?>
                            </select>
                        </div>
                       
                      </div>

                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tentukan Titik Lokasi</label>
                          <input type="text" name="loct" class="form-control">
                        </div>
                      </div>

                    
                    </div>

<br>

                    <div class="row">


                      <div class="col-md-3">
                         <label class="bmd-label-floating">Target Donasi</label>
                        <div class="form-group">
                         
                          <input type="number" name="target_donasi" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                         <label class="bmd-label-floating">Waktu Selesai</label>
                        <div class="form-group">
                         
                          <input type="date" name="periode" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                         <label class="bmd-label-floating">Jenis Usaha</label>
                        <div class="form-group">
                         
                          <select name="jenis_usaha" class="form-control">
                            <option>-- SILAHKAN PILIH --</option>
                            <option value="Pertanian">Pertanian</option>
                            <option value="Peternakan">Peternakan</option>
                            <option value="Perikanan">Perikanan</option>
                            <option value="Perdagangan">Perdagangan</option>
                          </select>
                        </div>

                      </div>
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Thumbnail Program</label>
                          <input type="file" name="image" >
                        
                      </div>



<input type="hidden" name="status" value="1">
<input type="hidden" name="id_vendor" value="<?php echo $this->session->userdata('nama'); ?>">

                    </div>

 <div class="row">

  <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi Program</label>
                          <div class="form-group">
                            
                            <textarea name="informasi" class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
 </div>


      
                   
                     <label class="bmd-label-floating"> Dengan menambahkan program anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Tambah Program</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>