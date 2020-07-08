<div class="page-content-wrapper">
  <div class="container">
    <!-- Profile Wrapper-->
    <div class="profile-wrapper-area py-3">
      <!-- User Information-->
      <div class="card user-info-card">
        <div class="card-body p-4 d-flex align-items-center">
          <div class="user-profile mr-3"><img src="img/bg-img/9.jpg" alt=""></div>
          <div class="user-info">
            <p class="mb-0 text-white">@designing-world</p>
            <h5 class="mb-0">Suha Jannat</h5>
          </div>
        </div>
      </div>
      <!-- User Meta Data-->
      <div class="card user-data-card">
        <div class="card-body">
          <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('error'); ?>
        </div>
        <?php endif; ?>
          <form action="<?=site_url("account/change_password");?>" method="POST">
            <div class="form-group">
              <div class="title mb-2"><i class="lni-key"></i><span>Old Password</span></div>
              <input id="old_password" name="old_password" class="form-control" type="password">
            </div>
            <div class="form-group">
              <div class="title mb-2"><i class="lni-key"></i><span>New Password</span></div>
              <input id="new_password" name="new_password" class="form-control" type="password">
            </div>
            <div class="form-group">
              <div class="title mb-2"><i class="lni-key"></i><span>Repeat New Password</span></div>
              <input id="new_password1" name="new_password1" class="form-control" type="password">
            </div>
            <button  class="btn btn-success w-100" type="submit">Update Password</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  
</script>