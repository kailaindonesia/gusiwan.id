<?php foreach ($user as $user) :?>
  <div class="page-content-wrapper">
    <div class="container">
      <!-- Profile Wrapper-->
      <div class="profile-wrapper-area py-3">
        <!-- User Information-->
        <div class="card user-info-card">
          <div class="card-body p-4 d-flex align-items-center">
            <div class="user-profile mr-3"><img src="img/bg-img/9.jpg" alt="">
              <div class="change-user-thumb">
                <form>
                  <input class="form-control-file" type="file">
                  <button><i class="lni-pencil"></i></button>
                </form>
              </div>
            </div>
            <div class="user-info">
              <p class="mb-0 text-white"><?=$user->username ?></p>
              <h5 class="mb-0"><?=$user->nama?></h5>
            </div>
          </div>
        </div>
        <!-- User Meta Data-->
        <div class="card user-data-card">
          <div class="card-body">
            <form action="<?=site_url("account/update_profile")?>" method="POST">
              <input type="hidden" name="id" value="<?=$user->id?>">
              <div class="form-group">
                <div class="title mb-2"><i class="lni-user"></i><span>Nama</span></div>
                <input type="text" name="nama" class="form-control" type="text" value="<?=$user->nama?>">
              </div>
              <div class="form-group">
                <div class="form-group">
                  <div class="title mb-2"><i class="lni-user"></i><span>Username</span></div>
                  <input type="text" name="username" class="form-control" type="text" value="<?=$user->username ?>">
                </div>
                <div class="form-group">
                  <div class="title mb-2"><i class="lni-envelope"></i><span>Alamat Email</span></div>
                  <input type="text" name="email" class="form-control" type="email" value="<?=$user->email?>">
                </div>
                <div class="title mb-2"><i class="lni-phone-handset"></i><span>Nomor HP</span></div>
                <input type="text" name="no_telp" class="form-control" type="text" value="<?=$user->no_telp?>">
              </div>
              <button type="submit" class="btn btn-success w-100" type="submit">Perbarui User</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>