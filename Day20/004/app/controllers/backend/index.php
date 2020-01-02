<?php

namespace App\Controller\Backend;


use App\Models\Frontend\indexFrontend;
use App\Models\Frontend\indexFrontend1;
use App\Models\models;

class index{
    public function getInfo() {
        echo "<br>" . __METHOD__;
    }

    public function getInfo2(){
        $a = new models();
        $a->getAll();
        $b = new indexFrontend();
        $b->getAll();
        $c = new indexFrontend1();
        $c->getAll();
    }
}