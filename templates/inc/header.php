<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo SITE_TITLE; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php"><?php echo SITE_TITLE; ?></a>
            <div class="navbar-nav">
                <a class="nav-link" href="create.php">Create</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php displayMessage(); ?>