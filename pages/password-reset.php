<?php include 'header.php'; ?>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center font-weight-bolder bg-warning">
                            Password Generator
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Password Length</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="password_length" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Your Password</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="" value="<?php echo isset($result) ? $result: ' '; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="Submit" />
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
