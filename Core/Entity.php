<?php
namespace Core;


class Entity
{
    public $array=[];
   
    
    function __construct($attributs )
    {
        if(isset($attributs)) {
            foreach($attributs as $key => $value) {
             
                $this->array[$key]= $value;
                $this->{$key} = $value;
                
            }

        }
        
    }
    
    public  function obj($argv)
    {
        foreach($argv as $key => $value) {
            $this->{$key} = $value;
        }
        
    }

    public static function getTable()
    {
        return strtolower(str_replace('Model', '',basename(str_replace('\\','/',get_called_class())))).'s';
        
    }

    public function create()
    {
        $orm = new ORM();
        $table = self::getTable();
        
        $fields =$this->array;
        $id = $orm->create($table, $fields );
        return $id;
        
    }
    
    public function read($id) 
    {
        $orm = new ORM();
        $table = self::getTable();
        $read = $orm->read($table,$id);
        $models = '\\'.basename(get_called_class());

        $result = new $models($read);
     
        return $result;
       
        
    }
    
    public function update()
    {
      
        if(key_exists('id',$this->array)) {
        
            $orm = new ORM();
            $table = self::getTable();
            $values= [];
            foreach($this as $key => $value) {
              
                if(!is_array($this->$key)) {
                    $values[$key]= $this->$key;
                }
            }
          
            $update = $orm->update($table,$this->array['id'],$values);
       
            return $update;
        }
    }
    
    public function delete() {
        $orm = new ORM();
        $table = self::getTable();
        $id = $this->array['id'];
        $delete = $orm->delete($table,$id);
      
    }
    
    
    public static function find($params)
    {
    
        $orm = new ORM();
    
        $table = self::getTable();
   
        $models = '\\'.basename(get_called_class());
        
        $result = $orm->find($table,$params);
       

        if($result && count($result)> 0) {
            return array_map(function($value) use($models)  { 

                $model= new $models($value);
               
                return $model;

                },$result);

        }
      
    }

           
    
}




