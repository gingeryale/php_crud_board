<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;
if(isset($_POST['submit'])){
	// create data array
	$data = array();
	$data['job_title'] = $_POST['job_title'];
	$data['company'] = $_POST['company'];
	$data['category_id'] = $_POST['category'];
	$data['job_description'] = $_POST['job_description'];
	$data['location'] = $_POST['location'];
	$data['salary'] = $_POST['salary'];
	$data['contact_email'] = $_POST['contact_email'];
	$data['contact_user'] = $_POST['contact_user'];

	if($job->create($data)){
		redirect('index.php', 'Your job listing was successful!');
	} else{
		redirect('index.php', 'Error. Something went wrong.');
	}
}
$template = new Template('templates/job-create.php');

$template-> title="Joblister";

$template->categories = $job->getCategories();
echo $template;