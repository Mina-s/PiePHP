<?php

    namespace  Core;

    class Database
    {
        protected $bdd;
      

        public function __construct()
        {
            $jsonStr = file_get_contents("config.json");
            $config = json_decode($jsonStr); 
            $host = $config->database->host;
            $dbname = $config->database->dbname;
            $user = $config->database->user;
            $password= $config->database->password;
            

            $this->bdd = new \PDO("mysql:host=$host;dbname=$dbname; charset=utf8","$user","$password");
            $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


        }
    }