<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Thời gian trong PHP
    </pre>

    <?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    echo "Thời gian hiện tại: Tính toán " . time();
    echo "<br>";
    echo "Thời gian hiện tại: không tính toán " . date("H:i:s d/m/Y");
    echo "<br> Múi giờ hiện tại " .  date_default_timezone_get();
    ?>


</body>
</html>