<?php

define('BASE_URI', str_replace('\\', '/', substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']))));

substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']));

implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']);


require_once (implode(DIRECTORY_SEPARATOR, ['Core' ,'autoload.php']));


$app = new Core\Core();

$app->run();










// debug($_POST);
// debug($_GET);
// debug($_SERVER);











?>