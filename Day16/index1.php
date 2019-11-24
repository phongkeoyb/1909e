<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $mobile = ["xi"=>"xiaomi", "sa"=>"samsung","ip"=>"iphone"];
    echo "<pre>";
    print_r($mobile);
    echo "</pre>";

    echo "<br>" . $mobile["xi"];
    echo "<br>" . $mobile["sa"];
    echo "<br>" . $mobile["ip"];

?>
</body>
</html>