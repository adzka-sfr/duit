<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$now = date('Y-m-d H:i:s');

// Database connection parameters
// $host = 'localhost';  // or your database host
// $dbname = 'duit'; // your database name
// $username = 'root';  // Replace with your MySQL username
// $password = '';  // Replace with your MySQL password

$host = 'localhost';  // or your database host
$dbname = 'u266480338_duit'; // your database name
$username = 'u266480338_bismillahadzka';  // Replace with your MySQL username
$password = 'Alfianwai1';  // Replace with your MySQL password

try {
    $connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// base url
function base_url($path = '')
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $domain = $_SERVER['HTTP_HOST'];
    return $protocol . "://" . $domain . "/" . ltrim($path, '/');
}

// For including PHP files, use the server's document root
function base_path($path = null)
{
    $base_path = '/home/u266480338/domains/adzkasfr.com/public_html/duit';
    if ($path != null) {
        return $base_path . '/' . trim($path, '/');
    } else {
        return $base_path;
    }
}
// tes git lewat git dekstop


$key = 'adzkagacor';
