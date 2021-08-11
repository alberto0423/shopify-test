<?php
//require "configs/config.php";
$install = 'install.php?shop=';
if (isset($_GET['shop'])) {
    $shop = explode(".", $_GET['shop']);
    if (!empty($shop[0])) {
        header('Location: '.$install. $shop[0]);
        die();
    } else {
        echo "Verifica tu código";
    }
} else {
    phpinfo();
}


