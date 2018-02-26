<div class="container w3-mobile w3-content">
	<div class="row">
	
	<!-- kolom md 4 -->
	
		<div class="col-md-4">
		<div class="w3-card-4">
			<div class="panel">
					<div class="panel-body">
					<div align="center">
					<form action="upload.php" class="w3-hover-opacity">
						<input type="file" name="upload" style="display:none">
						<img onClick="upload.click();" src="assets/img/profile.png" class="img-circle" style="height:150px;margin-top:20px"/>
						</input>
					</form>
						<h3><?php echo $uname; ?></h3>
						<h4>Freelancer</h4>
						<p><span class="fa fa-university fa-fw"></span> Anonym University</p>
						<p><span class="fa fa-map-marker fa-fw"></span> Jakarta, ID</p>
					</div>
					<hr>
					<h4><b>Ketrampilan</b></h4>
						<span class="badge">Web Development</span>
						<span class="badge">Photoshop</span>
						<span class="badge">Corel Draw</span>
					<hr>
					<h4><b>Ketertarikan</b></h4>
						<span class="badge">Sepak bola</span>
						<span class="badge">Climbing</span>
					<hr>
					<a href="https://plus.google.com" class="fa fa-google-plus-official" style="font-size:24px;margin-right:15px"></a>
					<a href="https://www.facebook.com" class="fa fa-facebook" style="font-size:24px;margin-right:15px"></a>
					<a href="https://www.twitter.com" class="fa fa-twitter" style="font-size:24px;margin-right:15px"></a>
					<a href="https://www.linkedin.com" class="fa fa-linkedin" style="font-size:24px;margin-right:15px"></a>
					</div>
					<div align="right"><button class="btn btn-link btn-sm" onclick="user_modal()"><i class="glyphicon glyphicon-pencil small"></i> Edit</button></div>
			</div>
		</div>
		</div>
		
	<!-- kolom md 8 -->
		
		<div class="col-md-8">
		<div class="w3-card-4">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h4 data-toggle="collapse" href="#collapse1"><b>Biografi</b></h4>
        </div>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
		<p>Content</p>
		</div>
		<div align="right"><button class="btn btn-link btn-sm" onclick="biografi_modal()"><i class="glyphicon glyphicon-pencil small"></i> Edit</button></div>
      </div>
    </div>
	</div>
	
	<div class="w3-card-4">
	<div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h4 data-toggle="collapse" href="#collapse2"><b>Pendidikan</b></h4>
        </div>
      </div>
      <div id="collapse2" class="panel-collapse collapse in">
        <div class="panel-body">
		<p>Content</p>
		</div>
		<div align="right"><button class="btn btn-link btn-sm" onclick="pendidikan_modal()"><i class="glyphicon glyphicon-pencil small"></i> Edit</button></div>
      </div>
    </div>
	</div>
	
	<div class="w3-card-4">
	<div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h4 data-toggle="collapse" href="#collapse3"><b>Pengalaman</b></h4>
        </div>
      </div>
      <div id="collapse3" class="panel-collapse collapse in">
        <div class="panel-body">
		<p>Content</p>
		</div>
		<div align="right"><button class="btn btn-link btn-sm" onclick="pengalaman_modal()"><i class="glyphicon glyphicon-pencil small"></i> Edit</button></div>
      </div>
    </div>
	</div>
	
	<div class="w3-card-4">
	<div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h4 data-toggle="collapse" href="#collapse4"><b>Portofolio</b></h4>
        </div>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Portofolio, , model gallery</p>
	<!------------------------------------------------------------------------------------------>
		<a class="col-md-6 w3-margin-bottom" href="#">
            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
        </a>
        <a class="col-md-6 w3-margin-bottom" href="#">
            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
        </a>
        <a class="col-md-6 w3-margin-bottom" href="#">
            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
        </a>
        <a class="col-md-6 w3-margin-bottom" href="#">
            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
        </a>
	<!------------------------------------------------------------------------------------------>
		</div>
		<div align="right"><button class="btn btn-link btn-sm" onclick="portofolio_modal()"><i class="glyphicon glyphicon-pencil small"></i> Edit</button></div>
      </div>
    </div>
	</div>
			
		</div>
	</div>
</div>