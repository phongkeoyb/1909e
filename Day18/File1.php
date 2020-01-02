<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Tạo File và ghi file</h1>

<?php
    $myfile = fopen("write.txt","w");
    $content = "
    Đồ ngốc nghếch
    Đồ hâm
    Đồ hấp
    ";

    fwrite($myfile,$content);
    fclose($myfile);

?>
</body>
</html>