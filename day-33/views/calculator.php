<?php include "header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1>My Calculator</h1>
                    <hr/>
                    <form action="action.php" method="POST">
                        <div class="row mb-3">
                            <label class="col-md-3">First Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="first_number"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Second Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="second_number"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Your Choice</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="choice" checked value="+"/>+</label>
                                <label><input type="radio" name="choice" value="-"/>-</label>
                                <label><input type="radio" name="choice" value="*"/>*</label>
                                <label><input type="radio" name="choice" value="/"/>/</label>
                                <label><input type="radio" name="choice" value="%"/>%</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Result</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo isset($_GET['message']) ? $_GET['message']: '' ?>"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="calculator_btn" value="submit"/>
                                <input type="reset" class="btn btn-success" name="reset_btn" value="AC"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
