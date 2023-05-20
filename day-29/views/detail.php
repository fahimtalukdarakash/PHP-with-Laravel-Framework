<?php include "header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body rounded-0">
                        <img src="assets/img/<?php echo $blog['image'] ?>"/>
                        <div class="card-img-overlay"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1><?php echo $blog['title'] ?></h1>
                        <hr/>
                        <p><?php echo $blog['description_one'] ?></p>
                        <hr/>
                        <p><?php echo $blog['description_two'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "footer.php"?>