<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="<?php echo base_url ('assets/img/fav_quarqo.png') ?>" type="image/x-icon">
	<title>QUARQO</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
	<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  	<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" integrity="sha256-tf1yN1B2PrtzH5Ih5BPn1k1Y1RktwEDkIpLtPczMpzI=" crossorigin="anonymous" />  <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap-theme.min.css" integrity="sha256-NLECy3aJQJ/Rw8GArrH9PwuL8LR6slx0xC6v9XTmYak=" crossorigin="anonymous" /> 
  	<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" integrity="sha256-e+YsRqruSDLjqWPtH0eltKPmH+xGQ70kAEUqjeI9kUE=" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url ('assets/bootstrapValidator.min.css') ?>">
     
</head>

	<style>
		body, html {
			font-family: Ubuntu, sans-serif;
			background: ;
		}
		
		.media-body {
		    padding: 10px;
		}


  #success_message{ display: none;}

		
	</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar" style="background:#007AFF;">
    <a href="profile" class="w3-hover-cyan w3-bar-item"><img src="assets/img/QUARQO.png" style="margin:auto" height="42"></a>
	
	<!-- Middle-sided navbar links -->
	<div class="w3-display-middle w3-hide-small" style="padding:auto">
	  <a href="pekerjaan" class="w3-ripple w3-hover-cyan w3-bar-item w3-button w3-padding-16" title="Cari Pekerjaan"><i class="w3-xlarge fa fa-search"></i></a>
	  <a href="berita" class="w3-ripple w3-hover-cyan w3-bar-item w3-button w3-padding-16" title="Berita"><i class="w3-xlarge fa fa-newspaper-o"></i></a>
	  <a href="koneksi" class="w3-ripple w3-hover-cyan w3-bar-item w3-button w3-padding-16" title="Koneksi"><i class="w3-xlarge fa fa-users"></i></a>
	  <a href="training" class="w3-ripple w3-hover-cyan w3-bar-item w3-button w3-padding-16" title="Training"><i class="w3-xlarge fa fa-graduation-cap"></i></a>
	  <a href="pemberitahuan" class="w3-ripple w3-hover-cyan w3-bar-item w3-button w3-padding-16" title="Pemberitahuan"><i class="w3-xlarge fa fa-bell"></i></a>

    </div>

	<!-- Right-sided navbar links -->
	<div class="w3-display-right w3-hide-small">
		<a onclick="userMenu()" class="w3-ripple w3-hover-cyan w3-button"><img src="assets/img/profile.png" class="w3-circle" style="margin:auto" height="42"></a>
		<div id="userDrop" class="w3-card-4 w3-dropdown-content w3-bar-block" style="right:0;background:#F5F5F5;">
			<a href="profile" class="w3-bar-item w3-button w3-hover-cyan w3-ripple">Profile saya</a>
			<a href="#" class="w3-bar-item w3-button w3-hover-cyan w3-ripple">Pengaturan</a>
			<a href="profile/logout" class="w3-bar-item w3-button w3-hover-cyan w3-ripple">Keluar</a>
		</div>
	</div>

    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-hover-cyan w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium w3-padding-16" onclick="w3_open()">
      <i style="margin:auto;height:22px" class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-card-4 w3-animate-left w3-hide-medium w3-hide-large" style="display:none;background:#F5F5F5;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-animate-right w3-hover-cyan w3-bar-item w3-button w3-large w3-padding-16" style="background:#007AFF;">Close &times;</a>
  <br>
  <a href="profile" onclick="w3_close()" class="w3-hover-cyan w3-bar-item w3-button"><img src="assets/img/profile.png" class="w3-circle w3-margin-right" height="37">Profil saya</a>
  <a href="pekerjaan" onclick="w3_close()" class="w3-hover-cyan w3-bar-item w3-button"><i class="w3-large fa-fw fa fa-search w3-margin-right"></i>Cari Pekerjaan</a>
  <a href="berita" onclick="w3_close()" class="w3-hover-cyan w3-bar-item w3-button"><i class="w3-large fa-fw fa fa-newspaper-o w3-margin-right"></i>Berita</a>
  <a href="koneksi" onclick="w3_close()" class="w3-hover-cyan w3-bar-item w3-button"><i class="w3-large fa-fw fa fa-users w3-margin-right"></i>Koneksi</a>
  <a href="training" onclick="w3_close()" class="w3-hover-cyan w3-bar-item w3-button"><i class="w3-large fa-fw fa fa-graduation-cap w3-margin-right"></i>Training</a>
  <a href="pemberitahuan" onclick="w3_close()" class="w3-hover-cyan w3-bar-item w3-button"><i class="w3-large fa-fw fa fa-bell w3-margin-right"></i>Pemberitahuan</a>
  
  <a href="profile/logout" onclick="w3_close()" class="w3-hover-cyan w3-display-bottomleft w3-bar-item w3-button w3-margin-right"><i class="w3-large fa-fw fa fa-sign-out w3-margin-right"></i>Keluar</a>
</nav>
<br>
<br>
<br>
<br>