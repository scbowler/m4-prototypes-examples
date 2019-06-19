<?php

$output = [
    'success' => false
];

require_once('mysql-connect.php');

if(empty($output['error'])){
    $query = "SELECT `id`, `name`, `cost` FROM `products`";

    $result = mysqli_query($conn, $query);

    if($result){
        $output['success'] = true;
        $output['products'] = [];

        if(mysqli_num_rows($result)){
            while($row = mysqli_fetch_assoc($result)){
                $output['products'][] = $row;
            }
        }
    }
}

print json_encode($output);
