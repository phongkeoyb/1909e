<?php

include_once "abstract.php";
include_once "interface.php";

class Mysql extends database implements crud,log,search {
    public function connect(){
        echo "ketnoi";

    }
    public function creat()
    {
        // TODO: Implement creat() method.
    }
    public function delete()
    {
        // TODO: Implement delete() method.
    }
    public function read()
    {
        // TODO: Implement read() method.
    }
    public function Timkiem()
    {
    }
    public function Todo()
    {
    }
    public function update()
    {
        // TODO: Implement update() method.
    }

}

$a = new Meo();
echo "<br>";
$a->keu_ntn();
echo "<br>";
$a->ahihi();
echo "<br>";
$a->an_ntn();
echo "<br>";
$a->sinh_ntn();
echo "<br>";
$a->tenloai();
echo "<br>";
$a->thongtin();
