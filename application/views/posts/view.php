<h2><?php echo $post['name']; ?></h2>

<div class="post-body">
	<?php echo $post['summary']; ?>
</div>

<hr>
<?php echo form_open('/posts/delete/'.$post['cid']); ?>
	<input type="submit" value="delete" class="btn btn-danger">
</form>