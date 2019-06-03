<?php

    namespace Core;

    class Request {
        // protected $input;


        public function __construct()
        {
            // $this->input = $_REQUEST;
            // debug($this->input);

            foreach($_REQUEST as $key => $data) {
             
                if(!empty($data)) {
                    $data = trim(strip_tags(stripslashes($data)));
                    // $data = strtolower($data);
                    $_REQUEST[$key]= $data;
                    
                    // $this->input[$key] = $data;
                    
                   
                }
                
            }
            // debug($_REQUEST);
            // return $this->input;
            return $_REQUEST;
           
        }

    }

