<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Thời gian trong PHP
        Chuyển đổi qua lại giữa 2 định dạng thời gian
        - định dang người đọc
        - định dạng timestamp

    </pre>

    <?php
    $time1 = mktime(12,12,12,1,1,2002);
    echo $time1;
    echo "<br>";
    $time2 =  date("H:i:s Y/m/d",$time1);
    echo "demo strtotime: " . strtotime($time2);
    echo "<br>";
    echo "demo date: " . date("H:i:s Y/m/d",strtotime($time2));



    ?>


</body>
</html>