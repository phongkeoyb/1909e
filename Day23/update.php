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
<?php

include_once 'connection.php';

if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["age"]) && isset($_POST["address"]) && isset($_POST["email"]) && isset($_POST["id"])){
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $sql_update = "UPDATE giaovien SET firtname = '$firstname', lastname = '$lastname', age = $age, address = '$address', email = '$email' WHERE id = $id";
    echo $sql_update;
    $test = $conn->query($sql_update);
    if ($test) {
        echo "<br> update thành công";
    } else {
        echo "<br> update thất bại";
    }
    echo "<br> kết quả thực hiện câu query";
    var_dump($test);
}
?>
    <div class="page-wrap">
        <form name="myguest" action="" method="post">
            <p>
                <label> id</label>
                <input name="id" value="" type="text">
            </p>
            <p>
                <label> first name</label>
                <input name="firstname" value="" type="text">
            </p>
            <p>
                <label> last name</label>
                <input name="lastname" value="" type="text">
            </p>
            <p>
                <label> age </label>
                <input name="age" value="" type="text">
            </p>
            <p>
                <label> address </label>
                <input name="address" value="" type="text">
            </p>
            <p>
                <label> email </label>
                <input name="email" value="" type="text">
            </p>
            <p>
                <input type="submit" name="submit" value="update data">
            </p>
        </form>
    </div>
</body>
</html>