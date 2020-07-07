<div class="footer-nav-area" id="footerNav">
      <div class="suha-footer-nav h-100">
        <ul class="h-100 d-flex align-items-center justify-content-between">
          <li ><a href="<?= site_url(''); ?>"><i class="lni-home"></i>Home</a></li>
          <li><a href="<?= site_url('order/belanja'); ?>"><i class="lni-book"></i>Kelas Saya</a></li>
          <?php if (!empty($this->session->userdata('nama'))) {
           echo '<li><a style="color: dodgerblue;" href="'.site_url('galangdana/addanggota').'"><i style="color: dodgerblue;" class="lni-wallet"></i>Daftar KUR</a></li>';
          } else {
            echo '<li><a href="'.site_url('register').'"><i class="lni-plus"></i>Daftar</a></li>';
          }
          ?>
          
         
          <li><a href="<?= site_url('notif'); ?>"><i class="lni-alarm"></i>Notifikasi</a></li>
          <li><a href="<?= site_url('Account'); ?>"><i class="lni-user"></i>Account</a></li>
        </ul>
      </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.animatedheadline.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.counterup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jarallax.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jarallax-video.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/default/jquery.passwordstrength.js'); ?>"></script>
    
    <script src="<?php echo base_url('assets/js/default/active.js'); ?>"></script>
  </body>
</html>