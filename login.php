<?php
// include('admin/config/dbconn.php');
// session_start();

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     if (!empty($email) && !empty($password)) {
//         $sql = "SELECT * FROM admin_reg WHERE email = ?"; 
//         $stmtselect = $db->prepare($sql);
//         $stmtselect->execute([$email]);
//         $admin = $stmtselect->fetch(PDO::FETCH_ASSOC);

//         if ($admin && password_verify($password, $admin['password'])) {
//             $_SESSION['user_login'] = $admin;
//             echo '1';
//         } else {
//             echo 'Invalid email or password';
//         }
//     } else {
//         echo 'Please fill in all fields';
//     }
// } else {
//     echo 'Invalid request method';
// }
?>
