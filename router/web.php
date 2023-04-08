<?php

$uri = $_SERVER["REQUEST_URI"];
$uriArr = parse_url($uri);
$path = $uriArr["path"];

$Routes = [
    "/api/users/signup" => "users@signup",
    "/api/users/login" => "users@login"
];

if(array_key_exists($path,$Routes) && !is_array($Routes[$path])){
    controller($Routes[$path]);
}