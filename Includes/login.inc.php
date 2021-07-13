<?php

if (isset($_POST["submit"])){

    $username = $_POST["uid"];
    $pwd= $_POST["pwd"];

    require_once 'database.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($userName, $pwd) !== false) {
        header("location:../login.php?error=emptyInput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else{
    header("location: ../login.php");
    exit();
}