<?php

function controller(string $controllerName) {
    $controllerArr = explode("@",$controllerName);
    require_once ControllerDir."/$controllerArr[0].php";

    call_user_func($controllerArr[1]);
}

function run(string $sql){
    try{
        $query = mysqli_query($GLOBALS["conn"],$sql);

        return $query;
    }catch(Exception $e){
        print_r($e);
    }
}

function response(array $array){
    header("Content-type:application/json");
    echo json_encode($array);
}