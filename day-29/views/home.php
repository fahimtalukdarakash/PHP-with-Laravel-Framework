<?php include "header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card card-body rounded-0">
                        <img src="assets/img/<?php echo $blog['image'] ?>" alt="" height="250" class="card-img-top rounded-0"/>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $blog['title'] ?></h3>
                            <p class="card-text"><?php echo $blog['description_one'] ?></p>
                            <hr/>
                            <a href="action.php?page=detail&&id=<?php echo $blog['id'] ?>" class="btn btn-success rounded-0">Read More</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php include "footer.php"?>