<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $e = [];
        $e[] = "Nguyễn Văn A";
        $e[] = "Nguyễn Văn B";
        $e[] = "Nguyễn Văn C";
        echo "<pre>";
        print_r($e);
        echo "<br>";
        echo "</pre>";

        $f = [];
        $f[0] = "Nguyễn Văn A";
        $f[1] = "Nguyễn Văn B";
        $f[3] = "Nguyễn Văn C";
        echo "<pre>";
        print_r($f);
        echo "<br>";
        echo "</pre>";

        $g = ["a" => "Nguyễn Văn A", "b" => "Nguyễn Văn B", "c" => "Nguyễn Văn C"];
        echo "<pre>";
        print_r($g);
        echo "<br>";
        echo "</pre>";

    ?>
</body>
</html>