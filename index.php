<?php
ob_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

require_once('vendor/autoload.php'); //require fat free components...

$f3 = Base::instance(); //instance of the base class...

$f3->route('GET /', function () {

    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET|POST /survey', function ($f3) {

    $choices = array('Easy Peasy', 'Nails Tough', 'Dark Souls');

    $f3->set("choices", $choices);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //$_SESSION['option'] = $_POST['option'];
        //$_SESSION['name'] = $_POST['name'];
        $name = "Test";
        //$_POST['name'];
        $f3->set("name", $name);

        $f3->reroute('surveyComplete');

    }

    $view = new Template();
    echo $view->render('views/survey.html');
});

$f3->route('GET /surveyComplete', function () {

    $view = new Template();
    echo $view->render('views/survey-complete.html');
});


$f3->run();


ob_flush();