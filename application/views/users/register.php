<h2 style="margin:auto;">Register account</h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="row">
	<div class="col-md-4 col-md-offset-4" style="margin: auto;">
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="name" placeholder="Name">
			<label>Email</label>
			<input type="text" class="form-control" name="email" placeholder="Email">	
			<label>Username</label>
			<input type="text" class="form-control" name="username" placeholder="Username">	
			<label>Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
			<label>Confirm Password</label>
			<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
		</div>
		<button type="submit" class="btn btn-primary btn-block">Sign-up</button>
	</div>
</div>
<?php echo form_close(); ?>