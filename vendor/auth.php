<?php

    $login = $_GET['login'];
    $pass = $_GET['password'];

    $con = mysqli_connect('localhost', 'root', 'uEQ46CqLj8rH2EW', 'cq04623_el');

    $result = mysqli_query($con,"SELECT * FROM registracia WHERE login = '".$login."' 
    AND password = '".$pass."'");
    // $user = mysqli_fetch_row($result);
    $user = $result ->fetch_array();

    


    if(count($user) == 0 ){
        header('Location:  ../index.php');
        exit();
        
    }

   
    // print_r(setcookie("user", $user['login'], time() + 60, "/"));
    setcookie("user", $user['login'], time() + 60, "/");
    // print_r($_COOKIE==FALSE);
    // exit();
    
    header('Location:  ../index.php');
    exit();


?>