<?php
require "configs/config.php";

// Set variables for our request
$shop = $_GET['shop'];
$api_key = $shopify['API_KEY'];
$scopes = $shopify['SCOPRES'];
$redirect_uri = $app_config['TOKEN'];

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();