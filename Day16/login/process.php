<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    if (isset($_POST["username"]) && isset($_POST["password"])){
        if ($_POST["password"] != "" && $_POST["username"] != ""){
            $username = $_POST["username"];
            $password = $_POST["password"];
            if ($username == "admin" && $password == "12345") {
                header("Location: success.php");
                exit();
            }
        }
    }
    header("Location: post.php?message= Username hoặc password không đúng");
    exit();
//
//
//
//    echo "<br>" . $_POST["username"];
//    echo "<br>" . $_POST["password"];
//    echo "<br>" . $_POST["submit"];
?>

</body>
</html>