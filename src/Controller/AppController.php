<?php

namespace Controller;

use Core\Controller;


class AppController extends Controller
{
    function __construct()
    {
        parent::__construct();

    }
    
    function indexAction()
    {
        echo'je suis la methode indexAction';
        $this->render('index');

    }
  




}




?>