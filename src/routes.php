<?php
// use Core\Router;

Core\Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Core\Router::connect('/index', ['controller' => 'app', 'action' => 'index']);
Core\Router::connect('/logout', ['controller' => 'user', 'action' => 'lougout']);
Core\Router::connect('/user/show', ['controller' => 'user', 'action' => 'show']);
Core\Router::connect('/user/profile', ['controller' => 'user', 'action' => 'profile']);
Core\Router::connect('/user/register', ['controller' => 'user', 'action' => 'register']);
Core\Router::connect('/user/login', ['controller' => 'user', 'action' => 'login', 'params' =>['name' => 'Amina']]);
