<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";
?>

    <form name="login" action="process.php" method="post">
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