<h2><?= $title ?></h2>

<div class="form-group">
    <label>Company name</label>
    <input type="text" class="form-control" name="title" placeholder="Add name">
  </div>
  <div class="form-group">
    <label>Summary</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add summary"></textarea>
  </div>
  <div class="form-group">
    <label>Website</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add website url"></textarea>
  </div>
  <div class="form-group">
    <label>Contact email</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add contact email"></textarea>
  </div>
  <div class="form-group">
	  <label>Upload logo</label>
	  <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>