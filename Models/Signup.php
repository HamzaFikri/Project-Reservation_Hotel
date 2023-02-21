<?php
    include '../Database/Db.php';   
    class Signup extends bd{ 
      
        public function UserExist($email){
            $sql = 'SELECT * FROM user where Email = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$email]);
             $count = $stmt->fetchColumn();
             return $count;
        }
    
            
    public function  Signup($email,$password,$Nom,$Preom,$Telephone,$idrole){  
        $sql = 'INSERT INTO `user`(`Email`, `Password`, `Nom`, `Prenom`, `Telephone`, `id_role`)  values(?,?,?,?,?,?)';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email,$password,$Nom,$Preom,$Telephone,$idrole]);
    
            
}}