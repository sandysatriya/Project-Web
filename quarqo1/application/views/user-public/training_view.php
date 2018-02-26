<div id="" class="container w3-content">

	<div class="row">
	
		<div class="col-md-12">
		
			<ul class="nav nav-pills nav-justified bg-warning">
				<li class="active w3-ripple"><a class="w3-hover-cyan" data-toggle="pill" href="#seminar">Seminar</a></li>
				<li class="w3-ripple"><a class="w3-hover-cyan" data-toggle="pill" href="#workshop">Workshop</a></li>
				<li class="w3-ripple"><a class="w3-hover-cyan" data-toggle="pill" href="#pelatihan">Pelatihan</a></li>
			</ul>
			<hr>

			

			<!-- SEMINAR -->
			
			<div class="tab-content">
			
			<div id="seminar" class="media w3-card-4 tab-pane fade in active" style="background-color:white;">
			
			<?php foreach ($sql->result() as $obj1) {
		?>

			<table>
				<div class="media-left">

					<a href="#">

						<img class="media-object w3-ripple" src="<?php echo base_url($obj1->pic_seminar) ;?>" alt="training" height="150" width="150">

					</a>

				</div>
		
				
				<div class="media-body">

					<h4 class="media-heading" style="font-weight: bold;"><?php echo $obj1->nama_seminar;?></h4>

					<p><?php echo $obj1->detail_seminar;?></p>
					
					<br>
					
					<small><i>Periode pendaftaran : <?php echo $obj1->periode_min_seminar;?> s.d. <?=$obj1->periode_max_seminar;?></i></small>
					<br>
					<br>

				<button onclick="training_modal(<?=$obj1->id?>,'Seminar')" type="button" class="btn btn-info btn-sm" >Detail</button>

				<hr>
						
				</div>

				<?php } ?>

				</table>

			</div>


			<!-- WORKSHOP -->

			<div id="workshop" class="media w3-card-4 tab-pane fade" style="background-color:white;">			
			<?php foreach ($sql2->result() as $obj1) {
		?>
			<table>
				<div class="media-left">
					<a href="#">
						<img class="media-object w3-ripple" src="<?php echo base_url($obj1->pic_workshop) ;?>" alt="workshop" height="150" width="150">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading" style="font-weight: bold"><?php echo $obj1->nama_workshop;?></h4>
					<p><?php echo $obj1->detail_workshop;?></p>
					<br>					
					<small><i>Periode pendaftaran : <?php echo $obj1->periode_min_workshop;?> s.d. <?=$obj1->periode_max_workshop;?></i></small>
					<br>
					<br>					
					<button onclick="training_modal(<?php echo $obj1->id ?>,'Workshop')" type="button" class="btn btn-info btn-sm" >Detail</button>	
					<hr>
				</div>
				<?php } ?>
				</table>
			</div>


			<!-- PELATIHAN -->

			<div id="pelatihan" class="media w3-card-4 tab-pane fade" style="background-color:white;">
			
			<?php foreach ($sql3->result() as $obj1) {
		?>
		
			<table>
				<div class="media-left">

					<a href="#">

						<img class="media-object w3-ripple" src="<?php echo base_url($obj1->pic_pelatihan) ;?>" alt="workshop" height="150" width="150">

					</a>

				</div>

				
				<div class="media-body">

					<h4 class="media-heading" style="font-weight: bold"><?php echo $obj1->nama_pelatihan;?></h4>

					<p><?php echo $obj1->detail_pelatihan;?></p>
					
					<br>
					
					<small><i>Periode pendaftaran : <?php echo $obj1->periode_min_pelatihan;?> s.d. <?php echo $obj1->periode_max_pelatihan;?></i></small>
					<br>
					<br>
					
					<button onclick="training_modal(<?=$obj1->id?>,'Pelatihan')" type="button" class="btn btn-info btn-sm" >Detail</button>	
					<hr>
					
				</div>
				<?php } ?>
				</table>

			</div>
			
			</div>
		
		</div>
	
	</div>
	
</div>
