<?php

namespace Controllers;
use MVC\Router;

class RankingController{
    public static function index(Router $router){

        

        $router->render('main/index', [
            
        ]);
    }
}


