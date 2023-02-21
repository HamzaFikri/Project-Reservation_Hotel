<?php
    include '../Database/Db.php';   
    class Signin  extends bd{ 
     
        public function login($email,$password)
        {
        $query = "select * from user u,role r where u.email=? and u.password=? and  u.id_role=r.Id_Role";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$email,$password]);
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row))
       {
         session_start();
        $_SESSION['Id_User']   = $row['Id_User'];
        $_SESSION['Nom'] = $row['Nom'];
        $_SESSION['Prenom'] = $row['Prenom'];
        return $row["Role"];

      } 
      else {
       return false;
    }  
   
}   
    }