<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Create Job Listing</h2>
	<form method="post" action="create.php">
		<div class="form-group">
			<label>Company</label>
			<input type="text" class="form-control" name="company" />
		</div>
		<div class="form-group">
			<label>category</label>
			<select name="category" class="form-control">
           <option value="0">Choose From A Job Category</option>
           <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
           <?php endforeach; ?>
         </select>
		</div>
		<div class="form-group">
			<label>Job Title</label>
			<input type="text" class="form-control" name="job_title" />
		</div>
		<div class="form-group">
			<label>Job Description</label>
			<textarea type="text" class="form-control" name="job_description"></textarea>
		</div>
		<div class="form-group">
			<label>Job Location</label>
			<input type="text" class="form-control" name="location" />
		</div>
		<div class="form-group">
			<label>Salary</label>
			<input type="text" class="form-control" name="salary" />
		</div>
		<div class="form-group">
			<label>Contact User</label>
			<input type="text" class="form-control" name="contact_user" />
		</div>
		<div class="form-group">
			<label>Contact Email</label>
			<input type="text" class="form-control" name="contact_email" />
		</div>
		<button class="btn btn-success" type="submit" name="submit">Submit</button>
	</form>
<?php include 'inc/footer.php'; ?>
