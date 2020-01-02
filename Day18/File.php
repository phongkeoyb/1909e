<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Đọc File</h1>

<?php
$a = readfile("demo.txt");
echo $a;
echo "<br>";
$myfile = fopen("demo.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("demo.txt"));
fclose($myfile);
?>
</body>
</html>