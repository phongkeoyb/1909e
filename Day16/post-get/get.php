<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    echo "<br>" . $_GET["username"];
    echo "<br>" . $_GET["password"];
    echo "<br>" . $_GET["submit"];
?>

    <form name="login" action="" method="get">
        <p>
            <label>Username</label>
            <input name="username" type="text" value="">
        </p>
        <p>
            <label>Password</label>
            <input name="password" type="password" value="">
        </p>
        <p>
            <button type="submit" name="submit" value="login"> Đăng nhập </button>
        </p>
    </form>
</body>
</html>