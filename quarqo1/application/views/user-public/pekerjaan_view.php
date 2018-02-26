<div class="container w3-mobile w3-content">
	<div class="row">
	
	<!-- kolom md 4 -->
	
	<div class="col-md-4">
		<div class="w3-card-4">
			<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					<h4 data-toggle="collapse" href="#collapse1"><b>Filter</b></h4>
				</div>
			</div>
			
			<div class="panel-body">
			<form action="filter_pekerjaan.php">
				<input type="text" class="form-control" id="kata_kunci" placeholder="Masukkan kata kunci">
				<br>
				<select class="form-control" id="lokasi">
					<option>--Lokasi--</option>
					<option>?php echo lokasi_data(); ?</option>
					<option>?php echo lokasi_data(); ?</option>
					<option>?php echo lokasi_data(); ?</option>
				</select>
				<br>
				<select class="form-control" id="keahlian">
					<option>--Keahlian--</option>
					<option>?php echo keahlian_data(); ?</option>
					<option>?php echo keahlian_data(); ?</option>
					<option>?php echo keahlian_data(); ?</option>
				</select>
				<br>
				<button type="submit" class="btn btn-block w3-ripple w3-hover-cyan" style="background:#007AFF;">
					<i class="fa-fw fa fa-search"></i>Cari
				</button>
			</form>
			
			</div>
			</div>
		</div>
	</div>
		
	<!-- kolom md 8 -->
		
	<div class="col-md-8">
		<div class="media w3-card-4" style="background-color:white;height:150px;">
		<div class="media-left">
			<a href="#">
				<img class="media-object w3-ripple" src="assets/img/find_jobs.jpg" alt="berita1" height="150" width="150">
			</a>
		</div>
		<div class="media-body">
			<h4 class="media-heading"><b>Software Engineer</b></h4>
			<small>PT Kadang Lancar - Jakarta Barat, DKI Jakarta</small>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
		</div>
		</div>
		
		<div class="media w3-card-4" style="background-color:white;height:150px;">
		<div class="media-left">
			<a href="#">
				<img class="media-object w3-ripple" src="assets/img/no-image.jpg" alt="berita1" height="150" width="150">
			</a>
		</div>
		<div class="media-body">
			<h4 class="media-heading"><b>Keahlian</b></h4>
			<small>Company - Kota, Provinsi</small>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
		</div>
		</div>
		
		<div class="media w3-card-4" style="background-color:white;height:150px;">
		<div class="media-left">
			<a href="#">
				<img class="media-object w3-ripple" src="assets/img/no-image.jpg" alt="berita1" height="150" width="150">
			</a>
		</div>
		<div class="media-body">
			<h4 class="media-heading"><b>Keahlian</b></h4>
			<small>Company - Kota, Provinsi</small>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
		</div>
		</div>
		
	</div>
	
</div>