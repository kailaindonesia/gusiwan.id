    <div class="page-content-wrapper">
      <!-- Catagory Single Image-->
      <div class="catagory-single-img"><img class="w-100" src="<?= base_url('img/bg-img/bg-belanja.png'); ?>" alt=""></div>
      <!-- Top Products-->
      <div class="top-products-area mt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Program Belanja</h6>
          </div>
          <div class="row">
            <!-- Single Top Product Card-->
            <?php foreach($products as $product) : ?>
            <div class="col-6 col-sm-4">
              <div class="card top-product-card mb-3">
                <div class="card-body"><a class="wishlist-btn" href="#"></a><a class="product-thumbnail d-block" href="<?php echo site_url('product/detail/'.$product->id) ?>"><?= img([
                  'class' => 'mb-2',
        'src'   => 'img/product/' . $product->image,

        
        ])?></a><a class="product-title d-block" href="<?php echo site_url('product/detail/'.$product->id) ?>"><?=$product->name?></a>
                  <p class="sale-price">Rp. 
              
              <?php $angka = "$product->price";
 
echo number_format($angka);?></p>
                  <div class="product-rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div><a class="btn btn-success" href="<?php echo site_url('product/detail/'.$product->id) ?>"><i class="lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
          <?php endforeach; ?>
          </div>
       
