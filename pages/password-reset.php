<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Password Generator</div>
                    <div class="card-body bg-info">
                        <form action="action.php" method="POST">
                            <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 text-white" >Password Length</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="password_length" value="<?php echo isset($_POST['btn']) ? $_POST['password_length'] : '';?>"/>
                                </div>
                            </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 text-white">Enter password</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?php echo isset($result) ? $result : '';?>"/>
                                        </div>
                                    </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-light" value="Submit"/>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
