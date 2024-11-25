<?php
session_start();

if (isset($_POST['submit'])) {
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];

    if (isset($_SESSION['user_info'])) {
        $userFound = false;

        foreach ($_SESSION['user_info'] as $user) {
            if ($user['name'] == $name && $user['password'] == $password) {
                $_SESSION['logged_in_user'] = $name;
                $userFound = true;
                break;
            }
        }

}
}
?>

