<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="assets/img/fav_quarqo.png" type="image/x-icon">
	<title>QUARQO</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

</head>

	<style>
		body, html {
			font-family: Ubuntu, sans-serif;
			background: ;
		}
		
		.media-body {
		    padding: 10px;
		}
		
	</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar" style="background:#007AFF;">
    <a href="profilecompany" class="w3-hover-cyan w3-bar-item"><img src="assets/img/QUARQO.png" style="margin:auto" height="42"></a>
	
	<!-- Middle-sided navbar links -->
	<div class="w3-display-middle w3-hide-small" style="padding:auto">
	  <a href="pengumuman" class="w3-ripple w3-hover-cyan w3-bar-item w3-button w3-padding-16" title="Pengumuman"><i class="w3-xlarge fa fa-bullhorn"></i></a>
	  <a href="iklan" class="w3-ripple w3-hover-cyan w3-bar-item w3-button w3-padding-16" title="Iklan"><i class="w3-xlarge fa fa-list-alt"></i></a>
	  <a href="kandidat" class="w3-ripple w3-hover-cyan w3-bar-item w3-button w3-padding-16" title="Kandidat"><i class="w3-xlarge fa fa-users"></i></a>
    </div>

	<!-- Right-sided navbar links -->
	<div class="w3-display-right w3-hide-small">
		<a onclick="userMenu()" class="w3-ripple w3-hover-cyan w3-button"><img src="assets/img/profile-company.png" class="w3-circle" style="margin:auto" height="42"></a>
		<div id="userDrop" class="w3-card-4 w3-dropdown-content w3-bar-block" style="right:0;background:#F5F5F5;">
			<a href="profilecompany" class="w3-bar-item w3-button w3-hover-cyan w3-ripple">Profil perusahaan</a>
			<a href="#" class="w3-bar-item w3-button w3-hover-cyan w3-ripple">Pengaturan</a>
			<a href="profilecompany/logout" class="w3-bar-item w3-button w3-hover-cyan w3-ripple">Keluar</a>
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
  <a href="profilecompany" onclick="w3_close()" class="w3-hover-cyan w3-bar-item w3-button"><img src="assets/img/profile-company.png" class="w3-circle w3-margin-right" height="37">Profil perusahaan</a>
  <a href="pengumuman" onclick="w3_close()" class="w3-hover-cyan w3-bar-item w3-button"><i class="w3-large fa-fw fa fa-bullhorn w3-margin-right"></i>Pengumuman</a>
  <a href="iklan" onclick="w3_close()" class="w3-hover-cyan w3-bar-item w3-button"><i class="w3-large fa-fw fa fa-list-alt w3-margin-right"></i>Iklan</a>
  <a href="kandidat" onclick="w3_close()" class="w3-hover-cyan w3-bar-item w3-button"><i class="w3-large fa-fw fa fa-users w3-margin-right"></i>Kandidat</a>
  <a href="profilecompany/logout" onclick="w3_close()" class="w3-hover-cyan w3-display-bottomleft w3-bar-item w3-button w3-margin-right"><i class="w3-large fa-fw fa fa-sign-out w3-margin-right"></i>Keluar</a>
</nav>
<br>
<br>
<br>
<br>
