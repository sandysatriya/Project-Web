<!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/style.css">


<div class="container">
  <h5 style="text-align: center; font-size: 15pt"><?php echo $this->session->flashdata('msg'); ?></h5>
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="assets/img/admin1.jpg" alt="Avatar" /> 
    </button>

    <form action="<?php echo base_url('login/cek_login'); ?>" method="post">
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input type="text" name="username" id="fieldUser" class="input" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" name="password" id="fieldPassword" class="input" required pattern=.*\S.*  />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
          <button class="btn" value="Login" type="submit" >Login</button>
        </div>
      </div>
     </div>
   </form>
  </div>
</div>
  

<script type="text/javascript">
/* Simple VanillaJS to toggle class */

document.getElementById('toggleProfile').addEventListener('click', function () {
  [].map.call(document.querySelectorAll('.profile'), function(el) {
    el.classList.toggle('profile--open');
  });
});
</script>