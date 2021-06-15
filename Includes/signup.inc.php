<?php


if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $userName = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once '../database.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $userName, $pwd, $pwdrepeat) !== false) {
        header("location:../signup.php?error=emptyInput");
        exit();
    }
    
    if(invalidUid($userName) !== false) {
        header("location:../signup.php?error=invalidUid");
        exit();
    } 

    if(invalidEmail($email) !== false) {
        header("location:../signup.php?error=invalidemail");
        exit();
    } 
    if(pwdMatch($pwd, $pwdrepeat) !== false) {
        header("location:../signup.php?error=passwordsnotmatching");
        exit();
    } 
    if(uidExists($conn, $userName, $email) !== false) {
        header("location:../signup.php?error=usernametaken");
        exit();
    } 

    createUser($conn, $name, $email, $username, $pwd);


} else{
    header("location:../signup.php");
    exit();
}