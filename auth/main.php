<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/duit/config/connect.php'; // local
// require_once $_SERVER['DOCUMENT_ROOT'] . '/config/connect.php'; // hosting

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
    <title>Duit</title>
    <link rel="icon" href="<?php echo base_url('assets/images/robot_face.png'); ?>" type="image/png">

    <!-- Latest Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (needed for AJAX, but not required for Bootstrap 5 itself) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
            <div class="accordion" id="authAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingLogin">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLogin" aria-expanded="true" aria-controls="collapseLogin">
                            Login
                        </button>
                    </h2>
                    <div id="collapseLogin" class="accordion-collapse collapse show" aria-labelledby="headingLogin" data-bs-parent="#authAccordion">
                        <div class="accordion-body">
                            <form id="loginForm">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                    <div id="username-error" class="error-message text-danger" style="display:none;">Username is required</div>
                                    <div id="username-not-exist" class="error-message text-danger" style="display:none;">Username does not exist</div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <div id="password-error" class="error-message text-danger" style="display:none;">Password is required</div>
                                </div>
                                <button type="button" id="login" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingRegister">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegister" aria-expanded="false" aria-controls="collapseRegister">
                            Register
                        </button>
                    </h2>
                    <div id="collapseRegister" class="accordion-collapse collapse" aria-labelledby="headingRegister" data-bs-parent="#authAccordion">
                        <div class="accordion-body">
                            <form id="registerForm">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                    <div id="username-error" class="error-message text-danger" style="display:none;">Username is required</div>
                                    <div id="username-exist" class="error-message text-danger" style="display:none;">Username already exists</div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <div id="password-error" class="error-message text-danger" style="display:none;">Password is required</div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <div id="email-error" class="error-message text-danger" style="display:none;">Email is required</div>
                                    <div id="email-exist" class="error-message text-danger" style="display:none;">Email already exists</div>
                                </div>
                                <button type="button" id="register" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
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
                $('.error-message').hide();

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
                        data: { username, password, email },
                        success: function(response) {
                            var response = JSON.parse(response);
                            console.log(response.status);

                            if (response.status == 'success') {
                                window.location = '<?php echo base_url('auth/'); ?>';
                            } else if (response.status == 'username_exist') {
                                $('#username-exist').show();
                            } else if (response.status == 'email_exist') {
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
                $('.error-message').hide();

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
                        data: { username, password },
                        success: function(response) {
                            if (response == 'success') {
                                window.location = '<?php echo base_url('dashboard'); ?>';
                            } else if (response == 'username-not-exist') {
                                $('#username-not-exist').show();
                            } else if (response == 'password-error') {
                                $('#password-error').show();
                            } else {
                                alert('Failed to login. Please try again.');
                            }
                        }
                    });
                }
            });
        });
    </script>

    <!-- Bootstrap 5 JS (Popper included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>