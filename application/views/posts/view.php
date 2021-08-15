<h2><?php echo $post['name']; ?></h2>

<img class="thumbnail" src="<?php echo site_url(); ?>assets/images/<?php echo $post['logo']; ?>" width="100%">

<div class="post-body">
	<?php echo $post['summary']; ?>
</div>

<hr>
<?php echo form_open('/posts/delete/'.$post['cid']); ?>
	<input type="submit" value="delete" class="btn btn-danger">
</form>