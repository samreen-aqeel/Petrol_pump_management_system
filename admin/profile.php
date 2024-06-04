<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Supplier Management</title>
       <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<div class="container-fluid pt-0">
        <div class="row align-items-center custom-bg mb-2">
            <div class="col-md-6">
                <h5 class="mt-3">Profile</h5>
            </div>
            <div class="col-md-6 d-flex justify-content-end pt-3">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="home" role="tabpanel">
                                <form id="add_brand" method="POST" action="app/supplier_crud.php">
                                    <div class="form-group mb-2">
                                        <!-- <div class="row">
                                            <label class="col-sm-3 control-label">Supplier Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="brandName" placeholder="Supplier Name" name="brandName">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="supplierEmail" placeholder="Supplier Email" name="supplierEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="tel" class="form-control" id="supplierPhone" placeholder="Supplier Phone" name="supplierPhone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="supplierAddress" placeholder="Supplier Address" name="supplierAddress"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="brandStatus" name="brandStatus">
                                                    <option value="">~~SELECT~~</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group col-md-12 ">
                                        <button class="btn btn-primary" type="submit" name="submit" onclick="validateSupplier()">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div> <!-- Page content Wrapper -->
</div> <!-- content -->

<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>
