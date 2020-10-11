<?php include 'inc/header.php'; ?>

<h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
<small>Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
<hr>
<p class="lead"><?php echo $job->description; ?></p>
<ul class=list-group>
    <li class="list-group-item"><strong>Company: </strong><?php echo $job->company; ?></li>
    <li class="list-group-item"><strong>Salary: </strong><?php echo $job->salary; ?></li>
    <li class="list-group-item"><strong>Contact Email: </strong><?php echo $job->contact_email; ?></li>
</ul>

<div class="w-100 d-flex pt-2">
    <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-success w-50 mr-2">Edit</a>

    <form action="job.php" method="POST" class="w-50 ml-2">
        <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
        <input type="submit" class="btn btn-danger w-100" value="Delete">
    </form>
</div>

<div class="pt-4">
    <a href="index.php">Go Back</a>
</div>

<?php include 'inc/footer.php'; ?>