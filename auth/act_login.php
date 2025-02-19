<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/duit/config/connect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/duit/vendor/autoload.php';

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

// Function to check for a valid JWT
// function getUserFromJwt($jwt, $key)
// {
//     try {
//         $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
//         return (array) $decoded->data;
//     } catch (Exception $e) {
//         return null;
//     }
// }

// Check if JWT is already set and valid
// if (isset($_COOKIE['jwt_token'])) {
//     $jwt = $_COOKIE['jwt_token'];
//     $user = getUserFromJwt($jwt, $key);

//     if ($user) {
//         // Redirect to protected.php if the user is already logged in
//         header("Location: protected.php");
//         exit();
//     }
// }

// get data post
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute the SQL statement
$stmt = $connect->prepare("SELECT * FROM t_auth WHERE c_username = :c_username LIMIT 1");
$stmt->bindParam(':c_username', $username);
$stmt->execute();

// Fetch the user data
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Verify the password
if ($user && password_verify($password, $user['c_password'])) {
    // Create the payload for the JWT
    $payload = [
        'iss' => "http://localhost/duit", // Adjust for your setup
        'iat' => time(),
        'exp' => time() + (30 * 24 * 60 * 60), // 30 days expiration
        'data' => [
            'id' => $user['id'],
            'username' => $user['c_username'],
            'email' => $user['c_email']
        ]
    ];

    // Encode the payload into a JWT
    $jwt = JWT::encode($payload, $key, 'HS256');

    // Set the JWT in a cookie
    setcookie("duit_token", $jwt, time() + (30 * 24 * 60 * 60), "/duit/", "", false, true);

    // Redirect to the protected page
    echo "success";
    exit();
} else {
    echo "Invalid credentials.";
}
