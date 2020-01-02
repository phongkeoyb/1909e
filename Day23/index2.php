<?php

$mysqlServer = "localhost";
$mysqlUser = "root";
$mysqlPassword = "";
$mysqlDatabaseName = "student";

$connection = mysqli_connect($mysqlServer,$mysqlUser,$mysqlPassword,$mysqlDatabaseName);

if(!$connection){
    die("ket noi that bai" . $connection->connect_error);
} else
    die("ket noi thanh cong");