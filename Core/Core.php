<?php

namespace Core;


class Core 
{

	public function run() 
	{
        // echo __CLASS__ . " [OK]" . PHP_EOL;
        //Routage statique
		
        include ('./src/routes.php');
        $url = substr($_SERVER['REQUEST_URI'],strlen(BASE_URI));
      
        if (Router::get($url)) {

            $route = Router::get($url);
          
         
            foreach($route as $key=> $values){
                $controller =  '\Controller\\'.ucfirst($values['controller']) . "Controller";
                $action_to_load = $values['action']."Action";
                
            }
        
            $control = new $controller();
            $control-> $action_to_load();  
        }
        else {
            include ('src/View/Error/404.php');

        }
    }
    
       
		
		
		
		
		
// Routage dynamique
//    public function run()
//    {
// //        echo __CLASS__ . " [OK]" . PHP_EOL;
// //        echo BASE_URI;
// //        echo "<br>------<br>";
// //        echo $_SERVER["REDIRECT_URL"];


//        $server = $_SERVER["REDIRECT_URL"];
//        $rest = substr($server, strlen(BASE_URI) +1);

//        var_dump($rest);

//        $a = explode("/", $rest);

//        var_dump($a);

//        if ($a[0] === ""){
//            $controller = "App";
//            $action = "index";
//        }

//        else if (!isset($a[1]) || $a[1] == ""){
//            $controller = ucfirst($a[0]);
//            $action = "index";
//        }

//        else {
//            $controller = ucfirst($a[0]);
//            $action = $a[1];
//        }

//        $controller = '\src\Controller\\' . $controller . "Controller";
//        $action = $action . "Action";



//        if (method_exists($controller, $action)){
//            $controller::$action();
//        }

//        else{
//            echo "ERREUR PAGE 404";
//        }


//    }  
}
