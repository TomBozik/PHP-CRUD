<?php include 'inc/header.php'; ?>

<div class="jumbotron">
    <h2 class="text-center">Find a Job</h2>
    <form action="index.php" method="GET" class="row">

        <select name="category" class="form-control col-md-10">
            <option value="0"> Choose Category </option>
            <?php foreach ($categories as $category) : ?>
                <?php if ($category_id == $category->id) : ?>
                    <option value="<?php echo $category->id; ?>" selected> <?php echo $category->name; ?></option>
                <?php else : ?>
                    <option value="<?php echo $category->id; ?>"> <?php echo $category->name; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>

        <br>
        <class class="col-md-2 pt-2 pt-md-0">
            <input type="submit" class="btn btn-success w-100" value="FIND">
        </class>
    </form>
</div>

<h3 class="pb-4"><?php echo $title; ?></h3>
<?php foreach ($jobs as $job) : ?>
    <div class="row pb-2">
        <div class="col-md-10">
            <h4><?php echo $job->job_title; ?></h4>
            <p><?php echo $job->description; ?></p>
        </div>
        <div class="col-md-2 d-flex justify-content-center">
            <a class="btn btn-primary align-self-center w-100" href="job.php?id=<?php echo $job->id; ?>">View</a>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>