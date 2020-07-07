<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?= site_url('vendor'); ?>" class="simple-text logo-normal">
          <img height="100px" src="<?= base_url('img/core-img/logo-small.png');?>">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('vendor'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard Vendor</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('vendor/approvgalang'); ?>">
              <i class="material-icons">done_outline</i>
              <p>Approval Penggalang Dana</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('vendor/listgalangdana'); ?>">
              <i class="material-icons">assignment_ind</i>
              <p>List Penggalang Dana</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('vendor/galangdana'); ?>">
              <i class="material-icons">money</i>
              <p>Program Penggalang Dana</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('vendor/program'); ?>">
              <i class="material-icons">language</i>
              <p>Program Donasi</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('vendor/product'); ?>">
              <i class="material-icons">shopping_cart</i>
              <p>Product</p>
            </a>
          </li>
         <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('vendor/productorder'); ?>">
              <i class="material-icons">add_shopping_cart</i>
              <p>Product Order</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('vendor/donasi'); ?>">
              <i class="material-icons">star</i>
              <p>List Donatur</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('vendor/training'); ?>">
              <i class="material-icons">person</i>
              <p>Training</p>
            </a>
          </li>
           
         
        
         
          
          
        </ul>
      </div>
    </div> 