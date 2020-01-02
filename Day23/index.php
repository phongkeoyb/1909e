<?php

$mysqlServer = "localhost";
$mysqlUser = "root";
$mysqlPassword = "";
$mysqlDatabaseName = "student";

$connection = new mysqli($mysqlServer,$mysqlUser,$mysqlPassword,$mysqlDatabaseName);

if($connection->connect_error){
    die("ket noi that bai" . $connection->connect_error);
} else
    die("ket noi thanh cong");