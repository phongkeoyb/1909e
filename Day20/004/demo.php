<?php
include_once "app/controllers/controllers.php";
include_once "app/controllers/backend/index2.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/frontend/index.php";
include_once "app/controllers/frontend/index2.php";

use \App\Controller\controllers;
use \App\Controller\Backend\index;


$controller = new controllers();
$index = new index();
$index->getInfo();
$controller->getInfo();