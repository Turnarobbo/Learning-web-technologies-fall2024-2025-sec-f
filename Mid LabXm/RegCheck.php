<?php
session_start();


$user_info = [

    "name" => "",
    "id" => "",
    "email" => "",
    "password" => "",
];



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_info["name"] = $_POST['name'];
    $user_info["id"] = $_POST['id'];
    $user_info["email"] = $_POST['email'];
    $user_info["password"] = $_POST['password'];

        $_SESSION['user_info'] = $user_info;
        echo "<h2>Successfully Registered!</h2>";
        echo "<p><a href='Login.html'><h2>Click for Login Page</h2></a></p>";
    }


?>