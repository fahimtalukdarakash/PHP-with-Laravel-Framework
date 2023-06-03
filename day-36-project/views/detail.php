<?php include 'header.php'; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo $news['img']; ?>" width="100%" height="300" alt=""/>
                        <div class="card-img-overlay"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1><?php echo $news['name']; ?></h1>
                        <h4><?php echo $news['detail']; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>