<?php
/*
 * Configuracion para shopify
 */

$scopes = "read_orders";
$scopes += "write_products,";
$scopes += "read_product_listings,";
$scopes += "read_themes,write_themes,";
$scopes += "read_script_tags,write_script_tags,";
$scopes += "read_checkouts,write_checkouts";

$shopify = array(
        'API_SECRET' => 'f3ab52969d5d358540b9db83123d8ba9',
        'SHARED_SECRET' => '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',
        'SCOPRES'   => $scopes,
);

/*
 * Configuracion de la url de la app
 */


$app_config = array(
        'TOKEN' => 'https://locosporelcodigo.herokuapp.com/token.php',

);