<?php

namespace App\Controllers;

use App\Models\Section;

class IndexController{

    public function indexAction($section,$DATES){

        $sectionModel = new Section();

        include("../views/index.php");
    }
}