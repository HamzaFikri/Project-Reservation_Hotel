<?php
    include '../Database/Db.php';   
    class reservation  extends bd
    {

public function InsertReservation($datedebut,$datefin,$iduser)
{
    $date = time();
    $today = date('Y-m-d', $date);
    $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,TRUE);
    // $this->conn->beginTransaction();
    $sql = 'INSERT INTO `reservation`(`Date_Reservation`, `Date_Debut_Sejour`, `Date_Fin_Sejour`, `Id_User`) VALUES (?,?,?,?)';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$today,$datedebut,$datefin,$iduser]);
    $Idreservation = $this->conn->lastInsertId('reservation') ; 
    // $this->conn->commit();
    return $Idreservation;
}
public function InsertBatiment($array,$Idres)
{
    $nbr=1;
    foreach($array as $row => $innerArray){
        foreach($innerArray as $innerRow => $value){
            if($value != 'hotel')
            {
                $sql = 'INSERT INTO `service`( `Id_Bien`, `Id_Reservation`, `Nbr`) VALUES (?,?,?)';
                $stmt = $this->conn->prepare($sql);
                $stmt->execute([$value,$Idres,$nbr]);
            }
        }
      }
}
public function Insertpension($array,$Idres)
{
    $nbr=1;
    foreach($array as $row => $innerArray){
        foreach($innerArray as $innerRow => $value){
                $sql = 'INSERT INTO `service`( `Id_Bien`, `Id_Reservation`, `Nbr`) VALUES (?,?,?)';
                $stmt = $this->conn->prepare($sql);
                $stmt->execute([$value,$Idres,$nbr]);
        }
      }
}
public function Enfantbien($array,$Idres)
{ 
    $nbr=1;
    foreach($array as $row => $innerArray){
        foreach($innerArray as $innerRow => $value){
                $sql = 'INSERT INTO `service`( `Id_Bien`, `Id_Reservation`, `Nbr`) VALUES (?,?,?)';
                $stmt = $this->conn->prepare($sql);
                $stmt->execute([$value,$Idres,$nbr]);
        }
      }
}
public function InsertChambre($array,$Idres)
{
    foreach($array as $innerRow => $value){
    $query = "INSERT INTO `service`( `Id_Bien`, `Id_Reservation`, `Nbr`) VALUES((select Id_Bien from bien where type = '$value[typechambre]' and Vue = '$value[vue]' and Categorie_Age is NULL and (lit  = '$value[typelit]' or lit is Null )),?,?)";
    $stmt = $this->conn->prepare($query);
    $stmt->execute([$Idres,$value['nbr']]);
}
  }
  public function Calcule($Idres)
  {
      
    $sql = 'SELECT SUM(b.PRIX*s.nbr) * DATEDIFF(r.Date_Fin_Sejour,r.Date_Debut_Sejour) as `total` FROM service s, reservation r,bien b where r.Id_Reservation=s.Id_Reservation AND s.Id_Bien=b.Id_Bien AND s.Id_Reservation=?';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$Idres]);
    $row   = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row['total'];
  }
    } 