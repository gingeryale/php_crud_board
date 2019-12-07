<?php include 'inc/header.php'; ?>
	<h3 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h3>
	<small>Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date ?></small>
	<p class="lead">
		<?php echo $job->job_description ?>
	</p>
	<ul class="list-group">
		<li class="list-group-item">
			<b>Company:</b> <?php echo $job->company; ?>
		</li>
		<li class="list-group-item">
			<b>Salary:</b> <?php echo $job->salary; ?>
		</li>
		<li class="list-group-item">
			<b>Contact Email:</b> <?php echo $job->contact_email; ?>
		</li>
	</ul>
	<br />
	<a href="index.php">Back</a>

	<div class="well">
		<a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-success">EDIT</a>
			<form style="display:inline" method="post" action="job.php">
				<input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
				<input type="submit" class="btn btn-danger" value="delete" />
			</form>
		
	</div>
<?php include 'inc/footer.php'; ?>
