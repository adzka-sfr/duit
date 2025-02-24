<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/duit/config/connect.php'; // local
// require_once $_SERVER['DOCUMENT_ROOT'] . '/config/connect.php'; // hosting

// get data post
$email = $_POST['email'];
$register_time = date('Y-m-d H:i:s', strtotime($now));

// check if email already exists
$sql = "SELECT * FROM t_auth WHERE c_email = :email";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$result) {
    echo 'email-not-exist';
    exit;
}else{
    // Generate new password
    $c_username = $result['c_username'];
    $new_password = $c_username . '_' . str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Update password in the database
    $update_sql = "UPDATE t_auth SET c_password = :hashed_password WHERE c_email = :email";
    $update_stmt = $connect->prepare($update_sql);
    $update_stmt->bindParam(':hashed_password', $hashed_password);
    $update_stmt->bindParam(':email', $email);
    $update_stmt->execute();

    // Send email to user
    
}

