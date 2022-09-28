<?php
namespace app\controllers;

include_once  dirname(__FILE__, 3) . '/config/config.php';

use PageController;
use VeiculoDAO;

class HomeController extends PageController
{
    public function __construct()
    {
        parent::__construct(new VeiculoDAO(), 'home');
        //parent::exibirHomePage();
    }

    
}