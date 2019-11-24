<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;
$template = new Template('templates/frontpage.php');

$template-> title="Joblister";

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
	$template->title = 'Jobs in '.$job->getCategory($category)->name;
	$template->jobs = $job->getByCategory($category);
}else{
	$template->title = 'The Latest...';
	$template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();
echo $template;