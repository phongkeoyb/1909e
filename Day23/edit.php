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

if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
    $id = (int)$_GET["id"];
    include_once "connection.php";
    $sqlSelect = "SELECT * FROM giaovien WHERE id=$id";
    $stmt = $conn->prepare($sqlSelect);
    $stmt->execute();
// set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $all = $stmt->fetchAll();
    echo "<pre>";
    print_r($all);
    echo "</pre>";
    echo $all[0]["id"];
} else {
    echo "<br> Không tìm thấy id";
}

if (!isset($all[0]["id"])) {
    echo "<br> Không tìm thấy bản ghi có id tương ứng"; exit;
}


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
    header("location:select.php");
    exit;
}


?>



<form name="myguest" action="" method="post">
    <p>
        <input name="id" value="<?php echo $all[0]["id"]; ?>" type="hidden">
    </p>
    <p>
        <label> first name</label>
        <input name="firstname" value="<?php echo $all[0]["firtName"]; ?>" type="text">
    </p>
    <p>
        <label> last name</label>
        <input name="lastname" value="<?php echo $all[0]["lastName"]; ?>" type="text">
    </p>
    <p>
        <label> age </label>
        <input name="age" value="<?php echo $all[0]["age"]; ?>" type="text">
    </p>
    <p>
        <label> address </label>
        <input name="address" value="<?php echo $all[0]["address"]; ?>" type="text">
    </p>
    <p>
        <label> email </label>
        <input name="email" value="<?php echo $all[0]["email"]; ?>" type="text">
    </p>
    <p>
        <input type="submit" name="submit" value="update data">
    </p>
</form>
</body>
</html>