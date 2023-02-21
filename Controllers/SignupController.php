<?php
include "../Models/Signup.php";
$signup=new Signup();

if (isset($_POST['signup']))
 {
    $idrole=2;
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Tele = $_POST['tele'];
    $count=$signup->UserExist($email);
    if($count > 0){
        header("location:../vue/Sign_up.php?ExistDeja");
    }
    else{
    $signup->Signup($email,$password,$nom,$prenom,$Tele,$idrole);
    header('location:../vue/Sign-in.php?uploadSuccefull');
    }        
}
?>