<div class="container w3-display-middle w3-mobile">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well w3-animate-zoom ">
		<?php echo $this->session->flashdata('msg'); ?>
		<?php $attributes = array("name" => "loginform");
			echo form_open("logincompany", $attributes);?>
			
			<div class="w3-center">
			    <a href="<?php echo base_url(); ?>">
				    <img src="assets/img/QUARQO.png" style="width:70%" class="w3-margin-top">
				</a>
			</div>
			<hr>
			<legend>Sign in</legend>
			<div class="form-group">
				<input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>
			<div class="form-group">
				<input class="form-control" name="password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Sign in</button>
			</div>
			<hr>
			
			<div class="text-center">
			    <span>atau dengan</span>
			    <br>
			    <a href="#" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
			    <a href="#" class="btn-social btn-google-plus"><i class="fa fa-google-plus"></i></a>
			    <a href="#" class="btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a>
			</div>
			<hr>
			
			<div class="text-center">
				New User? <a href="signup">Sign up here</a>
			</div>
		<?php echo form_close(); ?>
		</div>
	</div>
