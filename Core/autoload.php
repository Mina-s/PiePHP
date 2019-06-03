<?php

function debug($variable) 
{
    echo'<pre>' , var_dump($variable) ,'</pre>';
}


spl_autoload_register(function($className) {

    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className.'.php');

    if (file_exists($className)) {
        require_once ($className );
    }
    else{
        require_once ('src'.DIRECTORY_SEPARATOR.$className );

    }
});




 










        












?>