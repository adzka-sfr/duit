<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/connect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/check_cookie.php';

// Assuming $user['theme'] is already set and contains the color code
$themeColor = isset($user['theme']) ? $user['theme'] : '#007bff'; // Default to blue if not set
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- SweetAlert CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        .footer .row {
            display: flex;
            justify-content: space-between;
            margin: 0;
            padding: 0;
        }

        .footer .col {
            padding: 0;
        }

        .footer .nav-link {
            display: block;
            text-align: center;
            width: 100%;
            padding: 10px 0;
        }

        .footer .nav-link.active {
            color: #fff !important;
            background-color: <?php echo $themeColor; ?> !important;
            font-weight: bold;
            border-radius: 0;
        }

        .navbar {
            background-color: <?php echo $themeColor; ?> !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top justify-content-center">
        <span class="navbar-text text-white font-weight-bold" id="current-date-time"></span>
    </nav>