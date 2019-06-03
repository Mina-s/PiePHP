<?php

namespace Core;

class Router 
{
    private  static $routes;
    private static $array ;
  
        public static function connect ($url, $route) 
        {
         
            self::$routes[$url] = $route;
            // var_dump($route['controller']);
    
        }

        public static function get($url)
        {
            // $url = trim($url, '/');
        //   debug($url);
  
            // $route['controller']['params']['name'];
           
            foreach (self::$routes as $key => $route) {
                if (isset($route['controller'])){
                    if($key === $url ) {
                        self::$array[]= $route;
                    }
               
                }
            }
            // debug(self::$array);
        
            return self::$array;
        }
         
         

            
        
           
            // debug($arguments);
           
            //      foreach (self::$routes as $key => $route) {

            //             if (isset($route['controller']) && in_array('user',$arguments)) {
                            
            //                 $UserController = new \Controller\UserController();
            //                 if (isset($route['action']) && in_array('add',$arguments)) {
            //                     $UserController->addAction();
            //                 }
            //             }
            //             else if (isset($route['controller']) && in_array('app',$arguments)) {
                            
            //                 $AppController = new \Controller\AppController();
            //             }
            //             else {
            //                 include ('src/View/Error/404.php');
            //                 return;

            //             }
                   
            //     }
        
}



?>
