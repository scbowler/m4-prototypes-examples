<?php
$output = [
    'success' => false
];

require_once('mysql-connect.php');

if(isset($_GET['product-id'])){
    $id = $_GET['product-id'];
} else {
    $output['error'] = 'No product ID received';
}

if(empty($output['error'])){
    $query = "SELECT * FROM `products` WHERE `id`=$id";
}
