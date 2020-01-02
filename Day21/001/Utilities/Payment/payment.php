<?php
namespace Utilities\Payment;

include_once "Traits/momo.php";
include_once "Traits/napas.php";

use \Traits\Momo as m;
use \Traits\Napas as n;
class Payment{
    public function demo() {
        echo "<br>" . __METHOD__;
    }
    use m;
    use n;

}