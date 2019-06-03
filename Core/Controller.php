<?php

namespace Core;

class Controller 
{
    protected static $_render;
    private $request;

    function __construct()
    {
         $this->request = new Request();
       
    }

    protected function render($view, $scope = []) {
        extract($scope);
        $path = basename(str_replace("\\","/",get_called_class()));
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
                str_replace('Controller','', $path), $view]) . '.php';
        
        if (file_exists($f)) {
            ob_start();
            include($f);
            $view = ob_get_clean();
            ob_start();
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View','index']) . '.php');
            self::$_render = ob_get_clean();
            }
    }

    function __destruct(){
        
        echo self::$_render;
    }



}
