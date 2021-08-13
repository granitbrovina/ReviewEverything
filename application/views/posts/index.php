<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['name']; ?></h3>
	<?php echo $post['summary']; ?>
<?php endforeach; ?>