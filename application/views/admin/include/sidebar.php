<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?= site_url('admin'); ?>" class="simple-text logo-normal">
          <img height="100px" src="<?= base_url('img/core-img/logo-small.png');?>">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard Admin</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/galangdana'); ?>">
              <i class="material-icons">verified_user</i>
              <p>Validasi Penggalang Dana</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/program'); ?>">
              <i class="material-icons">language</i>
              <p>Program Vendor</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/product'); ?>">
              <i class="material-icons">shopping_cart</i>
              <p>Product Vendor</p>
            </a>
          </li>
         <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/order'); ?>">
              <i class="material-icons">shopping_basket</i>
              <p>Status Order</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/news'); ?>">
              <i class="material-icons">mail</i>
              <p>Berita & Tips</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/donasi'); ?>">
              <i class="material-icons">accessibility_new</i>
              <p>Donatur</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/vendor'); ?>">
              <i class="material-icons">supervisor_account</i>
              <p>Vendor</p>
            </a>
          </li>
         
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/notification'); ?>">
              <i class="material-icons">announcement</i>
              <p>Notification</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/carousel'); ?>">
              <i class="material-icons">build</i>
              <p>Web Setting</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div> 