<?php

    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if($_POST['user']=='pepito' && $_POST['pass']=='1234'){
            $_SESSION['user']=$_POST['user'];
            $_SESSION['token']=bin2hex(random_bytes(16));
            header("Location:bievenido.php");
            exit();
        }
        else{
            echo "Usuario/contraseña incorrectos";
        }
    }

   



?>