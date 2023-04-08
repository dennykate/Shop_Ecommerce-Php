<?php

require_once "./controller/users.php";
require_once "./core/functions.php";
require_once "./core/connect.php";

// $user = [
//    "name" => "Thwe Thwe",
//    "age" => 22,
//    "relationship" => true,
// ];

// header("Content-type: application/json");
// echo json_encode($user);

if( $_SERVER["REQUEST_METHOD"] === "POST") {

   if($_SERVER["PATH_INFO"] === "/signup" ){
      signup();
   }else if($_SERVER["PATH_INFO"] === "/login" ){
      login();
   }
}