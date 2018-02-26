<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="assets/img/fav_quarqo.png" type="image/x-icon">
	<title>QUARQO</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
	<link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
	
<style type="text/css">	
body, html {
	font-family: Ubuntu, sans-serif;
	background: #B8B8B8;
	}
		
.hover {
    height:auto;
    transition: all 0.5s;
    -o-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -webkit-transition: all 0.5s;
}
.hover:hover {
    transition: all 0.3s;
    -o-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -webkit-transition: all 0.3s;
    transform: scale(1.5);
    -moz-transform: scale(1.5);
    -o-transform: scale(1.5);
    -webkit-transform: scale(1.5);
    box-shadow: 2px 2px 6px rgba(0,0,0,0.5);
}

.tulisan{
	color: #00FFFF;	
	font-size: 40pt;
	font-weight: bold;
	font-family: 'Ubuntu';
}
</style>

</head>

<body>
 <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/img/QUARQO.png" height="25"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a href="login" class="btn text-white">Sign in</a>
          </li>
        </ul>
        <a href="logincompany" class="btn btn-secondary w3-hover-cyan"><i class="fa fa-building fa-lg"></i> for Company</a>
      </div>
    </div>
  </nav>