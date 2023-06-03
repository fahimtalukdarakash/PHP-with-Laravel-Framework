<?php include "header.php"?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($categories as $category) { ?>
                <a href="action.php?page=category&id=<?php echo $category['id']; ?>" class="text-decoration-none text-black"><h5><?php echo $category['name']?><i class="fa-solid fa-chevron-right ms-2 text-danger"></i></h5></a>
                <?php foreach ($newses as $news) { ?>
                    <?php if($news['category_id'] == $category['id']) { ?>
                        <div class="col-md-4 my-3">
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
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "footer.php"?>
