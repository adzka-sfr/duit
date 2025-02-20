<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/connect.php';

// get data post
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// check if username already exists
$sql = "SELECT * FROM t_auth WHERE c_username = :username";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    echo json_encode(array('status' => 'username_exist'));
} else {
    // Code to handle new user registration
    // check if email already exists
    $sql = "SELECT * FROM t_auth WHERE c_email = :email";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo json_encode(array('status' => 'email_exist'));
    } else {
        // insert new user
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO t_auth (c_username, c_password, c_email) VALUES (:username, :password, :email)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':email', $email);
        if ($stmt->execute()) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'failed'));
        }
    }
}
