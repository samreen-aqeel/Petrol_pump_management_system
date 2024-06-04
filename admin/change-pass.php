<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<div class="container-fluid pt-0">
    <div class="row align-items-center custom-bg mb-2">
        <div class="col-md-6">
            <h5 class="mt-3">Change Password</h5>
        </div>
        <div class="col-md-6 d-flex justify-content-end pt-3"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="home" role="tabpanel">
                            <form id="add_brand" method="POST" action="app/supplier_crud.php">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Old Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="oldPassword" placeholder="Old Password" name="oldPassword">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">New Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="newPassword" placeholder="New Password" name="newPassword">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirmPassword">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end container-fluid -->
</body>

<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>
