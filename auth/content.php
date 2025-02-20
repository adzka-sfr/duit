<?php
if ($_GET['page'] == 'login') {
    include 'login.php';
} elseif ($_GET['page'] == 'register') {
    include 'register.php';
} else {
    include 'login.php';
}
