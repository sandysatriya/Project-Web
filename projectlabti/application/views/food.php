
<!-- CARD  -->
<div class="py-5 text-center bg-light photo-overlay" style="background-image: url(&quot;assets/img/cover.jpg&quot;);">
    <div class="container">
      <div class="row animate-in-down">
        <div class="col-md-12">
          <br>
          <h4 class="m-0 text-center text-light">"There is no sincerer love than the love of food"</h4> <br>
          <h1 class="mb-3 text-primary text-center text-light"><b>Daftar Makanan</b></h1>
          <div class="row">
          
            <?php foreach ($sql->result() as $obj1) {
              ?>
            <div class="col-md-4 p-3 bg-primary card animate-in-down ">
              <img class="img-fluid rounded-circle w-75 mx-auto mt-3" width="300" src="<?= base_url('upload/'.$obj1->pic_food);?>">
              <div class="card-body">
              <h3 class="text-light card-title"><b><?= $obj1->name_food;?></b></h3>
              <p class="mb-3 text-light card-text"><b><?= $obj1->detail;?></b></p>
              <p class="mb-3 text-light card-text"><b>Rp : <?= $obj1->range_h;?></b></p>
              <p class="mb-3 text-light card-text"><b>Rate : <?= $obj1->rating;?></b></p>
              <a class="btn btn-info" href="<?php echo base_url();?>detail/detail_food/<?php echo $obj1->id;?>">View</a>
            </div>
          </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
</div>