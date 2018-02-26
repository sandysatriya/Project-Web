<div class="container w3-display-middle w3-mobile">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well w3-animate-zoom">
			<?php echo $this->session->flashdata('msg'); ?>
			<?php $attributes = array("name" => "signupform");
			echo form_open("signup", $attributes);?>
			
			<div class="w3-center">
			    <a href="<?php echo base_url(); ?>">
				    <img src="assets/img/QUARQO.png" style="width:70%" class="w3-margin-top">
				</a>
			</div>
			<hr>
			<legend>Sign up</legend>
			<div class="form-group">
				<input class="form-control" name="fname" placeholder="First Name" type="text" value="<?php echo set_value('fname'); ?>" />
				<span class="text-danger"><?php echo form_error('fname'); ?></span>
			</div>			
		
			<div class="form-group">
				<input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
				<span class="text-danger"><?php echo form_error('lname'); ?></span>
			</div>
		
			<div class="form-group">
				<input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>

			<div class="form-group">
				<input class="form-control" name="password" placeholder="Password" type="password" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>

			<div class="form-group">
				<input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
				<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
			</div>

			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Sign up</button>
			</div>
			<hr>
			<div class="text-center">
				Already Registered? <a href="<?php echo base_url(); ?>login">Sign in here</a>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>