<?php 

namespace Core;
USE Core\Database;


class ORM 
{
    function __construct() 
    {
       
        $jsonStr = file_get_contents("./config.json");
        $config = json_decode($jsonStr); 
        $host = $config->database->host;
        $dbname = $config->database->dbname;
        $user = $config->database->user;
        $password= $config->database->password;
        
        
        $this->bdd = new \PDO("mysql:host=$host;dbname=$dbname; charset=utf8","$user","$password");
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        
    }
    
    public function create ($table, $fields) 
    {
        try {
            ksort($fields);
            $fieldNames = implode(',',array_keys($fields));
            $fieldValues = '"'.implode('","' ,array_values($fields)).'"';
            
            $insert= "INSERT INTO {$table}($fieldNames) VALUES ($fieldValues)";
            $query = $this->bdd->prepare($insert);
            
            debug($query);
            
            foreach ( $fields as $key => $value) {
                
                $query->bindParam("$key",$value);
                
            }
            $query->execute();
            return $this->bdd->lastInsertId();  
            
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
        
    }
    
    public function read ($table, $id) 
    {
        try {
            $query = $this->bdd->prepare("SELECT * FROM {$table} WHERE id=$id");
          
            $query->execute();
            
            if ($query->rowCount() > 0) {
                
                return $query->fetch(\PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
        
    }
    
    public function update ($table, $id='', $fields) 
    {
    
        $fieldDetails = "";
    
        
        foreach ($fields as $key => $value) {
            $value = "'$value'";
            
            $fieldDetails .= $key .'='. $value.',' ;
            
        }
        $fieldDetails = substr($fieldDetails,0,strlen($fieldDetails)-1);
        
        $insert = "UPDATE $table SET $fieldDetails WHERE id=$id";
        
        $query = $this->bdd->prepare($insert);
        
        $query->execute();
        
    }
    
    public function delete ($table, $id) 
    {
        $query = "DELETE FROM $table WHERE id = $id";
        var_dump($query);
        $excute= $this->bdd->query($query);
        $excute->execute();  
    }

    public function find ($table, $params = array('WHERE' => '1','ORDER BY' => 'id ASC','LIMIT' => '' )) 
    {
        
        try {
            $condition ="";
            foreach ($params as $key => $value) {
                if(empty($value)){
                    unset($value);
                }
                else {
                    $condition .=' '.$key.' '.$value;
                }
                
            }
            
            $query =  $this->bdd->prepare("SELECT * FROM {$table} {$condition}");
            
            $a =$query->execute();
            
            if ($query->rowCount() > 0) {
                
                return $query->fetchAll(\PDO::FETCH_ASSOC);
            }
            
            
        }  catch (PDOException $e) {
            exit($e->getMessage());
        }
        
    }     
    
}
















