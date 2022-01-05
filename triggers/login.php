<?php
session_start();
require "../config.php";
$message="";
if(isset($_POST['loginAction'])){
    require "../inc/database.php";
    $user = new databaseDB();
    $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
    $password = md5($_POST['password']);
    $data="email='".$email."' AND password='".$password."'";
    $u=$user->search("users",$data);
    if($u)
        foreach ($u as $userRegistered){
        $_SESSION['users'] = $userRegistered['nombre'];
        $_SESSION['userSurname'] = $userRegistered['apellido'];
        $_SESSION['userEmail'] = $userRegistered['email'];
        $_SESSION['userPhoneNumber'] = $userRegistered['telefono'];
        $_SESSION['userStartDate'] = $userRegistered['creation_date'];
        //endforeach;
        header("location:".urlsite);}
    else{
        $message="message=AccesoDenegado";
        header("location:".urlsite."?errorlogin");}
    }
//else:
//endif;
?>