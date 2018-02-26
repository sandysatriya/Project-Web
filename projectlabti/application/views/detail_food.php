
<?php 
  $id="";
  $tgl_post="";
  $name_food="";
  $detail="";
  $range_h="";
  $rating="";
  $bahan="";
  $c_buat="";
  $rating="";
  $pic_food="";
  if ($pil=='edit'){
    foreach ($sql->result() as $obj1){
      $pil='edit';
      $id=$obj1->id;
      $name_food=$obj1->name_food;
      $detail=$obj1->detail;
      $range_h=$obj1->range_h;
      $rating=$obj1->rating;
      $bahan=$obj1->bahan;
      $c_buat=$obj1->c_buat;
      $rating=$obj1->rating;
      $pic_food=$obj1->pic_food;
    }
  }
?>

<div class="py-2 photo-overlay" style="">
  <div class="py-5">
    <div class="container">
      <div class="row">
          <h1 class="" style="color: white;">Detail Makanan : </h1>
      </div>
    </div>
      <div class="row text-center">
        <div class="col-md-4"> </div>
        <div class="col-md-4">
          <img class="img-fluid rounded-circle p-6" width="300" src="<?= base_url('upload/'.$obj1->pic_food);?>"" alt="Card image">
        </div>
        <div class="col-md-4"></div>
      </div>
  </div>
</div>

<!-- detail -->
  <div class="py-0 photo-overlay" style="">
    <div class="container">
      <div class="row">
        <div class="p-7 w-50 col-md-12   ">
          <div class="card my-0">
            <div class="card-header bg-primary">
              <h2 class="mb-0 text-center"><b><?= $name_food;?></b></h2>
            </div>
            <div class="card-body">
              <p class="card-text"></p>
              <p><b>Bahan :</b></p>
              <br>
              <?= $bahan;?>
              <br>
              <br>
              <p class="card-text"></p>
              <p><b>Cara Pembuatan :</b></p>
              <br>
              <?= $c_buat;?>
              <br> </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <div class="py-2 photo-overlay" style=""> </div>