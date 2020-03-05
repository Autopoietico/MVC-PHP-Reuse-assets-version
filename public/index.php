<?php

    ini_set('display_errors', 1);
    ini_set('display_starup_error', 1);
    error_reporting(E_ALL);

    require_once '../vendor/autoload.php';

    use App\Controllers\IndexController;

    $DATES = [
        'COPY_DATE' => "2020"
    ];   

    if (isset($_GET["section"]) && $_GET["section"] != ""){

        $section = $_GET["section"];
    }else{
        
        $section = "home";
    }
    
    function activeSection($var){
        if ($GLOBALS["section"] == $var){

            echo "active";
        }
    }    

    $inCon = new IndexController();

    $inCon->indexAction($section,$DATES);