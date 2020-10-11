<?php include_once 'config/init.php'; ?>

<?php

$template = new Template('templates/frontpage.php');

$job = new Job;
$category = new Category;

$category_id = isset($_GET['category']) ? $_GET['category'] : null;
if ($category_id) {
    // show jobs for selected category
    $template->title = 'Jobs In ' . $category->getCategory($category_id)->name;
    $template->jobs = $job->getByCategory($category_id);
    $template->category_id = $category_id;
} else {
    // show all jobs
    $template->title = 'Latest Jobs';
    $template->jobs = $job->getAllJobs();
    $template->category_id = 0;
}

$template->categories = $category->getCategories();
echo $template;