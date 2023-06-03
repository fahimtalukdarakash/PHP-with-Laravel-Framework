<?php include "header.php"; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($newses as $news){ ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $news['img']; ?>" width="100%" height="300" alt=""/>
                            <div class="card-body">
                                <h4><?php echo $news['name']; ?></h4>
                                <p><?php echo $news['short_description']; ?></p>
                                <hr/>
                                <a href="action.php?page=detail&id=<?php echo $news['id']; ?>" class="btn btn-success">আরও পড়ুন</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php include "footer.php"; ?>