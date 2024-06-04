<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// include('admin/config/dbconn.php');

// if (isset($_POST['register'])) {
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $email = $_POST['email'];
//     $contact = $_POST['contact'];
//     $address = $_POST['address'];
//     $password = $_POST['password'];
//     $cpassword = $_POST['cpass'];

//     if ($password !== $cpassword) {
//         echo "Passwords do not match.";
//         exit();
//     }

//     $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

//     try {
//         $sql = "INSERT INTO admin_reg (fname, lname, email, contact, address, password) VALUES (?, ?, ?, ?, ?, ?)";
//         $stmtinsert = $db->prepare($sql);
//         $result = $stmtinsert->execute([$fname, $lname, $email, $contact, $address, $hashed_pass]);
//         if ($result) {
//             echo "Successfully submitted";
//         } else {
//             echo "There is an error";
//         }
//     } catch (PDOException $e) {
//         echo "Error: " . $e->getMessage();
//     }
// }
?>