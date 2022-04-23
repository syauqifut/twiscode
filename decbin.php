<?php

// echo $_POST['bilangan'];

$dec = $_POST['bilangan'];
$bin = '';

while ($dec > 0) {
    if ($dec % 2 == 0) {
        $dec /= 2;
        $bin .= 0;
    } else {
        $dec = ($dec / 2) - 0.5;
        $bin .= 1;
    }
    $hasil_akhir = strrev($bin);
}

$response = array(
    'status' => 200,
    'message' => 'Success',
    'data' => $hasil_akhir
);
header('Content-Type: application/json');
echo json_encode($response);
