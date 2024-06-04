<?php
$db_admin = "root";
$db_pass = "";
$db_name = "petrol_pump";

try {
    $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_admin, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>
