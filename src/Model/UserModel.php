<?php

    namespace  Model;
    USE Core\Database;
    Use Core\Entity;

    

    class UserModel extends Entity
    {
     
        // protected $email;
        // protected $password;

        // function __construct($attributs)
        // {
        //     debug($attributs);
        //     // parent::__construct();
        //     // $bdd = new Database();
        //     // $bdd->Databases();
        //     // $this->email = $_REQUEST['email'];
        //     // $this->password = $_REQUEST['password'];

        // }

        // public function save()     // debug($fields);
        // {
        //     $insert = "INSERT INTO users (email,password) VALUES ('$this->email','$this->password')";
        //     $query = $this->bdd->prepare($insert);
        //     $result = $query->execute();
        //     if($result == true)
        //     {
        //         echo "\n\n registration succeed ";
        //         return $this->bdd->lastInsertId();  

        //     } else{
        //         echo "\n\n registration failed";
        //     }
        // }

        // public function login()
        // {
        //     $sel = "SELECT * FROM users WHERE email = '" . $this->email . "' AND password = '". $this->password . "'";
        //     $query = $this->bdd->prepare($sel);
        //     $result = $query->fetch();
        //     // echo "\n".$sel;
           

        //     if($result == true)
        //     {
        //         echo "\n\n welcome " . $this->email;

        //     } else{
        //         echo "\n\n bad login sorry";
        //     }
        // }

        // public function create()
        // {
        //         $insert = "INSERT INTO users (email,password) VALUES ('$this->email','$this->password')";
        //         $query = $this->bdd->prepare($insert);
        //         $result = $query->execute();

        //         if ($result == true)
        //         {
        //             echo "\n\n registration succeed ";
        //             return $this->bdd->lastInsertId();  
        //         } else {
        //             echo "\n\n registration failed";
        //         }
        // }

        // public function read($id)
        // { 
        //     try {
        //         $query = $this->bdd->prepare("SELECT * FROM users WHERE id=:id");
        //         $query->bindParam("id", $id, PDO::PARAM_STR);
        //         $query->execute();
                
        //         if ($query->rowCount() > 0) {

        //             return $query->fetch(PDO::FETCH_OBJ);
        //         }
        //     } catch (PDOException $e) {
        //         exit($e->getMessage());
        //     }

        // }

        // public function Update($id)
        // {
        //     try {
        //         $query = $this->bdd->prepare("UPDATE users SET email = '" . $this->email . "' AND password = '". $this->password ."' WHERE id=:id");
        //         var_dump($query);
        //         $query->bindParam("email", $email, PDO::PARAM_STR);
        //         $enc_password = hash('ripemd160', $this->password);
        //         $query->bindParam("password", $enc_password, PDO::PARAM_STR);
        //         $query->bindParam("id", $id, PDO::PARAM_STR);
        //         $query->execute();
            
        //     } catch (PDOException $e) {
        //         exit($e->getMessage());
        //     }
        // }

        // public function delete($id) 
        // {
        //     try {
        //         $query = $this->bdd->prepare("DELETE FROM users WHERE id=:id");
        //         $query->bindParam("id", $id, PDO::PARAM_STR);
        //         $query->execute();

        //     } catch (PDOException $e) {
        //         exit($e->getMessage());
        //     }

        // }

        // public function read_all()
        // {
        //     try {
        //         $query = $this->bdd->prepare("SELECT * FROM users ");
        //         $query->execute();
                
        //         if ($query->rowCount() > 0) {
    
        //             return $query->fetch(PDO::FETCH_OBJ);
        //         }
        //     } catch (PDOException $e) {
        //         exit($e->getMessage());
        //     }
        // }

    }
  
