<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43", "Jax" =>"40", "Mary" => "31");
    echo "Ban Đầu";
    echo "<pre>";
    print_r($age);
    echo "</pre>";

    echo "<br> ksort";
    ksort($age);
    echo "<pre>";
    print_r($age);
    echo "</pre>";

    echo "<br> arsort";
    arsort($age);
    echo "<pre>";
    print_r($age);
    echo "</pre>";

    echo "<br> asort";
    asort($age);
    echo "<pre>";
    print_r($age);
    echo "</pre>";

    echo "<br> sort";
    sort($age);
    echo "<pre>";
    print_r($age);
    echo "</pre>";

    echo "<br> rsort";
    rsort($age);
    echo "<pre>";
    print_r($age);
    echo "</pre>";

    echo "<br> krsort";
    krsort($age);
    echo "<pre>";
    print_r($age);
    echo "</pre>";

?>
</body>
</html>