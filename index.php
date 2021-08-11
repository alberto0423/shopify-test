<?php
//require "configs/config.php";
if (isset($_GET['shop'])) {
    $shop = explode(".", $_GET['shop']);
    if (!empty($shop)) {
        header("Location: install.php?shop=" . $shop);
        die();
    } else {
        echo "Verifica tu código";
    }
} else {
    phpinfo();
}


