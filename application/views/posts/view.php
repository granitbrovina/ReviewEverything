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
<h3>Add Review</h3>
<?php echo form_open('comments/create'.$post['cid']); ?>
	<div class="form-group">
		<fieldset class="rating">
		    <legend>Please rate:</legend>
		    	<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
		    	<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
		    	<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
		    	<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
		    	<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
		</fieldset>
	</div>
	<hr>
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
		<textarea type="text" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button class="btn btn-primary" type="submit">Leave review</button>
</form>