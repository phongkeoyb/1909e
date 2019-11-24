<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<br>" . $_POST["username"];
    echo "<br>" . $_POST["password"];
    echo "<br>" . $_POST["submit"];
?>

</body>
</html>