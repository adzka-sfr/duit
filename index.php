<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once '/home/u266480338/domains/adzkasfr.com/public_html/duit/config/connect.php';
$user = require_once base_path('config/check_cookie.php');
// Redirect to the dashboard if the user is authenticated
echo "<script>window.location='" . base_url('dashboard') . "';</script>";
