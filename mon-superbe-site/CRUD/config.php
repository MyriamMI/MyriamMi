<?php 
    $server_name='localhost';
    $user_name='root';
    $password='';
    $database='crud';
    $connection =  mysqli_connect($server_name, $user_name, $password,$database);
    if(!$connection){
        die("connection échouée").mysqli_connect_error();
    }
?>