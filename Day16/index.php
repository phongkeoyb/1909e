<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $mombile = ["oppo","xiaomi", "samsung", "iphone"];
    echo "<pre>";
    print_r($mombile);
    echo "</pre>";
    //đếm số phần tử trong mảng
    echo "Tổng số phần tử trong mảng: " . count($mombile);
    //kiểm tra 1 biến có phải là 2 mảng không?
    $checkArray = is_array($mombile);
    echo "<br> Test thử hàm is_array để kiểm tra mảng: ";
    var_dump($checkArray);

    $checkEmpty = empty($mombile);
    echo "<br> Test thử hàm mảng có rỗng hay không:  ";
    var_dump($checkEmpty);

    foreach ($mombile as $key_mobile => $value_mobile){
        echo "<br> key: " . $key_mobile;
        echo "<br> value: " . $value_mobile;

    }

?>
</body>
</html>