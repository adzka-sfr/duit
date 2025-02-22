<?php
// check cookie
$jwt = $_COOKIE['duit_token'] ?? null;
if ($jwt === null) {
    echo "cookie_expired";
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/duit/config/connect.php'; // local
    require_once $_SERVER['DOCUMENT_ROOT'] . '/duit/config/check_cookie.php'; // local
    // require_once $_SERVER['DOCUMENT_ROOT'] . '/config/connect.php'; // hosting
    // require_once $_SERVER['DOCUMENT_ROOT'] . '/config/check_cookie.php'; // hosting

    // get data post
    $catId = $_POST['catId'];
    $catName = $_POST['catName'];
    $catStatus = $_POST['catStatus'];
    $retainCapital = $_POST['retainCapital'];

    // change all characters to lowercase
    if ($retainCapital == "true") {
        $catName = $catName;
    } else {
        $catName = ucwords(strtolower($catName));
    }
    $catStatus = $catStatus == "true" ? "active" : "inactive";
    $username = $user['username'];

    // check the category name and type in database
    $stmt = $connect->prepare("UPDATE t_category SET c_name = :catName, c_status = :catStatus WHERE id = :catId");
    $stmt->bindParam(':catName', $catName);
    $stmt->bindParam(':catStatus', $catStatus);
    $stmt->bindParam(':catId', $catId);
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "failed";
    }
}
