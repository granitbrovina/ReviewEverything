<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['name']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			<img class="thumbnail" src="<?php echo site_url(); ?>assets/images/<?php echo $post['logo']; ?>" width="100%">
		</div>
		<div class="col-md-9">
			<?php echo $post['summary']; ?>
			<p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read Reviews</a></p>
		</div>
	</div>
<?php endforeach; ?>