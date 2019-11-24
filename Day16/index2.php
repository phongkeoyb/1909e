<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $vietnam = [];
    $vietnam["hn"] = [
            "province" => "Hà Nội",
            "district" => [
                    "tx" => "Thanh Xuân",
                    "hk" => "Hoàn Kiếm",
                    "th" => "Tây Hồ",
                    "cg" => "Cầu Giấy",
//                    "ward" => [
//                            "htm" => "Hồ Tùng Mậu",
//                            "number" => [
//                                    "1" => "Một",
//                                    "2" => "Hai",
//                                    "3" => "Ba",
//                            ],
//                            "xt" => "Xuân Thủy",
//                            "nt" => "Nghĩa Tân"
//                    ]
            ]
    ];

    $vietnam["HCM"] = [
        "province" => "Hồ Chí Minh",
        "district" => [
            "Q1" => "Quận 1",
            "Q2" => "Quận 2",
            "Q3" => "Quận 3",
            "Q4" => "Quận 4"
        ]
    ];
    echo "<pre>";
    print_r($vietnam);
    echo "</pre>";

    echo '<br>' . $vietnam["HCM"]["province"];
    echo '<br>' . $vietnam["HCM"]["district"]["Q1"];

    foreach ($vietnam as $key_province => $value_province){
//        echo "<pre>";
//        print_r($value_province);
//        echo "</pre>";

        echo "<br> --> " . $value_province['province'];
        foreach ($value_province['district'] as $key_district => $value_district){
            echo "<br>" .$key_district . ' --> '. $value_district;
//            echo "<pre>";
//            print_r($value_district);
//            echo "</pre>";
        }
}

?>
</body>
</html>