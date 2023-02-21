<?php
include "../Models/Reservation.php";
$Reservation = new reservation();
session_start();
$idUser=$_SESSION['Id_User'];
if (isset($_POST['reserver']))
 {
   $datedepart= $_POST['datedepart'];
   $datearriv = $_POST['datearrive'];
   $_SESSION['DATEDEPART']=$datedepart;
   $_SESSION['DATEARRIVE']=$datearriv;
$IdReservation=$Reservation->InsertReservation($datearriv,$datedepart,$idUser);
if (!empty($_POST['typebatiment'])) 
{
  $Reservation->InsertBatiment($_POST['typebatiment'],$IdReservation);
}
if (!empty($_POST['pension'])) 
{
  $Reservation->Insertpension($_POST['pension'],$IdReservation);
}
if (!empty($_POST['chambre'])) 
{
  $Reservation->InsertChambre($_POST['chambre'],$IdReservation);
}
if (!empty($_POST['chambreenf'])) 
{
  $Reservation->Enfantbien($_POST['chambreenf'],$IdReservation);
}
$Total=$Reservation->Calcule($IdReservation);
$_SESSION['Total']=$Total;
$_SESSION['Id_Reservation']=$IdReservation;
header('location:../Vue/reservation.php');

    
 
 }