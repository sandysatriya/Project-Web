<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo_icon.ico">
  <title>Mangan.co</title>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/custom/style4.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="<?php echo base_url();?>assets/jquery/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="<?php echo base_url();?>assets/jquery/animate-in.js"></script>

</head>

<style type="text/css">

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

</style>

</head>

<body>
   <!-- Navbar -->
  <nav class="navbar-expand-md navbar-dark navbar-dark bg-dark navbar fixed-top">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="btn navbar-btn btn-secondary" href="<?php echo base_url(); ?>home"><b>MANGAN</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-light " href="<?php echo base_url(); ?>detail"><b>MAKANAN</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="btn btn-outline-info" data-toggle="modal" data-target="#about_modal"><b>ABOUT</b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>