<?php
include '../_header.php';
?>
<div class="container mt-3">
    <?php

    if (empty($_GET['page'])) {
        $_GET['page'] = "home";
    } else {
        include "content.php";
    }
    ?>
</div>

<?php
include '../_footer.php';
?>