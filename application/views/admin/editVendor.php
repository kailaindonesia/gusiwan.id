  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">+ Tambah Vendor</h4>
                  <p class="card-category">Masukan Seluruh Kriteria Vendor</p>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                   <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $vendor->id?>" />
                    <div class="row">

                    <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Vendor</label>
                          <input type="text" name="company" value="<?php echo $vendor->company?>" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Admin</label>
                          <input type="text" name="admin" value="<?php echo $vendor->admin?>" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" value="<?php echo $vendor->username?>" class="form-control">
                        </div>
                      </div>

                      

                    
                    </div>

<br>

                    <div class="row">


                      <div class="col-md-3">
                         <label class="bmd-label-floating">Password</label>
                        <div class="form-group">
                         
                          <input type="Password" id="pw1" value="<?php echo $vendor->password?>" name="password" class="form-control">
                        </div>
                      </div>
                      

                      <div class="col-md-3">
                         <label class="bmd-label-floating">Ulangi Password</label>
                        <div class="form-group">
                         
                          <input type="Password" id="pw2" value="<?php echo $vendor->password?>" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                         <label class="bmd-label-floating">Nomor Telepon</label>
                        <div class="form-group">
                         
                          <input type="number" name="no_telp" value="<?php echo $vendor->no_telp?>" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Foto Profile</label>
                          <input class="form-control-file" type="file" name="image" >
                           <input type="hidden" name="old_image" class="form-control-file" value="<?php echo $vendor->image ?>">
                        
                      </div>





                    </div>

 <div class="row">

  <div class="col-md-12">
                        <div class="form-group">
                          <label>Alamat</label>
                          <div class="form-group">
                            
                            <textarea class="form-control" name="alamat" rows="5"><?php echo $vendor->alamat?></textarea>
                          </div>
                        </div>
                      </div>
 </div>


      
                   
                     <label class="bmd-label-floating"> Dengan menambahkan vendor anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <script type="text/javascript">
    window.onload = function () {
        document.getElementById("pw1").onchange = validatePassword;
        document.getElementById("pw2").onchange = validatePassword;
    }

    function validatePassword(){
    var pass2=document.getElementById("pw2").value;
    var pass1=document.getElementById("pw1").value;
    if(pass1!=pass2)
        document.getElementById("pw2").setCustomValidity("Password Tidak Sama, Coba Lagi");
    else
        document.getElementById("pw2").setCustomValidity('');
    }
</script>