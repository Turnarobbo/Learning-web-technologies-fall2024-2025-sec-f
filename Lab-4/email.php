<?php
session_start();
if (isset($_POST['submit'])) {
    $name = $_REQUEST['name'];
    if (empty($name) || strpos($name, "@") == false || strpos($name, ".") == false)
    {
        header('location: Lab4_2.html');
    } else {
     
        echo "Welcome Home";
    }
}
?>
 