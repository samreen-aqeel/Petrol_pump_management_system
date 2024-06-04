<?php 
session_start();
include('includes/header.php');
include './config/dbconn.php';
?>
<head>
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <div class="container-fluid pt-0">
        <div class="row align-items-center custom-bg mb-2">
            <div class="col-md-6">
                <h5 class="mt-3">View Supplier</h5>
            </div>
            <div class="col-md-6 d-flex justify-content-end pt-3">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">View Supplier</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="btn-group float-left">
                            <a href="add-supplier.php" class="btn btn-primary mb-3">Add Supplier</a>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Supplier Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th class="action-column">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $stmt = $db->prepare("SELECT * FROM `supplier`");
                                $stmt->execute();
                                $record = $stmt->fetchAll();
                                $i = 1;
                                foreach ($record as $key) { ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $key['supplierName']; ?></td>
                                        <td><?php echo $key['supplierEmail']; ?></td>
                                        <td><?php echo $key['supplierPhone']; ?></td>
                                        <td><?php echo $key['supplierAddress']; ?></td>
                                        <td><?php echo $key['supplierStatus'] == 1 ? 'Active' : 'Inactive'; ?></td>
                                        <td>
                                            <a href="edit-supplier.php" onclick="editForm(event, <?php echo $key['id']; ?>, 'edit_supplier.php')" class="btn btn-primary btn-sm me-2"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                            <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?') && delForm(event, <?php echo $key['id']; ?>, 'app/supplier_crud.php');"><i class="fa fa-trash-alt" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                    $i++; 
                                } ?>
                                </tbody>
                            </table>
                        </div><!-- end /table-responsive -->
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container-fluid -->

<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>

</body>
</html>
