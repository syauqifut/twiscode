<?php
// Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
$project_location = "/twiscode";
$url = $project_location;
// echo $url;
// For get URL PATH
$request = $_SERVER['REQUEST_URI'];

//All route
switch ($request) {
        //Auth route
    case $url . '/decbin':
        require "decbin.php";
        break;
    case $url . '/bindec':
        require "bindec.php";
        break;
    case $url . '/palindrome':
        require "palindrome.php";
        break;
    default:
        http_response_code(404);
        // require "template.php";
        echo "
        /edcbin <br/>
        /bindec <br/>
        /palindrome <br/>
        ";
        break;
}
