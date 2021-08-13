<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['slug']; ?></h3>
	<?php echo $post['summary']; ?>
<?php endforeach; ?>