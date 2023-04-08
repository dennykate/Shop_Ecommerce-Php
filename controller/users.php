<?php


function signup(){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $birthDate = $_POST["birthDate"];
    $gender = $_POST["gender"];
    $region = $_POST["region"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = sha1($password);

    $newUser = [
        'firstName' => $firstName,
        'lastName' => $lastName,
        'firstName' => $firstName,
        'birthDate' => $birthDate,
        'gender' => $gender,
        'email' => $email,
        'password' => $password,
    ];
    
    $sql = "INSERT INTO users (firstName, lastName, birthDate, region, gender, email, password) 
    VALUES ('$firstName','$lastName','$birthDate','$region','$gender','$email','$password')";

    $query = run($sql);
    
    if($query){
        $response = [
            "success" => true,
            "message" => "signup successfull",
            "data" => $newUser
        ];

        response($response);
    }else{
        $response = [
            "success" => false,
            "message" => "signup fail",
        ];

        response($response);
    }   
}

function login(){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = sha1($password);

    $sql = "SELECT * FROM users WHERE password='$password' AND email='$email'";
    $query = run($sql);

    $user = mysqli_fetch_assoc($query);
    if($user){
        $response = [
            "success" => true,
            "message" => "login successfull",
            "data" => $user
        ];
        response($response);
    }else{
        $response = [
            "success" => false,
            "message" => "login fail",
        ];

        response($response);
    }

}