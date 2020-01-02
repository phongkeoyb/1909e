<?php

include_once "Excel/export.php";
include_once "Excel/import.php";
include_once "Utilities/Payment/payment.php";
include_once "Utilities/Paypal/paypal.php";
include_once "Utilities/Pdf/pdf.php";

use \Excel\ExportExcel as ex;
use \Excel\ImportExcel as im;
use \Utilities\Payment\payment as pm;
use \Utilities\Paypal\paypal as pp;
use \Utilities\Pdf\pdf as pdf;


$ex1 = new ex();
$im1 = new im();

$pdf1 = new pdf();
$payment1 = new pm();
$paypal1 = new pp();

$ex1->demo();
$im1->demo();
$pdf1->demo();
$payment1->demo();
$paypal1->demo();
echo "<br> Traits";
$payment1->demoMomo();
$payment1->demoNapas();

