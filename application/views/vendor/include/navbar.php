
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Selamat Datang! <?php
$data['user'] = $this->db->get_where('vendor', ['username' =>
    $this->session->userdata('nama')])->row_array();





          
                




                    if ($this->session->userdata('status') == "vendor") {
                      echo "Hey, ";
                      echo $data['user']['nama'];
                    } else {
                      echo "Hey, Tamu!"; 
                    }
                    
                    
                ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
             
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <p class="dropdown-item">Selamat Datang! <?php echo $this->session->userdata("nama"); ?></p>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Profile Settings</a>
                  
                  <a class="dropdown-item" href="<?= site_url('logvend/logout'); ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>