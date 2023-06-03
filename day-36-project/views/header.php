<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
</head>
<body>
<header>
    <section class="w-100">
        <div class="container w-100">
            <div class="row w-100">
                <div class="col-sm-12 mx-auto w-100 d-flex justify-content-center align-items-center">
                    <a href="action.php?page=home"><img src="assets/img/prothom_alo.png" style="height: 100px; width: 250px;"/></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <hr/>
        <nav class="navbar navbar-expand-md">
            <div class="container d-flex justify-content-center align-items-center">
                <ul class="navbar-nav">
                    <?php foreach ($categories as $category) { ?>
                        <li><a href="action.php?page=category&id=<?php echo $category['id']; ?>" class="nav-link fw-bold"><?php echo $category['name']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <hr/>
    </section>
</header>