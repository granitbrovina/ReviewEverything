<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['name']; ?></h3>
	<?php echo $post['summary']; ?>
	<p><a href="<?php echo site_url('/posts'.$post['slug']); ?>">Read More</a></p>
<?php endforeach; ?>