<?php include "header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card card-body rounded-0">
                        <img src="assets/img/<?php echo $blog['image'] ?>" alt="" height="250" class="card-img-top rounded-0"/>
                        <div class="card-body">
                            <h3><?php echo $blog['title'] ?></h3>
                            <p><?php echo $blog['description_one'] ?></p>
                            <hr/>
                            <a href="" class="btn btn-success rounded-0">Read More</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php include "footer.php"?>