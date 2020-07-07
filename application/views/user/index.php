
 <div class="page-content-wrapper">
      <!-- Hero Slides-->



   <div class="flash-sale-slide owl-carousel pt-2">
    
            <div class="card flash-sale-card">
             <a class="btn btn-primary" href="">Pertanian</a>
            </div>
         
            <div class="card flash-sale-card">
            <a class="btn btn-primary" href="">Peternakan</a>
            </div>
            
            <div class="card flash-sale-card">
             <a class="btn btn-primary" href="">Perdagangan</a>
            </div>
</div>
 <div class="product-catagories-wrapper pt-1">
</div>

      <div class="hero-slides owl-carousel">


        <!-- Single Hero Slide-->
        <?php foreach($banner as $pro) : ?>
        <div class="single-hero-slide">
          <div class="slide-img"><?= img([
                  
        'src'   => 'img/bg-img/' . $pro->img,
        
        ])?></div>
          <div class="slide-content h-100 d-flex align-items-center">
            <div class="container">
              
            </div>
          </div>
        </div>

       <?php endforeach; ?>
      </div>


     
   
         
       
            <!-- Product Catagories-->
      <div class="product-catagories-wrapper pt-1">


        <div class="container">
          <div class="section-heading">
           
          </div>
          <div class="product-catagory-wrap">
            <div class="row">
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="<?= site_url('donasi'); ?>"><i class="lni-library"></i><span>Pelatihan</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="<?= site_url('product'); ?>"><i class="lni-wallet"></i><span>Modal Kerja</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="<?= site_url('invest'); ?>"><i class="lni-menu"></i><span>Lainnya</span></a></div>
                </div>
              </div>

           
            </div>
          </div>
        </div>
      </div>
      <!-- Flash Sale Slide-->
   

<div class="cta-area">
        <div class="container">
         
        </div>
      </div>



     


      <!-- Weekly Best Sellers-->
      <div class="weekly-best-seller-area pt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Kelas Best Seller</h6><a class="btn btn-success btn-sm" href="<?= site_url('belanja'); ?>">Lihat Selengkapnya</a>
          </div>
          <div class="row">
            <!-- Single Weekly Product Card-->
               <?php $i=1; foreach($products as $product) : ?>





            <div class="col-12">
              <div class="card weekly-product-card mb-3">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-warning">Kelas Best Seller #<?=$i?></span><a class="product-thumbnail d-block" href="<?php echo site_url('product/detail/'.$product->id); ?>"><?= img([
                  
        'src'   => 'img/product/' . $product->image,
        
        ])?></div>

                  <div class="product-description"><small></small><a class="product-title d-block" href="<?php echo site_url('product/detail/'.$product->id) ?>"><?=$product->name?></a>
                      <div style="color: dodgerblue;" class="product-rating"><span> <?=$product->company?></span></div>
                     <p class="sale-price"><button class="btn btn-primary btn-sm">Rp. <?php $angka = "$product->price";
 
echo number_format($angka);?></button></p>
                
                 
                    <div class="product-rating"></div><a class="btn btn-success" href="<?php echo site_url('product/detail/'.$product->id) ?>">Pelajari Sekarang</a>
                  </div>
                </div>
              </div>
          
            </div>
            
                <?php $i++; endforeach; ?>


  
</div>
</div>
</div>



 <div class="flash-sale-wrapper pb-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Kelas Pertanian</h6><a class="btn btn-primary btn-sm" href="flash-sale.html">View All</a>
          </div>
          <!-- Flash Sale Slide-->
          <div class="flash-sale-slide owl-carousel">
            <!-- Single Flash Sale Card-->
   <?php foreach($tani as $product) : ?>
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="<?php echo site_url('product/detail/'.$product->id); ?>"><img src="<?= base_url('img/product/'.$product->image);?>" alt=""><span class="product-title"><?=$product->name?> </span>
                  <p class="sale-price">Rp. <?php $angka = "$product->price";
 
echo number_format($angka);?></p><span class="progress-title"><?=$product->company?></span>
                  </a></div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="flash-sale-wrapper pb-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Kelas Peternakan</h6><a class="btn btn-primary btn-sm" href="flash-sale.html">View All</a>
          </div>
          <!-- Flash Sale Slide-->
          <div class="flash-sale-slide owl-carousel">
            <!-- Single Flash Sale Card-->
         
            <?php foreach($ternak as $product) : ?>
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="<?php echo site_url('product/detail/'.$product->id); ?>"><img src="<?= base_url('img/product/'.$product->image);?>" alt=""><span class="product-title"><?=$product->name?> </span>
                  <p class="sale-price">Rp. <?php $angka = "$product->price";
 
echo number_format($angka);?></p><span class="progress-title"><?=$product->company?></span>
                  </a></div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
      

<div class="flash-sale-wrapper pb-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Kelas Perdagangan</h6><a class="btn btn-primary btn-sm" href="flash-sale.html">View All</a>
          </div>
          <!-- Flash Sale Slide-->
          <div class="flash-sale-slide owl-carousel">
            <!-- Single Flash Sale Card-->
         
<?php foreach($dagang as $product) : ?>
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="<?php echo site_url('product/detail/'.$product->id); ?>"><img src="<?= base_url('img/product/'.$product->image);?>" alt=""><span class="product-title"><?=$product->name?> </span>
                  <p class="sale-price">Rp. <?php $angka = "$product->price";
 
echo number_format($angka);?></p><span class="progress-title"><?=$product->company?></span>
                  </a></div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>


<div class="flash-sale-wrapper pb-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Kelas Keuangan</h6><a class="btn btn-primary btn-sm" href="flash-sale.html">View All</a>
          </div>
          <!-- Flash Sale Slide-->
          <div class="flash-sale-slide owl-carousel">
            <!-- Single Flash Sale Card-->
        <?php foreach($uang as $product) : ?>
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="<?php echo site_url('product/detail/'.$product->id); ?>"><img src="<?= base_url('img/product/'.$product->image);?>" alt=""><span class="product-title"><?=$product->name?> </span>
                  <p class="sale-price">Rp. <?php $angka = "$product->price";
 
echo number_format($angka);?></p><span class="progress-title"><?=$product->company?></span>
                  </a></div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="flash-sale-wrapper pb-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">News & Tips</h6><a class="btn btn-primary btn-sm" href="flash-sale.html">View All</a>
          </div>
          <!-- Flash Sale Slide-->
          <div class="flash-sale-slide owl-carousel">
            <!-- Single Flash Sale Card-->
        <?php foreach($news as $product) : ?>
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="<?php echo site_url('product/detail/'.$product->id); ?>"><img src="<?= base_url('img/news/'.$product->image);?>" alt=""><span class="product-title"><?=$product->judul?> </span>
                  <p class="sale-price"></p><span class="progress-title"><?=$product->vendor?></span>
                  </a></div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>


</div>
</div>
</div>
</div>
</div>






    

    
<?php if ($this->session->flashdata('warning')): ?>
        <script>
  Swal.fire({
    icon: 'warning',
    title: 'Anda Sudah Login!',
    text: 'Jika tidak dialihkan ke menu utama, silahkan reload halaman ini',
    showConfirmButton: false,
    timer: 3000
})
</script>
         
        <?php endif; ?>



        <?php if ($this->session->flashdata('success-login')): ?>
        <script>
  Swal.fire({
    icon: 'success',
    title: 'Login Berhasil!',
    text: 'Selamat Datang di Gus Iwan!',
    showConfirmButton: false,
    timer: 3000
})
</script>
         
        <?php endif; ?>


        <?php if ($this->session->flashdata('success-logout')): ?>
        <script>
  Swal.fire({
    icon: 'success',
    title: 'Logout Berhasil!',
    text: 'Sampai jumpa! Terimakasih telah mengunjungin Gus Iwan!',
    showConfirmButton: false,
    timer: 3000
})
</script>
         
        <?php endif; ?>
            <!-- Single Weekly Product Card-->
        

      <!-- Top Products-->




      <!-- Cool Facts Area-->
   
