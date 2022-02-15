<?php
    ob_start();

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    //session_start();

    require_once('vendor/autoload.php'); //require fat free components...

    $f3 = Base::instance(); //instance of the base class...

$f3->route('GET /', function () {

    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->run(); //run the fat free










    ob_flush();