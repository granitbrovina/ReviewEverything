<h2><?php echo $post['name']; ?></h2>

<img src="<?php echo site_url(); ?>assets/images/<?php echo $post['logo']; ?>">

<div class="post-body">
	<?php echo $post['summary']; ?>
</div>

<hr>
<?php echo form_open('/posts/delete/'.$post['cid']); ?>
	<input type="submit" value="delete" class="btn btn-danger">
</form>
<hr>
<h3>Reviews</h3>
<?php if($comments) : ?>
	<?php foreach($comments as $review) : ?>
		<div class="well">
			<h5><?php echo $review['body']; ?> [ rated: <?php echo $review['rating']; ?>/5 by <strong><?php echo $review['name']; ?>]</strong></h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No reviews yet. Be the first one to leave a review!</p>
<?php endif; ?>
<hr>
<h3>Add Review</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['cid']); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Review</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Rating</label>
		  <fieldset>
		    <span class="star-cb-group">
		      <input type="radio" id="rating-5" name="rating" value="5" />
		      <label for="rating-5">5</label>
		      <input type="radio" id="rating-4" name="rating" value="4" />
		      <label for="rating-4">4</label>
		      <input type="radio" id="rating-3" name="rating" value="3" />
		      <label for="rating-3">3</label>
		      <input type="radio" id="rating-2" name="rating" value="2" />
		      <label for="rating-2">2</label>
		      <input type="radio" id="rating-1" name="rating" value="1" />
		      <label for="rating-1">1</label>
		    </span>
		  </fieldset>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button class="btn btn-primary" type="submit">Leave review</button>
</form>