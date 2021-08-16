<html>
	<head>
		<title>Review Everything</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
		<meta charset="UTF-8">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url(); ?>">Review Everything</a>
        		</div>
        		<div class="collapse navbar-collapse" id="navbar">
				    <div class="navbar-nav">
				      <a class="nav-item nav-link" href="<?php echo base_url(); ?>">Home</a>
				      <a class="nav-item nav-link" href="<?php echo base_url(); ?>posts">Browse</a>
				      <a class="nav-item nav-link" href="<?php echo base_url(); ?>about">About</a>
				    </div>
				</div>
				<div class="navbar-nav">
				      <a class="nav-item nav-link my-2 my-lg-0" href="<?php echo base_url(); ?>users/register">Signup</a>
				      <a class="nav-item nav-link my-2 my-lg-0" href="<?php echo base_url(); ?>users/login">Login</a>
				      <a class="nav-item nav-link" href="<?php echo base_url(); ?>posts/create">Post a website</a>
				    </div>
			</div>
		</nav>
		<div class="container">

		<?php if($this->session->flashdata('user_registered')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
		<?php endif; ?>