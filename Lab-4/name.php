<?php
    session_start();

    if(isset($_POST['submit'])){

        $name  =  $_REQUEST['name'];
        $firstchar=$name[0];
       
        if($name == null){
            echo "can't be empty";
        }else if (strlen($name)<2){
            echo " Contains at least two words";
        }else if(!($firstchar>="A" && $firstchar<="Z") && !($firstchar>="a" && $firstchar<="z")){
            echo "Invalid user";
        }
    }else{
        //echo "Invalid request!";
        header('location: lab4_1.html');
    }
  

    //print_r($_GET);
    //echo "Test";
?>