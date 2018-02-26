<body>
  <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Daftarkan dirimu sekarang !</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Nama Lengkap</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nama_lengkap" placeholder="Nama Lengkap" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">No.Telp / Handphone</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="+62 (89237xxx)" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Alamat</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="alamat" placeholder="Alamat" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Kota</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="kota" placeholder="City" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Nama Universitas / Sekolah</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
  <input name="nama_institusi" placeholder="Nama Universitas / Sekolah" class="form-control" type="text">
    </div>
  </div>
</div>


<!-- Text area --> 
<div class="form-group">
  <label class="col-md-4 control-label">Alasan</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Isikan Alasan Anda "></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
   
    <a href="<?php echo base_url(); ?>Training/daftar" class="btn btn-warning" role="button">Daftar</a> 
    <a href="<?php echo base_url(); ?>Training" class="btn btn-primary" role="button">Kembali</a> 
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha256-IFHWFEbU2/+wNycDECKgjIRSirRNIDp2acEB5fvdVRU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js" integrity="sha256-JMwpUzWY+WKCPEIpvCgEh2RqJ6QqlSV8Md4bmxjzcQ8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.4.5/js/bootstrapValidator.min.js" integrity="sha256-qMXLA5Yk/JV0sI9r6rhmma2dQWDGfkftIei4UbAyUhQ=" crossorigin="anonymous"></script>


    <script  src="assets/js/index_daftar_training.js"></script>

</body>