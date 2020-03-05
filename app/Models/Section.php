<?php

namespace App\Models;

class Section{

    public function printSection($section){

        if (file_exists("../views/section-$section.php")){
        
            include("../views/section-$section.php");
        }
        else{
        
            include("../views/section-404.php");
        }
    }
}