<?php
session_start();
 
if (!isset($_SESSION['logged_in_user'])) {
    header('Location: Login.html');
    exit;
}
 
$loggedInUserName = $_SESSION['logged_in_user'];
 
 
$user = null;
foreach ($_SESSION['users'] as $user_info) {
    if ($user_info['name'] === $loggedInUserName) {
        $user = $user_info;
        break;
    }
}
 
if ($user) {
    echo "<h2>Welcome to the Home Page, {$user['name']}!</h2>";
    echo "<p><strong>ID:</strong> {$user['id']}</p>";
    echo "<p><strong>Email:</strong> {$user['email']}</p>";
    echo "<p><strong>Password:</strong> {$user['password']}</p>";
} else {
    echo "<p>User not found!</p>";
}
?>
<br/><a href="logout.php">Click Here To Logout</a>