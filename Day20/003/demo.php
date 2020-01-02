<?php
include_once "app/controllers/controllers.php";
include_once "app/controllers/backend/index2.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/frontend/index.php";
include_once "app/controllers/frontend/index2.php";


//$index1 = new App\Controller\Backend\index();
//$index2 = new App\Controller\Backend\index2();
//$index3 = new App\Controller\Frontend\index();
//$index4 = new App\Controller\Frontend\index2();
//
//$index1->getInfo();
//$index2->getInfo();

$controller = new \App\Controller\controllers();
$index = new \App\Controller\Frontend\index();
$index->getInfo();
$controller->getInfo();