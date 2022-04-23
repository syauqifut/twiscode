<?php

$bin = $_POST['bilangan'];
// $bin = 1001;

$bin = str_split($bin);
$bin = array_reverse($bin);

$i = 0;
$dec = 0;
foreach ($bin as $values) {
    $ans = $values * pow(2, $i);
    $dec += $ans;
    $i++;
}
$hasil_akhir = $dec;

$response = array(
    'status' => 200,
    'message' => 'Success',
    'data' => $hasil_akhir
);
header('Content-Type: application/json');
echo json_encode($response);
