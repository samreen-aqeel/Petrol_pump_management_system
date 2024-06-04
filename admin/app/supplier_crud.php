<?php
session_start();
include '../config/dbconn.php';

try {
  
    if (isset($_POST['submit'])) {
        $stmt = $db->prepare("INSERT INTO `supplier`(`supplierName`, `supplierEmail`, `supplierPhone`, `supplierAddress`, `supplierStatus`) VALUES (?,?,?,?,?)");

        // Apply htmlspecialchars to user inputs
        $supplierName = htmlspecialchars($_POST['supplierName'], ENT_QUOTES, 'UTF-8');
        $supplierEmail = htmlspecialchars($_POST['supplierEmail'], ENT_QUOTES, 'UTF-8');
        $supplierPhone = htmlspecialchars($_POST['supplierPhone'], ENT_QUOTES, 'UTF-8');
        $supplierAddress = htmlspecialchars($_POST['supplierAddress'], ENT_QUOTES, 'UTF-8');
        $supplierStatus = htmlspecialchars($_POST['supplierStatus'], ENT_QUOTES, 'UTF-8');

        $stmt->execute([$supplierName, $supplierEmail, $supplierPhone, $supplierAddress, $supplierStatus]);

        $_SESSION['success'] = "success";
        header("Location: ../manage-supplier.php");
    }



    
    
    // if (isset($_POST['update'])) {
    //     $stmt = $db->prepare("UPDATE `suppliers` SET `supplierName`=?, `supplierEmail`=?, `supplierPhone`=?, `supplierAddress`=?, `supplierStatus`=? WHERE id=?");
    
    //     $id = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8');
    //     $supplierName = htmlspecialchars($_POST['supplierName'], ENT_QUOTES, 'UTF-8');
    //     $supplierEmail = htmlspecialchars($_POST['supplierEmail'], ENT_QUOTES, 'UTF-8');
    //     $supplierPhone = htmlspecialchars($_POST['supplierPhone'], ENT_QUOTES, 'UTF-8');
    //     $supplierAddress = htmlspecialchars($_POST['supplierAddress'], ENT_QUOTES, 'UTF-8');
    //     $supplierStatus = htmlspecialchars($_POST['supplierStatus'], ENT_QUOTES, 'UTF-8');
    
    //     $stmt->execute([$supplierName, $supplierEmail, $supplierPhone, $supplierAddress, $supplierStatus, $id]);
    
    //     $_SESSION['update'] = "update";
    //     header("Location: ../manage-supplier.php");
    //     exit;
    // }
    

    // if (isset($_POST['del_id'])) {
    //     $stmt = $db->prepare("UPDATE `supplier` SET delete_status='1' WHERE id='id'");

    //     $del_id = htmlspecialchars($_POST['del_id'], ENT_QUOTES, 'UTF-8');

    //     $stmt->execute([$del_id]);

    //     $_SESSION['delete'] = "delete";
    //     header("Location: manage-supplier.php");
    // }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
