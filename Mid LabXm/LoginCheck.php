<?php
session_start();
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
 
    if (isset($_SESSION['users']) && is_array($_SESSION['users'])) {
        $userFound = false;
 
        foreach ($_SESSION['users'] as $user) {
            if (
                isset($user['name'], $user['password']) &&
                $user['name'] === $name &&
                $user['password'] === $password
            ) {
                $_SESSION['logged_in_user'] = $name;
                $userFound = true;
                break;
            }
        }
 
        if ($userFound) {
            header('Location: home.php');
            exit;
        } else {
            echo "Invalid name or password.";
        }
    } else {
        echo "No users registered.";
    }
} else {
    header('Location: Login.html');
    exit;
}
?>