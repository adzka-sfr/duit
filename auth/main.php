<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/duit/config/connect.php';

$user = require_once base_path('config/check_cookie.php');

// If the user is already authenticated, redirect them to the dashboard
if ($user) {
    echo "<script>window.location='" . base_url('dashboard') . "';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php

                if (empty($_GET['page'])) {
                    $_GET['page'] = "login";
                } else {
                    include "content.php";
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#register').click(function() {
                var username = $('#username').val();
                var password = $('#password').val();
                var email = $('#email').val();

                // Reset error messages
                $('#username-error').hide();
                $('#password-error').hide();
                $('#email-error').hide();
                $('#username-exist').hide();
                $('#email-exist').hide();

                // Validate inputs
                var isValid = true;
                if (username === '') {
                    $('#username-error').show();
                    isValid = false;
                }
                if (password === '') {
                    $('#password-error').show();
                    isValid = false;
                }
                if (email === '') {
                    $('#email-error').show();
                    isValid = false;
                }

                if (isValid) {
                    $.ajax({
                        url: '<?php echo base_url('auth/act_register.php'); ?>',
                        type: 'POST',
                        data: {
                            username: username,
                            password: password,
                            email: email
                        },
                        success: function(response) {
                            var response = JSON.parse(response);
                            console.log(response.status);

                            if (response.status == 'success') {
                                window.location = '<?php echo base_url('auth/'); ?>';
                            } else if (response.status == 'username_exist') {
                                $('#username-error').hide();
                                $('#username-exist').show();
                            } else if (response.status == 'email_exist') {
                                $('#email-error').hide();
                                $('#email-exist').show();
                            } else {
                                alert('Failed to register. Please try again.');
                            }
                        }
                    });
                }
            });

            $('#login').click(function() {

                var username = $('#username').val();
                var password = $('#password').val();

                // Reset error messages
                $('#username-error').hide();
                $('#password-error').hide();
                $('#username-not-exist').hide();

                // Validate inputs
                var isValid = true;
                if (username === '') {
                    $('#username-error').show();
                    isValid = false;
                }
                if (password === '') {
                    $('#password-error').show();
                    isValid = false;
                }

                if (isValid) {
                    $.ajax({
                        url: '<?php echo base_url('auth/act_login.php'); ?>',
                        type: 'POST',
                        data: {
                            username: username,
                            password: password
                        },
                        success: function(response) {
                            if (response == 'success') {
                                window.location = '<?php echo base_url('dashboard'); ?>';
                            } else if (response == 'username-not-exist') {
                                $('#username-error').hide();
                                $('#username-not-exist').show();
                            } else if (response == 'password-error') {
                                $('#password-error').show();
                            } else {
                                alert('Failed to login. Please try again.');
                            }
                        }
                    });
                }
            })
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>