<?php include "header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1>Series Three</h1>
                    <hr/>
                    <form action="action.php" method="POST">
                        <div class="row mb-3">
                            <label class="col-md-3">Starting Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="starting_number" value="<?php echo isset($_GET['starting_number']) ? $_GET['starting_number'] : ''; ?>"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Ending Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ending_number" value="<?php echo isset($_GET['ending_number']) ? $_GET['ending_number'] : ''; ?>"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Result</label>
                            <div class="col-md-9">
                                <textarea type="text" class="form-control"><?php echo isset($_GET['message']) ? $_GET['message']: '' ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="series_three_btn" value="submit"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>


