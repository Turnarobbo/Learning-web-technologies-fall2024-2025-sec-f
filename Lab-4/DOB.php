<?php
session_start();
if (isset($_POST['submit'])) {
    $dd = $_REQUEST['d'];
    $mm = $_REQUEST['m'];
    $yyyy=$_REQUEST['y'];
     

    if (empty($dd) || empty($mm) || empty($yyyy)) {
       
    } else if (strlen($dd)>2 || strlen($mm)>2 || strlen($yyyy)>4) 
    {
        header('location: Lab4_3.html');
        
    }
}
?>