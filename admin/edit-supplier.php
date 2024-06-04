<?php 
session_start();
include('includes/header.php');
include './config/dbconn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier Management</title>
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<div class="container-fluid pt-0">
    <div class="row align-items-center custom-bg mb-2">
        <div class="col-md-6">
            <h5 class="mt-3">Edit Supplier Management</h5>
        </div>
        <div class="col-md-6 d-flex justify-content-end pt-3">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Edit Supplier</li>
            </ol>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="home" role="tabpanel">
                            <form id="edit_supplier" method="POST" action="app/supplier_crud.php">
                                <?php
                                
                                    // if (isset($_POST['id'])) {
                                    //     try {
                                            
                                    //         $stmt = $db->prepare("SELECT * FROM `supplier` WHERE id=:id");
                                    //         $stmt->bindParam(':id', $_POST['id']);
                                    //         $stmt->execute();
                                    //         $record = $stmt->fetchAll();

                                    //         if (!empty($record)) {
                                    //             foreach ($record as $key) {
                                    // ?>
                                <div class="form-group mb-2">
                                    <input class="form-control" type="hidden" name="id" value="<?php echo htmlspecialchars($key['id']); ?>">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Supplier Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="supplierName" placeholder="Supplier Name" name="supplierName" value="<?php echo htmlspecialchars($key['supplierName']); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="supplierEmail" placeholder="Supplier Email" name="supplierEmail" value="<?php echo htmlspecialchars($key['supplierEmail']); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="tel" class="form-control" id="supplierPhone" placeholder="Supplier Phone" name="supplierPhone" value="<?php echo htmlspecialchars($key['supplierPhone']); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="supplierAddress" placeholder="Supplier Address" name="supplierAddress" required><?php echo htmlspecialchars($key['supplierAddress']); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="supplierStatus" name="supplierStatus" required>
                                                    <option value="">~~SELECT~~</option>
                                                    <option value="Active" <?php if ($key['supplierStatus'] == 'Active') echo 'selected="selected"'; ?>>Active</option>
                                                    <option value="Inactive" <?php if ($key['supplierStatus'] == 'Inactive') echo 'selected="selected"'; ?>>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button class="btn btn-primary" type="submit" name="update" onclick="validateSupplier()">Update</button>
                                    </div>
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

<script>
    function validateSupplier() {
        // Add your validation logic here if needed
    }
</script>
