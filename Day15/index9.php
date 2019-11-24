<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    define("pi",3.14 );

    function dientichhinhtron($dientich){
        return $dientich*$dientich*pi;
    }
    $r = 20;
    echo dientichhinhtron(5);
    echo "<br>";
    echo dientichhinhtron($r);

?>
</body>
</html>