<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre >
        <?php
        echo " <br> Ví dụ 1: ";
        $mang1 = [
            ["ten" => "hà nội", "gpd" => "10 tỷ USD"],
            ["ten" => "hồ chí minh", "gpd" => "15 tỷ USD"],
            ["ten" => "bắc ninh", "gpd" => "5 tỷ USD"],
        ];
        $json1 = json_encode($mang1);
        echo "<pre>";
        print_r($mang1);
        echo "</pre>";
        echo "<pre>";
        print_r($json1);
        echo "</pre>";


        echo " <br> Ví dụ 2: ";

        $json1 = '[{"ten":"h\u00e0 n\u1ed9i","gpd":"10 t\u1ef7 USD"},{"ten":"h\u1ed3 ch\u00ed minh","gpd":"15 t\u1ef7 USD"},{"ten":"b\u1eafc ninh","gpd":"5 t\u1ef7 USD"}]';
        $mang1 = json_decode($json1);
        echo "<pre>";
        print_r($json1);
        echo "</pre>";
        echo "<pre>";
        print_r($mang1);
        echo "</pre>";
        ?>
    </pre>
</body>
</html>