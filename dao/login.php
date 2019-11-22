<?php 

$user=$_POST['user'];
$pass=$_POST['pass'];

    if($user="gerente" && $pass="root"){
        header("location:../WhatToDo.html");
    }
?>