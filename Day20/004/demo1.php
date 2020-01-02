<?php
include_once "app/controllers/controllers.php";
include_once "app/controllers/backend/index2.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/frontend/index.php";
include_once "app/controllers/frontend/index2.php";

use \App\Controller\controllers as ABC;
use \App\Controller\Backend\index as XYZ;


$controller = new ABC();
$index = new XYZ();
$index->getInfo();
$controller->getInfo();