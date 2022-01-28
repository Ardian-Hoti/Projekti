<?php
//1.get data from input
//2.validate data
//3.open main page
session_start();

require 'dbData.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(validateEmptyData($email, $password)){
        header("Location: login.php");
    }
    else if(validateData($email, $password)){
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }
}


function validateEmptyData($email, $password){
    if(empty($email) || empty($password)){
        return true;
    }
    return false;
}

function validateData($email, $password){
    global $allUsers;
    foreach($allUsers as $user){
        if($user['email'] == $email && $user['password'] == $password){
            $_SESSION['roli'] = $user['role'];
            $_SESSION['emri'] = $user['name'];
            return true;
        }
    }
    return false;
}

?>