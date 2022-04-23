<?php

$string = $_POST['kalimat'];
// $string = 'di rumah saya ada kasur rusak';

$string = str_replace(' ', '', $string);
$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
$string = strtolower($string);

function isPalendrone($string)
{
    if ($string == strrev($string))
        return true;
    else
        return false;
}

$longest = "";

for ($i = 0; $i < strlen($string) - 1; $i++) {
    $afterCurrent = substr($string, $i);
    for ($j = 0; $j < strlen($afterCurrent) - 1; $j++) {
        $section = substr($afterCurrent, 0, $j);
        if (isPalendrone($section)) {
            if (strlen($longest) < strlen($section)) {
                $longest = $section;
            }
        }
    }
}

$response = array(
    'status' => 200,
    'message' => 'Success',
    'data' => $longest
);
header('Content-Type: application/json');
echo json_encode($response);
