<?php
include "../Models/Signin.php";
$signin=new signin();

if (isset($_POST['seconnecter']))
 {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $user = $signin->login($email,$password);   
    if ($user =="Client"){
       header("location:../vue/accueillclient.php"); 
    }
    else if($user =="Admin"){
       header("location:../vue/dashboard.php"); 
    } 
    else {  
        echo "<script>alert(\"l'email ou le mot de passe n'est pas correct\")</script>";  
        header("location:../vue/Accueill.php"); 
    }        
}
?>