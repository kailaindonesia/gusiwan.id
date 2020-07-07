
    <div class="page-content-wrapper">
      <!-- Product Slides-->
    <?= img(['class' => 'single-product-slide','src'    => 'img/program/' . $program->image,
								
					])?>
      <div class="product-description pb-3">
        <!-- Product Title & Meta Data-->
        <div class="product-title-meta-data bg-white mb-3 py-3">
          <div class="container d-flex justify-content-between">
            <div class="p-title-price">
              <p class="sale-price mb-0"><?=$program->vendor?></p>
              <br>
              <h6 class="mb-1"><?=$program->name?></h6>
              
            </div>
            <div class="p-wishlist-share"><a href="wishlist-grid.html"><i class="lni-heart-filled"></i></a><a href="#"><i class="lni-share"></i></a></div>
          </div>
          <!-- Ratings-->
             <div class="product-ratings">
            <div class="container d-flex align-items-center justify-content-between">
              <input type="range" max="<?= $program->target_donasi?>" value="<?= $program->donasikumpul?>" disabled=""> 
            </div>
          </div>
       
          <div class="product-ratings">
            <div class="container d-flex align-items-center justify-content-between">
              <div class="ratings">Terkumpul</div>
             <div>Sisa Hari</div>
            </div>
          </div>
       
      
          <div class="product-ratings">
            <div class="container d-flex align-items-center justify-content-between">
              <div class="ratings"><small>Rp.<?php $angka = "$program->donasikumpul";
 
echo number_format($angka);?></small></div>
             <div><small><?php 
$date = $program->periode;
$waktuawal  = date_create($date); //waktu di setting

$waktuakhir = date_create(); //2019-02-21 09:35 waktu sekarang

$diff  = date_diff($waktuawal, $waktuakhir);
 echo "$diff->days";

             ?></small></div>
            </div>
          </div>
        </div>

        <!-- Selection Panel-->
           <!-- Add To Cart-->
        <div class="cart-form-wrapper bg-white mb-3 py-3">
          <div class="container">
             <h6>Tracking</h6>
           <table>
             <tr>
               <td>
                 <a href="<?php echo site_url('donasi/berdonasi/'.$program->id) ?>">
              <img class="responsive" src="<?= base_url('img/icon/pertumbuhan.jpg'); ?>"></a>
               </td>
               <td>
                  <a href="<?php echo site_url('donasi/berdonasi/'.$program->id) ?>">
              <img class="responsive" src="<?= base_url('img/icon/buah.jpg'); ?>"></a>
               </td>
               <td>
                  <a href="<?php echo site_url('donasi/berdonasi/'.$program->id) ?>">
              <img class="responsive" src="<?= base_url('img/icon/bibit.jpg'); ?>"></a>
               
               </td>
               <td>
                <a href="<?php echo site_url('donasi/berdonasi/'.$program->id) ?>">
                 <img class="responsive" src="<?= base_url('img/icon/video.jpg'); ?>"></a>
               </td>
              <td>
                <a href="<?php echo site_url('donasi/berdonasi/'.$program->id) ?>">
              <img class="responsive" src="<?= base_url('img/icon/keuangan.jpg'); ?>"></a>
              </td>
             </tr>
           </table>
            
              
              
              
          </div>
        </div>
        <!-- Add To Cart-->
        <div class="cart-form-wrapper bg-white mb-3 py-3">
          <div class="container">
           
            
              <a class="btn btn-success add2cart-notify" href="<?php echo site_url('donasi/berdonasi/'.$program->id) ?>">Donasi Sekarang</a>
           
          </div>
        </div>
        <!-- Product Specification-->
        <div class="p-specification bg-white mb-3 py-3">
          <div class="container">
           
            <p><?=$program->informasi?></p>
            
          </div>
        </div>
        <!-- Rating & Review Wrapper-->
      
        <!-- Ratings Submit Form-->
        
   