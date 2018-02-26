<div class="container w3-mobile w3-content">
	<div class="row">
	    
	<div class="col-md-3">
		<div class="w3-card-4">
			<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					<h4 data-toggle="collapse" href="#collapse1"><b>Filter</b></h4>
				</div>
			</div>
			
			<div class="panel-body">
			<form action="filter_pekerjaan.php">
				<input type="text" class="form-control" id="kata_kunci" placeholder="Cari kandidat . . .">
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

<div id="kandidat_search" class="container w3-content">
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="margin-bottom:10px">
		<a href="#" class="list-group-item w3-card-4">
			<div align="center" style="margin-bottom:10px;">
				<img src="assets/img/profile.png" class="img-circle img-responsive" style="height:150px">
			</div>
			<h4 class="list-group-item-heading"><b>Nama Satu</b></h4>
			<span>Freelancer</span>
			<br>
			<span><i class="fa fa-university fa-fw"></i> Anonym University</span>
			<br>
			<span><i class="fa fa-map-marker fa-fw"></i> Jakarta, ID</span>
		</a>
	</div>
	
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="margin-bottom:10px">
		<a href="#" class="list-group-item w3-card-4">
			<div align="center" style="margin-bottom:10px;">
				<img src="assets/img/profile.png" class="img-circle img-responsive" style="height:150px">
			</div>
			<h4 class="list-group-item-heading"><b>Nama Dua</b></h4>
			<span>Freelancer</span>
			<br>
			<span><i class="fa fa-university fa-fw"></i> Anonym University</span>
			<br>
			<span><i class="fa fa-map-marker fa-fw"></i> Jakarta, ID</span>
		</a>
	</div>
	
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="margin-bottom:10px">
		<a href="#" class="list-group-item w3-card-4">
			<div align="center" style="margin-bottom:10px;">
				<img src="assets/img/profile.png" class="img-circle img-responsive" style="height:150px">
			</div>
			<h4 class="list-group-item-heading"><b>Nama Tiga</b></h4>
			<span>Freelancer</span>
			<br>
			<span><i class="fa fa-university fa-fw"></i> Anonym University</span>
			<br>
			<span><i class="fa fa-map-marker fa-fw"></i> Jakarta, ID</span>
		</a>
	</div>
	
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="margin-bottom:10px">
		<a href="#" class="list-group-item w3-card-4">
			<div align="center" style="margin-bottom:10px;">
				<img src="assets/img/profile.png" class="img-circle img-responsive" style="height:150px">
			</div>
			<h4 class="list-group-item-heading"><b>Nama Empat</b></h4>
			<span>Freelancer</span>
			<br>
			<span><i class="fa fa-university fa-fw"></i> Anonym University</span>
			<br>
			<span><i class="fa fa-map-marker fa-fw"></i> Jakarta, ID</span>
		</a>
	</div>
	
</div>
</div>

</div>
</div>