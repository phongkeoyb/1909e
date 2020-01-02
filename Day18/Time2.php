<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Thời gian trong PHP
        Tạo thời gian bằng hàm

    </pre>

    <?php
    $time200 = mktime(12,12,12,1,1,2002);
    echo $time200;
    echo "<br>";
    echo date("H:i:s d/m/Y",$time200);
    ?>


</body>
</html>