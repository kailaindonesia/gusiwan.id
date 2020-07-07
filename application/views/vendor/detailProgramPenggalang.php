 <div class="content">
        <div class="container-fluid">
<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4"><?=$program->name?>
    
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="<?= base_url('img/program/').$program->image;?>" alt="">
    </div>

    <div class="col-md-4">
      
      <h3 class="my-3">Kebutuhan Program</h3>
      <ul>
      	<li>Lokasi : <?=$program->lokasi?></li>
      	<li>Penggalang : <?=$program->vendor?></li>
        <li>Target Donasi : Rp. <?php $angka = "$program->target_donasi";
 
echo number_format($angka);?></li>
        <li>Periode : <?php 
$date = $program->periode;
$waktuawal  = date_create($date); //waktu di setting

$waktuakhir = date_create(); //2019-02-21 09:35 waktu sekarang

$diff  = date_diff($waktuawal, $waktuakhir);
 echo "$diff->days";

             ?> Hari</li>
        
      </ul>

      <h3 class="my-3">Deskripsi Program</h3>
      <p><?=$program->informasi?></p>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Gambar Opsional</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

  </div>
  <form action="<?= site_url('vendor/appprogram');?>" method="post">
  	<input type="hidden" name="id" value="<?= $program->id?>">
  	<input type="hidden" name="status" value="1">

  <button class="btn btn-primary">terima program</button>
<a class="btn btn-danger" href="<?= site_url('vendor/tolakgalang/'). $program->id;?>">tolak program</a>
</form>

  <!-- /.row -->

</div>
<!-- /.container -->
        </div>
      </div>